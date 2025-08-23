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
        'title', 'description', 'status_id','category_id','project_id', 'priority', 'due_date'
    ];

    public function status() {
        return $this->belongsTo(Status::class);
    }
    
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
        
    public function clients()
    {
        return $this->belongsToMany(Client::class, 'client_task', 'task_id', 'client_id');
    }

    public function assignees()
    {
        return $this->belongsToMany(User::class, 'assignee_task', 'task_id', 'user_id');
    }
    
    public function tags() {
        return $this->belongsToMany(Tag::class, 'tag_task', 'task_id', 'tag_id');
    }
    
}
