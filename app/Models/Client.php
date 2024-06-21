<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';

    protected $fillable = [
        'nom',
        'prénom',
        'num_permis'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'id_client');
    }
}
