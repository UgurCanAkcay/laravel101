<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ornek Form Sayfası</title>
</head>
<body>
    <form action="{{route('yukle')}}" method="post" enctype="multipart/form-data">
      @csrf

      Resim : <input type="file" name="resim"><br><br>
      <input type="submit" name="ilet" value="Gönder">


    </form>
</body>
</html>
