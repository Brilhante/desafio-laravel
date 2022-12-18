<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'marca', 'modelo', 'versao'];

    public function Users()
    {
        return $this->belongsToMany(User::class);
    }

    
}
