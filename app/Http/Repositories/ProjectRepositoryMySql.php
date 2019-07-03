<?php


namespace App\Http\Repositories;


use App\Http\Interfaces\ProjectRepositoryInterface;
use App\Project;

class ProjectRepositoryMySql implements ProjectRepositoryInterface
{

    public function getAll()
    {
        return Project::all() ;
    }

    public function getById(int $id)
    {
        return Project::whereId($id)->first();
    }

    public function getByUserId(int $user_id)
    {
        return Project::whereAssigneeId($user_id)->first();
    }
}