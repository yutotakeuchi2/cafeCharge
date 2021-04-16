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

    <div class="search-wrapper">
    <form method="get" action="/user/search" class="search">
      <input type="text" name="search_name">
      <input type="submit" name="submit" value="検索">
    </form>
    </div>
  </header>

  <div class="container">
    @yield('content')
  </div>
</body>
</html>