<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['title','content','userId','priority'];
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id'); // Minden ticket egy userhez tartozik
    }

    public function admin() // A rendszergazda, akihez a jegy tartozik
    {
        return $this->belongsTo(User::class, 'admin_id');
    }


    public function scopeFilterByStatus(Builder $query,$status){
        if($status === ""){
            return $query->where('status','Nyitott'); ;
        }
        else if($status=== "closed"){
            return $query->where('status','Lezárva');
        }
        else if($status=== "pending"){
            return $query->where('status','Folyamatban');
        }
        else if($status === "all"){
            return $query;
        }

    }
}
