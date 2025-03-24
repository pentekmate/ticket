<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['title','content','userId','priority'];
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class); // Minden ticket egy userhez tartozik
    }
}
