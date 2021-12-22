<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- boostrap css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    {{-- Style --}}
    <link rel="stylesheet" href="/css/style.css">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div class="container-fluid">
        <a href="/"></a>
        <a class="navbar-brand text-white" href="/"><i class="bi bi-code-slash text-white mx-2"></i>Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="/posts">Posts</a>
            </li>
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

        </ul>
        </div>
      </div>
    </nav>
</head>
