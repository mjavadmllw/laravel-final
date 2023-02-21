<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/" style="padding-left:30px">Post Media</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
      @if(Session::has('user'))
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>  
      @else
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">   
        User
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/login">Login</a>
        <a class="dropdown-item" href="/register">Register</a>
      </div>
      @endif
      
      </li>
      <li>
        <a class="nav-link" href="/makepost">New Post</a>
      </li>
    </ul>
    <form action="/search" class="form-inline my-2 my-lg-0">
      <input name="query" class="form-control mr-sm-2" type="search" placeholder="Search Message" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
  </div>
</nav>