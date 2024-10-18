<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiSth extends Model
{
    use HasFactory;
    protected $table = 'api_sths';

    protected $fillable = [
		'user_id',
		'sth'
    ];
}
