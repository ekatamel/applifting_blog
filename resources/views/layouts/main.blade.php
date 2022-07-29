{{-- {!! \Illuminate\Support\Str::markdown($article->content) !!} --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Applifting blog about cats made as part of the job application assignment" />
  <link rel="stylesheet" href="{{mix('css/app.css')}}">
  <link rel="icon" type="image/x-icon" href="/images/icons/favicon.png">
  <title>Applifting blog</title>
</head>
<body>
  @include("layouts/navigation")
  

  

  @yield('content')

  @auth
  <script>

    const loggedUser = {!! auth()->user()->toJson() !!};
    console.log(loggedUser)
    
  </script>
      
  @endauth

  
</body>
</html>