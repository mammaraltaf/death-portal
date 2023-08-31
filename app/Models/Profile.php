<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /*one profile belongs to one user*/
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
