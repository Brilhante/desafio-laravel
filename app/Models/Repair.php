<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Repair extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'tipo_manutencao', 'modelo','data_agendada',];

    public function requestDetaRepairs()
    {
        
        $dateToday = Carbon::now()->format('Y-m-d');
        $dateLast = Carbon::now()->addDay(7)->format('Y-m-d');
        $dateMaintenance = DB::table('repairs')
                            ->where('user_id',  Auth::user()->id)
                            ->whereBetween('data_agendada', [$dateToday, $dateLast ])->get();
                            return $dateMaintenance;
    }
}

