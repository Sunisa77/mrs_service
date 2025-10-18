<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class notifications extends Model
{
    use HasFactory;

    public function technician()
    {
        return $this->belongsTo(technicians::class, 'tech_id', 'tech_id');
    }

    public function machine()
    {
        return $this->belongsTo(machines::class, 'machine_id', 'machine_id');
    }


}
