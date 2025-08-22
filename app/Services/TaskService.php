<?php

namespace App\Services;
use App\Models\Tasks;
use App\Models\Tag;
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

    public function getAllTasks(string $order = 'asc', string|array|null $status = null,$relation)
    {
        $query = Tasks::query();

        if (!is_null($status)) {
            if (is_array($status)) {
                $query->whereIn('status_id', $status);
            } else {
                $query->where('status_id', $status);
            }
        }
        if($relation){
            $query->with($relation);
        }

        return $query->orderBy('id', $order);
    }

    public function getTaskById(int $taskId)
    {
        return Tasks::find($taskId);
    }

    public function getAllTasksWithStatus($relation)
    {
        return Tasks::with($relation);
    }
}
