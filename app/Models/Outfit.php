<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outfit extends Model
{
    use HasFactory;

    protected $table = 'outfit';

    protected $fillable = [
        'cosplayer_id',
        'outfit_name',
        'size',
        'price',
        'stock',
        'rental_date',
        'return_date',
        'is_return',
    ];

    public function rents()
    {
        return $this->hasMany(Rent::class);
    }

    public function cosplayer()
    {
        return $this->belongsTo(Cosplayer::class);
    }
}