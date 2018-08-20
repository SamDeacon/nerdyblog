<nav class="navbar has-shadow">
  <div class="container">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{ route('home') }}">
      <img src="{{ asset('images\logotype_transparent_bg.png') }}" alt="logo" width="200">
    </a>
  </div>
  <div class="navbar-menu">
    <nav class="navbar-start">

      <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>


    </nav>
    <nav class="navbar-end" style="overflow:visible;">
      @if (Auth::guest())
      <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
      <a href="{{route('register')}}" class="navbar-item is-tab">Signup</a>
      @else
        <button class="navbar-item is-tab dropdown is-aligned-right" type="button" name="button">
        Dropdown<span class="icon"><i class="fa fa-caret-down"></i></span>
        <ul class="navbar-dropdown">
          <li><a href="#"><span class="icon"><i class="m-r-5 fa fa-fw fa-user-circle-o"></i></span> Profile</a></li>
          <li><a href="#"><span class="icon"><i class="m-r-5 fa fa-fw fa-bell"></i></span> Notifications</a></li>
          <li><a href="{{route('manage.dashboard')}}"><span class="icon"><i class="m-r-5 fa fa-fw fa-cog"></i></span> Manage</a></li>
          <li class="seperator"></li>
          <li><a href="{{route('logout')}}"><span class="icon"><i class="m-r-5 fa fa-fw fa-window-close"></i></span> Logout</a></li>
        </ul>
      </button>
      @endif
    </nav>
  </div>
            </div>
</nav>
