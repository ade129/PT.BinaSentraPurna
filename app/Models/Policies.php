<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Policies extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'policies';
    protected $primaryKey = 'idpolicies';

    public function trees()
    {
        return $this->belongsTo('App\Models\Trees','idtrees');
    }

    public function buildings()
    {
        return $this->belongsTo('App\Models\Buildings','idbuildings');
    }
}
