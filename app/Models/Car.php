<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Car extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'marca', 'modelo', 'versao'];

    public function Users()
    {
        return $this->belongsToMany(User::class);
    }

    public function requestCarById()
    {
        $carsId = Car::where('user_id',  Auth::user()->id)->paginate();
        return $carsId;
    }
}
