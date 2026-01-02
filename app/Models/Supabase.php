<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supabase extends Model
{
    protected $table = 'users';

    protected $fillable = ['name'];

    public $timestamps = false;
}
