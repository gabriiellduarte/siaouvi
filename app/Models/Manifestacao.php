<?php

// app/Models/Manifestacao.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manifestacao extends Model
{
    use HasFactory;

    protected $table = 'manifestacoes';

    protected $fillable = [
        'anonimo',
        'nome',
        'cpf',
        'data_nascimento',
        'sexo',
        'grau_instrucao',
        'email',
        'tipo_telefone',
        'telefone',
        'secretaria',
        'tipo_assunto',
        'forma_contato',
        'natureza',
        'mensagem',
        'anexos',

    ];
    

    public function anexos()
    {
        
        return $this->hasMany(Anexo::class, 'manifestacao_id');

    }
}
