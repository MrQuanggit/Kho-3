<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupStaff extends Model
{
    use HasFactory;
    protected $table = 'group_staff';
    protected $primaryKey = 'id';

    function staffs() {
        return $this->hasMany(Staff::class);
    }
}
