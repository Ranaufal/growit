<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img class="logo-icon" src="/img/logo-hitam.png" alt="">
        </div>
        <a href="/">
            <div>
                <h4 class="logo-text"><b>Grow</b><b style="color: rgba(75, 165, 216, 1)">it</b></h4>
            </div>
        </a>
        <div class="toggle-icon ms-auto">
            <i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <div class="d-flex flex-column justify-content-between " style="height: 100vh">
        <ul class="metismenu" id="menu">
            <li>
                <a href="/dash/{{ session('myworkspaceid') }}/{{ session('myworkspacename') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-file"></i>
                    </div>
                    <div class="menu-title">Accounting</div>
                </a>
                <ul>
                    <li> <a href="/income-backend/{{ session('myworkspaceid') }}"><i
                                class="bx bx-right-arrow-alt"></i>Income</a>
                    </li>
                    <li> <a href="/expand-backend/{{ session('myworkspaceid') }}"><i
                                class="bx bx-right-arrow-alt"></i>Expand</a>
                    </li>
                </ul>
            </li>
            <a href="/report-backend/{{ session('myworkspaceid') }}">
                <div class="parent-icon"><i class='bx bx-dollar-circle'></i>
                </div>
                <div class="menu-title">Report</div>
            </a>
            {{-- <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-dollar-circle'></i>
                    </div>
                    <div class="menu-title">Reports</div>
                </a>
                <ul>
                    <li> <a href=""><i class="bx bx-right-arrow-alt"></i>Report Income</a>
                    </li>
                    <li> <a href=""><i class="bx bx-right-arrow-alt"></i>Report Expand</a>
                    </li>
                </ul>
            </li> --}}


        </ul>
        <li class="metismenu">
            <a href="/team-backend/{{ session('myworkspaceid') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Show Team</div>
            </a>
        </li>
        
    </div>
    <!--end navigation-->

</div>
