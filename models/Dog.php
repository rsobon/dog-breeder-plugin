<?php namespace AzylAlfa\Dogbreeder\Models;

use October\Rain\Database\Model;
use Carbon\Carbon;

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

    public function slug () {
        $path = 'psy/' . str_replace(' ', '-', strtolower($this->category->lang('pl')->name));
        return $path;
    }

    /**
     * Allows filtering for specifc categories
     * @param  Illuminate\Query\Builder  $query      QueryBuilder
     * @param  array                     $category List of category ids
     * @return Illuminate\Query\Builder              QueryBuilder
     */
    public function scopeFilterCategories($query, $category)
    {
        return $query->whereHas('category', function($q) use ($category) {
            $q->whereIn('id', $category);
        });
    }

    public function scopeIsPublished($query)
    {
        return $query
            ->whereNotNull('published_at')
            ->where('published_at', '<', Carbon::now())
            ;
    }

}