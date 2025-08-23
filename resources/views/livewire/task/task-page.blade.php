<div class="lg:col-span-2 space-y-6">
    <!-- Task Header -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3">
        <div class="flex items-center justify-between">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white flex items-center">
                <i class="fas fa-list mr-2 text-indigo-500"></i>
                Active Tasks
                <span class="ml-2 px-2 py-0.5 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 text-xs rounded-full">23</span>
            </h2>

            <div class="flex items-center gap-2">
                <!-- Filter Toggle Button -->
                <button onclick="toggleFilters()" type="button"
                    class="bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 px-3 py-2 rounded-lg font-medium text-gray-700 dark:text-gray-300 text-sm flex items-center space-x-1 transition">
                    <i class="fas fa-filter"></i>
                    <span>Filters</span>
                </button>

                <!-- Add Task -->
                <button onclick="toggleTaskForm()" type="button"
                    class="group bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white px-3 py-2 rounded-lg font-medium shadow hover:shadow-md transform hover:scale-105 transition-all duration-200 flex items-center space-x-1 text-sm">
                    <i class="fas fa-plus group-hover:rotate-180 transition-transform duration-300"></i>
                    <span>Add Task</span>
                </button>
            </div>
        </div>

        <!-- Collapsible Filter Section -->
        <div id="filterSection" class="hidden transition-all duration-300 overflow-hidden">
            <div class="p-3 bg-gray-50 dark:bg-gray-700/50 border-b border-gray-200 dark:border-gray-600">
                <div class="flex flex-wrap items-center gap-2">
                    <!-- Search -->
                    <div class="relative min-w-48 flex-1 max-w-xs">
                        <i class="fas fa-search absolute left-2.5 top-1/2 transform -translate-y-1/2 text-gray-400 text-xs"></i>
                        <input type="text" 
                            placeholder="Search tasks..." 
                            class="w-full pl-8 pr-3 py-1.5 text-xs border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-1 focus:ring-indigo-500 focus:border-transparent">
                    </div>

                    <!-- Compact Filters -->
                    <select class="px-2 py-1.5 text-xs border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-800">
                        <option value="">Status</option>
                        <option value="pending">Pending</option>
                        <option value="in_progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>

                    <select class="px-2 py-1.5 text-xs border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-800">
                        <option value="">Priority</option>
                        <option value="high">High</option>
                        <option value="medium">Medium</option>
                        <option value="low">Low</option>
                    </select>

                    <select class="px-2 py-1.5 text-xs border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-800">
                        <option value="">Project</option>
                        <option value="website_redesign">Website Redesign</option>
                        <option value="mobile_app">Mobile App</option>
                        <option value="marketing_campaign">Marketing Campaign</option>
                    </select>

                    <select class="px-2 py-1.5 text-xs border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-800">
                        <option value="">Client</option>
                        <option value="acme_corp">Acme Corp</option>
                        <option value="tech_solutions">Tech Solutions</option>
                        <option value="design_studio">Design Studio</option>
                    </select>

                    <select class="px-2 py-1.5 text-xs border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-800">
                        <option value="">Assignee</option>
                        <option value="john_doe">John Doe</option>
                        <option value="jane_smith">Jane Smith</option>
                        <option value="unassigned">Unassigned</option>
                    </select>

                    <select class="px-2 py-1.5 text-xs border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-800">
                        <option value="">Due Date</option>
                        <option value="overdue">Overdue</option>
                        <option value="today">Today</option>
                        <option value="this_week">This Week</option>
                        <option value="no_date">No Date</option>
                    </select>

                    <!-- Clear Filters -->
                    <button class="px-2 py-1.5 text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white border border-gray-300 dark:border-gray-600 rounded hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <!-- Active Filters -->
                <div class="mt-2 flex flex-wrap gap-1.5" id="activeFilters">
                    <span class="inline-flex items-center px-1.5 py-0.5 rounded text-xs bg-indigo-100 text-indigo-800">
                        In Progress
                        <button class="ml-1 hover:bg-indigo-200 rounded p-0.5">
                            <i class="fas fa-times text-xs"></i>
                        </button>
                    </span>
                    <span class="inline-flex items-center px-1.5 py-0.5 rounded text-xs bg-red-100 text-red-800">
                        High Priority
                        <button class="ml-1 hover:bg-red-200 rounded p-0.5">
                            <i class="fas fa-times text-xs"></i>
                        </button>
                    </span>
                </div>
            </div>
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
        document.getElementById('taskForm').classList.toggle('hidden');
    }

    function toggleFilters() {
        const section = document.getElementById('filterSection');
        section.classList.toggle('hidden');
    }
</script>
