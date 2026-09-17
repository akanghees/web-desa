<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ModelHasPermission extends Pivot
{
    protected $table = 'model_has_permissions';

    public $incrementing = true;

    protected $fillable = [
        'role_id',
        'permission_id',
    ];
}
