<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    // Specify the table name if it differs from the default pluralized name
    protected $table = 'tasks';

    // Optionally, specify other properties like fillable
    protected $fillable = [
        'title', 'description', 'status'
    ];
}
