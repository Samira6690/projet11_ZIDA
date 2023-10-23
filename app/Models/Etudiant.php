<?php
namespace App\Models;
use App\Models\Tuteur;
use App\Models\Ville;
use App\Models\Nationalité;
use App\Models\Groupe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'classe',
        'tuteur',
        'photo',
        // 'ville',
        // 'nationalité',
        // 'groupe',

    ];

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function tuteur()
    {
        return $this->belongsTo(Tuteur::class);
    }
    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
    public function nationalité()
    {
        return $this->belongsTo(Nationalité::class);
    }
    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }

}
