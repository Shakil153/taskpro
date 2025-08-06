<?php

namespace App\Livewire\Task;
use App\Services\TaskService;
use App\Services\TagService;
use Livewire\Component;

class TaskForm extends Component
{
    public $tasks;
    public $title, $description, $priority = '1', $due_date;
    public $category, $project, $client, $tags = [];
    public $status_id, $assignee;

    protected $taskService;
    protected $tagService;

    public function __construct()
    {
       
    }
    public function mount(TaskService $taskService, TagService $tagService)
    {
        $this->taskService = $taskService;
        $this->tagService = $tagService;
        
    }
    
    public function taskCreate(){
        dd($this->tags);
        $this->validate([
            'title' => 'required|string|max:255',
            'priority' => 'required|in:0,1,2',
            'status_id' => 'required|exists:statuses,id',
            'category' => 'required|exists:categories,id',
            'client' => 'nullable|exists:clients,id',
        ]);

        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
            'category' => $this->category,
            'project' => $this->project,
            'client' => $this->client,
            'status_id' => $this->status_id,
            'assignee' => $this->assignee,
        ];
        $this->taskService->createTask($data);

        // Tags (create if not exists)
        if (!empty($this->tags)) {
            $tagIds = [];
            foreach ($this->tags as $name) {
                $tag = $this->tagService->createTask(['name' => strtolower($name)]);
                $tagIds[] = $tag->id;
            }
            $task->tags()->sync($tagIds);
        }

        $this->reset(['title', 'description', 'priority', 'due_date', 'category', 'project', 'client', 'tags', 'status_id', 'assignee']);
    }
    public function render()
    {
        return view('livewire.task.task-form');
    }
}
