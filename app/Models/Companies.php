<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;
    protected $table = 'companies';

    protected $fillable = [
        'name',
        'address',
        'city',
        'zipcode',
        'country',
        'vat',
    ];
}
