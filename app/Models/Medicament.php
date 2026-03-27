<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $table = 'medicamente';
    protected $primaryKey = 'MedicamentID';

    protected $fillable = ['Denumire'];

    public function pacienti()
    {
        return $this->belongsToMany(Pacient::class, 'consultatii', 'MedicamentID', 'PacientID')
            ->withPivot(['Data', 'Diagnostic', 'DozaMedicament'])
            ->withTimestamps();
    }

    public function consultatii()
    {
        return $this->hasMany(Consultatie::class, 'MedicamentID', 'MedicamentID');
    }
}
