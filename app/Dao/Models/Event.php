<?php

namespace App\Dao\Models;

use App\Dao\Builder\DataBuilder;
use App\Dao\Models\Core\SystemModel;

/**
 * Class Event
 *
 * @property $event_id
 * @property $event_name
 * @property $event_price
 * @property $event_description
 *
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Event extends SystemModel
{
    protected $perPage = 20;

    protected $table = 'events';

    protected $primaryKey = 'event_id';

    protected $keyType = 'integer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['event_id', 'event_name', 'event_price', 'event_image', 'event_date', 'event_description', 'event_info'];

    public static function field_name()
    {
        return 'event_name';
    }

    public function getFieldNameAttribute()
    {
        return $this->{self::field_name()};
    }

    public static function field_image()
    {
        return 'event_image';
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
                $name = time().'.'.$extension;

                $file_logo->storeAs('/public/files/event/', $name);
                $model->{self::field_image()} = $name;
            }
        });


        parent::deleting(function ($model) {

            if(!empty($model->field_image) && file_exists(public_path('/storage/files/event/'.$model->field_image))) {
                unlink(public_path('/storage/files/event/'.$model->field_image));
            }

        });

        parent::boot();
    }
}
