<?php

namespace App\Livewire;
use App\Services\TaskService;
use Livewire\Component;

class Task extends Component
{
    public $tasks;
    public $title, $description, $status;
    public $taskId;

    protected $taskService;

    public function __construct()
    {
        // Injecting the TaskService into the Livewire component
        $this->taskService = new TaskService(); // Alternatively, you can use dependency injection
    }
    public function mount(){
        $this->tasks = $this->taskService->getAllTasks();
    }
    public function render()
    {
        return view('livewire.task');
    }
}
