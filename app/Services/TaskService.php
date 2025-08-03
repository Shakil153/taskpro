<?php

namespace App\Services;
use App\Models\Tasks;
class TaskService
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
        return Tasks::create($data);
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

    public function getAllTasks()
    {
        return Tasks::all();
    }

    public function getTaskById(int $taskId)
    {
        return Tasks::find($taskId);
    }
}
