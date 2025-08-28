<?php
session_start(); // importante si aún no se ha hecho
include "./views/encabezado.php";
include "./views/mostrar_carrito.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <link rel="stylesheet" href="./css/cards.css">
    <link rel="stylesheet" href="./css/stylercss">
    <link rel="stylesheet" href="./css/carrucel.css">
    <link rel="stylesheet" href="./css/carousel3.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/carousel.js"></script>
    <script src="./js/carousel2.js"></script>
    <script src="./js/carousel3.js"></script>


    <!-- Tu CSS y otros recursos -->
<

</head>

<body>
    <div class="container">
        <br>
        <h1 class="text-center"><b>Tienda Online</b></h1>

         <?php echo $mensaje; ?>

       
        <!-- Banner fuera del bucle -->
        <div class="content">
            <div class="">
                <div class="component-wrapper">
                    <div style="display:contents">
                        <a class="banner-text-img banner-text-img--without-opacity" href="https://www.gamingcity.com.ar/amd-radeon_DisplayType_G" rel="" target="_self">
                            <div class="banner-text" style="background-position: center center; background-blend-mode: normal; aspect-ratio: 3 / 1;" role="banner">
                                <img decoding="async" src="https://http2.mlstatic.com/D_NQ_NP_832967-MLA81190511905_122024-F.webp" class="banner__image" alt="¡Sumá muchos productos a tu carrito y aprovechá el envío gratis!">
                                <div class="andes-card banner-card andes-card--animated andes-card--flat andes-card--padding-16" id=":r3:">
                                    <div class="banner-text__content banner-text__content--center"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin del banner -->
        
        <!-- Nuevo Carrusel con Tarjetas -->
  <section
    aria-label="new-products-carousel"
    aria-roledescription="Carrusel de nuevos productos"
    class="andes-carousel-snapped__container"
    id="carousel-new-products"
  >
    <div class="andes-carousel-snapped__controls-wrapper">
      <!-- Botón de navegación anterior -->
      <button
        class="ui-ms-products-carousel__control ui-ms-products-carousel__control--previous"
        id="prevBtn"
        type="button"
        aria-label="Anterior"
      >
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M21.0599 24.9395L12.1206 16.0001L21.0599 7.06077L18.9386 4.93945L7.87793 16.0001L18.9386 27.0608L21.0599 24.9395Z" fill="#3483FA"></path>
        </svg>
      </button>

      <!-- Carrusel de tarjetas -->
      <div class="andes-carousel-snapped ui-ms-products-carousel">
        <div
          class="andes-carousel-snapped__wrapper"
          id="carousel-wrapper"
          style="display: flex; transition: transform 0.3s ease-in-out; transform: translateX(0);"
        >
          <!-- Elemento del carrusel: Card 1 -->
          <div class="andes-carousel-snapped__slide">
            <div class="product-card">
              <img src="./img/pag5.jpg" alt="Producto 1" class="product-img" />
              <div class="product-info">
               
                <p class="product-description">Descripción del producto 1. Aquí va una breve descripción.</p>
                <p class="product-price">$99.99</p>
                <button class="buy-btn">Comprar</button>
              </div>
            </div>
          </div>
          <!-- Elemento del carrusel: Card 2 -->
          <div class="andes-carousel-snapped__slide">
            <div class="product-card">
              <img src="./img/silla2.jpg" alt="Producto 2" class="product-img" />
              <div class="product-info">
                <p class="product-description">silla gamer corsair color negro rojo material tapizado traspirable</p>
                <p class="product-price">$89.99</p>
                <button class="buy-btn">Comprar</button>
              </div>
            </div>
          </div>
          <!-- Elemento del carrusel: Card 3 -->
          <div class="andes-carousel-snapped__slide">
            <div class="product-card">
              <img src="./img/gabinete9.jpg" alt="Producto 3" class="product-img" />
              <div class="product-info">
                <p class="product-description">Gabinete Thermaltake View 170 Tg Argb Color Negro</p>
                <p class="product-price">$224.100</p>
                <button class="buy-btn">Comprar</button>
              </div>
            </div>
          </div>
          <!-- Elemento del carrusel: Card 4 -->
          <div class="andes-carousel-snapped__slide">
            <div class="product-card">
              <img src="./img/monitor10.jpg" alt="Producto 4" class="product-img" />
              <div class="product-info">
                <p class="product-description">Descripción del producto 4. Aquí va una breve descripción.</p>
                <p class="product-price">$69.99</p>
                <button class="buy-btn">Comprar</button>
              </div>
            </div>
          </div>
          <!-- Elemento del carrusel: Card 5 -->
          <div class="andes-carousel-snapped__slide">
            <div class="product-card">
              <img src="./img/fuentepoder1.jpg" alt="Producto 5" class="product-img" />
              <div class="product-info">
                <p class="product-description">Descripción del producto 5. Aquí va una breve descripción.</p>
                <p class="product-price">$59.99</p>
                <button class="buy-btn">Comprar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Botón de navegación siguiente -->
      <button
        class="ui-ms-products-carousel__control ui-ms-products-carousel__control--next"
        id="nextBtn"
        type="button"
        aria-label="Siguiente"
      >
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M10.9399 7.0605L19.8792 16.0001L10.9399 24.9394L13.0612 27.0607L24.1218 16.0001L13.0612 4.93944L10.9399 7.0605Z" fill="#3483FA"></path>
        </svg>
      </button>
    </div>
  </section>

  

     

         <!-- Nuevo banner en la mitad de la página -->
         <div class="content-list__container__4-elements">
            <h5 class="content-list__title">LAS COMPUTADORAS MÁS ELEGIDAS</h5>
            <div class="content-list__elements-container content-list__4-elements">
                <div class="content-element content-element--align-left">
                    <div class="content-element__img-container">
                        <img decoding="async" src="https://http2.mlstatic.com/D_NQ_NP_625534-MLA79304469682_092024-F.webp" class="content-element__image classic" alt="DE ENTRADA">
                    </div>
                    <div class="content-element__container-text">
                        <h4 class="content-element__title">DE ENTRADA</h4>
                        <p class="content-element__description">Si estás buscando una PC para trabajar y/o estudiar, esta es tu opción</p>
                        <a href="https://www.gamingcity.com.ar/MLA-1116103939-pc-armada-oficina-hogar-intel-pentium-8gb-ram-y-ssd-_JM" target="_blank"> Ver más
