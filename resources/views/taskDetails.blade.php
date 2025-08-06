<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details - Fix Bugs in Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    <!-- Header -->
    <div class="bg-white dark:bg-gray-800 shadow-sm border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <button onclick="history.back()" class="w-10 h-10 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 flex items-center justify-center">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Task Details</h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Manage and track task progress</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 flex items-center space-x-2">
                        <i class="fas fa-share"></i>
                        <span>Share</span>
                    </button>
                    <button class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-all duration-200 flex items-center space-x-2">
                        <i class="fas fa-edit"></i>
                        <span>Edit Task</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto p-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Main Content (2/3 width) -->
            <div class="lg:col-span-2 space-y-6">
                
                <!-- Task Overview -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <div class="flex items-start justify-between mb-6">
                        <div class="flex-1">
                            <div class="flex items-center space-x-3 mb-3">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-play text-white text-sm"></i>
                                </div>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                    <i class="fas fa-spinner mr-1 text-xs animate-spin"></i>
                                    In Progress
                                </span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">
                                    <i class="fas fa-flag mr-1 text-xs"></i>
                                    High Priority
                                </span>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-3">Fix Bugs in Project</h2>
                            <p class="text-gray-600 dark:text-gray-300 text-lg">Address critical bugs and issues reported by the QA team for better user experience and application stability.</p>
                        </div>
                    </div>
                    
                    <!-- Progress Bar -->
                    <div class="mb-6">
                        <div class="flex justify-between text-sm text-gray-600 dark:text-gray-400 mb-2">
                            <span>Overall Progress</span>
                            <span>65%</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-400 to-blue-600 h-3 rounded-full transition-all duration-500" style="width: 65%"></div>
                        </div>
                    </div>

                    <!-- Task Meta Info -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="text-center p-3 bg-gray-50 dark:bg-gray-700 rounded-xl">
                            <i class="fas fa-calendar text-gray-500 dark:text-gray-400 mb-2"></i>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Due Date</p>
                            <p class="font-semibold text-gray-900 dark:text-white">Aug 15, 2025</p>
                        </div>
                        <div class="text-center p-3 bg-gray-50 dark:bg-gray-700 rounded-xl">
                            <i class="fas fa-user text-gray-500 dark:text-gray-400 mb-2"></i>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Assignee</p>
                            <p class="font-semibold text-gray-900 dark:text-white">John Doe</p>
                        </div>
                        <div class="text-center p-3 bg-gray-50 dark:bg-gray-700 rounded-xl">
                            <i class="fas fa-clock text-gray-500 dark:text-gray-400 mb-2"></i>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Estimated</p>
                            <p class="font-semibold text-gray-900 dark:text-white">8h</p>
                        </div>
                        <div class="text-center p-3 bg-gray-50 dark:bg-gray-700 rounded-xl">
                            <i class="fas fa-play-circle text-gray-500 dark:text-gray-400 mb-2"></i>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Time Spent</p>
                            <p class="font-semibold text-gray-900 dark:text-white">5.2h</p>
                        </div>
                    </div>
                </div>

                <!-- Time Tracking -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white flex items-center">
                            <i class="fas fa-stopwatch mr-2 text-green-500"></i>
                            Time Tracking
                        </h3>
                        <button id="timerBtn" onclick="toggleTimer()" class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg transition-all duration-200 flex items-center space-x-2">
                            <i class="fas fa-play"></i>
                            <span>Start Timer</span>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="text-center p-4 bg-green-50 dark:bg-green-900/20 rounded-xl">
                            <div class="text-2xl font-bold text-green-600 dark:text-green-400" id="currentTimer">00:00:00</div>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Current Session</p>
                        </div>
                        <div class="text-center p-4 bg-blue-50 dark:bg-blue-900/20 rounded-xl">
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">5h 12m</div>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Total Logged</p>
                        </div>
                        <div class="text-center p-4 bg-purple-50 dark:bg-purple-900/20 rounded-xl">
                            <div class="text-2xl font-bold text-purple-600 dark:text-purple-400">2h 48m</div>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Remaining Est.</p>
                        </div>
                    </div>
                </div>

                <!-- Checklist -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white flex items-center">
                            <i class="fas fa-list-check mr-2 text-purple-500"></i>
                            Checklist
                        </h3>
                        <button onclick="addChecklistItem()" class="px-3 py-2 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-400 rounded-lg hover:bg-purple-200 dark:hover:bg-purple-800 transition-all duration-200 flex items-center space-x-2">
                            <i class="fas fa-plus text-sm"></i>
                            <span>Add Item</span>
                        </button>
                    </div>
                    
                    <div class="space-y-3" id="checklistContainer">
                        <div class="flex items-center space-x-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <input type="checkbox" checked class="w-5 h-5 text-green-600 rounded focus:ring-green-500">
                            <span class="flex-1 text-gray-600 dark:text-gray-300 line-through">Review QA bug reports</span>
                            <button class="text-red-500 hover:text-red-600 transition-colors duration-200">
                                <i class="fas fa-trash text-sm"></i>
                            </button>
                        </div>
                        <div class="flex items-center space-x-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <input type="checkbox" checked class="w-5 h-5 text-green-600 rounded focus:ring-green-500">
                            <span class="flex-1 text-gray-600 dark:text-gray-300 line-through">Fix authentication issues</span>
                            <button class="text-red-500 hover:text-red-600 transition-colors duration-200">
                                <i class="fas fa-trash text-sm"></i>
                            </button>
                        </div>
                        <div class="flex items-center space-x-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <input type="checkbox" class="w-5 h-5 text-green-600 rounded focus:ring-green-500">
                            <span class="flex-1 text-gray-900 dark:text-white">Resolve database connection timeout</span>
                            <button class="text-red-500 hover:text-red-600 transition-colors duration-200">
                                <i class="fas fa-trash text-sm"></i>
                            </button>
                        </div>
                        <div class="flex items-center space-x-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <input type="checkbox" class="w-5 h-5 text-green-600 rounded focus:ring-green-500">
                            <span class="flex-1 text-gray-900 dark:text-white">Update error handling</span>
                            <button class="text-red-500 hover:text-red-600 transition-colors duration-200">
                                <i class="fas fa-trash text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Documents & Links -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white flex items-center">
                            <i class="fas fa-paperclip mr-2 text-orange-500"></i>
                            Documents & Links
                        </h3>
                        <button onclick="openDocumentModal()" class="px-3 py-2 bg-orange-100 dark:bg-orange-900 text-orange-600 dark:text-orange-400 rounded-lg hover:bg-orange-200 dark:hover:bg-orange-800 transition-all duration-200 flex items-center space-x-2">
                            <i class="fas fa-plus text-sm"></i>
                            <span>Add Document</span>
                        </button>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center space-x-4 p-4 border border-gray-200 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                            <div class="w-10 h-10 bg-red-100 dark:bg-red-900 rounded-lg flex items-center justify-center">
                                <i class="fas fa-file-pdf text-red-600 dark:text-red-400"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 dark:text-white">Bug Report Documentation</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Detailed analysis of reported issues</p>
                            </div>
                            <div class="flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-600 transition-colors duration-200">
                                    <i class="fas fa-download"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-600 transition-colors duration-200">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4 p-4 border border-gray-200 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                            <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                                <i class="fas fa-link text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 dark:text-white">GitHub Issue #1234</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300">https://github.com/project/issues/1234</p>
                            </div>
                            <div class="flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-600 transition-colors duration-200">
                                    <i class="fas fa-external-link-alt"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-600 transition-colors duration-200">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comments & Discussion -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center">
                        <i class="fas fa-comments mr-2 text-blue-500"></i>
                        Comments & Discussion
                    </h3>
                    
                    <!-- Add Comment -->
                    <div class="mb-6">
                        <div class="flex space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold">JD</span>
                            </div>
                            <div class="flex-1">
                                <textarea placeholder="Add a comment..." class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 resize-none" rows="3"></textarea>
                                <div class="flex justify-end mt-2">
                                    <button class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-all duration-200 flex items-center space-x-2">
                                        <i class="fas fa-paper-plane"></i>
                                        <span>Post Comment</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Comments List -->
                    <div class="space-y-4">
                        <div class="flex space-x-3 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <div class="w-10 h-10 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-semibold">SM</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center space-x-2 mb-1">
                                    <span class="font-semibold text-gray-900 dark:text-white">Sarah Miller</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">2 hours ago</span>
                                </div>
                                <p class="text-gray-700 dark:text-gray-300">I've identified the root cause of the authentication issue. It's related to the JWT token expiration handling. Working on a fix now.</p>
                            </div>
                        </div>
                        
                        <div class="flex space-x-3 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <div class="w-10 h-10 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-semibold">MJ</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center space-x-2 mb-1">
                                    <span class="font-semibold text-gray-900 dark:text-white">Mike Johnson</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">1 day ago</span>
                                </div>
                                <p class="text-gray-700 dark:text-gray-300">The database timeout issue seems to be intermittent. I've added some debugging logs to help track it down.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar (1/3 width) -->
            <div class="space-y-6">
                
                <!-- Task Status -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center">
                        <i class="fas fa-tasks mr-2 text-indigo-500"></i>
                        Status & Priority
                    </h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2 block">Status</label>
                            <select class="w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="pending">Pending</option>
                                <option value="in-progress" selected>In Progress</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2 block">Priority</label>
                            <select class="w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high" selected>High</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Project Info -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center">
                        <i class="fas fa-project-diagram mr-2 text-green-500"></i>
                        Project Details
                    </h3>
                    
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-300">Project:</span>
                            <span class="text-sm font-medium text-gray-900 dark:text-white">E-commerce Platform</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-300">Client:</span>
                            <span class="text-sm font-medium text-gray-900 dark:text-white">TechCorp Inc.</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-300">Category:</span>
                            <span class="text-sm font-medium text-gray-900 dark:text-white">Bug Fix</span>
                        </div>
                    </div>
                </div>

                <!-- Tags -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center">
                        <i class="fas fa-tags mr-2 text-yellow-500"></i>
                        Tags
                    </h3>
                    
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-red-100 dark:bg-red-900 text-red-600 dark:text-red-400 rounded-full text-sm">urgent</span>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-sm">backend</span>
                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-400 rounded-full text-sm">security</span>
                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-400 rounded-full text-sm">database</span>
                    </div>
                </div>

                <!-- Activity Timeline -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4 flex items-center">
                        <i class="fas fa-history mr-2 text-gray-500"></i>
                        Activity Timeline
                    </h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <p class="text-sm text-gray-900 dark:text-white font-medium">Status changed to "In Progress"</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">2 hours ago by John Doe</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <p class="text-sm text-gray-900 dark:text-white font-medium">Comment added</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">3 hours ago by Sarah Miller</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <p class="text-sm text-gray-900 dark:text-white font-medium">Document attached</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">1 day ago by Mike Johnson</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-yellow-500 rounded-full mt-2 flex-shrink-0"></div>
                            <div>
                                <p class="text-sm text-gray-900 dark:text-white font-medium">Task created</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">3 days ago by Admin</p>
                            </div>
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
                        <button class="w-full bg-gradient-to-r from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600 text-white py-2 px-4 rounded-lg text-sm font-medium transition-all duration-200">
                            <i class="fas fa-check mr-2"></i>
                            Mark as Complete
                        </button>
                        <button class="w-full bg-gradient-to-r from-blue-500 to-indigo-500 hover:from-blue-600 hover:to-indigo-600 text-white py-2 px-4 rounded-lg text-sm font-medium transition-all duration-200">
                            <i class="fas fa-clone mr-2"></i>
                            Duplicate Task
                        </button>
                        <button class="w-full bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white py-2 px-4 rounded-lg text-sm font-medium transition-all duration-200">
                            <i class="fas fa-trash mr-2"></i>
                            Delete Task
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Document Modal -->
    <div id="documentModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4" style="backdrop-filter: blur(8px); background: rgba(0, 0, 0, 0.5);">
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl border border-gray-200 dark:border-gray-700 w-full max-w-md">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add Document/Link</h3>
                    <button onclick="closeDocumentModal()" class="w-8 h-8 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 flex items-center justify-center">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <label class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2 block">Type</label>
                        <select id="documentType" class="w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500">
                            <option value="file">File Upload</option>
                            <option value="link">Web Link</option>
                        </select>
                    </div>
                    
                    <div id="fileUpload">
                        <label class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2 block">Choose File</label>
                        <input type="file" class="w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div id="linkInput" class="hidden">
                        <label class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2 block">URL</label>
                        <input type="url" placeholder="https://example.com" class="w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div>
                        <label class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2 block">Title</label>
                        <input type="text" placeholder="Document title" class="w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div>
                        <label class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2 block">Description (Optional)</label>
                        <textarea placeholder="Brief description" rows="2" class="w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 resize-none"></textarea>
                    </div>
                </div>
                
                <div class="flex space-x-3 mt-6">
                    <button onclick="closeDocumentModal()" class="flex-1 px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200">
                        Cancel
                    </button>
                    <button class="flex-1 px-4 py-2 bg-orange-500 hover:bg-orange-600 text-white rounded-lg transition-all duration-200">
                        Add Document
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let timerRunning = false;
        let timerInterval;
        let seconds = 0;

        function toggleTimer() {
            const btn = document.getElementById('timerBtn');
            const timerDisplay = document.getElementById('currentTimer');
            
            if (timerRunning) {
                // Stop timer
                clearInterval(timerInterval);
                btn.innerHTML = '<i class="fas fa-play"></i><span>Start Timer</span>';
                btn.className = btn.className.replace('bg-red-500 hover:bg-red-600', 'bg-green-500 hover:bg-green-600');
                timerRunning = false;
            } else {
                // Start timer
                timerInterval = setInterval(() => {
                    seconds++;
                    const hours = Math.floor(seconds / 3600);
                    const minutes = Math.floor((seconds % 3600) / 60);
                    const secs = seconds % 60;
                    timerDisplay.textContent = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
                }, 1000);
                
                btn.innerHTML = '<i class="fas fa-stop"></i><span>Stop Timer</span>';
                btn.className = btn.className.replace('bg-green-500 hover:bg-green-600', 'bg-red-500 hover:bg-red-600');
                timerRunning = true;
            }
        }

        function addChecklistItem() {
            const container = document.getElementById('checklistContainer');
            const newItem = document.createElement('div');
            newItem.className = 'flex items-center space-x-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg';
            newItem.innerHTML = `
                <input type="checkbox" class="w-5 h-5 text-green-600 rounded focus:ring-green-500">
                <input type="text" placeholder="Enter checklist item..." class="flex-1 bg-transparent text-gray-900 dark:text-white placeholder-gray-500 dark:text-gray-400 focus:outline-none" onblur="finalizeChecklistItem(this)" onkeypress="if(event.key==='Enter') this.blur()">
                <button onclick="removeChecklistItem(this)" class="text-red-500 hover:text-red-600 transition-colors duration-200">
                    <i class="fas fa-trash text-sm"></i>
                </button>
            `;
            container.appendChild(newItem);
            newItem.querySelector('input[type="text"]').focus();
        }

        function finalizeChecklistItem(input) {
            if (input.value.trim() === '') {
                removeChecklistItem(input.nextElementSibling);
                return;
            }
            const span = document.createElement('span');
            span.className = 'flex-1 text-gray-900 dark:text-white';
            span.textContent = input.value;
            input.parentNode.replaceChild(span, input);
        }

        function removeChecklistItem(button) {
            button.parentNode.remove();
        }

        function openDocumentModal() {
            document.getElementById('documentModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeDocumentModal() {
            document.getElementById('documentModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Toggle between file upload and link input
        document.getElementById('documentType').addEventListener('change', function() {
            const fileUpload = document.getElementById('fileUpload');
            const linkInput = document.getElementById('linkInput');
            
            if (this.value === 'link') {
                fileUpload.classList.add('hidden');
                linkInput.classList.remove('hidden');
            } else {
                fileUpload.classList.remove('hidden');
                linkInput.classList.add('hidden');
            }
        });

        // Close modal when clicking outside
        document.getElementById('documentModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeDocumentModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !document.getElementById('documentModal').classList.contains('hidden')) {
                closeDocumentModal();
            }
        });

        // Auto-resize textareas
        document.querySelectorAll('textarea').forEach(textarea => {
            textarea.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = this.scrollHeight + 'px';
            });
        });

        // Dark mode support (if needed)
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
        }

        // Load saved dark mode preference
        document.addEventListener('DOMContentLoaded', function() {
            const savedMode = localStorage.getItem('darkMode');
            if (savedMode === 'true') {
                document.documentElement.classList.add('dark');
            }
        });
    </script>
</body>
</html>