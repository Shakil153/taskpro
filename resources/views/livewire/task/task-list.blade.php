<div>
   <div class="space-y-4" id="taskList">
    @foreach($tasks as $task)
        <div class="group bg-white dark:bg-gray-800 rounded-2xl shadow-md hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all duration-300 overflow-hidden">
            <div class="p-6">
                <div class="flex items-start justify-between">
                    <div class="flex items-start space-x-4 flex-1">
                        {{-- Status icon --}}
                        <div class="flex-shrink-0 mt-1">
                            @if($task->status->name === 'Completed')
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-white text-xs"></i>
                                </div>
                            @elseif($task->status->name === 'In progress')
                                <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center animate-pulse-slow">
                                    <i class="fas fa-play text-white text-xs"></i>
                                </div>
                            @else
                                <div class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-clock text-white text-xs"></i>
                                </div>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                           <div class="relative group mb-2">
                                    {{-- Title display --}}
                                    @if($editingTaskId === $task->id && $fieldBeingEdited === 'title')
                                        <input type="text"
                                            wire:model.defer="fieldValue"
                                            wire:keydown.enter="saveEdit"
                                            wire:keydown.escape="cancelEdit"
                                            wire:blur="saveEdit"
                                            class="border rounded px-2 py-1 w-full text-gray-900 dark:bg-gray-700 dark:text-white" />
                                    @else
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white cursor-default">
                                            <a href="{{ route('task.details', $task->id) }}" class="hover:underline">
                                                {{ $task->title }}
                                            </a>
                                        </h3>

                                        {{-- Edit button, hidden by default, shown on hover --}}
                                        <button type="button"
                                            wire:click="startEditing({{ $task->id }}, 'title', '{{ addslashes($task->title) }}')"
                                            class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 hover:bg-blue-200 dark:bg-blue-900 dark:text-blue-400 transition-colors duration-200 flex items-center justify-center absolute top-0 right-0 opacity-0 group-hover:opacity-100"
                                            title="Edit Title">
                                            <i class="fas fa-edit text-xs"></i>
                                        </button>
                                    @endif
                            </div>
                            {{-- Description --}}
                            @if($editingTaskId === $task->id && $fieldBeingEdited === 'description')
                                <textarea wire:model.defer="fieldValue"
                                    wire:keydown.enter="saveEdit" wire:blur="saveEdit"
                                    class="border rounded px-2 py-1 w-full text-sm text-gray-900 dark:bg-gray-700 dark:text-white"></textarea>
                            @else
                                <p class="text-gray-600 dark:text-gray-300 text-sm mb-3 cursor-pointer"
                                   wire:click="startEditing({{ $task->id }}, 'description', '{{ addslashes($task->description) }}')">
                                    {{ $task->description }}
                                </p>
                            @endif
                            <div class="flex items-center justify-between">

                                {{-- Status dropdown --}}
                                @if($editingTaskId === $task->id && $fieldBeingEdited === 'status_id')
                                    <select wire:model.defer="fieldValue"
                                        wire:change="saveEdit"
                                        class="border rounded px-2 py-1 text-xs dark:bg-gray-700 dark:text-white">
                                        @foreach(App\Models\Status::all() as $status)
                                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium cursor-pointer {{ $task->status->name === 'Completed' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : '' }}
                                    {{ $task->status->name === 'In progress' ? 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200' : '' }}
                                    {{ $task->status->name === 'Pending' ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200' : '' }}"
                                        wire:click="startEditing({{ $task->id }}, 'status_id', '{{ $task->status_id }}')">
                                        @if($task->status->name === 'Completed')
                                        <i class="fas fa-check-circle mr-1 text-xs"></i> Completed
                                        @elseif($task->status->name === 'In progress')
                                            <i class="fas fa-spinner mr-1 text-xs animate-spin"></i> In Progress
                                        @elseif($task->status->name === 'Pending')
                                            <i class="fas fa-exclamation-triangle mr-1 text-xs"></i> Pending
                                        @endif
                                    </span>
                                @endif

                                {{-- Due date --}}
                                @if($editingTaskId === $task->id && $fieldBeingEdited === 'due_date')
                                    <input type="date" wire:model.defer="fieldValue"
                                        wire:change="saveEdit"
                                        class="border rounded px-2 py-1 text-xs dark:bg-gray-700 dark:text-white" />
                                @else
                                    <span class="text-xs text-gray-500 dark:text-gray-400 flex items-center cursor-pointer"
                                        wire:click="startEditing({{ $task->id }}, 'due_date', '{{ $task->due_date }}')">
                                        <i class="far fa-calendar mr-1"></i>
                                        {{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('M d, Y') : 'No due date' }}
                                    </span>
                                @endif
                                @if($editingTaskId === $task->id && $fieldBeingEdited === 'priority')
                                    <select wire:model.defer="fieldValue"
                                            wire:change="saveEdit"
                                            wire:keydown.escape="cancelEdit"
                                            class="border rounded px-2 py-1 text-xs dark:bg-gray-700 dark:text-white">
                                        <option value="0">Low</option>
                                        <option value="1">Medium</option>
                                        <option value="2">High</option>
                                    </select>
                                @else
                                {{-- Priority badge --}}
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium cursor-pointer
                                    {{ $task->priority === '0' ? 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200' : '' }}
                                    {{ $task->priority === '1' ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200' : '' }}
                                    {{ $task->priority === '2' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : '' }}"
                                    wire:click="startEditing({{ $task->id }}, 'priority', '{{ $task->priority ?? 'Low' }}')">
                                    {{ $task->priority === '0' ? 'Low' : '' }}
                                    {{ $task->priority === '1' ? 'Medium' : '' }}
                                    {{ $task->priority === '2' ? 'High' : '' }}
                                </span>
                                @endif
                                </div>
                             @if($task->status->name === 'In progress')
                            <div class="mt-3">
                                <div class="flex justify-between text-xs text-gray-600 dark:text-gray-400 mb-1">
                                    <span>Progress</span>
                                    <span>65%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-gradient-to-r from-blue-400 to-blue-600 h-2 rounded-full transition-all duration-500" style="width: 65%"></div>
                                </div>
                            </div>
                             @endif
                        </div>
                    </div>
                    
                    <div class="flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200 ml-4">
                        <!-- <button class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 hover:bg-blue-200 dark:bg-blue-900 dark:text-blue-400 transition-colors duration-200 flex items-center justify-center">
                            <i class="fas fa-edit text-xs"></i>
                        </button> -->
                        <button class="w-8 h-8 rounded-lg bg-red-100 text-red-600 hover:bg-red-200 dark:bg-red-900 dark:text-red-400 transition-colors duration-200 flex items-center justify-center">
                            <i class="fas fa-trash text-xs"></i>
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    @endforeach
</div>
    <div class="mt-4">
    {{ $tasks->links() }}
</div>
</div>
