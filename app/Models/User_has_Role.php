<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_has_Role extends Model
{
    use HasFactory;
    protected $table = 'users_has_roles';

    // public function role() {
    //     return $this->belongsToMany(Role::class);
    // }

    // public function user() {
    //     return $this->belongsToMany(User::class);
    // }
}
