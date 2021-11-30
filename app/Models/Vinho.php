<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinho extends Model
{
    use HasFactory;


    protected $fillable = [
        'nome',
        'safra_ano',
        'especifidade',
        'teor_alcoolico',
        'regiao',
        'pais_id',
        'tipo_vinho',
        'vinicola_id',
        'tipo_uva_id',
    ];

    public function vinicola()
    {
        return $this->belongsTo(Vinicola::class, 'vinicola_id', 'id');
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id', 'id');
    }

    public function tipo_uva()
    {
        return $this->belongsTo(TipoUva::class, 'tipo_uva_id', 'id');
    }
}