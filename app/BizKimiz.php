<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class BizKimiz extends Model
{
    use Translatable;
    protected $translatable = [
        'title',
        'text',
        'icon',
    ];

    protected $fillable = [
        'title',
        'text',
        'icon',
        'order'
    ];
}
