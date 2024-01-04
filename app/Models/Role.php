<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name'];
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'id'); 
    }

}
