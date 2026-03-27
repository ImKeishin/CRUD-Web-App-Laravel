<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    protected $table = 'pacienti';
    protected $primaryKey = 'PacientID';

    protected $fillable = ['NumePacient', 'PrenumePacient', 'Adresa', 'Asigurare'];

    public function medicamente()
    {
        return $this->belongsToMany(Medicament::class, 'consultatii', 'PacientID', 'MedicamentID')
            ->withPivot(['Data', 'Diagnostic', 'DozaMedicament'])
            ->withTimestamps();
    }

    public function consultatii()
    {
        return $this->hasMany(Consultatie::class, 'PacientID', 'PacientID');
    }

    public function programari()
    {
        return $this->hasMany(Programare::class, 'PacientID', 'PacientID');
    }

}

