<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;
    protected $primaryKey = 'socio_id';
    protected $table = 'socio';

    protected $fillable = [
        'soc_nome',
        'soc_posicao',
        'soc_empresa_id',
    ];
    
    const CREATED_AT = 'cadastrado';
    const UPDATED_AT = 'atualizado';
    const DELETED_AT = 'excluido';
    
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
}
