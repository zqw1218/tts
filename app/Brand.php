<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
        protected $fillable = [
                'brand_id', 'brand_mid', 'store_mid',
                'brand_name', 'brand_status', 'brand_cdate',
                'brand_mdate'
        ];
}
