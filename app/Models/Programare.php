<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programare extends Model
{
    protected $table = 'programari';
    protected $primaryKey = 'ProgramareID';


    protected $fillable = [
        'MedicID',
        'PacientID',
        'Data'
    ];


    public function medic()
    {
        return $this->belongsTo(Medic::class, 'MedicID', 'MedicID');
    }

    public function pacient()
    {
        return $this->belongsTo(Pacient::class, 'PacientID', 'PacientID');
    }
}
