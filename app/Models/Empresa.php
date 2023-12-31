<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $primaryKey = 'empresa_id';
    protected $table = 'empresa';
    
    const CREATED_AT = 'cadastrado';
    const UPDATED_AT = 'atualizado';
    const DELETED_AT = 'excluido';
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
    public function socios()
    {
        return $this->hasMany(Socio::class, 'empresa_id');
    }

}
