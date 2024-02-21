<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_coin",
        "full_name",
        "symbol",
        "id_coingap",
        "assets",
        "course"
    ];


}
