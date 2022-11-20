<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Slide extends Model{

    use Translatable;
    protected $translatable = [
        'title1',
        'title2',
        'title3',
        'btnTitle',
        'btnHref'
    ];

    protected $fillable = [
        'title1',
        'title2',
        'title3',
        'btnTitle',
        'btnHref',
        'path',
        'userId',
        'date',
        'order'
    ];
}
