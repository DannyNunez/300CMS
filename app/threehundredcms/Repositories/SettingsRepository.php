<?php namespace ThreeHundredCms\Repositories;

    use ThreeHundredCms\Interfaces\SettingsRepositoryInterface;

    class SettingsRepository implements SettingsRepositoryInterface
    {

        protected $settings;

        public function __construct(SettingsRepositoryInterface $settings)
        {
            $this->settings = $settings;
        }

        public function create(){

        }

        public function update(){

        }

        public function destroy(){

        }

    }