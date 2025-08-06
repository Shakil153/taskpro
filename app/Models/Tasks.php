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
    
    public function client() {
        return $this->belongsTo(Client::class);
    }
    
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
