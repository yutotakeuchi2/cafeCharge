<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Profile Site</title>
  <link rel="stylesheet" href="{{ asset('css/user.css') }}">
</head>
<body>
  <header>
    <h1 class="title">PROFILE SITE</h1>
  </header>

  <div class="container">
    @yield('content')
  </div>
</body>
</html>