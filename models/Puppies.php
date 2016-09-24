<?php namespace AzylAlfa\Dogbreeder\Models;

use Model;

/**
 * Model
 */
class Puppies extends Model
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
    public $table = 'azylalfa_dogbreeder_puppies';

    public $attachMany = [
        'pictures' => ['System\Models\File'],
    ];
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name', 'description'];
}