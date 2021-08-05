<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>結果</title>
</head>
<body>
  <h1>料金</h1>
  {{-- {{$enter_date}}
  {{$exit_date}} --}}
  {{-- {{date("Y-m-d H:i:s", $extension_border)}} --}}
  <p>退店予定時間:{{date("Y-m-d H:i:s", $extension_border)}}</p>
  <p>退店時間:{{date("Y-m-d H:i:s", $exit_date_unix)}}</p>
  <p>料金：{{$charge}}円</p>
</body>
</html>