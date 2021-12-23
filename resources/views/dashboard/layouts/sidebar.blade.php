<nav id="sidebarMenu" class="col-md-2 col-lg-1  d-md-block bg-secondary sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dasboard') ? 'active' : '' }} text-white " aria-current="page" href="/dashboard">
                <i class="bi bi-house-door"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dasboard/posts*') ? 'active' : '' }} text-white" href="/dashboard/posts">
            <i class="bi bi-list "></i>Post
            </a>
        </li>
        </ul>
    </div>
</nav>
