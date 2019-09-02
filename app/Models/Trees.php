<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trees extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'trees';
    protected $primaryKey = 'idtrees';

}
