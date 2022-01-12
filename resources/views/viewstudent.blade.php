@extends('includes.header')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-2">View Students</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">View student</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-1">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <td>Id</td>
                                    <td>Student Name</td>
                                    <td>Email Address</td>
                                    <td>Age</td>
                                    <td>Class</td>
                                    <td>Assign Class</td>
                                </tr>
                                @foreach ($students as $studs)
                                    <tr>
                                        <td>{{ $studs->id }}</td>
                                        <td>{{ $studs->name }}</td>
                                        <td>{{ $studs->email }}</td>
                                        <td>{{ $studs->age }}</td>
                                        <td>Form {{ $studs->class }}</td>
                                        <td><a href = 'Assign/{{ $studs->id }}'>Assign</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
