<div class="side-menu" id="admin-side-menu">

  <aside class="menu m-t-20 m-l-10">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a></li>
    </ul>
    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Manage Users</a></li>
      <li><a class="has-submenu {{Nav::hasSegment(['roles','permissions'],2)}}"  >Roles &amp; Permissions</a>
      <ul class="submenu">
        <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
        <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
      </ul>
      </li>
    </ul>
    <p class="menu-label">
      Content
    </p>
    <ul class="menu-list">
      <li><a class="has-submenu" >Games</a>
      <ul class="submenu">
        <li><a href="{{route('roles.index')}}">Manage Games</a></li>
        <li><a href="{{route('permissions.index')}}">Add Game</a></li>
        <li><a href="{{route('permissions.index')}}">Games Categories</a></li>
        <li><a href="{{route('permissions.index')}}">Add Game Categories</a></li>

      </ul>
      </li>
      <li><a class="has-submenu" >Posts &amp; Blog</a>
      <ul class="submenu">
        <li><a href="{{route('roles.index')}}">Manage Posts</a></li>
        <li><a href="{{route('roles.index')}}">Add Post</a></li>
        <li><a href="{{route('permissions.index')}}">Categories</a></li>
        <li><a href="{{route('permissions.index')}}">Add Category</a></li>
      </ul>
      </li>
    </ul>
  </aside>
</div>
