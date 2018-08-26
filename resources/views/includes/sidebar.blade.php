
<nav id="sidebar" >
  <div class="sidebar-header">
   <h3>SSMS Mining</h3>

  </div>

  <ul class="list-unstyled components">
    <li>
      <a href="{{ route('home') }}">
       <i class="fas fa-home"></i>
        Home
      </a>
    </li>
<br/>
<li>
<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
  <i class="fas fa-database"></i>
  Mine Database
</a>
<ul class="collapse list-unstyled" id="pageSubmenu">
  <li>
    <a href="{{ route('miners.index') }}">Database View</a>
  </li>
  <li>
    <a href="{{ route('miners.create') }}">Add Miner</a>
  </li>

</ul>
</li>
<br/>

<li>
  <a href="#pagmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
    <i class="fas fa-image"></i>
    Production
  </a>
  <ul class="collapse list-unstyled" id="pagmenu">
    <li>
      <a href="{{ route('statuss.index') }}">Production Status</a>
    </li>

    <li>
      <a href="{{ route('updates.create') }}">Daily Input</a>
    </li>
  
  </ul>
</li>

<br/>
<li>
      <a href="#pageSubmeu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-copy"></i>
        Report Generator
      </a>
      <ul class="collapse list-unstyled" id="pageSubmeu">
        <li>
          <a href="{{ route('statuss.index') }}">Daily Reporter Generator</a>
        </li>
        <li>
          <a href="{{ route('statuss.index') }}">Weekly Reporter Generator</a>
        </li>
        <li>
          <a href="{{ route('statuss.index') }}">Monthly Reporter Generator</a>
        </li>
      </ul>
  </li>
    <br/>
    <li>
        <a href="{{ route('calender') }}">
            <i class="fas fa-calendar"></i>
            Schedule Calendar
        </a>
    </li>
    <li>
    <ul class="list-unstyled CTAs">
      <li>
          <a href="https://trello.com/b/JpvaYJ4Z" class="download">Go to Trello Board</a>
      </li>
      <li>
          <a href="{{ route('site') }}" class="article">Go to Website</a>
      </li>
  </ul>
</li>       
</nav>
<!-- sidebar menu -->
