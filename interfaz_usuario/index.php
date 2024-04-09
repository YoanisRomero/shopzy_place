<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopzy Place | E-commerce </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/styles.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <link rel="icon" href="../img/logo.png" type="image/png">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-a9A6eV7qH9g2VAHcg/x7rCiIZc5I2AXdy8YO3Q3RI2cGXf5ib+qduKlrZ7eLqNWYA" crossorigin="anonymous"></script>
</head>

<body>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');

main >.container{
  padding: 30px 0;
}
body {
  font-family: 'Raleway', sans-serif;
}

.header_ {
  background: #fff;
}

.navbarr {
  background: #fff;
}

nav {
  margin-top: 30px;
}

.navbar-brand {
  padding-left: 25px;
  padding-right: 25px;
}


.nav_nombres {
  padding: 10px 30px;
  text-decoration: none;
  color: #000;
  font-weight: 500;
  cursor: pointer;
}

img.logo_principal {
  margin-right: 150px;
  margin-left: 70px;
  width: 200px;
  height: 80px;
  cursor: pointer;
  transition: transform 0.3s ease-in-out;
}

img.logo_principal:hover {
  transform: scale(1.1);
}

.icono-pequeno {
  width: 28px;
  height: 29px;
  margin: 0px 10px 0px 10px;
  cursor: pointer;
  transition: transform 0.3s ease-in-out;
}


.icono-pequeno:hover {
  transform: scale(1.1);
}

.form-inline {
  padding-top: 10px;
  padding-bottom: 10px;
}

a.boton_header {
  text-decoration: none;
  font-size: 18px;
  color: #000000;
  font-weight: 700;
  cursor: pointer;
  position: relative;
  border: none;
  background: none;
  padding-left: 25px;
  padding-right: 25px;
  padding-top: 10px;
  padding-bottom: 10px;
  margin-left: 15px;
  margin-right: 15px;
  transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
  transition-duration: 400ms;
  transition-property: color;

}

a.boton_header:focus,
a.boton_header:hover {
  color: rgb(93, 19, 87);
}

a.boton_header:focus:after,
a.boton_header:hover:after {
  width: 100%;
  left: 0%;
}

a.boton_header:after {
  content: "";
  pointer-events: none;
  bottom: 0px;
  left: 50%;
  position: absolute;
  width: 0%;
  height: 1px;
  background-color: rgb(93, 19, 87);
  transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
  transition-duration: 400ms;
  transition-property: width, left;
}

button.boton_header {

  font-size: 18px;
  color: #000000;
  font-weight: 700;
  cursor: pointer;
  position: relative;
  border: none;
  background: none;
  margin-right: 35px;
  margin-left: 35px;
  padding-left: 30px;
  padding-right: 30px;
  transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
  transition-duration: 400ms;
  transition-property: color;
}

button.boton_header:focus,
button.boton_header:hover {
  color: rgb(93, 19, 87);
}

button.boton_header:focus:after,
button.boton_header:hover:after {
  width: 100%;
  left: 0%;
}

button.boton_header:after {
  content: "";
  pointer-events: none;
  bottom: 0px;
  left: 50%;
  position: absolute;
  width: 0%;
  height: 1px;
  background-color: rgb(93, 19, 87);
  transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
  transition-duration: 400ms;
  transition-property: width, left;
}


.busqueda {
  position: relative;
}

.busqueda .input {
  font-size: 16px;
  padding: 10px 10px 10px 5px;
  display: block;
  width: 200px;
  border: none;
  border-bottom: 1px solid #000000;
  background: transparent;
}

.busqueda .input:focus {
  outline: none;
}

.busqueda .label {
  color: #999;
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  left: 5px;
  top: 10px;
  display: flex;
}

.busqueda .label-char {
  transition: 0.2s ease all;
  transition-delay: calc(var(--index) * .05s);
}

.busqueda .input:focus~label .label-char,
.busqueda .input:valid~label .label-char {
  transform: translateY(-20px);
  font-size: 14px;
  color: rgb(93, 19, 87);
}

.busqueda .bar {
  position: relative;
  display: block;
  width: 200px;
}


.busqueda .bar:before {
  left: 50%;
}

.busqueda .bar:after {
  right: 50%;
}

