<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ["booking_at","doctor_id","sick_id","info"];
    
    public function sick(){
        return $this->belongsTo(sick::class);
    }
    public function doctor(){
        return $this->belongsTo(doctor::class);
    }
}
