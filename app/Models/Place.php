<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    /**
         * $table->string('name', 155);
         * $table->string('state', 50);
         * $table->string('city', 50);
         * $table->string('region', 50);
         * $table->string('street', 155);
         * $table->string('number', 50);
         */
    protected $fillable = ['name', 'address'];
}
