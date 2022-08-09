{{--  --}}

<nav class="navigation">
  <div class="navigation__container">
  <div class="navigation--left">
    <img src="/images/icons/logo.png" alt="Cat logo">
    <a class="navigation__link navigation__link--grey" href="/articles">Recent Articles</a>
    <a class="navigation__link navigation__link--grey" href="/">About</a>
  </div>

  <div class="navigation--right">
      @guest
      <a class="navigation__link navigation__link--blue" href="/login">Log in<img class="navigation__icon" src="/images/icons/arrow.png" alt=""></a>  
      <a class="navigation__link navigation__link--blue navigation__link--dark" href="/register">Register<img class="navigation__icon" src="/images/icons/arrow-blue.png" alt=""></a>    
      @endguest

      {{-- Dropdown content for small screens --}}
      <div class="navigation__dropdown navigation__menu">
        <div class="navigation__profile-menu">
          <span>Menu</span>
          <img src="/images/icons/arrow-bottom.png" alt="Arrow icon">
        </div>
        <div class="navigation__dropcontent navigation__dropcontent-menu">
         
          <a class="navigation__menu-link" href="/">About</a>
          <a class="navigation__menu-link" href="/articles">Recent Articles</a>
          @auth
          <a class="navigation__menu-link" href="{{route("articles.display")}}">My Articles</a>
           <a class="navigation__menu-link" href="{{route("articles.create")}}">Create Article</a>
           <form action="{{ route('logout') }}" method="post">
            @csrf
            
            <button class="navigation__menu-link"><img class="navigation__logout--icon" src="/images/icons/logout.png" alt="Logout icon">Logout</button>
            </form>
          @endauth
        </div>
        
      </div>

      @auth
      <a class="navigation__link" href="{{route("articles.display")}}">My Articles</a>
      <a class="navigation__link navigation__link--blue" href="{{route("articles.create")}}">Create Article</a>
      
      <div class="navigation__dropdown">
        <div class="navigation__profile">
          <img src="/images/icons/arrow-bottom.png" alt="Arrow icon">
          @if (Auth::user()->path)
          <img class="navigation__avatar" src="{{ Auth::user()->path }}" alt="{{ Auth::user()->name }} avatar">
          @else <img class="navigation__avatar" src="/images/avatars/guest.png" alt="{{ Auth::user()->name }} avatar">
          @endif
        </div>
        <div class="navigation__dropcontent">
          @auth
          <form action="{{ route('logout') }}" method="post">
          @csrf
          
          <button class="navigation__logout"><img class="navigation__logout--icon" src="/images/icons/logout.png" alt="Logout icon">Logout</button>
          </form>
          @endauth
        </div>
        
      </div>
          
      @endauth
  </div>

  
    
  </div>
</nav>