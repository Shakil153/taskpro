<?php

namespace App\Livewire\Task;

use Livewire\Component;

class TaskPage extends Component
{
    public $showForm = false;

    protected $listeners = ['cancelTaskForm' => 'hideForm'];
    public function showForm()
    {
        $this->showForm = true;
    }

    public function hideForm()
    {
        $this->showForm = false;
    }
    public function render()
    {
        return view('livewire.task.task-page', ['showForm' => $this->showForm]);
    }
}
