@extends('includes.header')
@section('content')
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="container" style="width:700px">
                        <h2 class="h2 text-center border-bottom pb-3">School calender year</h2>
                        <div  class="bg-light" id='full_calendar_events'></div>
                    </div>

                </div>




            </div>
@endsection

