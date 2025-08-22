<?php

namespace App\Livewire\Task;
use App\Services\StatusService;

use Livewire\Component;

class TaskPage extends Component
{
    protected $statusService;
    public $showForm = false;
    protected $listeners = ['taskCreated' => 'handleTaskCreated'];
    public function __construct()
    {
        $this->statusService = app(StatusService::class);
    }
    public function mount()
    {
        // Initialize any necessary properties or services
        $this->statusData = $this->statusService->getAllStatus();
    }

    public function showForm()
    {
        $this->showForm = true;
    }

    public function hideForm()
    {
        $this->showForm = false;
    }
    public function handleTaskCreated()
    {
        $this->showForm = false;

        // 🔁 Ask TaskList to refresh itself
        $this->dispatch('refreshTasks'); // Broadcast event TaskList listens for
    }
    public function render()
    {
        return view('livewire.task.task-page', ['showForm' => $this->showForm]);
    }
}
