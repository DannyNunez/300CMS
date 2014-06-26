<?php namespace ThreeHundredCms\ServiceProvider;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider {

    public function register(){

        $this->app->bind(
            'ThreeHundredCms\Interfaces\UsersRepositoryInterface',
            'ThreeHundredCms\Repositories\UsersRepository'
        );
        $this->app->bind(
            'ThreeHundredCms\Interfaces\SettingsRepositoryInterface',
            'ThreeHundredCms\Repositories\SettingsRepository'
        );

    }

}