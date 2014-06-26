<?php namespace ThreeHundredCms\Interfaces;


interface UsersRepositoryInterface {

    public function create();
    public function update();
    public function login();
    public function logOut();
    public function destroy();

}