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
                    <div class="form-group">
                        <label for="title">Titel</label>
                        <input type="text" id="title" name="title" class="form-control" />
                    </div>
                    <button class="btn btn-danger" type="submit">Abschicken</button>
                </form>
            </div>
        </div>
    </div>

@endsection