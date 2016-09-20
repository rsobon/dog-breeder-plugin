<?php namespace AzylAlfa\Dogbreeder\Components;

use AzylAlfa\Dogbreeder\Models\Dog;
use AzylAlfa\Dogbreeder\Models\Category;
use Cms\Classes\ComponentBase;

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
                'title' => 'itemId',
                'description' => 'itemId',
                'default' => '',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
            ],
            'maxItems' => [
                'title' => 'maxItems',
                'description' => 'maxItems',
                'default' => 36,
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
            ],
            'orderBy' => [
                'title' => 'orderBy',
                'description' => 'orderBy',
                'type' => 'dropdown',
                'default' => 'id',
            ],
            'sort' => [
                'title' => 'sort',
                'description' => 'sort',
                'type' => 'dropdown',
                'default' => 'desc',
            ],
            'paginate' => [
                'title' => 'paginate',
                'description' => 'paginate',
                'type' => 'checkbox',
            ],
            'page' => [
                'title' => 'page',
                'description' => 'page',
                'type' => 'string',
                'default' => '1',
                'validationPattern' => '^[0-9]+$',
            ],
            'perPage' => [
                'title' => 'perPage',
                'description' => 'perPage',
                'type' => 'string',
                'default' => '12',
                'validationPattern' => '^[0-9]+$',
            ],
            'category' => [
                'title'       => 'category',
                'description' => 'category',
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
            $dogs = Dog::with('picture');

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