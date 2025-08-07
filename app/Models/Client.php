<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'task_client', 'client_id', 'task_id');
    }
}
