<?php

namespace App\Dao\Models;

use App\Dao\Builder\DataBuilder;
use App\Dao\Models\Core\SystemModel;


/**
 * Class Benefit
 *
 * @property $benefit_id
 * @property $benefit_name
 * @property $benefit_description
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Benefit extends SystemModel
{
    protected $perPage = 20;
    protected $table = 'benefit';
    protected $primaryKey = 'benefit_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['benefit_id', 'benefit_name', 'benefit_description', 'benefit_image', 'benefit_instagram'];

    public function getFieldNameAttribute()
    {
        return $this->{self::field_name()};
    }

    public static function field_name()
    {
        return 'benefit_name';
    }

    public static function field_image()
    {
        return 'benefit_image';
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
            DataBuilder::build('benefit_instagram')->name('Instagram')->sort(),
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

                $file_logo->storeAs('/public/files/benefit/', $name);
                $model->{self::field_image()} = $name;
            }

        });


        parent::deleting(function ($model) {

            if(!empty($model->field_image) && file_exists(public_path('/storage/files/benefit/'.$model->field_image))) {
                unlink(public_path('/storage/files/benefit/'.$model->field_image));
            }

        });

        parent::boot();
    }

}
