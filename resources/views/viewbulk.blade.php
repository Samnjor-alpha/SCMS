<head>
    <title>SCMS Admin</title>
    @include('includes.header')

</head>
<body class="sb-nav-fixed">
@include('includes.head');
<div id="layoutSidenav">
    @include('includes.sidebar')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-2">Send Sms</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">View Bulk sms</li>
                </ol>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card shadow-lg border-0 rounded-lg mt-1">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <tr>
                                            <td>Id</td>
                                            <td>Recipients</td>
                                            <td>Message</td>
                                            <td>Date sent</td>
                                            <td>Delete</td>

                                        </tr>
                                        @foreach ($students as $studs)
                                            <tr>
                                                <td>{{ $studs->id }}</td>
                                                <td>{{

    $studs->tel_no }}</td>
                                                <td>{{ $studs->message }}</td>
                                                <td>{{ $studs->sent }}</td>
                                                <td><a href = 'clear/{{ $studs->id }}'>delete</a></td>


                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </main>
        @include('includes.footer');
    </div>
</div>
@include('includes.scripts');
</body>
<?php
