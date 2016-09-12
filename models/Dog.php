<?php namespace AzylAlfa\Dogbreeder\Models;

use October\Rain\Database\Model;

/**
 * Model
 */
class Dog extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'azylalfa_dogbreeder_dogs';

    public $belongsTo = [
        'category' => ['AzylAlfa\Dogbreeder\Models\Category'],
    ];

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name', 'description', 'titles'];

    public function getCategoryOptions()
    {
        return Category::all()->lists('name', 'id');
    }

}