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

                <!-- Task Items -->
                <div class="space-y-4" id="taskList">
                    <!-- Completed Task -->
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl shadow-md hover:shadow-xl border border-gray-100 dark:border-gray-700 hover:border-green-200 dark:hover:border-green-700 transition-all duration-300 overflow-hidden">
                        <div class="p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-4 flex-1">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                            <i class="fas fa-check text-white text-xs"></i>
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2 line-through opacity-75">Complete the UI Design</h3>
                                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-3 opacity-75">Design the homepage layout for the project with modern aesthetics and user-friendly interface.</p>
                                        <div class="flex items-center justify-between">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                                <i class="fas fa-check-circle mr-1 text-xs"></i>
                                                Completed
                                            </span>
                                            <span class="text-xs text-gray-500 dark:text-gray-400 flex items-center">
                                                <i class="far fa-calendar mr-1"></i>
                                                Aug 10, 2025
                                            </span>
                                        </div>
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

                    <!-- In Progress Task -->
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl shadow-md hover:shadow-xl border border-gray-100 dark:border-gray-700 hover:border-blue-200 dark:hover:border-blue-700 transition-all duration-300 overflow-hidden">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-400 to-blue-600"></div>
                        <div class="p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-4 flex-1">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center animate-pulse-slow">
                                            <i class="fas fa-play text-white text-xs"></i>
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Fix Bugs in Project</h3>
                                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">Address critical bugs and issues reported by the QA team for better user experience.</p>
                                        <div class="flex items-center justify-between">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                                <i class="fas fa-spinner mr-1 text-xs animate-spin"></i>
                                                In Progress
                                            </span>
                                            <span class="text-xs text-gray-500 dark:text-gray-400 flex items-center">
                                                <i class="far fa-calendar mr-1"></i>
                                                Aug 15, 2025
                                            </span>
                                        </div>
                                        <div class="mt-3">
                                            <div class="flex justify-between text-xs text-gray-600 dark:text-gray-400 mb-1">
                                                <span>Progress</span>
                                                <span>65%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                                <div class="bg-gradient-to-r from-blue-400 to-blue-600 h-2 rounded-full transition-all duration-500" style="width: 65%"></div>
                                            </div>
                                        </div>
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

                    <!-- Pending Task -->
                    <div class="group bg-white dark:bg-gray-800 rounded-2xl shadow-md hover:shadow-xl border border-gray-100 dark:border-gray-700 hover:border-yellow-200 dark:hover:border-yellow-700 transition-all duration-300 overflow-hidden">
                        <div class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-yellow-400 to-orange-500"></div>
                        <div class="p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-4 flex-1">
                                    <div class="flex-shrink-0 mt-1">
                                        <div class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center">
                                            <i class="fas fa-clock text-white text-xs"></i>
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Write Documentation</h3>
                                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">Create comprehensive user manual and technical documentation for the project.</p>
                                        <div class="flex items-center justify-between">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">
                                                <i class="fas fa-exclamation-triangle mr-1 text-xs"></i>
                                                Pending
                                            </span>
                                            <span class="text-xs text-gray-500 dark:text-gray-400 flex items-center">
                                                <i class="far fa-calendar mr-1"></i>
                                                Aug 12, 2025
                                            </span>
                                        </div>
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
                </div>
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

            <livewire:task.task-form />
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
    
    new TomSelect("#taskCategory", {
        create: true,       // allow new tags
        sortField: {
            field: "text",
            direction: "asc"
        },
        plugins: ['remove_button']
    });
    new TomSelect("#taskStatus", {
        create: true,       // allow new tags
        sortField: {
            direction: "asc"
        },
        plugins: ['remove_button']
    });

    new TomSelect("#taskAssignee", {
        create: true,       // allow new tags
        sortField: {
            field: "text",
            direction: "asc"
        },
        plugins: ['remove_button']
    });
    new TomSelect("#taskTags", {
        create: true,       // allow new tags
        sortField: {
            field: "text",
            direction: "asc"
        },
        plugins: ['remove_button']
    });

    new TomSelect("#taskProject", {
        create: true,       // allow new tags
        sortField: {
            field: "text",
            direction: "asc"
        },
        plugins: ['remove_button']
    });

    new TomSelect("#taskClient", {
        create: true,       // allow new tags
        sortField: {
            field: "text",
            direction: "asc"
        },
        plugins: ['remove_button']
    });

    </script>
</x-app-layout>
