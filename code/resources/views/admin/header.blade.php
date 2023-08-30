<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="{{asset('assets/images/logo.svg')}}" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class='sidebar-title'>Admin Panel</li>



                        <li class="sidebar-item ">
                            <a href="{{route('admin.dashboard')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>

                        </li>




                        <li class="sidebar-item">
                            <a href="{{route('admin.users')}}" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Users</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{route('admin.forms')}}" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>All Forms</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="{{route('admin.logout')}}" class='sidebar-link'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span>Logout</span>
                            </a>

                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>