<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class technicians extends Model
{
    use HasFactory;

    public function notifications()
    {
        return $this->hasMany(notifications::class, 'tech_id', 'tech_id');
    }

}
