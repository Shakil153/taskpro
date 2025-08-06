<?php

namespace App\Services;
use App\Models\Status;
class StatusService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function createStatus(array $data)
    {
        return Status::create($data);
    }

    public function updateStatus(Status $status, array $data)
    {
        $status->update($data);
        return $status;
    }

    public function deleteStatus(Status $status)
    {
        return $status->delete();
    }

    public function getAllStatus()
    {
        return Status::all();
    }

    public function getStatusById(int $statusId)
    {
        return Status::find($statusId);
    }
}
