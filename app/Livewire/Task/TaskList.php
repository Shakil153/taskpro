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
    public $editingTaskId = null;
    public $fieldBeingEdited = null;
    public $fieldValue = null;
    public $originalValue = null;

    protected $listeners = ['refreshTasks' => 'loadTasks'];

    public function boot()
    {
        $this->taskService = app(TaskService::class);
        $this->utilityService = app(UtilityService::class);
    }
    
     public function mount()
    {
        $this->getTasksProperty();
    }

    public function startEditing($taskId, $field, $value)
    {
        $this->editingTaskId = $taskId;
        $this->fieldBeingEdited = $field;
        $this->fieldValue = $value;
    }

    public function cancelEdit()
    {
        $this->editingTaskId = null;
        $this->fieldBeingEdited = null;
        $this->fieldValue = null;
        $this->originalValue = null;
    }

    public function saveEdit()
    {
        if ($this->fieldValue === $this->originalValue) {
            $this->cancelEdit();
            return;
        }
        // Ensure we have a valid task and field to edit
        if (!$this->editingTaskId || !$this->fieldBeingEdited) return;

        $task = $this->taskService->getTaskById($this->editingTaskId);
        $task->{$this->fieldBeingEdited} = $this->fieldValue;
        $task->save();

        $this->editingTaskId = null;
        $this->fieldBeingEdited = null;
        $this->fieldValue = null;
        $this->cancelEdit();
        $this->getTasksProperty();
    }

    public function getTasksProperty()
    {
        $query = $this->taskService->getAllTasks('desc',[1,2],['status']); // Use correct relation name
        return $query->paginate($this->utilityService::$displayRecordPerPage);
    }

    public function loadTasks()
    {
        $this->getTasksProperty();
    }
    public function render()
    {
        return view('livewire.task.task-list', [
            'tasks' => $this->tasks, // calls getTasksProperty()
        ]);
    }
}