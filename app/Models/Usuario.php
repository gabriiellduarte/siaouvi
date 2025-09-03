<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $fillable = [
        'nome',
        'cpf',
        'data_nascimento',
        'sexo',
        'grau_instrucao',
        'email',
        'tipo_telefone',
        'telefone',
    ];

    public function manifestacoes()
    {
        return $this->hasMany(Manifestacao::class);
    }
}
