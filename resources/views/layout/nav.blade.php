<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">CompanyPortal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('employees.index') ? 'active' : '' }}" href="{{ route('happy') }}">Employees</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>