.busqueda .input:focus~.bar:before,
.busqueda .input:focus~.bar:after {
  width: 50%;
}

img.carrusel_img {
  height: 845px;
  width: -webkit-fill-available;
  padding-top: 80px;

}

.carusel_indicador {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: flex;
  justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
}


.carousel-inner {

  align-items: center;
  justify-content: center;
  height: 100%;
}

.carrusel_img {
  object-fit: cover;
  height: 100%;
  width: 100%;
}

.texto_carrusel {
  position: absolute;
  text-align: center;
  color: #fff;
  width: 70%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}


.texto_carrusel p {
  font-size: 25px;
  font-weight: 2px;
}


.texto_carrusel h5 {
  font-size: 35px;
}


.body_iniciar_sesion {
  margin-top: 50px;
  background-color: #f0f0f0;
}

.login-container {
  width: 80%;
  margin: 0 auto;
  display: flex;
}




.login-image {
  flex: 7;
  background-color: #D9D9D9;
  height: 850px;

}

.login-image img{
  width: 1040px;
  height: 850px;
  display: block;
  max-width: 100%;

}


.login-form {
  flex: 3;
  padding: 20px;
  background-color: #ffffff;
  
}

.close-button {
  text-align: right;
}

.logo-and-title {
  text-align: center;
  margin-bottom: 20px;
}

.logo-and-title h2 {
  margin: 0;
}

.form_iniciar_sesion {
  text-align: center;
}

.form-group {
  margin-bottom: 15px;
  position: relative;
}

.input-icon {
  position: absolute;
  left: 10px;
  top: 50%;
  transform: translateY(-50%);
}

.input-icon img {
  width: 20px;
}

.form-group input {
  width: calc(100% - 40px);
  padding: 10px;
  box-sizing: border-box;
  padding-left: 50px;
}

.forgot-password {
  margin-bottom: 85px;
  margin-top: 27px;
}

.forgot-password a {
  color: #000;
  text-decoration: none;
}

.ingresar-link {
  margin-bottom: 20px;
  margin-top: 27px;
}

.ingresar-link a {
  color: #000;
  text-decoration: none;
}

.boton_iniciar_sesion {
  background-color: rgb(93, 19, 87);
  color: #ffffff;
  padding: 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  font-size: 16px;
}

.register-link {
  text-align: center;
  margin-top: 15px;
}

.register-link a {
  color: #000;
  text-decoration: none;
}

.forgot-password .login-image {
  padding: 30px;
}

.close-button img {
  height: 28px;
  width: 29px;
}

.form_iniciar_sesion img {
  height: 28px;
  width: 29px;
}

.form-group img {
  height: 28px;
  width: 28px;


}

.body_registrar_usuario {
  margin-top: 50px;
  background-color: #f0f0f0;
 
}

.register-container {
  width: 80%;
  margin: 0 auto;
  display: flex;
}


.register-image {
  flex: 5;
  background-color: #D9D9D9;
  height: 850px;
}

.register-image img{
  width: 1040px;
  height: 850px;
  display: block;
  max-width: 100%;
}



.register-form {
  flex: 1;
  padding: 20px;
  background-color: #ffffff;
}

.form-logo {
  margin-right: 20px;
  width: 80px;
  height: 32px;
}


.form-buttons {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;

}


.boton_registrarse {

  background-color: rgb(93, 19, 87);
  color: #ffffff;
  padding: 10px;
  border: none;
  cursor: pointer;
  width: 48%;
  font-size: 16px;
  text-decoration: none;

}


.boton_cancelar {
  color: #000000;
  padding: 10px;
  border: none;
  cursor: pointer;
  width: 48%;
  background-color: #ccc;
  margin: 0 20px 0 45px;
  text-align: center;
  text-decoration: none;
}

.boton_cancelar a{
  text-decoration: none;
  color: #000;
}

.formulario-group {
  margin-bottom: 15px;
}

.formulario-group label {
  display: block;
  margin-bottom: 5px;
}

.formulario-group input {
  width: calc(100% - 20px);
  padding: 10px;
  box-sizing: border-box;
}


.formulario-group-half {
  width: 48%;
}


.formulario-row {
  display: flex;
  flex-direction: row;
  margin-bottom: 15px;
  justify-content: space-between;
  align-items: baseline;
}

