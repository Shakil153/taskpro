<x-app-layout>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @keyframes pulse-slow {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        .animate-pulse-slow { animation: pulse-slow 2s infinite; }
        .modal-overlay { backdrop-filter: blur(8px); background: rgba(0, 0, 0, 0.5); }
        .modal-enter { animation: modalEnter 0.3s ease-out; }
        .modal-exit { animation: modalExit 0.3s ease-in; }
        @keyframes modalEnter {
            from { opacity: 0; transform: scale(0.9) translateY(-20px); }
            to { opacity: 1; transform: scale(1) translateY(0); }
        }
        @keyframes modalExit {
            from { opacity: 1; transform: scale(1) translateY(0); }
            to { opacity: 0; transform: scale(0.9) translateY(-20px); }
        }
    </style>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>

    <!-- Header -->
    <div class="bg-white dark:bg-gray-800 shadow-sm border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div>
                        <h1 class="text-xl font-bold text-gray-900 dark:text-white">Task Manager</h1>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Organize your work efficiently</p>
                    </div>
                </div>
                <button onclick="toggleDarkMode()" class="w-9 h-9 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center justify-center">
                    <i class="fas fa-moon dark:hidden text-xs"></i>
                    <i class="fas fa-sun hidden dark:block text-xs"></i>
                </button>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <div id="alert-success" 
            class="fixed top-3 right-3 bg-green-500 text-white px-3 py-2 rounded-md shadow flex items-center space-x-2 transition-opacity duration-500 text-sm">
            <i class="fas fa-check-circle"></i>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    @if (session()->has('error'))
        <div id="alert-error" 
            class="fixed top-3 right-3 bg-red-500 text-white px-3 py-2 rounded-md shadow flex items-center space-x-2 transition-opacity duration-500 text-sm">
            <i class="fas fa-times-circle"></i>
            <span>{{ session('error') }}</span>
        </div>
    @endif

    <div class="max-w-7xl mx-auto p-3">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 h-full">
            
            <!-- Left Side -->
            <div class="lg:col-span-2 space-y-4">
                <livewire:task.task-page />
            </div>

            <!-- Right Side -->
            <div class="space-y-4">
                <!-- Overview Stats -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-3 flex items-center">
                        <i class="fas fa-chart-pie mr-1 text-indigo-500"></i> Task Overview
                    </h3>
                    <div class="space-y-2">
                        <!-- Completed -->
                        <div class="flex items-center justify-between p-2 bg-green-50 dark:bg-green-900/20 rounded-md">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-check-circle text-green-600 dark:text-green-400 text-sm"></i>
                                <span class="text-xs text-gray-600 dark:text-gray-300">Completed</span>
                            </div>
                            <span class="text-sm font-bold text-green-600 dark:text-green-400">15</span>
                        </div>
                        <!-- In Progress -->
                        <div class="flex items-center justify-between p-2 bg-blue-50 dark:bg-blue-900/20 rounded-md">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-spinner text-blue-600 dark:text-blue-400 text-sm animate-spin"></i>
                                <span class="text-xs text-gray-600 dark:text-gray-300">In Progress</span>
                            </div>
                            <span class="text-sm font-bold text-blue-600 dark:text-blue-400">5</span>
                        </div>
                        <!-- Pending -->
                        <div class="flex items-center justify-between p-2 bg-yellow-50 dark:bg-yellow-900/20 rounded-md">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-clock text-yellow-600 dark:text-yellow-400 text-sm"></i>
                                <span class="text-xs text-gray-600 dark:text-gray-300">Pending</span>
                            </div>
                            <span class="text-sm font-bold text-yellow-600 dark:text-yellow-400">3</span>
                        </div>
                    </div>
                </div>

                <!-- Productivity Metrics -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-3 flex items-center">
                        <i class="fas fa-chart-line mr-1 text-purple-500"></i> This Week
                    </h3>
                    <div class="space-y-1 text-xs">
                        <div class="flex justify-between"><span>Tasks Completed</span><span class="font-bold">12</span></div>
                        <div class="flex justify-between"><span>Productivity Score</span><span class="font-bold text-green-600 dark:text-green-400">89%</span></div>
                        <div class="flex justify-between"><span>Avg Time/Task</span><span class="font-bold text-blue-600 dark:text-blue-400">2.3h</span></div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-2 flex items-center">
                        <i class="fas fa-bolt mr-1 text-yellow-500"></i> Quick Actions
                    </h3>
                    <div class="flex flex-col space-y-2">
                        <button onclick="openTaskModal()" class="w-full bg-purple-500 hover:bg-purple-600 text-white py-2 rounded-md text-xs font-medium">
                            <i class="fas fa-plus mr-1"></i> New Task
                        </button>
                        <button class="w-full bg-green-500 hover:bg-green-600 text-white py-2 rounded-md text-xs font-medium">
                            <i class="fas fa-download mr-1"></i> Export
                        </button>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-md text-xs font-medium">
                            <i class="fas fa-chart-bar mr-1"></i> Analytics
                        </button>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-2 flex items-center">
                        <i class="fas fa-history mr-1 text-gray-500"></i> Recent Activity
                    </h3>
                    <ul class="space-y-1 text-xs">
                        <li class="flex justify-between"><span>✔ UI Design</span><span class="text-gray-400">2h</span></li>
                        <li class="flex justify-between"><span>⏳ Bug Fixes</span><span class="text-gray-400">4h</span></li>
                        <li class="flex justify-between"><span>📝 Documentation</span><span class="text-gray-400">1d</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Task Modal -->
    <div id="taskModal" class="fixed inset-0 z-50 modal-overlay hidden flex items-center justify-center p-3">
        <div id="modalContent" class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl border border-gray-200 dark:border-gray-700 w-full max-w-xl max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="sticky top-0 bg-white dark:bg-gray-800 rounded-t-xl border-b border-gray-100 dark:border-gray-700 px-4 py-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-9 h-9 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg flex items-center justify-center">
                            <i class="fas fa-plus text-white text-sm"></i>
                        </div>
                        <div>
                            <h2 class="text-lg font-bold text-gray-900 dark:text-white">Add Task</h2>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Create a new task</p>
                        </div>
                    </div>
                    <button onclick="closeTaskModal()" class="w-8 h-8 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center justify-center">
                        <i class="fas fa-times text-sm"></i>
                    </button>
                </div>
            </div>

            <div x-data="{}" x-init="
                new TomSelect('#taskCategory', { create: true, plugins: ['remove_button'] });
                new TomSelect('#taskStatus', { create: true, plugins: ['remove_button'] });
                new TomSelect('#taskAssignee', { create: true, plugins: ['remove_button'] });
                new TomSelect('#taskTags', { create: true, plugins: ['remove_button'] });
                new TomSelect('#taskProject', { create: true, plugins: ['remove_button'] });
                new TomSelect('#taskClient', { create: true, plugins: ['remove_button'] });
            ">
                <livewire:task.task-form-modal />
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <!-- (Your modal + Livewire JS remains the same, no spacing changes needed) -->
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
<script>
        // Sample JavaScript for filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle dark mode for demo
            const toggleDarkMode = () => {
                document.documentElement.classList.toggle('dark');
            };
        });
    </script>
</x-app-layout>
