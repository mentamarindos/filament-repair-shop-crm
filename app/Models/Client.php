<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    // use HasTranslations;

    // public $translatable = ['name','surname','address','email','phone'];

    protected $fillable = [
        'name',
        'surname',
        'address',
        'email',
        'phone',
    ];
    

}