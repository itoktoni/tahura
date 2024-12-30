<?php

namespace App\Dao\Models;

use App\Dao\Models\Core\SystemModel;
use App\Dao\Models\Core\User;

/**
 * Class Discount
 *
 * @property $discount_code
 * @property $discount_name
 * @property $discount_formula
 * @property $discount_max
 * @property $discount_description
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Discount extends SystemModel
{
    protected $perPage = 20;
    protected $table = 'discount';
    protected $primaryKey = 'discount_code';
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['discount_code', 'discount_name', 'discount_formula', 'discount_max', 'discount_description'];

    protected $filters = [
        'filter',
        'discount_code'
    ];

    public function has_users()
    {
        return $this->hasMany(User::class, 'discount_code', 'discount_code');
    }

    public static function field_name()
    {
        return 'discount_name';
    }

    public function getFieldNameAttribute()
    {
        return $this->{$this->field_name()};
    }

    public function fieldSearching()
    {
        return $this->field_name();
    }

}
