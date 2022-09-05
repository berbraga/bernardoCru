<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doceModel extends Model
{
    use HasFactory;

    protected $table = 'doce_models';
    protected $fillable = ['nome', 'tipo'];
}
