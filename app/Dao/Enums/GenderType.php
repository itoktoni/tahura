<?php

namespace App\Dao\Enums;

use App\Dao\Traits\StatusTrait;
use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum as Enum;

class GenderType extends Enum implements LocalizedEnum
{
    use StatusTrait;

    public const Unknown = null;

    public const Male = 'Male';

    public const Female = 'Female';
}
