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
                <h1 class="mt-2">Assign Class</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Assign class</li>
                </ol>
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-1">
                            <div class="rounded-lg mt-1">
                                @include('includes/msg')
                            </div>
                            <div class="card-body">
                                <form action = "/reassign/{{ $student['0']->id}}" method = "post">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Student</label>
                                        <select class="form-control" id="inputPassword" name="student">
                                                        @foreach ($student as $stud)
                                                <option value="{{ $stud->id }}">{{ $stud->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Class</label>
                                        <select class="form-control" id="inputPassword" name="class">
                                            <option class="selected">Choose class</option>
                                            <option value="1">Form 1</option>
                                            <option value="2">Form 2</option>
                                            <option value="3">Form 3</option>
                                            <option value="4">Form 4</option>
                                        </select>
                                    </div>

                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <input class="btn btn-primary btn-block" name="add_student" type="submit" value="Assign class">
                                    </div>
                                </form>
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
