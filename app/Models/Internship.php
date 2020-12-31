<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Application;
use App\Models\InternshipPeriod;

class Internship extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo('\App\Models\Company');
    }

    public function application()
    {
        return $this->hasMany(Application::class);
    }

    public function internshipPeriod()
    {
        return $this->hasOne(InternshipPeriod::class, 'id', 'internshipPeriod_id');
    }
}