.formulario-group input,
.formulario-row input {

  width: calc(100% - 20px);
  padding: 10px;
  box-sizing: border-box;
  margin-bottom: 10px;
}


section {
  padding: 50px 0px 50px 0px;
}

#ropa-main {
  width: 100%;
  position: relative;
  text-align: left;
  padding: 50px 0;
}



#ropa-main .seccion-ropa {
  border-radius: 4px;
  position: relative;
}

#ropa-main .seccion-ropa img {
  width: 100%;
  border-radius: 4px 4px 0 0;
}

#ropa-main .seccion-ropa .cont-info {
  background: #000000;
  padding: 14px;
  border-radius: 0 0 4px 4px;
  transition: .4s;
}

#ropa-main .seccion-ropa .cont-info:hover {
  background-color: rgb(93, 19, 87);
}

.seccion-ropa .cont-info h3 {
  font-size: 25px;
  color: #fff;
  font-weight: 600;
}

.seccion-ropa .cont-info p {
  color: #ffffff;
  font-size: 16px;
}

.seccion-ropa {
  padding-top: 50px;
}


#ropa-main-2 {
  width: 100%;
  position: relative;
  text-align: left;
  padding: 50px 0px 70px 0px;
}



#ropa-main-2 .seccion-ropa-2 {
  border-radius: 4px;
  position: relative;
}

#ropa-main-2 .seccion-ropa-2 img {
  width: 100%;
  border-radius: 4px 4px 0 0;
}

#ropa-main-2 .seccion-ropa-2 .cont-info {
  background: #000000;
  padding: 14px;
  border-radius: 0 0 4px 4px;
  transition: .4s;
}

#ropa-main-2 .seccion-ropa-2 .cont-info:hover {
  background-color: rgb(18, 67, 13);
}

.seccion-ropa-2 .cont-info h3 {
  font-size: 25px;
  color: #fff;
  font-weight: 600;
}

.seccion-ropa-2 .cont-info p {
  color: #ffffff;
  font-size: 16px;
}

.seccion-ropa-2 {
  padding-top: 50px;
}


#footer {
  background-color: #000;
  text-align: center;
  padding: 20px;
  color: #fff;
}


.footer-content {
  max-width: 600px;
  margin: 0 auto;
}

.footer-content h6 {
  font-size: 25px;
  margin-bottom: 16px;
  margin-top: 16px;

}

.logo-container {
  padding: 11px 0px 11px 0px;
}

.logo-container img {
  padding: 0px 4px 0px 4px;
}

.confirmar_registro {
            
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background-color: #f8f9fa;
}



.confirmar_registro h2 {
  font-size: 30px;
  margin-top: 75px;
  margin-bottom: 14px;
  color: #000;
  text-align: center;
          }

.confirmar_registro h3{
  font-size: 28px;
}

.confirmar_registro a .logo {
  text-align: center;
  font-size: 24px;
  margin-top: 28px;
  }



.confirmar_registro .close-button{
text-align: right;
}     


.confirmar_registro img{
position: relative;
height: 29px;
width: 28px;
text-align: right;
}


.confirmar_registro img.verificado {
  display: block;
  margin: auto;
}


.confirmar_registro .verificado{

position:relative;
height: 45px;
width: 45px;
text-align: center;
}


.confirmar_registro .account .block {
  background-color: rgb(255, 255, 255);
  border: 1px solid rgb(222, 222, 222);
  padding: 30px;
  max-width: 500px;
  width: 100%;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  
}

.confirmar_registro .form-group {
  margin-bottom: 20px;
}

.confirmar_registro .account .block form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.confirmar_registro .btn-main {
background-color: rgb(93, 19, 87);
color: #fff;
padding: 16px;
border: none;
cursor: pointer;
font-size: 16px;
text-decoration: none;
margin-top: 85px;
}


.confirmar_registro a{
text-decoration: none;
color: #000;
text-align: center;
}

.recuperar_contraseña {
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background-color: #f8f9fa; 
}



.recuperar_contraseña h2 {
  font-size: 30px;
  margin-top: 53px;
  margin-bottom: 48px;
  color: #000;
  text-align: center;
          }

