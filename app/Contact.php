<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Contact extends Model
{
    use Translatable;
    protected $translatable = [
        'corporate_title',
        'corporate_dsc',
        'office_title',
        'address',
        'business_title',
        'mid_week',
        'saturday',
        'sunday'
    ];

    protected $fillable = [
        'corporate_title',
        'corporate_dsc',
        'office_title',
        'address',
        'tel',
        'email',
        'business_title',
        'mid_week',
        'saturday',
        'sunday',
        'userId'
    ];
}
