<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Permiso extends Model
{
    use SoftDeletes;
    use Userstamps;
    
    protected $table = "permisos";
    protected $guarded = [];
    protected $dates = ['deleted_at'];
}
