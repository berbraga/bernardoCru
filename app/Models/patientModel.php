<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patientModel extends Model
{
    use HasFactory;
    protected $table = 'patient_models';
    protected $fillable = ['Nome_coluna1'];
}
