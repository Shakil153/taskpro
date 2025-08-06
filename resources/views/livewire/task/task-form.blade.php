<!-- Modal Body -->
<form id="taskForm" wire:submit.prevent="taskCreate" class="p-8 space-y-6">
                <!-- Task Title -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-300 flex items-center">
                        <i class="fas fa-heading mr-2 text-indigo-500"></i>
                        Task Title
                    </label>
                    <input type="text" id="taskTitle" placeholder="Enter task title..." class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" wire:model="title" required>
                </div>

                <!-- Task Description -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-300 flex items-center">
                        <i class="fas fa-align-left mr-2 text-indigo-500"></i>
                        Description
                    </label>
                    <textarea id="taskDescription" rows="4" placeholder="Describe your task in detail..." class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 resize-none" wire:model="description"></textarea>
                </div>

                <!-- Priority & Due Date Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Priority -->
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-gray-700 dark:text-gray-300 flex items-center">
                            <i class="fas fa-flag mr-2 text-indigo-500"></i>
                            Priority
                        </label>
                        <select id="taskPriority" class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" wire:model="priority" required>
                            <option value="0">Low Priority</option>
                            <option value="1" selected>Medium Priority</option>
                            <option value="2">High Priority</option>
                        </select>
                    </div>

                    <!-- Due Date -->
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-gray-700 dark:text-gray-300 flex items-center">
                            <i class="fas fa-calendar mr-2 text-indigo-500"></i>
                            Due Date
                        </label>
                        <input type="date" id="taskDueDate" class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" wire:model="due_date">
                    </div>
                </div>

                <!-- Status & Category Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Status -->
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-gray-700 dark:text-gray-300 flex items-center">
                            <i class="fas fa-tasks mr-2 text-indigo-500"></i>
                            Status
                        </label>
                        <select id="taskStatus" class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" wire:model="status_id">
                            <option value="pending" selected>Pending</option>
                            <option value="in-progress">In Progress</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>

                    <!-- Category -->
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-gray-700 dark:text-gray-300 flex items-center">
                            <i class="fas fa-folder mr-2 text-indigo-500"></i>
                            Category
                        </label>
                        <select id="taskCategory" class="tom-select w-full px-4 py-3 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" wire:model="category">
                            <option value="">Select Task Category</option>
                            <option value="work">Work</option>
                            <option value="personal">Personal</option>
                            <option value="project">Project</option>
                            <option value="meeting">Meeting</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <!-- Project & Client Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Project -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-300 flex items-center">
                        <i class="fas fa-project-diagram mr-2 text-indigo-500"></i>
                        Project
                    </label>
                    <select id="taskProject" class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" wire:model="project">
                        <option value="">Select Project</option>
                        <option value="project-1">Project 1</option>
                        <option value="project-2">Project 2</option>
                        <option value="project-3">Project 3</option>
                    </select>
                </div>

                <!-- Client -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-300 flex items-center">
                        <i class="fas fa-user-tie mr-2 text-indigo-500"></i>
                        Client
                    </label>
                    <select id="taskClient" class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" wire:model="client">
                        <option value="">Select Client</option>
                        <option value="client-1">Client 1</option>
                        <option value="client-2">Client 2</option>
                        <option value="client-3">Client 3</option>
                    </select>
                    </div>
                </div>

    
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-300 flex items-center">
                        <i class="fas fa-user mr-2 text-indigo-500"></i>
                        Assignee (Optional)
                    </label>
                    <select id="taskAssignee" placeholder="Select or type assignee..." autocomplete="off" class="tomselect w-full px-4 py-3 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" wire:model="assignee" multiple>
                    </select>
                </div>

                <!-- Tags -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-300 flex items-center">
                        <i class="fas fa-tags mr-2 text-indigo-500"></i>
                        Tags (Optional)
                    </label>
                    <select id="taskTags"  placeholder="Enter tags..." autocomplete="off" class="tomselect w-full px-4 py-3 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" wire:model="tags" multiple>
                    </select>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Example: design, urgent, frontend</p>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-100 dark:border-gray-700">
                    <button type="button" onclick="closeTaskModal()" class="flex-1 px-6 py-3 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-xl font-semibold hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 flex items-center justify-center space-x-2">
                        <i class="fas fa-times"></i>
                        <span>Cancel</span>
                    </button>
                    <button type="submit" class="flex-1 px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200 flex items-center justify-center space-x-2">
                        <i class="fas fa-plus"></i>
                        <span>Create Task</span>
                    </button>
                </div>
</form>
