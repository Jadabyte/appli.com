<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Internship;

class InternshipsSkill extends Model
{
    public $table = "internshipsSkills";

    use HasFactory;

    public function internship()
    {
        return $this->belongsTo(Internship::class);
    }
}
