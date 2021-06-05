<?php

namespace Platform\Ecommerce\Models;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;


class City extends BaseModel{
     /**
     * @var string
     */
    protected $table = 'tinh';

     /**
     * @return array
     */
    public static function getall()
    {
        return City::all();
    }
}
