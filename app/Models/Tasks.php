<?php

namespace App\Models;

use App\Models\Status;
use App\Models\Category;
use App\Models\Client;
use App\Models\Tag;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    // Specify the table name if it differs from the default pluralized name
    protected $table = 'tasks';

    // Optionally, specify other properties like fillable
    protected $fillable = [
        'title', 'description', 'status'
    ];

    public function status() {
        return $this->belongsTo(Status::class);
    }
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function clients()
    {
        return $this->belongsToMany(Client::class, 'task_client', 'task_id', 'client_id');
    }

    public function assignees()
    {
        return $this->belongsToMany(User::class, 'task_user', 'task_id', 'user_id');
    }
    
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
    
}
