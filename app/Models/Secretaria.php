<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    use HasFactory;

    protected $table = 'secretarias'; // nome da tabela
    protected $fillable = [
        'nome',   
        'id',
        'secretaria_id',
    ];

    // Uma secretaria pode ter várias manifestações
    public function manifestacoes()
    {
        return $this->hasMany(Manifestacao::class, 'secretaria_id');
    }
}
