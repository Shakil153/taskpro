<!-- Modal Body -->
<div>
<form id="taskForm" wire:submit="taskcreate" >
    <div class="group bg-white dark:bg-gray-800 rounded-2xl shadow-md border border-gray-100 dark:border-gray-700 transition-all duration-300 overflow-hidden">
    <div class="p-6">
        <div class="flex items-start justify-between">
            <div class="flex items-start space-x-4 flex-1">
                <!-- <div class="flex-shrink-0 mt-1">
                    <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-plus text-white text-xs"></i>
                    </div>
                </div> -->

                <div class="flex-1 min-w-0 space-y-3">
                    <!-- Title -->
                    <input type="text" wire:model.defer="title"
                        placeholder="Task title..."
                        class="w-full text-lg font-semibold text-gray-900 dark:text-white border-b border-gray-300 dark:border-gray-600 focus:outline-none focus:border-blue-500 bg-transparent" />

                    <!-- Description -->
                    <textarea wire:model.defer="description"
                        placeholder="Description..."
                        class="w-full text-gray-600 dark:text-gray-300 text-sm border border-gray-300 dark:border-gray-600 rounded-lg p-2 bg-transparent"></textarea>

                    <!-- Priority / Due Date / Status -->
                    <div class="flex flex-wrap gap-3">
                        <select wire:model.defer="priority"
                            class="rounded-full text-xs px-3 py-1 font-medium border border-gray-300 dark:border-gray-600 bg-transparent">
                            <option value="0">Low</option>
                            <option value="1" selected>Medium</option>
                            <option value="2">High</option>
                        </select>

                        <input wire:model.defer="due_date" type="date"
                            class="text-xs rounded-lg border border-gray-300 dark:border-gray-600 bg-transparent px-2 py-1" />

                        <select wire:model.defer="status_id"
                            class="rounded-full text-xs px-3 py-1 font-medium border border-gray-300 dark:border-gray-600 bg-transparent">
                            <option value="Pending">Pending</option>
                            <option value="In progress">In progress</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-100 dark:border-gray-700">
        <button type="button" onclick="closeTaskModal()" class="flex-1 px-6 py-3 bg-red-100 dark:bg-red-700 text-gray-700 dark:text-gray-300 rounded-xl font-semibold hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 flex items-center justify-center space-x-2">
            <i class="fas fa-times"></i>
            <span>Cancel</span>
        </button>
        <button type="submit" class="flex-1 px-6 py-3 bg-gradient-to-r from-green-500 to-indigo-600 hover:from-green-600 hover:to-indigo-700 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200 flex items-center justify-center space-x-2">
            <i class="fas fa-plus"></i>
            <span>Create Task</span>
        </button>
        </div>
        </div>
    </div>
</form>
</div>
