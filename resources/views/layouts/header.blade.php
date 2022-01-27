<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a href="/"></a>
    <a class="text-white text-decoration-none" href="/"><i class="bi bi-code-slash text-white mx-2"></i>Website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/posts">All Posts</a>
        </li>
        @if(Auth::check())
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/mypost">My Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/posts/create">Create Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/ticket">Request Content</a>
        </li>
        <li>
            <a class="nav-link active text-white" aria-current="page" href="/manage-ticket">Assign Ticket</a>
        </li>
        <li>
            <a class="nav-link active text-white" aria-current="page" href="/my-ticket">Ticket</a>
        </li>
        @endif
      </ul>
      @if(Auth::check())
      <a class="nav-link text-white" href="/logout" method="post">
        Logout
        <i class="bi bi-box-arrow-right"></i>
      </a>
      @else
      <a class="nav-link text-white" href="/login">
        Login
        <i class="bi bi-box-arrow-in-right"></i>
      </a>
      @endif
    </div>
  </div>
</nav>
