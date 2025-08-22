<!-- Modal Body -->
<div>
<div class="bg-white dark:bg-gray-900 p-4 rounded-lg shadow-lg mx-auto">
    <form id="taskForm" wire:submit="taskcreate">
        <div class="space-y-4">
            <!-- Title Input -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Task Title</label>
                <input type="text" id="title" wire:model.defer="title"
                    placeholder="Enter task title..."
                    class="w-full px-3 py-2 rounded-md bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors" />
            </div>

            <!-- Compact Grid Layout -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                <!-- Priority -->
                <div>
                    <label for="priority" class="block text-xs font-medium text-gray-600 dark:text-gray-400 mb-1">Priority</label>
                    <select id="priority" wire:model.defer="priority"
                        class="w-full px-2 py-2 rounded-md bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-xs text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="0">🔵 Low</option>
                        <option value="1" selected>🟡 Medium</option>
                        <option value="2">🔴 High</option>
                    </select>
                </div>

                <!-- Due Date -->
                <div>
                    <label for="due_date" class="block text-xs font-medium text-gray-600 dark:text-gray-400 mb-1">Due Date</label>
                    <input id="due_date" type="date" wire:model.defer="due_date"
                        class="w-full px-2 py-2 rounded-md bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-xs text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                </div>

                <!-- Status -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="taskStatus" class="block text-xs font-medium text-gray-600 dark:text-gray-400 mb-1">Status</label>
                    <select wire:model.defer="status_id" id="taskStatus"
                        class="w-full px-2 py-2 rounded-md bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 text-xs text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        @foreach($statusData as $status)
                            <option value="{{ $status->name }}">
                                @if($status->name === 'Completed')⚡ 
                                @elseif($status->name === 'In progress')🔄 
                                @elseif($status->name === 'Pending')⏳ 
                                @endif
                                {{ $status->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-2 pt-3 border-t border-gray-200 dark:border-gray-700">
                <button type="button" onclick="hideTaskForm()" 
                    class="flex-1 px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-md text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors duration-150 flex items-center justify-center gap-1">
                    <i class="fas fa-times text-xs"></i>
                    <span>Cancel</span>
                </button>

                <button type="submit"
                    class="flex-1 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md text-sm font-medium shadow-sm hover:shadow-md transition-all duration-150 flex items-center justify-center gap-1">
                    <i class="fas fa-plus text-xs"></i>
                    <span>Create Task</span>
                </button>
            </div>
        </div>
    </form>
</div>
</div>