<div class="lg:col-span-2 space-y-6">
    <!-- Task Header -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-lg font-bold text-gray-900 dark:text-white mb-1">My Tasks</h2>
                <p class="text-sm text-gray-600 dark:text-gray-300">Manage your daily activities</p>
            </div>
            <button onclick="toggleTaskForm()" type="button"
                class="group bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white px-3 py-2 rounded-lg font-medium shadow hover:shadow-md transform hover:scale-105 transition-all duration-200 flex items-center space-x-1 text-sm">
                <i class="fas fa-plus group-hover:rotate-180 transition-transform duration-300"></i>
                <span>Add Task</span>
            </button>
        </div>
    </div>

    <!-- Show Task Form if needed -->
    <div id="taskForm" class="hidden">
    <livewire:task.task-form :key="'task-form-' . now()" />
    </div>
    <!-- Task List -->
    <livewire:task.task-list />
</div>

<script>
    function toggleTaskForm() {
        const form = document.getElementById('taskForm');
        form.classList.toggle('hidden');
    }

    function hideTaskForm() {
        const form = document.getElementById('taskForm');
        form.classList.add('hidden');
    }
</script>
