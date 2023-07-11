<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $primaryKey = 'cliente_id';
    protected $table = 'cliente';
    
    const CREATED_AT = 'cadastrado';
    const UPDATED_AT = 'atualizado';
    const DELETED_AT = 'excluido';
    public function empresa()
    {
        return $this->hasOne(Empresa::class, 'cliente_id');
    }
}
