<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="/">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="managecalender">
                    <div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
                    Manage Calendar
                </a>
                <div class="sb-sidenav-menu-heading">Manage</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#students" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                   Students
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="students" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/addstudent">Enroll New student</a>
                        <a class="nav-link" href="/viewstudent">View student</a>
{{--                        <a class="nav-link" href="assignclass">Assign Students</a>--}}
                    </nav>
                </div>


                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#register" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                  Attendance
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="register" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="markregister">Class attendance</a>
                        <a class="nav-link" href="">View Attendace</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sms" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Contact
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="sms" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/sendbulksms">Send Bulk Sms</a>
                        <a class="nav-link" href="/viewbulk">View sms</a>

                    </nav>
                </div>
            </div>
        </div>
        @if (Auth::user())
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->name }}
        </div>
@endif
    </nav>
</div>
