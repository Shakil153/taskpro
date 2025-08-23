<x-app-layout>
    <!-- <div class="bg-white dark:bg-gray-800 shadow-sm border-b border-gray-200 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div>
                        <h1 class="text-lg font-bold text-gray-900 dark:text-white">Dashboard</h1>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Organize your work efficiently</p>
                    </div>
                </div>
                <button onclick="toggleDarkMode()" class="w-9 h-9 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 flex items-center justify-center">
                    <i class="fas fa-moon dark:hidden text-xs"></i>
                    <i class="fas fa-sun hidden dark:block text-xs"></i>
                </button>
            </div>
        </div>
    </div> -->

    <div class="max-w-7xl mx-auto px-3 py-4">
        <div class="grid grid-cols-1 xl:grid-cols-4 gap-4">
            
            <!-- Main Content Area (3/4 width) -->
            <div class="xl:col-span-3 space-y-4">
                
                <!-- Key Metrics Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs font-medium text-gray-600 dark:text-gray-400">Active Projects</p>
                                <p class="text-lg font-bold text-gray-900 dark:text-white mt-1">12</p>
                                <p class="text-xs text-green-600 dark:text-green-400 mt-1">+2 this month</p>
                            </div>
                            <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900 rounded-md flex items-center justify-center">
                                <i class="fas fa-folder text-blue-600 dark:text-blue-400 text-base"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs font-medium text-gray-600 dark:text-gray-400">Team Members</p>
                                <p class="text-lg font-bold text-gray-900 dark:text-white mt-1">24</p>
                                <p class="text-xs text-green-600 dark:text-green-400 mt-1">+3 online</p>
                            </div>
                            <div class="w-10 h-10 bg-green-100 dark:bg-green-900 rounded-md flex items-center justify-center">
                                <i class="fas fa-users text-green-600 dark:text-green-400 text-base"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs font-medium text-gray-600 dark:text-gray-400">Tasks Completed</p>
                                <p class="text-lg font-bold text-gray-900 dark:text-white mt-1">147</p>
                                <p class="text-xs text-green-600 dark:text-green-400 mt-1">+12 today</p>
                            </div>
                            <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900 rounded-md flex items-center justify-center">
                                <i class="fas fa-check-circle text-purple-600 dark:text-purple-400 text-base"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3 hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs font-medium text-gray-600 dark:text-gray-400">Sprint Progress</p>
                                <p class="text-lg font-bold text-gray-900 dark:text-white mt-1">78%</p>
                                <p class="text-xs text-yellow-600 dark:text-yellow-400 mt-1">5 days left</p>
                            </div>
                            <div class="w-10 h-10 bg-orange-100 dark:bg-orange-900 rounded-md flex items-center justify-center">
                                <i class="fas fa-chart-line text-orange-600 dark:text-orange-400 text-base"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Overview & Sprint Board -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    
                    <!-- Active Projects -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white flex items-center">
                                <i class="fas fa-rocket mr-1 text-blue-500"></i>
                                Active Projects
                            </h3>
                            <button class="text-xs text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 font-medium">View All</button>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors duration-200">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center text-white font-semibold text-sm">
                                        MP
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900 dark:text-white">Mobile App Redesign</h4>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Due: Aug 25, 2025</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">85%</p>
                                    <div class="w-16 h-2 bg-gray-200 dark:bg-gray-600 rounded-full mt-1">
                                        <div class="h-full bg-blue-500 rounded-full" style="width: 85%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors duration-200">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center text-white font-semibold text-sm">
                                        WD
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900 dark:text-white">Website Development</h4>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Due: Sep 10, 2025</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">62%</p>
                                    <div class="w-16 h-2 bg-gray-200 dark:bg-gray-600 rounded-full mt-1">
                                        <div class="h-full bg-green-500 rounded-full" style="width: 62%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors duration-200">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center text-white font-semibold text-sm">
                                        API
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900 dark:text-white">API Integration</h4>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Due: Aug 20, 2025</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">38%</p>
                                    <div class="w-16 h-2 bg-gray-200 dark:bg-gray-600 rounded-full mt-1">
                                        <div class="h-full bg-purple-500 rounded-full" style="width: 38%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sprint Board -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white flex items-center">
                                <i class="fas fa-burn mr-1 text-orange-500"></i>
                                Current Sprint
                            </h3>
                            <span class="px-2 py-0.5 bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 text-xs font-medium rounded-full">Sprint 12</span>
                        </div>
                        <div class="grid grid-cols-3 gap-4 mb-4">
                            <div class="text-center">
                                <div class="w-full h-2 bg-gray-200 dark:bg-gray-600 rounded-full mb-2">
                                    <div class="h-full bg-yellow-500 rounded-full" style="width: 45%"></div>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400">To Do</p>
                                <p class="text-sm font-semibold text-gray-900 dark:text-white">12 tasks</p>
                            </div>
                            <div class="text-center">
                                <div class="w-full h-2 bg-gray-200 dark:bg-gray-600 rounded-full mb-2">
                                    <div class="h-full bg-blue-500 rounded-full" style="width: 75%"></div>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400">In Progress</p>
                                <p class="text-sm font-semibold text-gray-900 dark:text-white">8 tasks</p>
                            </div>
                            <div class="text-center">
                                <div class="w-full h-2 bg-gray-200 dark:bg-gray-600 rounded-full mb-2">
                                    <div class="h-full bg-green-500 rounded-full" style="width: 90%"></div>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Done</p>
                                <p class="text-sm font-semibold text-gray-900 dark:text-white">24 tasks</p>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg border-l-4 border-blue-500">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900 dark:text-white">User Authentication</h4>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">High Priority • Sarah Johnson</p>
                                </div>
                                <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs rounded">In Progress</span>
                            </div>

                            <div class="flex items-center justify-between p-3 bg-green-50 dark:bg-green-900/20 rounded-lg border-l-4 border-green-500">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900 dark:text-white">Database Optimization</h4>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Medium Priority • Mike Chen</p>
                                </div>
                                <span class="px-2 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs rounded">Completed</span>
                            </div>

                            <div class="flex items-center justify-between p-3 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg border-l-4 border-yellow-500">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900 dark:text-white">UI Component Library</h4>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Low Priority • Alex Rivera</p>
                                </div>
                                <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 text-xs rounded">To Do</span>
                            </div>
                        </div>
                        <!-- Progress bars and tasks compacted similarly -->
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-white flex items-center">
                            <i class="fas fa-history mr-1 text-indigo-500"></i>
                            Recent Activity
                        </h3>
                        <select class="text-xs border border-gray-300 dark:border-gray-600 rounded-md px-2 py-1 bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                            <option>Last 7 days</option>
                            <option>Last 30 days</option>
                            <option>Last 3 months</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-green-600 dark:text-green-400 text-xs"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm text-gray-900 dark:text-white">
                                    <span class="font-medium">Sarah Johnson</span> completed task
                                    <span class="font-medium text-blue-600 dark:text-blue-400">"User Profile Settings"</span>
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">2 hours ago</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
                                <i class="fas fa-plus text-blue-600 dark:text-blue-400 text-xs"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm text-gray-900 dark:text-white">
                                    <span class="font-medium">Mike Chen</span> created new task
                                    <span class="font-medium text-blue-600 dark:text-blue-400">"API Documentation"</span>
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">4 hours ago</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center">
                                <i class="fas fa-comment text-purple-600 dark:text-purple-400 text-xs"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm text-gray-900 dark:text-white">
                                    <span class="font-medium">Alex Rivera</span> commented on
                                    <span class="font-medium text-blue-600 dark:text-blue-400">"Mobile App Redesign"</span>
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">6 hours ago</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-orange-100 dark:bg-orange-900 rounded-full flex items-center justify-center">
                                <i class="fas fa-clock text-orange-600 dark:text-orange-400 text-xs"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm text-gray-900 dark:text-white">
                                    <span class="font-medium">Emma Wilson</span> updated deadline for
                                    <span class="font-medium text-blue-600 dark:text-blue-400">"Database Migration"</span>
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">1 day ago</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar (1/4 width) -->
            <div class="space-y-4">
                
                <!-- Quick Actions -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-2 flex items-center">
                        <i class="fas fa-bolt mr-1 text-yellow-500"></i>
                        Quick Actions
                    </h3>
                    <div class="space-y-2">
                        <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-3 rounded-md text-xs font-medium transition-all duration-200 flex items-center justify-center">
                            <i class="fas fa-plus mr-1"></i>
                            Create Task
                        </button>
                        <button class="w-full bg-green-500 hover:bg-green-600 text-white py-2 px-3 rounded-md text-xs font-medium transition-all duration-200 flex items-center justify-center">
                            <i class="fas fa-project-diagram mr-1"></i>
                            New Project
                        </button>
                        <button class="w-full bg-purple-500 hover:bg-purple-600 text-white py-2 px-3 rounded-md text-xs font-medium transition-all duration-200 flex items-center justify-center">
                            <i class="fas fa-users mr-1"></i>
                            Invite Team
                        </button>
                    </div>
                </div>

                <!-- Team Status -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-200 dark:border-gray-700 p-3">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-2 flex items-center">
                        <i class="fas fa-users mr-1 text-green-500"></i>
                        Team Status
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="relative">
                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=32&h=32&fit=crop&crop=face&auto=format" class="w-8 h-8 rounded-full">
                                    <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Sarah Johnson</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Frontend Dev</p>
                                </div>
                            </div>
                            <span class="text-xs text-green-600 dark:text-green-400">Online</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="relative">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=32&h=32&fit=crop&crop=face&auto=format" class="w-8 h-8 rounded-full">
                                    <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Mike Chen</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Backend Dev</p>
                                </div>
                            </div>
                            <span class="text-xs text-green-600 dark:text-green-400">Online</span>
                        </div>
                                                <!-- More team members -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="relative">
                                    <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=32&h=32&fit=crop&crop=face&auto=format" class="w-8 h-8 rounded-full">
                                    <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-yellow-400 border-2 border-white dark:border-gray-800 rounded-full"></div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Emma Wilson</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Product Manager</p>
                                </div>
                            </div>
                            <span class="text-xs text-yellow-600 dark:text-yellow-400">Away</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="relative">
                                    <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=32&h=32&fit=crop&crop=face&auto=format" class="w-8 h-8 rounded-full">
                                    <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-gray-400 border-2 border-white dark:border-gray-800 rounded-full"></div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Alex Rivera</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">UI Designer</p>
                                </div>
                            </div>
                            <span class="text-xs text-gray-500 dark:text-gray-400">Offline</span>
                        </div>

                        <!-- View all team members -->
                        <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                            <button class="w-full text-sm text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 font-medium flex items-center justify-center space-x-2">
                                <i class="fas fa-users-cog"></i>
                                <span>Manage Team</span>
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
