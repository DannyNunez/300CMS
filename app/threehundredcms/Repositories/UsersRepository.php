<?php namespace ThreeHundredCms\Repositories;

    use ThreeHundredCms\Interfaces\UsersRepositoryInterface;

    class UsersRepository implements UsersRepositoryInterface
    {

        protected $response;
        protected $user;

        public function __construct(UsersRepositoryInterface $user)
        {
            $this->user = $user;
        }

        public function create(){

        }
        public function update(){

        }
        public function login(){

        }
        public function logOut(){

        }
        public function destroy(){

        }

    }