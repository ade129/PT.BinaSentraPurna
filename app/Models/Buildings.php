<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buildings extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'buildings';
    protected $primaryKey = 'idbuildings';

    public function Policies()
    {
        return $this->belongsTo('App\Models\Policies'.'idpolicies');
    }
}
