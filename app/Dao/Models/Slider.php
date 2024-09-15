<?php

namespace App\Dao\Models;

use App\Dao\Builder\DataBuilder;
use App\Dao\Models\Core\SystemModel;


/**
 * Class Slider
 *
 * @property $slider_id
 * @property $slider_name
 * @property $slider_button
 * @property $slider_link
 * @property $slider_image
 * @property $slider_description
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Slider extends SystemModel
{
    protected $perPage = 20;
    protected $table = 'slider';
    protected $primaryKey = 'slider_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['slider_id', 'slider_name', 'slider_button', 'slider_link', 'slider_image', 'slider_description'];

    public static function field_name()
    {
        return 'slider_name';
    }

    public function getFieldNameAttribute()
    {
        return $this->{self::field_name()};
    }

    public static function field_image()
    {
        return 'slider_image';
    }

    public function getFieldImageAttribute()
    {
        return $this->{self::field_image()};
    }

    public function fieldDatatable(): array
    {
        return [
            DataBuilder::build($this->field_primary())->name('Code')->sort(),
            DataBuilder::build($this->field_name())->name('Name')->show()->sort(),
            DataBuilder::build($this->field_image())->name('Image')->width('200px')->sort(),
        ];
    }

}
