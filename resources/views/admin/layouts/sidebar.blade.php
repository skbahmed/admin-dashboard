<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav text-capitalize" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed {{ request()->path() == 'dashboard' ? 'active' : '' }}" href="{{ url('dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>{{ "dashboard" }}</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed {{ request()->path() == 'articles' || request()->path() == 'articles/create' ? 'active' : '' }}" data-bs-target="#articles-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>{{ "articles" }}</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="articles-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('articles') }}">
                        <i class="bi bi-circle"></i><span>{{ "all articles" }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('articles/create') }}">
                        <i class="bi bi-circle"></i><span>{{ "add new article" }}</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Articles Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed {{ request()->path() == 'users' || request()->path() == 'users/create' ? 'active' : '' }}" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people"></i><span>{{ "users" }}</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('users') }}">
                        <i class="bi bi-circle"></i><span>{{ "all users" }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('users/create') }}">
                        <i class="bi bi-circle"></i><span>{{ "add new user" }}</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Users Nav -->

        <li class="nav-heading">{{ "Pages" }}</li>

        <li class="nav-item">
            <a class="nav-link collapsed {{ request()->path() == 'user/profile' ? 'active' : '' }}" href="{{ url('user/profile') }}">
            <i class="bi bi-person"></i>
            <span>{{ "Profile" }}</span>
            </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('logout') }}">
            <i class="bi bi-box-arrow-right"></i>
            <span>{{ "sign out" }}</span>
            </a>
        </li><!-- End Profile Page Nav -->

    </ul>

</aside><!-- End Sidebar-->