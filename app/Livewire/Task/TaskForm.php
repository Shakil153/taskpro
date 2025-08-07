<?php

use App\Services\TaskService;
use App\Services\TagService;
use App\Services\StatusService;
use App\Services\CategoryService;
use App\Services\ClientService;
use App\Services\ProjectService;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TaskForm extends Component
{
    public $tasks;
    public $title, $description, $priority = '1', $due_date;
    public $category, $project, $client, $tags = [];
    public $status_id, $assignee;

    protected $taskService;
    protected $tagService;
    protected $statusService;
    protected $categoryService;
    protected $projectService;
    protected $clientService;

    public function __construct()
    {
       
    }
    public function mount(TaskService $taskService, TagService $tagService, StatusService $statusService, CategoryService $categoryService, ClientService $clientService, ProjectService $projectService)
    {
        $this->taskService = $taskService;
        $this->tagService = $tagService;
        $this->statusService = $statusService;
        $this->categoryService = $categoryService;
        $this->projectService = $projectService;
        $this->clientService = $clientService;
    }
    
    public function taskCreate(){
        
        $this->validate([
            'title' => 'required|string|max:255',
            'priority' => 'required|in:0,1,2',
            'status_id' => 'required|exists:statuses,id',
            'category' => 'required|exists:categories,id',
            'client' => 'nullable|exists:clients,id',
            'project' => 'nullable|exists:projects,id',
        ]);

        if (!empty($this->status_id)) {
                $status = $this->statusService->createStatus(['name' => strtolower($name)]);
                $statusIds = $status->id;
        }

        if (!empty($this->category)) {
                $category = $this->categoryService->createCategory(['name' => strtolower($name)]);
                $categoryIds = $category->id;
        }

        if (!empty($this->project)) {
                $project = $this->projectService->createProject(['name' => strtolower($name)]);
                $projectIds = $project->id;
        }


        $data = [
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
            'category' => $categoryIds ?? $this->category,
            'project' => $projectIds ?? $this->project,
            'status_id' => $statusIds ?? $this->status_id,
        ];
        $this->taskService->createTask($data);

        // Syncing clients (multiple clients for the task)
        if (!empty($this->client)) {

            $clientIds = [];
            foreach ($this->client as $name) {
                $client = $this->clientService->createClient(['name' => strtolower($name)]);
                $clientIds[] = $client->id;
            }
            // Sync the selected clients to the task (task_client pivot table)
            $task->clients()->sync($clientIds);
        }

        // Tags (create if not exists) - unchanged
        if (!empty($this->tags)) {
            $tagIds = [];
            foreach ($this->tags as $name) {
                $tag = $this->tagService->createTask(['name' => strtolower($name)]);
                $tagIds[] = $tag->id;
            }
            $task->tags()->sync($tagIds);
        }

        // Assignees (create if not exists) - unchanged
        if (!empty($this->assignee)) {
            $assigneeIds = [];
            foreach ($this->assignee as $userId) {
                // Check if the user exists
                $user = User::find($userId);
                if (!$user) {
                    continue;
                }
                $assigneeIds[] = $user->id;
            }
            $task->assignees()->sync($assigneeIds);
        }

        $this->reset(['title', 'description', 'priority', 'due_date', 'category', 'project', 'client', 'tags', 'status_id', 'assignee']);
    }
    public function render()
    {
        return view('livewire.task.task-form');
    }
}
