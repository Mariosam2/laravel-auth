@extends('layouts.admin');
section('name')
{{$project->title}}
@endsection

@section('content')
<div class="card">
    <img class="card-img-top" src="{{$project->img}}" alt="{{$project->title}}">
    <div class="card-body">
        <p class="card-text">{{$project->description}}</p>
        <span>{{$project->creation_date}}</span>
    </div>
</div>
@endsection