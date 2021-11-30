<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preparacao extends Model
{
    use HasFactory;

    public function harmonizacoes()
    {
        return $this->belongsToMany(FichaDegustacao::class, 'harmonizacoes', 'preparacao_id', 'ficha_desgustacao_id');
    }
}
