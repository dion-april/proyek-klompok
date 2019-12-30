<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Master Resep</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/1140.css" type="text/css" media="screen">
<style type="text/css">
  .login {
  padding: 1em;
  margin: 2em auto;
  width: 17em;
  background: #fff;
  border-radius: 3px;
}

label {
  font-size: 10pt;
  color: #555;
}

input[type="text"],
input[type="password"],
textarea {
  padding: 8px;
  width: 95%;
  background: #efefef;
  border: 0;
  font-size: 10pt;
  margin: 6px 0px;
}

.tombol {
  background: #3498db;
  color: #fff;
  border: 0;
  padding: 5px 8px;
  margin: 20px 0px;
}
</style>
</head>
<body>
<div class="container">
  <div class="row">
    <header>
      <div class="sixcol"> <a href="#" id="logo"><img src="images/logo.png" width="303" height="120" alt=""></a> </div>
    </header>
  </div>
</div>
<div class="container">
  <div class="row">
    <section id="intro" class="onecol">
      <hgroup>
        <h1>MASUKAN RESEP ANDA</h1>
        </section>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="holder_content1">
      <section class="group4">
  <form method="post" name="posting_form" action="submit.php">
Judul Artikel<br>
<input type="text" name="judul_artikel" size="30"><br>
Isi Artikel<br>
<textarea name="isi_artikel" cols="60" rows="10"></textarea><br>
<input type="submit" name="submit" value="submit artikel">
</form>
 
  
  <br/>
  <br/>
</body>
 
<script type="text/javascript">
  function validasi() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;   
    if (username != "" && password!="") {
      return true;
    }else{
      alert('Username dan Password harus di isi !');
      return false;
    }
  }
 
</script>
</div>
<footer>
  <div class="container copyright">
    <div class="row">
      <div class="sixcol">
        <div id="FooterTree"> &copy; 2019 chef dika </div>
      </div>
      <div class="sixcol last">
        <div id="FooterTwo">contact person admin :</div>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
