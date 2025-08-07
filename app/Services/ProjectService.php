<?php

namespace App\Services;
use App\Models\Project;
class ProjectService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function createProject(array $data)
    {
        return Project::firstOrCreate($data);
    }

    public function updateProject(Project $project, array $data)
    {
        $project->update($data);
        return $project;
    }

    public function deleteProject(Project $project)
    {
        return $project->delete();
    }

    public function getAllProject()
    {
        return Project::all();
    }

    public function getProjectById(int $projectId)
    {
        return Project::find($projectId);
    }
}
