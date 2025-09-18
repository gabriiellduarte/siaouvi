<?php

// app/Models/Anexo.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    use HasFactory;
    protected $table = "anexos";
    protected $fillable = ['manifestacao_id', 'caminho_arquivo'];

    public function manifestacao()
    {
        return $this->belongsTo(Manifestacao::class, 'manifestacao_id');
    }
    public function scopeWithAnexo($query)
    {
        return $query->whereHas('anexos');
    }

}
