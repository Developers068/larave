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
          <a class="nav-link {{ request()->routeIs('employees') ? 'active' : '' }}" href="{{ route('employees') }}">Employees</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('contactus') ? 'active' : '' }}" href="{{ route('contactus') }}">Contact Us</a>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('location') ? 'active' : '' }}" href="{{ route('location') }}">location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">GALLERY</a>
        </li>
      </ul>
    </div>
  </div>
</nav>