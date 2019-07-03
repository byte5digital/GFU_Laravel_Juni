@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{$project->title}}</h1>
            </div>
        </div>
        <div class="row" style="padding-bottom: 3rem">
            <div class="col-4">
                <button class="btn btn-danger" onclick="location.href = '/home'">Zurück</button>
            </div>
        </div>
        <?php /* @var \App\Project $project */ ?>
        @foreach($project->todos as $todo)
        <div class="row">
            <div class="col-12">
                {{$todo->title}}
            </div>
        </div>
        @endforeach
    </div>
@endsection