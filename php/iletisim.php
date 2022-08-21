<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="../css/iletisimphp.css">
    <link rel="icon" href="<%= BASE_URL %>favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Mirasımız</title>
  </head>
  <body>

  <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand mb-0 h1" href="../htmls/index.html">Ana Sayfa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../htmls/ozgecmis.html">Öz Geçmiş</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../htmls/sehrim.html">Şehrim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../htmls/miras.html">Şehrimin Mirası</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../htmls/iletisim.html">İletişim</a>
          </li>
        </ul>
        <li class="nav-item" style="list-style: none;">
          <a class="nav-link" style="color: white;" href="login.html">Giriş</a>
        </li>
      </div>
    </div>
  </nav>
    
    <div class="adminIletisim">
        <div class="row">
            <div class="col adminIletisimTablo">
                <table>
                    <tr>
                        <th>
                            İsim Soyisim
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php echo"".$_POST["isim"]." ".$_POST["soyisim"]?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Telefon Numarası
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php echo"".$_POST["telefon"]?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Cinsiyet
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php echo"".$_POST["cinsiyet"]?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Amaç
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php $amaclar=$_POST['amaç']; foreach($amaclar as $amac){echo" ".$amac.",";}?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Konu
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php echo"".$_POST["konu"]?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kime
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php echo"".$_POST["kime"]?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Mesaj
                        </th>
                        <td>
                            :
                        </td>
                        <td>
                        <?php echo"".$_POST["mesaj"]?>
                        </td>
                    </tr>
                </table>
            <h2></h2>
            </div>
        </div>
    </div>


  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>

