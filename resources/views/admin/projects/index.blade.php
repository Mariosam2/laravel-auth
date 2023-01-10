@extends('layouts.admin')

@section('content')
<div class="p-5">
    <h1 class="mb-5">Projects</h1>
    <div class="table-responsive">
        <table class="table table-striped
    table-hover	
    table-borderless
    table-light
    align-middle">
            <thead class="table-dark">

                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse($projects as $project)
                <tr class="table-light">
                    <td scope="row" class="pe-3 fw-bold">{{$project->id}}</td>
                    <td>{{ucfirst($project->title)}}</td>
                    <td><img class="w-25 h-25" src="{{$project->img}}" alt="{{$project->title}}"></td>
                    <td>{{$project->creation_date}}</td>
                </tr>
                @empty

                @endforelse
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</div>


@endsection