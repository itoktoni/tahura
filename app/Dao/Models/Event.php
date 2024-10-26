<?php

namespace App\Dao\Models;

use App\Dao\Builder\DataBuilder;
use App\Dao\Models\Core\SystemModel;
use App\Dao\Models\Core\User;
use Illuminate\Support\Str;

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
    protected $fillable = ['event_id', 'event_name', 'event_slug', 'event_price', 'event_image', 'event_picture', 'event_date', 'event_description', 'event_info', 'event_detail', 'event_map', 'event_mandatory', 'event_roundown', 'event_banner', 'event_page', 'event_background', 'event_code', 'event_active', 'event_max', 'event_code', 'event_confirm_page'];

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

    public function fieldSearching()
    {
        return 'event_name';
    }

    public static function field_active()
    {
        return 'event_active';
    }

    public function getFieldActiveAttribute()
    {
        return $this->{self::field_active()};
    }

    public function fieldDatatable(): array
    {
        return [
            DataBuilder::build($this->field_primary())->name('Code')->sort(),
            DataBuilder::build($this->field_name())->name('Name')->show()->sort(),
            DataBuilder::build('event_active')->name('Active')->show()->sort(),
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

                $file_logo->storeAs('/public/files/event/', $name1);
                $model->{self::field_image()} = $name1;
            }

            if (request()->has('banner')) {
                $file_logo = request()->file('banner');
                $extension = $file_logo->extension();
                $name2 = time().'.'.$extension;

                $file_logo->storeAs('/public/files/event/', $name2);
                $model->event_banner = $name2;
            }

            if (request()->has('detail')) {
                $file_logo = request()->file('detail');
                $extension = $file_logo->extension();
                $name3 = time().'.'.$extension;

                $file_logo->storeAs('/public/files/event/', $name3);
                $model->event_detail = $name3;
            }

            if (request()->has('map')) {
                $file_logo = request()->file('map');
                $extension = $file_logo->extension();
                $name4 = time().'.'.$extension;

                $file_logo->storeAs('/public/files/event/', $name4);
                $model->event_map = $name4;
            }

            if (request()->has('mandatory')) {
                $file_logo = request()->file('mandatory');
                $extension = $file_logo->extension();
                $name5 = time().'.'.$extension;

                $file_logo->storeAs('/public/files/event/', $name5);
                $model->event_mandatory = $name5;
            }

            if (request()->has('roundown')) {
                $file_logo = request()->file('roundown');
                $extension = $file_logo->extension();
                $name6 = time().'.'.$extension;

                $file_logo->storeAs('/public/files/event/', $name6);
                $model->event_roundown = $name6;
            }

            if (request()->has('background')) {
                $file_logo = request()->file('background');
                $extension = $file_logo->extension();
                $name6 = time().'.'.$extension;

                $file_logo->storeAs('/public/files/event/', $name6);
                $model->event_background = $name6;
            }

            $model->event_slug = Str::slug(request()->get('event_name'));
        });


        parent::deleting(function ($model) {

            if(!empty($model->field_image) && file_exists(public_path('/storage/files/event/'.$model->field_image))) {
                unlink(public_path('/storage/files/event/'.$model->field_image));
            }

        });

        parent::boot();
    }

    public function has_users()
    {
        return $this->hasMany(User::class, 'id_event', 'event_id');
    }
}
