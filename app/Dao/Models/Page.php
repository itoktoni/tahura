<?php

namespace App\Dao\Models;

use App\Dao\Builder\DataBuilder;
use App\Dao\Models\Core\SystemModel;
use Illuminate\Support\Str;


/**
 * Class Page
 *
 * @property $page_id
 * @property $page_slug
 * @property $page_name
 * @property $page_price
 * @property $page_image
 * @property $page_description
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Page extends SystemModel
{
    protected $perPage = 20;
    protected $table = 'page';
    protected $primaryKey = 'page_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['page_id', 'page_slug', 'page_name', 'page_price', 'page_image', 'page_body', 'page_title', 'page_description'];

    public static function field_name()
    {
        return 'page_name';
    }

    public function getFieldNameAttribute()
    {
        return $this->{self::field_name()};
    }

    public static function field_image()
    {
        return 'page_image';
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

    public static function boot()
    {
        parent::saving(function ($model) {

            if (request()->has('images')) {
                $file_logo = request()->file('images');
                $extension = $file_logo->extension();
                $name1 = time().'.'.$extension;

                $file_logo->storeAs('/public/files/page/', $name1);
                $model->{self::field_image()} = $name1;
            }

            $model->page_slug = Str::slug(request()->get('page_title'));
        });


        parent::deleting(function ($model) {

            if(!empty($model->field_image) && file_exists(public_path('/storage/files/page/'.$model->field_image))) {
                unlink(public_path('/storage/files/page/'.$model->field_image));
            }

        });

        parent::boot();
    }

}
