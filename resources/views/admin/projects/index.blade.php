@extends('layouts.admin')
@section('name')
Projects
<a class="text-dark" href="{{route('admin.projects.create')}}">
    <i class="fa-solid fa-square-plus mx-2"></i>
</a>

@endsection
@section('content')
<div class="p-5">
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
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse($projects as $project)
                <tr class="table-light">
                    <td scope="row" class="pe-3 fw-bold">{{$project->id}}</td>
                    <td>{{ucfirst($project->title)}}</td>
                    <td><img class="w-25 h-25" src="{{$project->img}}" alt="{{$project->title}}"></td>
                    <td>{{$project->creation_date}}</td>
                    <td>
                        <a class="d-flex text-white p-2 my-2 bg-primary justify-content-center rounded-2" href=""><i class="fa-solid fa-eye"></i></a>
                        <a class="d-flex text-white p-2 my-2 bg-secondary justify-content-center rounded-2" href=""><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="d-flex text-white p-2 my-2 bg-danger justify-content-center rounded-2" href=""><i class="fa-solid fa-trash"></i></a>
                    </td>
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