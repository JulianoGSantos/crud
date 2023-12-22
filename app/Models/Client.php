<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'gender',
        'cpf',
        'phone',
        'cellphone',
        'birth',
        'cep',
        'street',
        'number',
        'complement',
        'district',
        'city',
        'state'
    ];
}
