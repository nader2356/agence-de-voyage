<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    

    protected $table = 'association';
    protected $fillable = [

        'nom_asso', 'logo','description_asso','eass','contact'

    ];
}
