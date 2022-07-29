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
      @endguest
      @auth
      <a class="navigation__link" href="{{route("articles.display")}}">My Articles</a>
      <a class="navigation__link navigation__link--blue" href="{{route("articles.create")}}">Create Article</a>
      
      <div class="navigation__dropdown">
        <div class="navigation__profile">
          <img src="/images/icons/arrow-bottom.png" alt="Arrow icon">
          <img class="navigation__avatar" src="{{ Auth::user()->path }}" alt="{{ Auth::user()->name }} avatar">
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