.recuperar_contraseña h3{
  font-size: 28px;
}

.recuperar_contraseña a .logo {
  text-align: center;
  font-size: 24px;
  margin-top: 28px;
  }



.recuperar_contraseña .close-button{
text-align: right;
}     



.recuperar_contraseña img{
position: relative;
height: 29px;
width: 28px;
text-align: right;
}


.recuperar_contraseña .account .block {
  background-color: rgb(255, 255, 255);
  border: 1px solid rgb(222, 222, 222);
  padding: 30px;
  max-width: 500px;
  width: 100%;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  
}



.recuperar_contraseña p {
text-align: left;
  color: #777;
  font-size: 16px;
  margin: 0 0 44px;
}

.recuperar_contraseña .form-group {
  margin-bottom: 20px;
}

.recuperar_contraseña .account .block form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.recuperar_contraseña input[type="email"] {
width: 100%;
  box-sizing: border-box;
  padding: 10px;
  margin-bottom: 15px;
}

.recuperar_contraseña .btn-main {
background-color: rgb(93, 19, 87);
color: #ffffff;
padding: 16px;
border: none;
cursor: pointer;
font-size: 16px;
text-decoration: none;
margin-top: 41px;
}

.recuperar_contraseña .mt-20 {
  margin-top: 22px;
  text-align: center;
}


.recuperar_contraseña a{
text-decoration: none;
color: #000;
text-align: center;
}

.confirmar_registro {
            
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background-color: #f8f9fa;
}



.confirmar_registro  h2 {
  font-size: 30px;
  margin-top: 75px;
  margin-bottom: 14px;
  color: #000;
  text-align: center;
          }

.confirmar_registro h3{
  font-size: 28px;
}

.confirmar_registro a .logo {
  text-align: center;
  font-size: 24px;
  margin-top: 28px;
  }



.confirmar_registro .close-button{
text-align: right;
}     


.confirmar_registro img{
position: relative;
height: 29px;
width: 28px;
text-align: right;
}

.confirmar_registro img.verificado {
  display: block;
  margin: auto;
}

.confirmar_registro .verificado{
position:relative;
height: 45px;
width: 45px;
text-align: center;
}


.confirmar_registro .account .block {
  background-color: rgb(255, 255, 255);
  border: 1px solid rgb(222, 222, 222);
  padding: 30px;
  max-width: 500px;
  width: 100%;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  
}

.confirmar_registro .form-group {
  margin-bottom: 20px;
}

.confirmar_registro .account .block form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.confirmar_registro .btn-main {
background-color: rgb(93, 19, 87);
color: #fff;
padding: 16px;
border: none;
cursor: pointer;
font-size: 16px;
text-decoration: none;
margin-top: 85px;
}


.confirmar_registro a{
text-decoration: none;
color: #000;
text-align: center;
}


