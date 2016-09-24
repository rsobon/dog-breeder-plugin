<?php namespace AzylAlfa\Dogbreeder;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'AzylAlfa\Dogbreeder\Components\Dogs'       => 'Dogs',
            'AzylAlfa\Dogbreeder\Components\Puppies'       => 'Puppies',
        ];
    }

    public function registerSettings()
    {
    }
}
