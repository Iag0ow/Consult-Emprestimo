<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $primaryKey = 'cliente_id';
    protected $table = 'cliente';
    public function empresa()
    {
        return $this->hasOne(Empresa::class, 'cliente_id');
    }
}