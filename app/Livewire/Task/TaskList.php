<?php

namespace App\Livewire\Task;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\TaskService;
use App\Services\UtilityService;

class TaskList extends Component
{
    use WithPagination;

    protected $taskService;
    protected $utilityService;

    protected $paginationTheme = 'tailwind';

    public function boot()
    {
        $this->taskService = app(TaskService::class);
        $this->utilityService = app(UtilityService::class);
    }

    public function getTasksProperty()
    {
        $query = $this->taskService->getAllTasksWithStatus('status'); // Use correct relation name
        return $query->paginate($this->utilityService::$displayRecordPerPage);
    }

    public function render()
    {
        return view('livewire.task.task-list', [
            'tasks' => $this->tasks, // calls getTasksProperty()
        ]);
    }
}