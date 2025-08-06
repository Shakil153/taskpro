<?php

namespace App\Services;
use App\Models\Tag;
class TagService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function createTask(array $data)
    {
        return Tag::firstOrCreate($data);
    }

    public function updateTask(Task $task, array $data)
    {
        $task->update($data);
        return $task;
    }

    public function deleteTask(Task $task)
    {
        return $task->delete();
    }

    public function getAllTag()
    {
        return Tag::all();
    }

    public function getTaskById(int $taskId)
    {
        return Tag::find($taskId);
    }
}
