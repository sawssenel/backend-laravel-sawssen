<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = [
        'isbn',
        'titre',
        'annedition',
        'prix',
        'qtestock',
        'couverture',
        'specialite',
        'maised'
        ];
        public function editeur()
        {
            return $this->belongsTo(Editeur::class,'maised');
        }
        public function specialite()
       {
       return $this->belongsTo(Specialite::class,'specialite');
       }
       public function auteurs()
       {
        return $this->belongsToMany(Auteur::class, 'livre_auteur', 'livre_id',
'auteur_id');
       }
}
