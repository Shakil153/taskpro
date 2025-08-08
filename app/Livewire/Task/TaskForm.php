<?php
namespace App\Livewire\Task;

use Livewire\Component;
use App\Services\TaskService;
use App\Services\TagService;
use App\Services\StatusService;
use App\Services\CategoryService;
use App\Services\ClientService;
use App\Services\ProjectService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TaskForm extends Component
{
    public $tasks;
    public $title, $description, $priority = '1', $due_date;
    public $category, $project, $client, $tags = [];
    public $status_id='Pending', $assignee;

    protected $taskService;
    protected $tagService;
    protected $statusService;
    protected $categoryService;
    protected $projectService;
    protected $clientService;


    public function __construct()
    {
        $this->taskService = app(TaskService::class);
        $this->tagService = app(TagService::class);
        $this->statusService = app(StatusService::class);
        $this->categoryService = app(CategoryService::class);
        $this->projectService = app(ProjectService::class);
        $this->clientService = app(ClientService::class);
    }

    public function taskcreate()
    {
        DB::beginTransaction();  // Start a database transaction

        try {
            // Validate inputs
            $this->validate([
                'title' => 'required|string|max:255',
                'priority' => 'required|in:0,1,2',
                // 'status_id' => 'required|exists:statuses,id',
                // 'category' => 'required|exists:categories,id',
                // 'client' => 'nullable|exists:clients,id',
                // 'project' => 'nullable|exists:projects,id',
            ]);
            // Create status if needed
            
            if (!empty($this->status_id)) {
                $status = $this->statusService->createStatus(['name' => $this->status_id]);
                $statusIds = $status->id;
            }

            // Create category if needed
            if (!empty($this->category)) {
                $category = $this->categoryService->createCategory(['name' => $this->category]);
                $categoryIds = $category->id;
            }

            // Create project if needed
            if (!empty($this->project)) {
                $project = $this->projectService->createProject(['name' => $this->project]);
                $projectIds = $project->id;
            }

            // Prepare task data
            $data = [
                'title' => $this->title,
                'description' => $this->description,
                'priority' => $this->priority,
                'due_date' => $this->due_date,
                'category' => $categoryIds ?? $this->category,
                'project' => $projectIds ?? $this->project,
                'status_id' => $statusIds ?? $this->status_id,
            ];
           

            // Create task
            $task = $this->taskService->createTask($data);

            // Sync clients (if provided)
            if (!empty($this->client)) {
                $clientIds = [];
                foreach ($this->client as $name) {
                    $client = $this->clientService->createClient(['name' => $name]);
                    $clientIds[] = $client->id;
                }
                $task->clients()->sync($clientIds);  // Sync to task_client pivot table
            }

            // Sync tags (if provided)
            if (!empty($this->tags)) {
                $tagIds = [];
                foreach ($this->tags as $tagsname) {
                    $tag = $this->tagService->createTask(['name' => strtolower($tagsname)]);
                    $tagIds[] = $tag->id;
                }
                $task->tags()->sync($tagIds);  // Sync to task_tag pivot table
            }

            // Sync assignees (if provided)
            if (!empty($this->assignee)) {
                $assigneeIds = [];
                foreach ($this->assignee as $userId) {
                    $user = User::find($userId);
                    if ($user) {
                        $assigneeIds[] = $user->id;
                    }
                }
                $task->assignees()->sync($assigneeIds);  // Sync to task_assignee pivot table
            }

            DB::commit();  // Commit transaction

            // Reset form data
            $this->reset(['title', 'description', 'priority', 'due_date', 'category', 'project', 'client', 'tags', 'status_id', 'assignee']);
            
            // Emit success event and display success message
            
            session()->flash('success', 'Task created successfully!');
            return redirect()->route('task');

        } catch (\Exception $e) {
            DB::rollBack();  // Rollback transaction if there's an error

            // Emit failure event and display error message
            session()->flash('error', 'An error occurred while creating the task: ' . $e->getMessage());
            return redirect()->route('task');
        }
    }
    public function render()
    {
        return view('livewire.task.task-form');
    }
}
