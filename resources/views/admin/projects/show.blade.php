@extends('layouts.admin')
@section('content')

    <div class="container m-5">
        <div class="row">
            <div class="col-12">
                <div>
                    <h2>Project Details: {{$project->title}}</h2>
                    <a href="{{route('admin.projects.index')}}" class="btn btn-primary my-3">Torna all'elenco</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label class="d-block">
                    <strong>Slug:</strong>
                    {{$project->slug}}
                </label>

                <label class="d-block mt-2">
                    <strong>Type:</strong>
                    {{$project->type ? $project->type->name : 'No Type Chosen'}}
                </label>

                <label class="d-block my-3 ">
                    <strong class="fs-4">Content:</strong>
                </label>

                <p>{{$project->content}}</p>
            </div>
        </div>
    </div>

@endsection