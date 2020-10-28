<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;

    //protected $table = 'establecimientos';
    /*protected $primaryKey = 'cod_establecimiento';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;*/

    public function productos()
    {
        return $this->hasMany("App\Models\Producto");
    }
}
