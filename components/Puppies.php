<?php namespace AzylAlfa\Dogbreeder\Components;

use Cms\Classes\ComponentBase;
use AzylAlfa\Dogbreeder\Models\Puppies as PuppiesModel;
use Carbon\Carbon;


class Puppies extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'azylalfa.dogbreeder::lang.components.puppies.name',
            'description' => 'azylalfa.dogbreeder::lang.components.puppies.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'itemId' => [
                'title' => 'ID',
                'description' => 'azylalfa.dogbreeder::lang.components.puppies.property_id_desc',
                'default' => '',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
            ]
        ];
    }

    public $puppy;

    public $puppies;

    public function onRun()
    {
        $this->puppy = $this->page['puppy'] = $this->puppy();
        $this->puppies = $this->page['puppies'] = $this->puppies();
    }

    protected function puppy()
    {
        if (is_numeric($this->property('itemId'))) {
            return PuppiesModel::whereId($this->property('itemId'))
                ->where('published_at', '<', Carbon::now())
                ->with('pictures')->first();
        }
    }

    protected function puppies()
    {
        if (!is_numeric($this->property('itemId'))) {
            $puppies = PuppiesModel::with('pictures')
                ->where('published_at', '<', Carbon::now())
                ->orderBy('published_at', 'desc');

            return $puppies->get();
        }
    }

}