
  <header class="container">
    <div class="logo">
      <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="DC logo" />
    </div>
    <nav>
      <ul class="d-flex gap-3">
        <li>
          <a href="{{route('home')}}">Characters</a>
        </li>
        <li>
          <a href="{{route('comics')}}">Comics</a>
        </li>
        <li>
          <a href="{{route('movies')}}">Movies</a>
        </li>
        <li>
          <a href="{{route('tv')}}">TV</a>
        </li>
        <li>
          <a href="{{route('games')}}">Games</a>
        </li>
        <li>
          <a href="{{route('collectible')}}">Collectible</a>
        </li>
        <li>
          <a href="{{route('videos')}}">Videos</a>
        </li>
      </ul>
    </nav>
  </header>
</header