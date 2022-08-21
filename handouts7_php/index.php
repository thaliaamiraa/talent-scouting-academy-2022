<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Bootstrap Tutorial Sample Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top">
        <a class="navbar-brand" href="#header">Zahida Painting</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" datatarget="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#header">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
<!-- Header -->
    <header class="page-header header container-fluid" id="header">
        <div class="overlay"></div>
        <div class="description">
            <h1>Selamat Datang di Website</h1>
            <img src="images/zahida.png">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, 
            quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis. 
            Suspendisse consectetur mi id libero fringilla, in pharetra sem ullamcorper.</p>
            <button class="btn btn-outline-secondary btn-lg">Tell Me More!</button>
            </div>
           
    </header>

<!-- about -->
    <div class="container features" id="product"> 
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
        <h3 class="feature-title">Lorem ipsum</h3>
        <img src="images/Dompet Luna Besar Jeans.png" class="img-fluid">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, 
       quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-12">
        <h3 class="feature-title">Lorem ipsum</h3>
        <img src="images/Lalita Dompet Jeans Fix.png" class="img-fluid">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, 
       quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-12">
        <h3 class="feature-title">Lorem ipsum</h3>
        <img src="images/Lalita Dompet Jeans Fix.png" class="img-fluid">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, 
       quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
        </div>
        
        
        </div>
        </div>
       </div>

       <!-- contact -->
 <div class="container features" id="contact">
    <button class="btn btn-outline-secondary btn-lg contact" id="flip">Klik Kontak Kami (Fungsi slider,hide n show)</button>
    <div id="panel">
        <div class="row">
            <div class="col">
              <h1>Kontak Kami</h1>
              <p>
                Silahkan tinggalkan pesan anda, pada kolom yang tersedia.
              </p>
            </div>
          
            <div class="col">
              <form method="post" action="#">
                 
                <div class="form-group">
                  <label for="">Nama Anda:</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                </div>
          
                <div class="form-group">
                  <label for="">E-mail Anda:</label>
                  <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                </div>
          
                <div class="form-group">
                  <label for="">Pesan Anda:</label>
                  <textarea name="pesan" class="form-control" cols="30" rows="7"></textarea>
                </div>
          
                <input class="btn btn-primary" type="submit" value="POST">
          
              </form>
            </div>
          </div>
    </div>
    
</div>

       <!--footer-->
    <footer class="text-center text-white" style="background-color: #b89c2a;">

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright: Zahida Management
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>