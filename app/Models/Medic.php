<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medic extends Model
{
    protected $table = 'medici';
    protected $primaryKey = 'MedicID';

    protected $fillable = ['NumeMedic', 'PrenumeMedic', 'Specializare'];


    public function programari()
    {
        return $this->hasMany(Programare::class, 'MedicID', 'MedicID');
    }

}

