<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = ['full_name', 'position', 'email', 'contact_phone', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

