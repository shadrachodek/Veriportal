<!-- Side Bar Starts Here -->

<div class="logo">
    <img class="mx-auto d-block" src="{{ asset('img/logo.png') }}" />
</div>

<div class="sidebar-wrapper">

    <ul class="nav">
        <li class="active">
            <a href="{{ route('dashboard') }}">
                <i class="pe-7s-graph"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li>
            <a href="{{ route('owner.index') }}">
                <i class="pe-7s-user"></i>
                <p>Owners

                </p>
            </a>

        </li>
        <li>
            <a data-toggle="collapse" href="#formsExamples">
                <i class="pe-7s-copy-file"></i>
                <p>Document
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="formsExamples">
                <ul class="nav">
                    <li>
                        <a href="{{ route('document.index') }}">
                            <i class="fa fa-file-archive-o"></i>
                            <span class="sidebar-normal">Documents List</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-clone"></i>
                            <span class="sidebar-normal">Documents Batches</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-check"></i>
                            <span class="sidebar-normal">Documents Approved</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-close"></i>
                            <span class="sidebar-normal">Documents Declined</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a data-toggle="collapse" href="#formsDropdown">
                <i class="pe-7s-note2"></i>
                <p>Stock Management
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="formsDropdown">
                <ul class="nav">
                    <li>
                        <a href="stock-management-item.html">
                            <i class="fa fa-bars"></i>
                            <span class="sidebar-normal"> Items </span>
                        </a>
                    </li>
                    <li >
                        <a href="stock-management-material-request.html">
                            <i class="fa fa-hourglass"></i>
                            <span class="sidebar-normal"> Material Request </span>
                        </a>
                    </li>
                    <li>
                        <a href="stock-management-receive-item.html">
                            <i class="fa fa-arrow-down"></i>
                            <span class="sidebar-normal"> Receive Items </span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        <li>
            <a href="print-management.html">
                <i class="pe-7s-print"></i>
                <p>Print Management

                </p>
            </a>

        </li>

        <li>
            <a href="reports.html">
                <i class="pe-7s-graph3"></i>
                <p>Reports</p>
            </a>
        </li>

        <li>
            <a href="{{ route('user-management.index') }}">
                <i class="pe-7s-users"></i>
                <p>User management</p>
            </a>
        </li>
        <li>
            <a href="setting.html">
                <i class="pe-7s-config"></i>
                <p>Settings

                </p>
            </a>

        </li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="pe-7s-lock"></i>
                <p> {{ __('Logout') }} </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    <div class="fixed-footer"> <p class="text-muted"> Powered by: Verisys.ng </p>  </div>

</div>



</div>

<!-- Sidebar Ends Here -->

