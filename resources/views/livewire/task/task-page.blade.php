<div class="lg:col-span-2 space-y-6">
    <!-- Task Header -->
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">My Tasks</h2>
                <p class="text-gray-600 dark:text-gray-300">Manage your daily activities</p>
            </div>
            <!-- <button onclick="openTaskModal()" class="group bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200 flex items-center space-x-2">
                <i class="fas fa-plus group-hover:rotate-180 transition-transform duration-300"></i>
                <span>Add Task</span>
            </button> -->
            <button wire:click="showForm" type="button"
                class="group bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200 flex items-center space-x-2">
                <i class="fas fa-plus group-hover:rotate-180 transition-transform duration-300"></i>
                <span>Add Task</span>
            </button>
        </div>
    </div>
    <!-- Show Task Form if needed -->
    @if($showForm)
        <livewire:task.task-form />
    @endif
    <!-- Task List -->
    <livewire:task.task-list />
</div>

