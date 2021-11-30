<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaDegustacao extends Model
{
    use HasFactory;

    protected $table = 'ficha_degustacoes';

    protected $fillable = [
        'data_degustacao',
        'rolha_defeituosa',
        'brilho_nivel_id',
        'cor',
        'arcos_nivel_id',
        'pelarge_nivel_id',
        'qualidade_aroma',
        'classificacao_aroma',
        'intensidade_aroma_nivel_id',
        'acidez_nivel_id',
        'docura_nivel_id',
        'alcool_nivel_id',
        'adstringencia_nivel_id',
        'amargor_nivel_id',
        'corpo_nivel_id',
        'equilibrio',
        'qualidade_sabor',
        'intensidade_sabor_nivel_id',
        'persistencia_sabor',
        'classificacao_sabor',
        'vinho_id',
        'user_id'
    ];


    public function vinho()
    {
        return $this->belongsTo(Vinho::class, 'vinho_id', 'id');
    }

    public function harmonizacoes()
    {
        return $this->belongsToMany(Preparacao::class, 'harmonizacoes', 'ficha_desgustacao_id', 'preparacao_id');
    }

       /**
    * Get the user that owns the match.
    */
    public function user()
    {
      return $this -> belongsTo(User::class, 'users', 'user_id');
    }
}
