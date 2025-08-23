<div>
    <style>
        .editable-cell {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 120px;
    height: 40px;
}
    </style>
    @php
    $colors = [
        'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300',
        'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300',
        'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300',
        'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300',
        'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300',
        'bg-pink-100 text-pink-800 dark:bg-pink-900 dark:text-pink-300',
    ];
@endphp
   <div class="space-y-2" id="taskList">
   
    @foreach($tasks as $task)
    <div class="group bg-white dark:bg-gray-800 rounded-lg shadow-sm hover:shadow-md border border-gray-200 dark:border-gray-700 transition-all duration-200 overflow-hidden">
        <div class="p-4">
            <div class="flex items-center justify-between">
                <div class="flex space-x-3 flex-1 min-w-0">

                    {{-- Status icon --}}
                    <div class="flex-shrink-0 flex items-center">
                        @if($task->status->name === 'Completed')
                            <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-xs"></i>
                            </div>
                        @elseif($task->status->name === 'In progress')
                            <div class="w-5 h-5 bg-blue-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-play text-white text-xs"></i>
                            </div>
                        @else
                            <div class="w-5 h-5 bg-yellow-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-clock text-white text-xs"></i>
                            </div>
                        @endif
                    </div>

                    <div class="flex-1 min-w-0">

                        {{-- Title with inline editing --}}
                        <div class="relative group/title">
                            @if($editingTaskId === $task->id && $fieldBeingEdited === 'title')
                                <div x-data @click.away="$wire.cancelEdit()">
                                    <input type="text"
                                        wire:model.defer="fieldValue"
                                        wire:keydown.enter="saveEdit"
                                        wire:keydown.escape="cancelEdit"
                                        wire:blur="saveEdit"
                                        class="border rounded px-2 py-1 w-full text-sm font-medium text-gray-900 dark:bg-gray-700 dark:text-white h-7" />
                                </div>
                            @else
                                <div class="flex items-center group/title-hover">
                                    <h3 class="text-sm font-medium text-gray-900 dark:text-white truncate pr-2">
                                        <a href="{{ route('task.details', $task->id) }}" class="hover:text-blue-600 dark:hover:text-blue-400 h-7">
                                            {{ $task->title }}
                                        </a>
                                    </h3>
                                    <button type="button"
                                        wire:click="startEditing({{ $task->id }}, 'title', '{{ addslashes($task->title) }}')"
                                        class="w-6 h-6 rounded bg-gray-100 text-gray-600 hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-400 transition-colors duration-150 flex items-center justify-center opacity-0 group-hover/title-hover:opacity-100 ml-1"
                                        title="Edit Title">
                                        <i class="fas fa-edit text-xs"></i>
                                    </button>
                                </div>
                            @endif
                        </div>

                        {{-- Due Date --}}
                        @if($editingTaskId === $task->id && $fieldBeingEdited === 'due_date')
                            <div x-data @click.away="$wire.cancelEdit()">
                                <input type="date" wire:model.defer="fieldValue"
                                       wire:change="saveEdit"
                                       class="border rounded px-2 py-1 text-xs dark:bg-gray-700 dark:text-white h-7" />
                            </div>
                        @else
                            <span class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1 cursor-pointer h-7"
                                  wire:click="startEditing({{ $task->id }}, 'due_date', '{{ $task->due_date }}')">
                                <i class="far fa-calendar"></i>
                                {{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('M d, Y') : 'No due date' }}
                            </span>
                        @endif

                        {{-- Project, Client, Assignee --}}
                        <div class="mt-1 flex flex-wrap gap-5 text-xs text-gray-500 dark:text-gray-400 h-7">

                            {{-- Project --}}
                            @if($editingTaskId === $task->id && $fieldBeingEdited === 'project_id')
                                <div x-data @click.away="$wire.cancelEdit()">
                                    <select wire:model.defer="fieldValue"
                                            wire:change="saveEdit"
                                            class="border rounded px-2 py-1 text-xs dark:bg-gray-700 dark:text-white">
                                        @foreach(App\Models\Project::all() as $project)
                                            <option value="{{ $project->id }}">{{ $project->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @else
                                @if($task->project)
                                    <span class="flex items-center gap-1 cursor-pointer"
                                          wire:click="startEditing({{ $task->id }}, 'project_id', '{{ $task->project_id }}')">
                                        <i class="fas fa-folder text-indigo-400"></i>
                                        <span>{{ $task->project->name }}</span>
                                    </span>
                                @else
                                    <span class="flex items-center gap-1 text-gray-400 italic cursor-pointer"
                                          wire:click="startEditing({{ $task->id }}, 'project_id', '')">
                                        <i class="fas fa-folder"></i>
                                        <span>No project assigned</span>
                                    </span>
                                @endif
                            @endif

                            {{-- Clients --}}
                            @if($editingTaskId === $task->id && $fieldBeingEdited === 'clients')
                                <div x-data @click.away="$wire.cancelEdit()">
                                    <select wire:model.defer="selectedClients"
                                            wire:change="saveEdit"
                                            multiple
                                            class="border rounded px-2 py-1 text-xs dark:bg-gray-700 dark:text-white">
                                        @foreach(App\Models\Client::get() as $client)
                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @else
                                @if($task->clients->count())
                                    <span class="flex items-center gap-1 cursor-pointer"
                                        wire:click="startEditing({{ $task->id }}, 'clients')">
                                        <i class="fas fa-building text-pink-400"></i>
                                        <span>{{ $task->clients->pluck('name')->join(', ') }}</span>
                                    </span>
                                @else
                                    <span class="flex items-center gap-1 text-gray-400 italic cursor-pointer"
                                        wire:click="startEditing({{ $task->id }}, 'clients')">
                                        <i class="fas fa-building"></i>
                                        <span>No clients assigned</span>
                                    </span>
                                @endif
                            @endif
                        </div>

                        <div class="mt-1 flex flex-wrap gap-4 text-xs text-gray-500 dark:text-gray-400 h-7">

                            {{-- Category --}}
                            @if($editingTaskId === $task->id && $fieldBeingEdited === 'category_id')
                                <div x-data @click.away="$wire.cancelEdit()">
                                    <select wire:model.defer="fieldValue"
                                            wire:change="saveEdit"
                                            class="border rounded px-2 py-1 text-xs dark:bg-gray-700 dark:text-white">
                                        <option value="">No Category</option>
                                        @foreach(App\Models\Category::all() as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @else
                                @if($task->category)
                                    <span class="flex items-center gap-1 cursor-pointer"
                                        wire:click="startEditing({{ $task->id }}, 'category_id', '{{ $task->category_id }}')">
                                        <span>{{ $task->category->name }}</span>
                                    </span>
                                @else
                                    <span class="flex items-center gap-1 text-gray-400 italic cursor-pointer"
                                        wire:click="startEditing({{ $task->id }}, 'category_id', '')">
                                        <span>No category</span>
                                    </span>
                                @endif
                            @endif

                            {{-- Assignee --}}
                            @if($editingTaskId === $task->id && $fieldBeingEdited === 'assigned_to')
                                <div x-data @click.away="$wire.cancelEdit()">
                                    <select wire:model.defer="fieldValue"
                                            wire:change="saveEdit"
                                            class="border rounded px-2 py-1 text-xs dark:bg-gray-700 dark:text-white">
                                        <option value="">Unassigned</option>
                                        @foreach(App\Models\User::all() as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @else
                                 @if($task->assignees->count())
                                    <span class="flex items-center gap-1 cursor-pointer"
                                          wire:click="startEditing({{ $task->id }}, 'assigned_to', '{{ $task->assigned_to }}')">
                                        <i class="fas fa-user text-green-400"></i>
                                        <span>{{ $task->assignees->pluck('name')->join(', ') }}</span>
                                    </span>
                                @else
                                    <span class="flex items-center gap-1 text-gray-400 italic cursor-pointer"
                                          wire:click="startEditing({{ $task->id }}, 'assigned_to', '')">
                                        <i class="fas fa-user-slash"></i>
                                        <span>Unassigned</span>
                                    </span>
                                @endif
                            @endif
                       

                        {{-- Tags --}}
                       
                            @if($task->tags->count())
                                <div class="flex flex-wrap gap-1 cursor-pointer"
                                    wire:click="startEditing({{ $task->id }}, 'tags')">
                                    @foreach($task->tags as $index=>$tag)
                                    <span class="px-2 py-0.5 font-bold rounded-full text-xs flex items-center gap-1 {{ $colors[$index % count($colors)] }}">
                                        {{ $tag->name }}
                                    </span>
                                    @endforeach
                                </div>
                            @else
                                <span class="text-gray-400 italic text-xs cursor-pointer flex items-center gap-1"
                                    wire:click="startEditing({{ $task->id }}, 'tags')">
                                    <!-- <i class="fas fa-tags text-red-400"></i> -->
                                    No tags
                                </span>
                            @endif
                        </div>

                        {{-- Progress --}}
                        @if($task->status->name === 'In progress')
                            <div class="mt-2">
                                <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mb-1">
                                    <span>Progress</span>
                                    <span>65%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-1.5">
                                    <div class="bg-blue-500 h-1.5 rounded-full transition-all duration-300" style="width: 65%"></div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Right side: Status, Priority, Delete --}}
                <div class="flex items-center space-x-2 ml-4">

                    {{-- Status --}}
                    @if($editingTaskId === $task->id && $fieldBeingEdited === 'status_id')
                        <div x-data @click.away="$wire.cancelEdit()">
                            <select wire:model.defer="fieldValue"
                                    wire:change="saveEdit"
                                    class="border rounded px-2 py-1 text-xs dark:bg-gray-700 dark:text-white">
                                @foreach(App\Models\Status::all() as $status)
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    @else
                        <span class="inline-flex items-center gap-1 px-2 py-1 rounded-full text-xs font-medium cursor-pointer whitespace-nowrap
                            {{ $task->status->name === 'Completed' ? 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300' : '' }}
                            {{ $task->status->name === 'In progress' ? 'bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-300' : '' }}
                            {{ $task->status->name === 'Pending' ? 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-300' : '' }}"
                            wire:click="startEditing({{ $task->id }}, 'status_id', '{{ $task->status_id }}')">
                            @if($task->status->name === 'Completed')
                                <i class="fas fa-check text-xs"></i> Done
                            @elseif($task->status->name === 'In progress')
                                <i class="fas fa-play text-xs"></i> Active
                            @elseif($task->status->name === 'Pending')
                                <i class="fas fa-clock text-xs"></i> Pending
                            @endif
                        </span>
                    @endif

                    {{-- Priority --}}
                    @if($editingTaskId === $task->id && $fieldBeingEdited === 'priority')
                        <div x-data @click.away="$wire.cancelEdit()">
                            <select wire:model.defer="fieldValue"
                                    wire:change="saveEdit"
                                    class="border rounded px-2 py-1 text-xs dark:bg-gray-700 dark:text-white">
                                <option value="0">Low</option>
                                <option value="1">Med</option>
                                <option value="2">High</option>
                            </select>
                        </div>
                    @else
                        <span class="inline-flex items-center gap-1 px-2 py-1 rounded-full text-xs font-medium cursor-pointer whitespace-nowrap
                            {{ $task->priority === '2' ? 'bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-300' : '' }}
                            {{ $task->priority === '1' ? 'bg-orange-100 text-orange-700 dark:bg-orange-900 dark:text-orange-300' : '' }}
                            {{ $task->priority === '0' ? 'bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-300' : '' }}"
                            wire:click="startEditing({{ $task->id }}, 'priority', '{{ $task->priority ?? '0' }}')">
                            @if($task->priority === '2')
                                <i class="fas fa-exclamation text-xs"></i> High
                            @elseif($task->priority === '1')
                                <i class="fas fa-minus text-xs"></i> Med
                            @else
                                <i class="fas fa-arrow-down text-xs"></i> Low
                            @endif
                        </span>
                    @endif

                    {{-- Delete --}}
                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                        <button class="w-7 h-7 rounded bg-red-100 text-red-600 hover:bg-red-200 dark:bg-red-900/50 dark:text-red-400 transition-colors duration-150 flex items-center justify-center" title="Delete task">
                            <i class="fas fa-trash text-xs"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
   </div>
   @endforeach
 
   </div>
   <div class="mt-6">
       {{ $tasks->links() }}
   </div>
</div>
