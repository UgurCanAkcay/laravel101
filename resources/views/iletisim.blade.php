<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Iletisim Formu</title>
</head>
<body>
    <form action="{{route('iletisim-sonuc')}}" method="post">
      @csrf

      <label>Ad Soyad</label><br>
      <input type="text" name="adsoyad"><br>
      <label>Telefon</label><br>
      <input type="text" name="telefon"><br>
      <label>E-mail</label><br>
      <input type="text" name="mail"><br>
      <label>Mesaj</label><br>
      <textarea name="metin" style="width:300px; height:200px;"></textarea><br><br>
      <input type="submit" name="ilet" value="Gönder">


    </form>
</body>
</html>
