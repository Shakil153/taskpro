<ul>
    @forelse($tasks as $task)
        <li class="flex items-center justify-between">
            <div>
                <strong>{{ $task->title }}</strong>
            </div>
            <div>
                <strong>{{ $task->description }}</strong>
            </div>
            <div>
                <strong>{{ $task->status }}</strong> 
            </div>
            <div class="flex space-x-2">
                <!-- Edit Button with Heroicon Pencil -->
                <button wire:click="editTask({{ $task->id }})" class="bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none">
                   Edit
                </button>

                <!-- Delete Button with Heroicon Trash -->
                <button wire:click="deleteTask({{ $task->id }})" class="text-red-500 hover:text-red-700">
                    Delete
                </button>
            </div>
        </li>
    @empty
        <p>No tasks available.</p>
    @endforelse
</ul>
