<style>
    .navbar {
        background-color: #000000;
    }

    .navbar-brand img {
        width: 150px;
    }

    .navbar-nav .nav-link,
    .navbar-nav .nav-item {
        color: #fff;
    }

    .product img {
        width: 100%;
        height: auto;
    }

    .navbar-nav .nav-link {
        color: #fff !important;
        background-color: #ff0000 !important;
        padding: 8px 16px;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .card {
        height: 100%;
        /* Asegura que todos los cuadros tengan la misma altura */
        display: flex;
        flex-direction: column;
        /* Hace que los elementos dentro del card se apilen verticalmente */
        justify-content: space-between;
        /* Espacia uniformemente los elementos */
    }

    .card-body {
        color: red;
        /* Cambia el color del texto de la descripción */
    }

    .card-text {
        color: black;
        /* Color de la descripción de los productos */
    }
</style>

<div class="container my-5">
    <h1 class="text-center mb-5">¡Novedades y Ofertas!</h1>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href="<?php echo BASE_URL ?>detalleproducto">
                    <img src="https://elricostore.com/wp-content/uploads/2021/04/conjunto_polo_short_dragonball_3-min.jpg" class="card-img-top product" alt="Product 1">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Polo Diseñado Exclusivamente</h5>
                    <p class="card-text">Un polo diseñado únicamente pensando en ti.</p>
                    <p class="card-text font-weight-bold">S/130.00</p>
                    <p class="card-text">TALLAS DISPONIBLES: S, M, L, XL, XXL</p>
                    <a href="<?php echo BASE_URL ?>carrito" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href="<?php echo BASE_URL ?>detalleproducto">
                    <img src="https://abejareinaperu.com/wp-content/uploads/2021/05/casaca-dragon-ball-z.jpeg" class="card-img-top product" alt="Product 2">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Poleras de Dragon Ball Z</h5>
                    <p class="card-text">Poleras que los personajes de Dragon Ball Z son uno de los grandes buscados.</p>
                    <p class="card-text font-weight-bold">S/130.00</p>
                    <p class="card-text">TALLAS DISPONIBLES: S, M, L, XL, XXL</p>
                    <a href="<?php echo BASE_URL ?>carrito" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href="<?php echo BASE_URL ?>detalleproducto">
                    <img src="https://goku-shop.es/cdn/shop/products/product-image-595661469.jpg?v=1574611707&width=533" class="card-img-top product" alt="Product 3">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Polos de Dragon Ball Z</h5>
                    <p class="card-text">Polos que los personajes de Dragon Ball Z son uno de los grandes buscados.</p>
                    <p class="card-text font-weight-bold">S/130.00</p>
                    <p class="card-text">TALLAS DISPONIBLES: S, M, L, XL, XXL</p>
                    <a href="<?php echo BASE_URL ?>carrito" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href="<?php echo BASE_URL ?>detalleproducto">
                    <img src="https://abejareinaperu.com/wp-content/uploads/2021/05/polera-dragon-ballz.jpeg" class="card-img-top product" alt="Product 4">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Polo de Manga Larga</h5>
                    <p class="card-text">Un polo diseñado para los que suelen utilizar las mangas largas.</p>
                    <p class="card-text font-weight-bold">S/130.00</p>
                    <p class="card-text">TALLAS DISPONIBLES: S, M, L, XL, XXL</p>
                    <a href="<?php echo BASE_URL ?>carrito" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>