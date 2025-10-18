<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class machines extends Model
{
    use HasFactory;
    
    protected $table = 'machines';
    protected $primaryKey = 'machine_id'; // บรรทัดนี้สำคัญมาก!
    public $incrementing = true; // ถ้าเป็น auto increment
    protected $keyType = 'int'; // ถ้า machine_id เป็น int

    protected $fillable = [
    'machine_name',
    'machine_type',
    'last_maintenance',
    'status',
    'maintenance_cycle',
    
];

    public function notifications()
    {
        return $this->hasMany(notifications::class, 'machine_id', 'machine_id');
    }

}
