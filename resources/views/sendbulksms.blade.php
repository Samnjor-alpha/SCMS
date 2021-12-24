<head>
    <title>SCMS Admin</title>
    @include('includes.header')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
</head>
<body class="sb-nav-fixed">
@include('sweet::alert')
@include('includes.head');
<div id="layoutSidenav">
    @include('includes.sidebar')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-2">Bulk sms</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">send bulk sms</li>
                </ol>
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="card shadow-lg border-0 rounded-lg mt-1">
                            <div class="card-body">
                                <p class="text-center">New Message</p>
                                <form action = "/sendsms" method = "post">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="form-group">
                                        <label for="to" class="col-sm-1 control-label">To:</label>
                                        <div class="col-sm-11">
                                            <select name="tels[]" id="choices-multiple-remove-button" placeholder="Select recipients" multiple>
                                                @foreach ($students as $studs)
                                                    <option>{{ $studs->tel_no }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-11 col-sm-offset-1">


                                        <div class="form-group">
                                            <textarea class="form-control" id="message" name="sms"  placeholder="Compose SMS"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Send</button>
                                        </div>
                                    </div>

                                </form>


                            </div>
                        </div>
                    </div><!--/.col-->
                </div>
            </div>



        </main>
        @include('includes.footer');
    </div>
</div>
@include('includes.scripts');
</body>
