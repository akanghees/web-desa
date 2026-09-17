<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ModelHasRole extends Pivot
{
    protected $table = 'model_has_roles';

    public $incrementing = true;

    protected $fillable = [
        'user_id',
        'role_id',
    ];
}