</a>

                    </div>
                </div>
                <div class="content-element content-element--align-left">
                    <div class="content-element__img-container">
                        <img decoding="async" src="https://http2.mlstatic.com/D_NQ_NP_861553-MLA79548010687_092024-F.webp" class="content-element__image classic" alt="LA GAMER INICIAL">
                    </div>
                    <div class="content-element__container-text">
                        <h4 class="content-element__title">LA GAMER INICIAL</h4>
                        <p class="content-element__description">Si estás buscando algo para arrancar a jugar, no dudes más</p>
                        <a href="https://www.gamingcity.com.ar/MLA-1116103939-pc-armada-oficina-hogar-intel-pentium-8gb-ram-y-ssd-_JM" target="_blank"> Conocer mas</a>
                    </div>
                </div>
                <div class="content-element content-element--align-left">
                    <div class="content-element__img-container">
                        <img decoding="async" src="https://http2.mlstatic.com/D_NQ_NP_711142-MLA79304464898_092024-F.webp" class="content-element__image classic" alt="LA POPULAR">
                    </div>
                    <div class="content-element__container-text">
                        <h4 class="content-element__title">LA POPULAR</h4>
                        <p class="content-element__description">La más buscada por todos, la PC ideal para jugar y calidad-precio</p>
                        <a href="https://www.gamingcity.com.ar/MLA-1116103939-pc-armada-oficina-hogar-intel-pentium-8gb-ram-y-ssd-_JM" target="_blank"> Ver más</a>
                    </div>
                </div>
                <div class="content-element content-element--align-left">
                    
                </div>
            </div>
        </div>
        <!-- Fin del nuevo banner -->

            <?php
            include "./includes/db.php";
            $consult = "SELECT * FROM inventario ORDER BY id DESC LIMIT 4"; // Mostrar los últimos 10 productos
            $result = mysqli_query($conexion, $consult);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($fila = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-md-4">
                        <br>
                        <div class="card">
                            <!-- Imagen dinámica desde la base de datos -->
                            <img src="<?php echo $fila['name_file']; ?>" class="card-img-top" alt="Imagen del producto">
                            <div class="card-body">
                                <h5 class="card-title text-center"><b><?php echo $fila['descripcion']; ?></b></h5>
                                <p class="card-text text-center stock">Stock: <?php echo $fila['stock']; ?></p>
                                <p class="card-text text-center status">Status: <?php echo $fila['status']; ?></p>
                                <p class="card-text text-center">Precio: <?php echo '$' . $fila['precioVenta']; ?></p>
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <input type="hidden" class="precioVenta" value="<?php echo $fila['precioVenta']; ?>">
                                        <button class="btn btn-primary agregar-carrito" style="width: 100%;"
                                            data-id="<?php echo $fila['id']; ?>"
                                            data-descripcion="<?php echo $fila['descripcion']; ?>"
                                            data-precioVenta="<?php echo $fila['precioVenta']; ?>"
                                            data-status="<?php echo $fila['status']; ?>"
                                            data-stock="<?php echo $fila['stock']; ?>">
                                            <b>Agregar al carrito</b> <i class="fa fa-shopping-cart"></i> 
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<p class='text-center'>No hay productos disponibles.</p>";
            }
            ?>
          <!-- Banner antes del final de la página -->
