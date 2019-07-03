<?php


namespace App\Http\Interfaces;


interface ProjectRepositoryInterface
{
    public function getAll();
    public function getById(int $id);
    public function getByUserId(int $user_id);
}