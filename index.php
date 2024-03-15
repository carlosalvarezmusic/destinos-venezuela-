<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script type="text/javascript">
    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle("abajo", window.scrollY > 0);
    })
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="estilos.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <h2>DestinoVNZL</h2>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#perfil">Quienes somos</a></li>
        <li><a href="#">Turismo Nacional</a></li>
        <li><a href="#">Viajes Nacionale</a></li>
        <li><a href="#">Viajes Internacionales</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>

  </header>

  <section class="Zona1">
    <p class="eslogan">Vive una aventura junto a nuestros</p>

    <p class="p">VIAJES.</p>
  </section>

  <main>

    <div class="main">
      <div class="info">
        <section class="perfil" id="perfil">
          <h1>¿Quienes somos?</h1>
          <p class="info2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum necessitatibus illum numquam totam nobis quisquam, atque reiciendis odio tenetur nisi beatae vero doloremque architecto impedit commodi porro placeat! At, quisquam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum necessitatibus illum numquam totam nobis quisquam, atque reiciendis odio tenetur nisi beatae vero doloremque architecto impedit commodi porro placeat! At, quisquam.</p>
        </section>


      </div>
      <div class="img">
        <img src="imagen/quienes_somos.jpg" alt="">
      </div>
    </div>

    <section class="zona2">
      <div class="ofrecen">
        <h1>¿Que Ofrecemos?</h1><br>
        <div class="tour">
          <section class="infoTour">
            <h2>Turismo Nacional</h2>
            <p class="infoTour2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, minima ducimus. Officiis quas aperiam corrupti, impedit, quo beatae maxime omnis voluptatum labore sequi nostrum assumenda magnam excepturi soluta corporis voluptatibus.</p>
          </section>

          <div class="imgTour">
            <img src="imagen/turismo.jpg" width="100%" alt="">
          </div>

        </div>
        <div class="Vnacional">
          <section class="infoVnacional">
            <h2>Viajes Nacionales</h2>
            <p class="infoVnacional2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore illo nobis quasi, enim, in exercitationem adipisci ab eum qui pariatur libero excepturi vel, incidunt itaque! Quaerat, dolores. Quisquam, aut quia.</p>
          </section>

          <div class="imgVnacional">
            <img src="imagen/viajeNacional.jpg" width="100%" alt="">

          </div>

        </div>
        <div class="Vinternacional">
          <section class="infoVinternacional">
            <h2>Viajes Internacionales</h2>
            <p class="infoVinternacional2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta omnis excepturi similique quia sint minus accusantium voluptatibus, vitae debitis voluptas deleniti suscipit corporis molestias, earum temporibus veritatis laborum hic officiis.</p>
          </section>

          <div class="imgVinternacional">
            <img src="imagen/viajesInternacional.jpg" width="100%" alt="">
          </div>

        </div>

      </div>

    </section>
  </main>




  <footer>

    <div class="izquierda">
      <img src="imagen/viaje.jpg" width="60%">
    </div>

    <div class="derecha">
      <h4>Siguenos</h4>

      <a href=""><img src="imagen/facebook.png" alt="" width="18%"></a>
      <a href=""><img src="imagen/instagram.png" alt="" width="18%"></a>
      <h4>Contactanos</h4><br>
      <a href=""><img src="imagen/correo.png" alt="" width="16%"></a><br>
      <a href=""><img src="imagen/whatsapp.png" alt="" width="20%"></a>
    </div>


    <div class="contenedor">
      <p>Todos los derecho Reservados</p>
    </div>


  </footer>

</body>

</html>