.form-group img{
position: absolute;
margin: 5px 8px 5px 8px;
 
 
}
</style>

  <header>
    <nav class="navbarr navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="header_ navbar-collapse" id="navbarTogglerDemo01">
          <img class="logo_principal" src="../img/logo largo.png" alt="">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="boton_header" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="boton_header" href="#main">Catálogo</a>
            </li>
            <li class="nav-item">
              <a class="boton_header " aria-disabled="page" href="#footer">Contacto</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <div class="busqueda">
              <input required="" type="text" class="input">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">B</span>
                <span class="label-char" style="--index: 1">ú</span>
                <span class="label-char" style="--index: 2">s</span>
                <span class="label-char" style="--index: 3">q</span>
                <span class="label-char" style="--index: 4">u</span>
                <span class="label-char" style="--index: 5">e</span>
                <span class="label-char" style="--index: 6">d</span>
                <span class="label-char" style="--index: 7">a</span>
              </label>
            </div>
            <button class="boton_header" type="submit">Buscar</button>
            <div class="form-inline">
              <a href=""><img src="/img/carrito-de-compras.png" alt="Carrito de Compras" class="icono-pequeno"></a>
              <a href="/interfaz_usuario/usuario/logo img.png"><img src="/img/usuario img.png" alt="Perfil" class="icono-pequeno"></a>
            </div>

          </form>
        </div>
      </div>
    </nav>
    </nav>





    <div id="carouselExampleDark" class="carousel  slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner" data-aos="fade-up" data-aos-duration="3000">
        <div class="carousel-item active" data-bs-interval="10000">
          <img class="carrusel_img" src="../img/ropa negra img 1.jpg" alt="...">
          <div class="texto_carrusel d-none d-md-block">
            <h5>NUEVOS PRODUCTOS</h5>
            <p>Te invitamos a ver nuestros nuevos productos en Shoppy Plazy</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img class="carrusel_img" src="../img/ropa negra img 2.jpeg" alt="...">
          <div class="texto_carrusel d-none d-md-block">
            <h5>NUEVAS TENDENCIAS</h5>
            <p>Se crean nuevas tendencias y las tenemos en Shoppy Plazy</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="carrusel_img" src="../img/ropa negra img 3.jpg" alt="...">
          <div class="texto_carrusel d-none d-md-block">
            <h5>NUEVA MODA</h5>
            <p>Nueva ropa es igual a nueva moda y está en Shoppy Plazy</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  </header>



  <main id="main">

    <section id="ropa-main">
      <div class="container">
        <div class="row">
          <article class="col-lg-4 seccion-ropa" data-aos="fade-up">
            <img src="/img/main ropa 1.jpg" alt="destacada1">
            <div class="cont-info">
              <h3>Falda Morada</h3>
              <p>$100.000</p>
            </div>
          </article>
          <article class="col-lg-4 seccion-ropa" data-aos="fade-up">
            <img src="/img/main ropa 2.jpg" alt="destacada2">
            <div class="cont-info">
              <h3>Vestido Morado</h3>
              <p>$200.000</p>
            </div>
          </article>
          <article class="col-lg-4 seccion-ropa" data-aos="fade-up">
            <img src="/img/main ropa 3.jpg" alt="destacada3">
            <div class="cont-info">
              <h3>Chaqueta Lila</h3>
              <p>$150.000</p>
            </div>
          </article>
        </div>
      </div>


    </section>

    <section id="ropa-main-2">
      <div class="container">
        <div class="row">
          <article class="col-lg-4 seccion-ropa-2" data-aos="fade-down">
            <img src="/img/main ropa 4.png" alt="destacada1">
            <div class="cont-info">
              <h3>Pantalon Verde</h3>
              <p>$120.000</p>
            </div>
          </article>
          <article class="col-lg-4 seccion-ropa-2" data-aos="fade-down">
            <img src="/img/main ropa 5.png" alt="destacada2">
            <div class="cont-info">
              <h3>Chaqueta Verde</h3>
              <p>$160.000</p>
            </div>
          </article>
          <article class="col-lg-4 seccion-ropa-2" data-aos="fade-down">
            <img src="/img/main ropa 6.png" alt="destacada3">
            <div class="cont-info">
              <h3>Vestido Enterizo Verde</h3>
              <p>$200.000</p>
            </div>
          </article>
        </div>
      </div>


    </section>



    <!-- <section>

          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="profile-image">
                  <a href=""><img src="#" alt="Ropa 1"></a>
                  <div class="titulo-ropa">
                    Blusa Negra
                  </div>
                </div>
              </div>
              <div class="flip-card-back">
                <p class="description">
                  Hello, I am a software engineer with over 5 years of experience in web development. I specialize in building scalable, high-performance web applications using modern web technologies such as React, Angular, and Node.js.
                </p>
              </div>
            </div>
          

          </section> -->





  </main>


  <footer id="footer">


    <div class="footer-content">
      <b>
        <h6>SHOPPY PLAZY</h6>
      </b>
      <p><b>Numero de contacto:</b> 3224392572</p>
      <p><b>Correo electrónico:</b> Shopzy_Place@gmail.com</p>
    </div>

    <div class="logo-container">
      <a href=""><img src="/img/instagram.png" alt="Instagram" class="logo"></a>
      <a href="https://wa.link/mxfdg1"><img src="/img/whatsapp.png" alt="Whatsapp" class="logo"></a>
      <a href=""><img src="/img/facebook.png" alt="Facebook" class="logo"></a>
    </div>


  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy2nxDmM93eZjJzIq6tFqFjc9Fq0FyDflJ" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="/js/js.js"></script>
</body>

</html>