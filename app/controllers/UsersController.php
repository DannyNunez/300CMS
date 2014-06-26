<?php

    class UsersController extends BaseController{


        protected $user;
        protected $address;


        public function __construct(User $user)
        {
            $this->user = $user;
            $this->address = new UserAddress();
        }

        public function index(){

            $users = $this->user->paginate(25);
            return View::make('modules.users.index',['users' => $users]);
        }

        public function show($id)
        {
            $user = $this->user->find($id);

            $address = $user->address;

            if($address === null) {
                $address =  UserAddress::defaultSettings();
            }

            return View::make('modules.users.show',['user' => $user , 'address' => $address, 'socialNetwork' => $user->socialNetwork , 'states' => State::all()] );

        }

        public function create()
        {
            $address =  UserAddress::defaultSettings();
            $user = $this->user->defaultSettings();
            return View::make('modules.users.create',[ 'user' => $user , 'address' => $address , 'states' => State::all() ]);
        }

        public function store()
        {

            $data = Input::all();

            if (! $this->user->fill($data)->isValid() )
            {
                return Redirect::back()->withInput()->withErrors($this->user->messages);
            }

            $user = new User;
            $user->first_name = $data['first_name'];
            $user->last_name = $data['last_name'];
            $user->user_name = $data['user_name'];
            $user->email = $data['email'];
            $user->phone = $data['phone'];
            $user->role_id = $data['role_id'];
            $user->password = Hash::make($data['password']);

            $user->save();

            $data['user_id'] = $user->user_id;

            $this->address->createAddress($data);

            return Redirect::route('admin.users.index');

        }

        public function update()
        {

            $this->user->updateUser(Input::all());
            $address = Input::get('address_id');
            if(empty($address)){
                $this->address->createAddress(Input::all());
            }else{
                $this->address->updateAddress(Input::all());
            }
            return Redirect::route('admin.users.index');
        }

        public function destroy($id){


            if(Auth::check()){
                $user = $this->user->find($id);
                $user->destroy();
                return Redirect::route('admin.users.index');
            }else{
                Redirect::to('/');
            }

        }





    }