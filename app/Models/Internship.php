<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Application;
use App\Models\InternshipPeriod;
use App\Models\Category;
use App\Models\InternshipsSkill;

class Internship extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function application()
    {
        return $this->hasMany(Application::class);
    }

    public function internshipPeriod()
    {
        return $this->hasOne(InternshipPeriod::class, 'id', 'internshipPeriod_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function internshipsSkill()
    {
        return $this->hasOne(InternshipsSkill::class);
    }
    public function skill()
    {
        return $this->hasOne(Skills::class, 'id', 'skills_id');
    }
}
