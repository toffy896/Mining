
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <button type="button" id="sidebarCollapse" class="btn btn-info">
      <i class="fas fa-align-left"></i>
      <span>Toggle Sidebar</span>
  </button>
  <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-align-justify"></i>
  </button>
  </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item active">
        <span>Welcome : {{ Auth::user()->name }} </span>
      </li>
     
      <li class="nav-item active">
        <a class="nav-link" href="/logout"><span style="color: #00A000">Logout</span></a>
      </li>
      {{-- {{Auth::logout()}} --}}
    </ul>
  </div>
    
</nav>


        