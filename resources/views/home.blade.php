@extends('layouts.app')

@section('content')
    <div class="container">
        <?php /* @var \App\Project[] $projects */ ?>
        @foreach ($projects as $project)
            <div class="row">
                <div class="col-12">
                    <a href="{{route('project.todos.list', $project->id)}}">{{$project->title}}</a>
                </div>
            </div>

        @endforeach
    </div>
@endsection
