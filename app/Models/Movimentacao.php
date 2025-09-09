<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    protected $table = "movimentacoes";
    protected $fillable = [
        'manifestacao_id',
        'tipo',
        'mensagem',
        'secretaria'
    ];

    public function manifestacao()
    {
        return $this->belongsTo(Manifestacao::class);
    }
}
