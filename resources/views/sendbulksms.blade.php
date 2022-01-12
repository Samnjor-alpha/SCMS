@extends('includes.header')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-2">Bulk sms</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">send bulk sms</li>
        </ol>
        <div class="row justify-content-center">

            <div class="col-md-9">
                <div class="card shadow-lg border-0 rounded-lg mt-1">
                    <div class="rounded-lg mt-1">
                        @include('includes/msg')
                    </div>
                    <div class="card-body">
                        <p class="text-center">New Message</p>
                        <form action = "/sendsms" method = "post">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <div class="form-group">
                                <label for="to" class="col-sm-1 control-label">To:</label>
                                <div class="col-sm-11">
                                    <select name="tels[]" id="choices-multiple-remove-button" placeholder="Select recipients" multiple required>
                                        @foreach ($students as $studs)
                                            <option>{{ $studs->tel_no }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-11 col-sm-offset-1">


                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="sms"  required placeholder="Compose SMS"></textarea>
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
@endsection
