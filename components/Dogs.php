<?php namespace AzylAlfa\Dogbreeder\Components;

use AzylAlfa\Dogbreeder\Models\Dog;
use Cms\Classes\ComponentBase;

class Dogs extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'azylalfa.dogbreeder::lang.components.dogs.name',
            'description' => 'azylalfa.dogbreeder::lang.components.dogs.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'itemId'   => [
                'title'             => 'itemId',
                'description'       => 'itemId',
                'default'           => '',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
            ],
        ];
    }

    public $dog;

    public $dogs;

    public function onRun()
    {
        $this->dog = $this->page['dog'] = $this->dog();
        $this->dogs = $this->page['dogs'] = $this->dogs();
    }

    protected function dog()
    {
        if (is_numeric($this->property('itemId'))) {
            return Dog::whereId($this->property('itemId'))->with('picture')->first();
        }
    }

    protected function dogs()
    {
        if (!is_numeric($this->property('itemId'))) {
            return Dog::with('picture')->get();
        }
    }

}