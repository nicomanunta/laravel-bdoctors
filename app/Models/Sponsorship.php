<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'duration'];
    public function sponsorships()
    {
        return $this->belongsToMany(Doctor::class);
    }
}
