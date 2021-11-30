<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinicola extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    public function vinhos()
    {
        return $this->hasMany(Vinho::class);
    }
}
