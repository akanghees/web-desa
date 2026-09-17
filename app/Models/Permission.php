<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function roles()
    {
        return $this->belongsToMany(
            Role::class,
            'model_has_permissions',
            'permission_id',
            'role_id'
        )->withTimestamps();
    }
}
