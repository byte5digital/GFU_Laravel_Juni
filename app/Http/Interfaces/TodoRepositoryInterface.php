<?php


namespace App\Http\Interfaces;


interface TodoRepositoryInterface
{

    public function getAll();
    public function getById(int $id);
    public function getByUserId(int $id);

}