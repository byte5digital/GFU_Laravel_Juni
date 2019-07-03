<?php


namespace App\Http\Repositories;


use App\Http\Interfaces\TodoRepositoryInterface;
use App\Todo;

class TodoRepository implements TodoRepositoryInterface
{
    public function getAll()
    {
        return Todo::all();
    }

    public function getById(int $id)
    {
        return Todo::whereId($id)->first();
    }

    public function getByUserId(int $id)
    {
        return Todo::whereUserAssignedId($id);
    }
}