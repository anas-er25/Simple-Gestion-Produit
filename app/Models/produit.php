<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'RefPdt', 'libPdt', 'Prix', 'Qte', 'description', 'image', 'type_id'
    ];
}
