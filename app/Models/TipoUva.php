<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUva extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nome'
    ];

    public function vinhos()
    {
        return $this->hasMany(Vinho::class);
    }
}
