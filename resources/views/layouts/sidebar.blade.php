<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">

    <div class="sidebar-brand">
       <a href="./index.html" class="brand-link">
        <img src="../../UI/assets/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow">
           <span class="brand-text fw-light">Admin</span>
        
        </a>

    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">

            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('home')}}"
                        class="nav-link {{\Request::route()->getName()=='home' ? 'active' : ''}}">
                        <i class="nav-icon bi bi-house-door-fill"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('detail')}}"
                        class="nav-link {{\Request::route()->getName()=='detail' ? 'active' : ''}}">
                        <i class="nav-icon bi bi-house-door-fill"></i>
                        <p>detail</p>
                    </a>
                </li>
                <!-- <li class="nav-item"> <a href="#" class="nav-link "> <i
                                    class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Dashboard
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item"> <a href="./index.html" class="nav-link "> <i
                                            class="nav-icon bi bi-circle"></i>
                                        <p>Dashboard v1</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./index2.html" class="nav-link"> <i
                                            class="nav-icon bi bi-circle"></i>
                                        <p>Dashboard v2</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./index3.html" class="nav-link"> <i
                                            class="nav-icon bi bi-circle"></i>
                                        <p>Dashboard v3</p>
                                    </a> </li>
                            </ul>
                        </li> -->

            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>