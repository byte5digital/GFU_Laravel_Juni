<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\ProjectRepositoryInterface;
use App\Http\Interfaces\TodoRepositoryInterface;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    protected $todoRepository;
    protected $projectRepository;

    /**
     * TodoController constructor.
     * @param $todoRepository
     * @param $projectRepository
     */
    public function __construct(TodoRepositoryInterface $todoRepository,
                                ProjectRepositoryInterface $projectRepository)
    {
        $this->todoRepository = $todoRepository;
        $this->projectRepository = $projectRepository;
    }


}
