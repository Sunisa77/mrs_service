<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class maintenance_records extends Model
{
    use HasFactory;

    protected $table = 'maintenance_records';
    protected $primaryKey = 'record_id'; // บรรทัดนี้สำคัญมาก!
    public $incrementing = true; // ถ้าเป็น auto increment
    protected $keyType = 'int'; // ถ้า machine_id เป็น int

     protected $fillable = [
        'machine_id',
        'maintenance_date',
        'tech_id',
        'next_due_date',
        'description'
    ];

    public function machine()
    {
        return $this->belongsTo(machines::class, 'machine_id', 'id');
    }

    public function technician()
    {
        return $this->belongsTo(technicians::class, 'tech_id', 'tech_id');
    }
}
