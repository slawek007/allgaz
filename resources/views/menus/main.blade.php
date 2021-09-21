<ul class="navbar-nav ml-auto">
    @foreach($items as $menu_item)
        @if(strtolower($menu_item->link()) == Request::path())
          <li class="nav-item active">
        @else
          <li class="nav-item">
        @endif
          <a class="nav-link" href="{{ url($menu_item->link()) }}">{{ $menu_item->title }}</a>
          </li>
    @endforeach
      </ul>

