<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Company;
use App\Models\Internship;

class Category extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->hasOne(Company::class);
    }

    public function internship()
    {
        return $this->hasOne(Internship::class);
    }
}
