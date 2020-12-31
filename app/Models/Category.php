<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Company;

class Category extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
