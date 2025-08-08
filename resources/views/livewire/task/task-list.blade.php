<div>
   <div class="space-y-4" id="taskList">
    @foreach($tasks as $task)
        <div class="group bg-white dark:bg-gray-800 rounded-2xl shadow-md hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all duration-300 overflow-hidden">
            <div class="p-6">
                <div class="flex items-start justify-between">
                    <div class="flex items-start space-x-4 flex-1">
                        <div class="flex-shrink-0 mt-1">
                            @if($task->status->name === 'Completed')
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-white text-xs"></i>
                                </div>
                            @elseif($task->status->name === 'In progress')
                                <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center animate-pulse-slow">
                                    <i class="fas fa-play text-white text-xs"></i>
                                </div>
                            @elseif($task->status->name === 'Pending')
                                <div class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-clock text-white text-xs"></i>
                                </div>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2 {{ $task->status->name === 'Completed' ? 'line-through opacity-75' : '' }}">
                                {{ $task->title }}
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-3 {{ $task->status->name === 'Completed' ? 'opacity-75' : '' }}">
                                {{ $task->description }}
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                    {{ $task->status->name === 'Completed' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : '' }}
                                    {{ $task->status->name === 'In progress' ? 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200' : '' }}
                                    {{ $task->status->name === 'Pending' ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200' : '' }}">
                                    @if($task->status->name === 'Completed')
                                        <i class="fas fa-check-circle mr-1 text-xs"></i> Completed
                                    @elseif($task->status->name === 'In progress')
                                        <i class="fas fa-spinner mr-1 text-xs animate-spin"></i> In Progress
                                    @elseif($task->status->name === 'Pending')
                                        <i class="fas fa-exclamation-triangle mr-1 text-xs"></i> Pending
                                    @endif
                                </span>
                                <span class="text-xs text-gray-500 dark:text-gray-400 flex items-center">
                                    <i class="far fa-calendar mr-1"></i>
                                    {{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('M d, Y') : 'No due date' }}
                                </span>
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
                        <button class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 hover:bg-blue-200 dark:bg-blue-900 dark:text-blue-400 transition-colors duration-200 flex items-center justify-center">
                            <i class="fas fa-edit text-xs"></i>
                        </button>
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
