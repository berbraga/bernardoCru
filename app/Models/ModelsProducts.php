<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsProducts extends Model
{
    use HasFactory;

    protected $table = 'models_products';

    protected $fillable = ['name', 'quantidade'];
}
