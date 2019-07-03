<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\ProjectRepositoryInterface;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    private $projectRepository;

    /**
     * ProjectController constructor.
     * @param $projectRepository
     */
    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function getAllWithJson(Request $request){
        return response()->json($this->projectRepository->getAll());
    }

    public function getAllWithJsonWithoutDI(Request $request){
        return response()->json(Project::all());
    }

    public function store (Request $request){
        return back();
    }

    public function newView(Request $request){
        return view('project.new');
    }


}
