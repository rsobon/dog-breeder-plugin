<?php namespace AzylAlfa\Dogbreeder\Models;

use October\Rain\Database\Model;

/**
 * Model
 */
class Dog extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

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
        'category' => ['AzylAlfa\Dogbreeder\Models\Category']
    ];
    public $attachOne = [
        'picture' => ['System\Models\File'],
    ];
    public $attachMany = [
        'pictures' => ['System\Models\File'],
    ];
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['description'];

}