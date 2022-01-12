@extends('includes.header')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-2">Register</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Todays register ({{ now()->format('d-M-Y') }})</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-1">
                    <div class="rounded-lg mt-1">
                        @include('includes/msg')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable">
                                <tr>
                                    <td>Id</td>
                                    <td>Student Name</td>
                                    <td>Class</td>
                                    <td>Mark Present</td>
                                    <td>Mark Absent</td>
                                </tr>
                                @foreach ($students as $studs)
                                    <tr>
                                        <td>{{ $studs->id }}</td>
                                        <td>{{ $studs->name }}</td>
                                        <td>Form {{ $studs->class }}</td>
                                        <td><a href = 'markpresent/{{ $studs->id }}/class/{{$studs->class}}'>Present</a></td>
                                        <td><a href = 'markabsent/{{ $studs->id }}/class/{{$studs->class}}'>Absent</a></td>
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
