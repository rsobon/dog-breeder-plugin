<?php namespace AzylAlfa\Dogbreeder\Components;

use AzylAlfa\Dogbreeder\Models\Dog;
use AzylAlfa\Dogbreeder\Models\Category;
use Cms\Classes\ComponentBase;
use Carbon\Carbon;

class Dogs extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'azylalfa.dogbreeder::lang.components.dogs.name',
            'description' => 'azylalfa.dogbreeder::lang.components.dogs.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'itemId' => [
                'title' => 'ID',
                'description' => 'azylalfa.dogbreeder::lang.components.dogs.property_id_desc',
                'default' => '',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
            ],
            'category' => [
                'title'       => 'azylalfa.dogbreeder::lang.dog.category',
                'description' => 'azylalfa.dogbreeder::lang.components.dogs.property_category_desc',
                'type'        => 'dropdown',
            ]
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
            $dogs = Dog::with('picture')
                ->where('published_at', '<', Carbon::now());

            if ($this->property('category')) {
                $dogs->whereHas('category', function ($query) {
                    $query->where('id', '=', $this->property('category'));
                })->with('category');
            }
            return $dogs->get();
        }
    }

    public function getCategoryOptions()
    {
        $options = ["Show All"];
        $categories = Category::get();
        if ($categories)
            $options += $categories->lists('name', 'id');
        return $options;
    }

}