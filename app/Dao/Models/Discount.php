<?php

namespace App\Dao\Models;

use App\Dao\Models\Core\SystemModel;


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


}
