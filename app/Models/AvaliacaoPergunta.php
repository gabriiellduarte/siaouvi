<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoPergunta extends Model
{
    protected $table = 'avaliacoesperguntas';

    protected $fillable = [
        'cpf',
        'o_mensagem',
        'resposta1', 'resposta2', 'resposta3', 'resposta4', 'resposta5', 'resposta6', 'resposta7',
        'resposta8', 'resposta9', 'resposta10', 'resposta11', 'resposta12', 'resposta13', 'resposta14'
    ];
}