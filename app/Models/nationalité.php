<?php

namespace App\Models;
use App\Models\Etudiant;
use App\Models\Nationalité;

// use App\Models\Tuteur;
// use App\Models\Ville;
// use App\Models\Groupe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nationalité extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomNationalité',
    ];
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }
}
