<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testeModel extends Model
{
    use HasFactory;

    protected $table = 'teste_models';
    protected $fillable = ['nome', 'idade'];
}
