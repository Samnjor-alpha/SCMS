<head>
    <title>SCMS Admin</title>
    @include('includes.header');
</head>
<body class="sb-nav-fixed">
@include('includes.head');
<div id="layoutSidenav">
    @include('includes.sidebar')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Total Students</div>

                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Total SMS</div>

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
