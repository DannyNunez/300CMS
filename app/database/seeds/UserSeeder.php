<?php

class UserSeeder extends DatabaseSeeder {

    public function run()
    {
        $users = [
            [
                "username" => "cc3381",
                "first_name" => "danny",
                "last_name" => "nunez",
                "password" => Hash::make('CEGsqe@@1981'),
                "email" => "danny.nunez15@gmail.com"
            ]
        ];

        foreach($users as $user)
        {
            User::create($user);
        }

    }


} 