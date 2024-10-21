<!DOCTYPE html>
<html>
<head>
    <title>{{ $params['subject'] }}</title>
</head>
<body>
    <br>
    <h3>{{ $params["name"]}}　様からのお問い合わせ</h3>
    <br>
    {{ $params["email"]}}<br>
    <br>
    -------------------------------------------------------------<br>
    <br>
    {{ $params["message"]}}<br>
    <br>
    -------------------------------------------------------------<br>
    <br>
    <br>
    <p>ご確認よろしくお願いいたします。</p>
</body>
</html>