<div class="banner-text-img banner-text-img--no-pointer banner-text-img--without-opacity">
    <div class="banner-text" style="background-position: center center; background-blend-mode: normal; aspect-ratio: 6 / 1;" role="banner">
        <img decoding="async" src="https://http2.mlstatic.com/D_NQ_NP_623231-MLA80924376886_122024-F.webp" class="banner__image" alt="¡Sumá muchos productos a tu carrito y aprovechá el envío gratis!">
        <div class="andes-card banner-card andes-card--animated andes-card--flat andes-card--padding-16" id=":r3:">
            <div class="banner-text__content banner-text__content--center">
                <!-- Puedes agregar algún texto adicional aquí si lo deseas -->
            </div>
        </div>
    </div>
</div>

<!-- Cierre de la página -->



<!-- Carrucel3 con Categorías -->
<div class="carrucel3-container">
    <div class="categories">
        <button class="category-btn" data-category="electronica">Electrónica</button>
        <button class="category-btn" data-category="ropa">Ropa</button>
        <button class="category-btn" data-category="juguetes">Juguetes</button>
        <button class="category-btn" data-category="otros">Otros</button>
    </div>
   <!-- Carrusel de productos con flechas de navegación -->
<div class="carousel-container">
    <!-- Flecha izquierda para mover el carrusel hacia la izquierda -->
    <button class="carousel-arrow prev" id="prevBtn">←</button>

    <!-- Contenedor de los productos (tarjetas) -->
    <div class="carousel-wrapper" id="carousel-wrapper">
    <div id="carrucel3-cards" class="row">
        <?php
        include "./includes/db.php";
        $consult = "SELECT * FROM inventario WHERE categoria = 'electronica' ORDER BY id DESC LIMIT 4"; // Mostrar 4 productos iniciales
        $result = mysqli_query($conexion, $consult);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($fila = mysqli_fetch_assoc($result)) {
        ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="<?php echo $fila['name_file']; ?>" class="card-img-top" alt="Imagen del producto">
                        <div class="card-body">
                            <h5 class="card-title text-center"><b><?php echo $fila['descripcion']; ?></b></h5>
                            <p class="card-text text-center">Precio: <?php echo '$' . $fila['precioVenta']; ?></p>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p class='text-center'>No hay productos disponibles en esta categoría.</p>";
        }
        ?>
    </div>
</div>
 <!-- Flecha derecha para mover el carrusel hacia la derecha -->
 <button class="carousel-arrow next" id="nextBtn">→</button>
</div>

    <br>
    <br>
    <?php include "./views/pie.php"; ?>

</body>

</html>