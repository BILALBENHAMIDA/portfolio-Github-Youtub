<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $table = 'voitures';

    protected $fillable = [
        'immatriculation',
        'num_assurance',
        'kilometrage',
        'date_debut_location',
        'date_fin_location',
        'image'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'id_voiture');
    }
}
