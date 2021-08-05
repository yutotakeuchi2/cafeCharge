<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>漫画喫茶料金計算</title>
</head>
<body>
  <form action="/calculate" method="POST">
    @csrf
    <input type="date" name="enter_day" id="">
    <input type="time" step="1" name="enter_time" id="">
    <br>
    <input type="date" name="exit_day" id="">
    <input type="time" step="1" name="exit_time" id="">
    <br>
    <select name="course" id="">
      <option value="1h">１時間パック</option>
      <option value="3h">3時間パック</option>
      <option value="5h">5時間パック</option>
      <option value="8h">8時間パック</option>
    </select>
    <input type="submit" name="submit" id="">
  </form>
</body>
</html>