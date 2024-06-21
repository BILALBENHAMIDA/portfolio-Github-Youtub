<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';

    protected $fillable = [
        'id_client',
        'id_voiture',
        'date_debut_reservation',
        'date_fin_reservation'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function voiture()
    {
        return $this->belongsTo(Voiture::class, 'id_voiture');
    }
}
