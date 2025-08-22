<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details - Fix Bugs in Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    <!-- Compact Header -->
    <div class="bg-white dark:bg-gray-800 shadow-sm border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-6xl mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <button onclick="history.back()" class="w-8 h-8 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 flex items-center justify-center">
                        <i class="fas fa-arrow-left text-sm"></i>
                    </button>
                    <div>
                        <h1 class="text-xl font-bold text-gray-900 dark:text-white">Fix Bugs in Project</h1>
                        <div class="flex items-center space-x-2 mt-1">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                <i class="fas fa-spinner mr-1 animate-spin" style="font-size: 8px;"></i>
                                In Progress
                            </span>
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">
                                <i class="fas fa-flag mr-1" style="font-size: 8px;"></i>
                                High Priority
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button id="timerBtn" onclick="toggleTimer()" class="px-3 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg transition-all duration-200 flex items-center space-x-2 text-sm">
                        <i class="fas fa-play"></i>
                        <span class="hidden sm:inline">Timer</span>
                    </button>
                    <button class="px-3 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-all duration-200 flex items-center space-x-2 text-sm">
                        <i class="fas fa-edit"></i>
                        <span class="hidden sm:inline">Edit</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto p-4">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
            
            <!-- Main Content (3/4 width) -->
            <div class="lg:col-span-3 space-y-4">
                
                <!-- Progress & Meta Info -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 p-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Progress -->
                        <div>
                            <div class="flex justify-between text-sm text-gray-600 dark:text-gray-400 mb-2">
                                <span>Progress</span>
                                <span>65%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="bg-gradient-to-r from-blue-400 to-blue-600 h-2 rounded-full transition-all duration-500" style="width: 65%"></div>
                            </div>
                        </div>
                        <!-- Timer Display -->
                        <div class="flex items-center justify-center bg-green-50 dark:bg-green-900/20 rounded-lg p-3">
                            <div class="text-center">
                                <div class="text-lg font-bold text-green-600 dark:text-green-400" id="currentTimer">00:00:00</div>
                                <p class="text-xs text-gray-600 dark:text-gray-300">Current Session</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Meta Info Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                        <div class="text-center p-2 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <p class="text-xs text-gray-500 dark:text-gray-400">Due Date</p>
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">Aug 15</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <p class="text-xs text-gray-500 dark:text-gray-400">Assignee</p>
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">John Doe</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <p class="text-xs text-gray-500 dark:text-gray-400">Time Left</p>
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">2h 48m</p>
                        </div>
                        <div class="text-center p-2 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <p class="text-xs text-gray-500 dark:text-gray-400">Logged</p>
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">5h 12m</p>
                        </div>
                    </div>
                </div>

                <!-- Checklist & Documents Combined -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    
                    <!-- Compact Checklist -->
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 p-4">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white flex items-center">
                                <i class="fas fa-list-check mr-2 text-purple-500"></i>
                                Checklist
                            </h3>
                            <button onclick="addChecklistItem()" class="text-purple-600 dark:text-purple-400 hover:text-purple-700 dark:hover:text-purple-300">
                                <i class="fas fa-plus text-sm"></i>
                            </button>
                        </div>
                        
                        <div class="space-y-2" id="checklistContainer">
                            <div class="flex items-center space-x-2 p-2 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <input type="checkbox" checked class="w-4 h-4 text-green-600 rounded">
                                <span class="flex-1 text-sm text-gray-600 dark:text-gray-300 line-through">Review QA reports</span>
                                <button class="text-red-500 hover:text-red-600">
                                    <i class="fas fa-trash text-xs"></i>
                                </button>
                            </div>
                            <div class="flex items-center space-x-2 p-2 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <input type="checkbox" checked class="w-4 h-4 text-green-600 rounded">
                                <span class="flex-1 text-sm text-gray-600 dark:text-gray-300 line-through">Fix authentication</span>
                                <button class="text-red-500 hover:text-red-600">
                                    <i class="fas fa-trash text-xs"></i>
                                </button>
                            </div>
                            <div class="flex items-center space-x-2 p-2 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <input type="checkbox" class="w-4 h-4 text-green-600 rounded">
                                <span class="flex-1 text-sm text-gray-900 dark:text-white">DB timeout fix</span>
                                <button class="text-red-500 hover:text-red-600">
                                    <i class="fas fa-trash text-xs"></i>
                                </button>
                            </div>
                            <div class="flex items-center space-x-2 p-2 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <input type="checkbox" class="w-4 h-4 text-green-600 rounded">
                                <span class="flex-1 text-sm text-gray-900 dark:text-white">Update error handling</span>
                                <button class="text-red-500 hover:text-red-600">
                                    <i class="fas fa-trash text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Compact Documents -->
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 p-4">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white flex items-center">
                                <i class="fas fa-paperclip mr-2 text-orange-500"></i>
                                Documents
                            </h3>
                            <button onclick="openDocumentModal()" class="text-orange-600 dark:text-orange-400 hover:text-orange-700 dark:hover:text-orange-300">
                                <i class="fas fa-plus text-sm"></i>
                            </button>
                        </div>
                        
                        <div class="space-y-2">
                            <div class="flex items-center space-x-3 p-2 border border-gray-200 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                                <div class="w-8 h-8 bg-red-100 dark:bg-red-900 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-file-pdf text-red-600 dark:text-red-400 text-xs"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-medium text-gray-900 dark:text-white truncate">Bug Report</h4>
                                    <p class="text-xs text-gray-600 dark:text-gray-300">PDF Documentation</p>
                                </div>
                                <div class="flex space-x-1">
                                    <button class="text-blue-500 hover:text-blue-600">
                                        <i class="fas fa-download text-xs"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-600">
                                        <i class="fas fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-3 p-2 border border-gray-200 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                                <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-link text-blue-600 dark:text-blue-400 text-xs"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-medium text-gray-900 dark:text-white truncate">GitHub Issue</h4>
                                    <p class="text-xs text-gray-600 dark:text-gray-300">#1234</p>
                                </div>
                                <div class="flex space-x-1">
                                    <button class="text-blue-500 hover:text-blue-600">
                                        <i class="fas fa-external-link-alt text-xs"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-600">
                                        <i class="fas fa-trash text-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Compact Comments -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 p-4">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-3 flex items-center">
                        <i class="fas fa-comments mr-2 text-blue-500"></i>
                        Comments
                    </h3>
                    
                    <!-- Compact Add Comment -->
                    <div class="mb-4">
                        <div class="flex space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white text-xs font-semibold">JD</span>
                            </div>
                            <div class="flex-1">
                                <textarea placeholder="Add a comment..." class="w-full px-3 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-sm text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none" rows="2"></textarea>
                                <div class="flex justify-end mt-2">
                                    <button class="px-3 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-all duration-200 text-sm">
                                        <i class="fas fa-paper-plane mr-1"></i>
                                        Post
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Compact Comments List -->
                    <div class="space-y-3">
                        <div class="flex space-x-2 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <div class="w-8 h-8 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white text-xs font-semibold">SM</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center space-x-2 mb-1">
                                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Sarah Miller</span>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">2h ago</span>
                                </div>
                                <p class="text-sm text-gray-700 dark:text-gray-300">Found the JWT token issue. Working on fix now.</p>
                            </div>
                        </div>
                        
                        <div class="flex space-x-2 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <div class="w-8 h-8 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white text-xs font-semibold">MJ</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center space-x-2 mb-1">
                                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Mike Johnson</span>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">1d ago</span>
                                </div>
                                <p class="text-sm text-gray-700 dark:text-gray-300">DB timeout is intermittent. Added debugging logs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Compact Sidebar (1/4 width) -->
            <div class="space-y-4">
                
                <!-- Status & Controls -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 p-4">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-3 flex items-center">
                        <i class="fas fa-cog mr-2 text-indigo-500"></i>
                        Status
                    </h3>
                    
                    <div class="space-y-3">
                        <div>
                            <label class="text-xs font-medium text-gray-700 dark:text-gray-300 block mb-1">Status</label>
                            <select class="w-full px-2 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-sm text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500">
                                <option value="pending">Pending</option>
                                <option value="in-progress" selected>In Progress</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="text-xs font-medium text-gray-700 dark:text-gray-300 block mb-1">Priority</label>
                            <select class="w-full px-2 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-sm text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500">
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high" selected>High</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Project & Tags -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 p-4">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-3 flex items-center">
                        <i class="fas fa-project-diagram mr-2 text-green-500"></i>
                        Project
                    </h3>
                    
                    <div class="space-y-2 text-xs">
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-300">Project:</span>
                            <span class="font-medium text-gray-900 dark:text-white">E-commerce</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-300">Client:</span>
                            <span class="font-medium text-gray-900 dark:text-white">TechCorp</span>
                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <label class="text-xs font-medium text-gray-700 dark:text-gray-300 block mb-2">Tags</label>
                        <div class="flex flex-wrap gap-1">
                            <span class="px-2 py-1 bg-red-100 dark:bg-red-900 text-red-600 dark:text-red-400 rounded-full text-xs">urgent</span>
                            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded-full text-xs">backend</span>
                            <span class="px-2 py-1 bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-400 rounded-full text-xs">security</span>
                        </div>
                    </div>
                </div>

                <!-- Activity -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 p-4">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-3 flex items-center">
                        <i class="fas fa-history mr-2 text-gray-500"></i>
                        Activity
                    </h3>
                    
                    <div class="space-y-3">
                        <div class="flex items-start space-x-2">
                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-1 flex-shrink-0"></div>
                            <div>
                                <p class="text-xs text-gray-900 dark:text-white font-medium">Status → In Progress</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">2h ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-2">
                            <div class="w-2 h-2 bg-green-500 rounded-full mt-1 flex-shrink-0"></div>
                            <div>
                                <p class="text-xs text-gray-900 dark:text-white font-medium">Comment added</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">3h ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-2">
                            <div class="w-2 h-2 bg-purple-500 rounded-full mt-1 flex-shrink-0"></div>
                            <div>
                                <p class="text-xs text-gray-900 dark:text-white font-medium">Document attached</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">1d ago</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 p-4">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-3 flex items-center">
                        <i class="fas fa-bolt mr-2 text-yellow-500"></i>
                        Actions
                    </h3>
                    
                    <div class="space-y-2">
                        <button class="w-full bg-green-500 hover:bg-green-600 text-white py-2 px-3 rounded-lg text-xs font-medium transition-all duration-200">
                            <i class="fas fa-check mr-1"></i>
                            Complete
                        </button>
                        <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-3 rounded-lg text-xs font-medium transition-all duration-200">
                            <i class="fas fa-clone mr-1"></i>
                            Duplicate
                        </button>
                        <button class="w-full bg-red-500 hover:bg-red-600 text-white py-2 px-3 rounded-lg text-xs font-medium transition-all duration-200">
                            <i class="fas fa-trash mr-1"></i>
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Compact Document Modal -->
    <div id="documentModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4" style="backdrop-filter: blur(8px); background: rgba(0, 0, 0, 0.5);">
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl border border-gray-200 dark:border-gray-700 w-full max-w-sm">
            <div class="p-4">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Add Document</h3>
                    <button onclick="closeDocumentModal()" class="w-6 h-6 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 flex items-center justify-center">
                        <i class="fas fa-times text-xs"></i>
                    </button>
                </div>
                
                <div class="space-y-3">
                    <div>
                        <label class="text-xs font-medium text-gray-700 dark:text-gray-300 mb-1 block">Type</label>
                        <select id="documentType" class="w-full px-2 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-sm text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500">
                            <option value="file">File Upload</option>
                            <option value="link">Web Link</option>
                        </select>
                    </div>
                    
                    <div id="fileUpload">
                        <label class="text-xs font-medium text-gray-700 dark:text-gray-300 mb-1 block">File</label>
                        <input type="file" class="w-full px-2 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-sm text-gray-900 dark:text-white">
                    </div>
                    
                    <div id="linkInput" class="hidden">
                        <label class="text-xs font-medium text-gray-700 dark:text-gray-300 mb-1 block">URL</label>
                        <input type="url" placeholder="https://example.com" class="w-full px-2 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-sm text-gray-900 dark:text-white">
                    </div>
                    
                    <div>
                        <label class="text-xs font-medium text-gray-700 dark:text-gray-300 mb-1 block">Title</label>
                        <input type="text" placeholder="Document title" class="w-full px-2 py-2 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-sm text-gray-900 dark:text-white">
                    </div>
                </div>
                
                <div class="flex space-x-2 mt-4">
                    <button onclick="closeDocumentModal()" class="flex-1 px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 text-sm">
                        Cancel
                    </button>
                    <button class="flex-1 px-3 py-2 bg-orange-500 hover:bg-orange-600 text-white rounded-lg transition-all duration-200 text-sm">
                        Add
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
                clearInterval(timerInterval);
                btn.innerHTML = '<i class="fas fa-play"></i><span class="hidden sm:inline">Timer</span>';
                btn.className = btn.className.replace('bg-red-500 hover:bg-red-600', 'bg-green-500 hover:bg-green-600');
                timerRunning = false;
            } else {
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