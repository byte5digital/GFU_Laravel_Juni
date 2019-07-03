@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Neues Projekt</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{route('project.store')}}" method="post">
                    @csrf
                    <button class="btn btn-danger" type="submit">Abschicken</button>
                </form>
            </div>
        </div>
    </div>

@endsection