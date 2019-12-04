<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'tbl_products';

    public $primaryKey = 'product_id';

    public $timestamps = true;
}
