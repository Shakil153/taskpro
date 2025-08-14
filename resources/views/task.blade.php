<x-app-layout>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @keyframes pulse-slow {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        .animate-pulse-slow {
            animation: pulse-slow 2s infinite;
        }
        .modal-overlay {
            backdrop-filter: blur(8px);
            background: rgba(0, 0, 0, 0.5);
        }
        .modal-enter {
            animation: modalEnter 0.3s ease-out;
        }
        .modal-exit {
            animation: modalExit 0.3s ease-in;
        }
        @keyframes modalEnter {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(-20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        @keyframes modalExit {
            from {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
            to {
                opacity: 0;
                transform: scale(0.9) translateY(-20px);
            }
        }
    </style>

    <!-- Header -->
    <div class="bg-white dark:bg-gray-800 shadow-sm border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <!-- <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-tasks text-white text-lg"></i>
                    </div> -->
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Task Manager</h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Organize your work efficiently</p>
                    </div>
                </div>
                <button onclick="toggleDarkMode()" class="w-10 h-10 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 flex items-center justify-center">
                    <i class="fas fa-moon dark:hidden text-sm"></i>
                    <i class="fas fa-sun hidden dark:block text-sm"></i>
                </button>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <div id="alert-success" 
            class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center space-x-2 transition-opacity duration-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" 
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M5 13l4 4L19 7" />
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    @if (session()->has('error'))
        <div id="alert-error" 
            class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center space-x-2 transition-opacity duration-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" 
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span>{{ session('error') }}</span>
        </div>
    @endif


    <div class="max-w-7xl mx-auto p-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 h-full">
            
            <!-- Left Side - Task List (2/3 width) -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Task Header -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">My Tasks</h2>
                            <p class="text-gray-600 dark:text-gray-300">Manage your daily activities</p>
                        </div>
                        <button onclick="openTaskModal()" class="group bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200 flex items-center space-x-2">
                            <i class="fas fa-plus group-hover:rotate-180 transition-transform duration-300"></i>
                            <span>Add Task</span>
                        </button>
                    </div>
                </div>
                <livewire:task.task-list />
            </div>

            <!-- Right Side - Statistics & Analytics (1/3 width) -->
            <div class="space-y-6">
                <!-- Overview Stats -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6 flex items-center">
                        <i class="fas fa-chart-pie mr-2 text-indigo-500"></i>
                        Task Overview
                    </h3>
                    <div class="space-y-4">
                        <!-- Completed -->
                        <div class="flex items-center justify-between p-4 bg-green-50 dark:bg-green-900/20 rounded-xl">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check-circle text-green-600 dark:text-green-400 text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-600 dark:text-gray-300">Completed</p>
                                    <p class="text-2xl font-bold text-green-600 dark:text-green-400">15</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-xs text-gray-500 dark:text-gray-400">65.2%</p>
                                <div class="w-16 h-2 bg-green-200 dark:bg-green-800 rounded-full overflow-hidden mt-1">
                                    <div class="h-full bg-green-500 rounded-full" style="width: 65.2%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- In Progress -->
                        <div class="flex items-center justify-between p-4 bg-blue-50 dark:bg-blue-900/20 rounded-xl">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
                                    <i class="fas fa-spinner text-blue-600 dark:text-blue-400 text-xl animate-spin"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-600 dark:text-gray-300">In Progress</p>
                                    <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">5</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-xs text-gray-500 dark:text-gray-400">21.7%</p>
                                <div class="w-16 h-2 bg-blue-200 dark:bg-blue-800 rounded-full overflow-hidden mt-1">
                                    <div class="h-full bg-blue-500 rounded-full" style="width: 21.7%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending -->
                        <div class="flex items-center justify-between p-4 bg-yellow-50 dark:bg-yellow-900/20 rounded-xl">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-full flex items-center justify-center">
                                    <i class="fas fa-clock text-yellow-600 dark:text-yellow-400 text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-600 dark:text-gray-300">Pending</p>
                                    <p class="text-2xl font-bold text-yellow-600 dark:text-yellow-400">3</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-xs text-gray-500 dark:text-gray-400">13.1%</p>
                                <div class="w-16 h-2 bg-yellow-200 dark:bg-yellow-800 rounded-full overflow-hidden mt-1">
                                    <div class="h-full bg-yellow-500 rounded-full" style="width: 13.1%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Productivity Metrics -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6 flex items-center">
                        <i class="fas fa-chart-line mr-2 text-purple-500"></i>
                        This Week
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600 dark:text-gray-300">Tasks Completed</span>
                            <span class="text-lg font-bold text-gray-900 dark:text-white">12</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600 dark:text-gray-300">Productivity Score</span>
                            <span class="text-lg font-bold text-green-600 dark:text-green-400">89%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600 dark:text-gray-300">Average Time/Task</span>
                            <span class="text-lg font-bold text-blue-600 dark:text-blue-400">2.3h</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center">
                        <i class="fas fa-bolt mr-2 text-yellow-500"></i>
                        Quick Actions
                    </h3>
                    <div class="space-y-3">
                        <button onclick="openTaskModal()" class="w-full bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white py-3 px-4 rounded-xl text-sm font-medium transition-all duration-200 transform hover:scale-105">
                            <i class="fas fa-plus mr-2"></i>
                            Create New Task
                        </button>
                        <button class="w-full bg-gradient-to-r from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600 text-white py-3 px-4 rounded-xl text-sm font-medium transition-all duration-200 transform hover:scale-105">
                            <i class="fas fa-download mr-2"></i>
                            Export Tasks
                        </button>
                        <button class="w-full bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white py-3 px-4 rounded-xl text-sm font-medium transition-all duration-200 transform hover:scale-105">
                            <i class="fas fa-chart-bar mr-2"></i>
                            View Analytics
                        </button>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center">
                        <i class="fas fa-history mr-2 text-gray-500"></i>
                        Recent Activity
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3 text-sm">
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            <span class="text-gray-600 dark:text-gray-300">Completed "UI Design"</span>
                            <span class="text-gray-400 text-xs ml-auto">2h ago</span>
                        </div>
                        <div class="flex items-center space-x-3 text-sm">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span class="text-gray-600 dark:text-gray-300">Started "Bug Fixes"</span>
                            <span class="text-gray-400 text-xs ml-auto">4h ago</span>
                        </div>
                        <div class="flex items-center space-x-3 text-sm">
                            <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                            <span class="text-gray-600 dark:text-gray-300">Added "Documentation"</span>
                            <span class="text-gray-400 text-xs ml-auto">1d ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Task Modal -->
    <div id="taskModal" class="fixed inset-0 z-50 modal-overlay hidden flex items-center justify-center p-4">
        <div id="modalContent" class="bg-white dark:bg-gray-800 rounded-3xl shadow-2xl border border-gray-200 dark:border-gray-700 w-full max-w-2xl max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="sticky top-0 bg-white dark:bg-gray-800 rounded-t-3xl border-b border-gray-100 dark:border-gray-700 px-8 py-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-plus text-white text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Add New Task</h2>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Create a new task to organize your work</p>
                        </div>
                    </div>
                    <button onclick="closeTaskModal()" class="w-10 h-10 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-xl hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 flex items-center justify-center">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            
           <div x-data="{}" x-init="
                new TomSelect('#taskCategory', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
                new TomSelect('#taskStatus', { create: true, sortField: { direction: 'asc' }, plugins: ['remove_button'] });
                new TomSelect('#taskAssignee', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
                new TomSelect('#taskTags', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
                new TomSelect('#taskProject', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
                new TomSelect('#taskClient', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
            ">
    <!-- Your modal code here -->

    <livewire:task.task-form-modal />
</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

    <script>
        // Dark mode toggle
        function toggleDarkMode() {
            const html = document.documentElement;
            html.classList.toggle('dark');
            
            // Save preference
            const isDark = html.classList.contains('dark');
            localStorage.setItem('darkMode', isDark);
        }

        // Load saved dark mode preference
        document.addEventListener('DOMContentLoaded', function() {
            const savedMode = localStorage.getItem('darkMode');
            if (savedMode === 'true') {
                document.documentElement.classList.add('dark');
            }
            
            // Set today as default date
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('taskDueDate').value = today;
        });

        // Modal functions
        function openTaskModal() {
            const modal = document.getElementById('taskModal');
            const modalContent = document.getElementById('modalContent');
            
            modal.classList.remove('hidden');
            modalContent.classList.add('modal-enter');
            document.body.style.overflow = 'hidden';
            
            // Focus on first input
            setTimeout(() => {
                document.getElementById('taskTitle').focus();
            }, 100);

        setTimeout(() => {
                new TomSelect('#taskCategory', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
                new TomSelect('#taskStatus', { create: true, sortField: { direction: 'asc' }, plugins: ['remove_button'] });
                new TomSelect('#taskAssignee', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
                new TomSelect('#taskTags', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
                new TomSelect('#taskProject', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
                new TomSelect('#taskClient', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
            }, 200); // Small delay to ensure modal is fully rendered before initializing
        }

        function closeTaskModal() {
            const modal = document.getElementById('taskModal');
            const modalContent = document.getElementById('modalContent');
            
            modalContent.classList.remove('modal-enter');
            modalContent.classList.add('modal-exit');
            
            setTimeout(() => {
                modal.classList.add('hidden');
                modalContent.classList.remove('modal-exit');
                document.body.style.overflow = 'auto';
                
                // Reset form
                document.getElementById('taskForm').reset();
                const today = new Date().toISOString().split('T')[0];
                document.getElementById('taskDueDate').value = today;
            }, 300);
        }

        // Close modal when clicking outside
        document.getElementById('taskModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeTaskModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !document.getElementById('taskModal').classList.contains('hidden')) {
                closeTaskModal();
            }
        });
    

    </script>

    <script>
    document.addEventListener('livewire:load', function () {
        // Initialize TomSelect once Livewire has finished loading
        new TomSelect('#taskCategory', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
        new TomSelect('#taskStatus', { create: true, sortField: { direction: 'asc' }, plugins: ['remove_button'] });
        new TomSelect('#taskAssignee', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
        new TomSelect('#taskTags', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
        new TomSelect('#taskProject', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
        new TomSelect('#taskClient', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
    });

    // Reinitialize TomSelect when Livewire updates the DOM (like after form submission)
    Livewire.on('taskFormUpdated', () => {
        new TomSelect('#taskCategory', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
        new TomSelect('#taskStatus', { create: true, sortField: { direction: 'asc' }, plugins: ['remove_button'] });
        new TomSelect('#taskAssignee', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
        new TomSelect('#taskTags', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
        new TomSelect('#taskProject', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
        new TomSelect('#taskClient', { create: true, sortField: { field: 'text', direction: 'asc' }, plugins: ['remove_button'] });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(() => {
            const successAlert = document.getElementById('alert-success');
            const errorAlert = document.getElementById('alert-error');

            if (successAlert) {
                successAlert.style.opacity = '0';
                setTimeout(() => successAlert.remove(), 500);
            }

            if (errorAlert) {
                errorAlert.style.opacity = '0';
                setTimeout(() => errorAlert.remove(), 500);
            }
        }, 3000);
    });
</script>

</x-app-layout>
