<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;
    protected $primaryKey = 'socio_id';
    protected $table = 'socio';
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
}