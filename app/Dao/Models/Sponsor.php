<?php

namespace App\Dao\Models;

use App\Dao\Builder\DataBuilder;
use App\Dao\Models\Core\SystemModel;


/**
 * Class Sponsor
 *
 * @property $sponsor_id
 * @property $sponsor_name
 * @property $sponsor_link
 * @property $sponsor_image
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Sponsor extends SystemModel
{
    protected $perPage = 20;
    protected $table = 'sponsor';
    protected $primaryKey = 'sponsor_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['sponsor_id', 'sponsor_name', 'sponsor_link', 'sponsor_image', 'sponsor_type'];

    public static function field_name()
    {
        return 'sponsor_name';
    }

    public function getFieldNameAttribute()
    {
        return $this->{self::field_name()};
    }

    public static function field_image()
    {
        return 'sponsor_image';
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
            DataBuilder::build('sponsor_type')->name('Type')->width('200px')->sort(),
            DataBuilder::build($this->field_image())->name('Image')->width('200px')->sort(),
        ];
    }

    public static function boot()
    {
        parent::saving(function ($model) {

            if (request()->has('images')) {
                $file_logo = request()->file('images');
                $extension = $file_logo->extension();
                $name = time().'.'.$extension;

                $file_logo->storeAs('/public/files/sponsor/', $name);
                $model->{self::field_image()} = $name;
            }
        });


        parent::deleting(function ($model) {

            if(!empty($model->field_image) && file_exists(public_path('/storage/files/sponsor/'.$model->field_image))) {
                unlink(public_path('/storage/files/sponsor/'.$model->field_image));
            }

        });

        parent::boot();
    }
}
