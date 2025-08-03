<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task Management') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Task Section -->
            <div class="p-6 sm:p-8 bg-white dark:bg-gray-800 shadow-md sm:rounded-lg">
                <div class="max-w-4xl mx-auto space-y-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Your Tasks</h3>
                        <!-- Add New Task Button with visible color -->
                        <button class="inline-flex items-center text-white bg-green-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-6 py-2 dark:bg-indigo-500 dark:hover:bg-indigo-600 dark:focus:ring-indigo-800">
    <i class="fas fa-plus mr-2"></i> New Task
</button>

                    </div>

                    <!-- Task List -->
                    <div class="mt-6 space-y-6">
                        <!-- Task Item 1 -->
                        <div class="flex justify-between items-center bg-white dark:bg-gray-700 shadow-lg rounded-lg p-4">
                            <div class="flex flex-col">
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Complete the UI Design</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Design the homepage layout for the project.</p>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-green-500 dark:text-green-400 text-sm">Completed</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">2025-08-10</span>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <!-- Edit Icon -->
                                <button class="text-indigo-600 hover:text-indigo-700 dark:text-indigo-400 dark:hover:text-indigo-500 text-lg">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <!-- Delete Icon -->
                                <button class="text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-500 text-lg">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Task Item 2 -->
                        <div class="flex justify-between items-center bg-white dark:bg-gray-700 shadow-lg rounded-lg p-4">
                            <div class="flex flex-col">
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Write documentation</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Write the user manual for the project.</p>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-yellow-500 dark:text-yellow-400 text-sm">Pending</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">2025-08-12</span>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <!-- Edit Icon -->
                                <button class="text-indigo-600 hover:text-indigo-700 dark:text-indigo-400 dark:hover:text-indigo-500 text-lg">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <!-- Delete Icon -->
                                <button class="text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-500 text-lg">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Task Item 3 -->
                        <div class="flex justify-between items-center bg-white dark:bg-gray-700 shadow-lg rounded-lg p-4">
                            <div class="flex flex-col">
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Fix bugs in project</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Address the bugs reported by QA.</p>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-yellow-500 dark:text-yellow-400 text-sm">In Progress</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">2025-08-15</span>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <!-- Edit Icon -->
                                <button class="text-indigo-600 hover:text-indigo-700 dark:text-indigo-400 dark:hover:text-indigo-500 text-lg">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <!-- Delete Icon -->
                                <button class="text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-500 text-lg">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Task Statistics Section (Optional) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Example Stats Card -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Completed Tasks</h4>
                    <p class="text-3xl font-bold text-green-600 dark:text-green-400">15</p>
                </div>
                <!-- Another Stats Card -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Pending Tasks</h4>
                    <p class="text-3xl font-bold text-yellow-500 dark:text-yellow-400">8</p>
                </div>
                <!-- Another Stats Card -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Total Tasks</h4>
                    <p class="text-3xl font-bold text-indigo-600 dark:text-indigo-400">23</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
