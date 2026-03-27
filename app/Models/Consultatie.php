<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultatie extends Model
{
    protected $table = 'consultatii';
    protected $primaryKey = 'ConsultatieID';

    protected $fillable = ['PacientID', 'MedicamentID', 'Diagnostic', 'DozaMedicament'];

    public function pacient()
    {
        return $this->belongsTo(Pacient::class, 'PacientID', 'PacientID');
    }

    public function medicament()
    {
        return $this->belongsTo(Medicament::class, 'MedicamentID', 'MedicamentID');
    }
}

