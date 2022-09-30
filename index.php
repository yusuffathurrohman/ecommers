<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=0.1" />
    <title>f.store05</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <script>
    const navLinks = document.querySelectorAll('.nav-item')
    const menuToggle = document.getElementById('navbarSupportContent')
    const bsCollaps=new bootstrap.Collapse(menuToggle, {toggle:false})
    navLinks.forEach((l) => {
        l.addEventListener('click',() => { bsCollaps.toggle() })
    })
  </script>
  <body>
  <?php include("navbar.html")?>
  <?php include("heading.html")?>
    <div class="row my-2">
        <div class="col-md col-sm-5 mx-2 my-4 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
                <img href="#" height="100%" width="100%" src="image/images (1).jfif">
            </div>
            <div class="row">
                <a href="#"><p>Sepatu Futsal Limited Edition</p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.12.230.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
               <img height="100%" width="100%" src="image/1.jfif">
            </div>
            <div class="row">
                <a href="#"><p>Sepatu Futsal Specs</p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.280.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
                <img height="100%" width="100%" src="image/2.jfif">
            </div>
            <div class="row">
                <a href="#"><p>Sepatu Futsal Ortuseight</p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.600.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
                <img height="100%" width="100%" src="image/3.jfif">
            </div>
            <div class="row">
                <a href="#"><p>Sepatu Bola Boots</p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.550.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
                <img href="#" height="100%" width="100%" src="image/4.jfif">
            </div>
            <div class="row">
                <a href="#"><p> Sepatu Running Adidas Boots</p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.3.121.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
               <img height="100%" width="100%" src="image/5.jpg">
            </div>
            <div class="row">
                <a href="#"><p>Sepatu Running Nike  </p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.2.295.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
                <img height="100%" width="100%" src="image/6.jfif">
            </div>
            <div class="row">
                <a href="#"><p>Sepatu Running Nike Special Edition </p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.6.250.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
                <img href="#" height="100%" width="100%" src="image/7.jfif">
            </div>
            <div class="row">
                <a href="#"><p>Sepatu Running Limited Edition</p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.230.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <?php include("copyright.html")?>
  </body>
<script src="js/bootstrap.min.js"></script>
</html>