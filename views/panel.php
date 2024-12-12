<body>
    <div class="container my-4">
        <h2 class="text-center mb-4 text-uppercase fw-bold" style="color: #FF3737; font-size: 36px;">Bienvenido Administrador al Mundo de Dragon Ball Z</h2>
        <div class="row g-4">
            <!-- Productos -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg border-0 hover-scale" style="background-image: linear-gradient(to bottom, #FFC107, #FF9800);">
                    <div class="card-body text-center">
                        <div class="text-danger mb-3">
                            <i class="bi bi-box-seam display-1" style="color: #FF3737;"></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color: white;">PRODUCTOS</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="<?php echo BASE_URL ?>nuevo-producto" class="btn btn-danger btn-sm" aria-label="Registrar Esfera">
                                <i class="bi bi-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>productos" class="btn btn-secondary btn-sm" aria-label="Ver Esferas">
                                <i class="bi bi-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Usuarios -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg border-0 hover-scale" style="background-image: linear-gradient(to bottom, #03A9F4, #2196F3);">
                    <div class="card-body text-center">
                        <div class="text-danger mb-3">
                            <i class="bi bi-people display-1" style="color: #FF3737;"></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color: white;">USUARIOS Z</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="<?php echo BASE_URL ?>nuevo-persona" class="btn btn-danger btn-sm" aria-label="Registrar Guerrero">
                                <i class="bi bi-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>usuarios" class="btn btn-secondary btn-sm" aria-label="Ver Guerreros">
                                <i class="bi bi-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categorías -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg border-0 hover-scale" style="background-image: linear-gradient(to bottom, #8BC34A, #3E8E41);">
                    <div class="card-body text-center">
                        <div class="text-danger mb-3">
                            <i class="bi bi-tags display-1" style="color: #FF3737;"></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color: white;">CATEGORIAS</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="<?php echo BASE_URL ?>nuevo-categoria" class="btn btn-danger btn-sm" aria-label="Registrar Planeta">
                                <i class="bi bi-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>categorias" class="btn btn-secondary btn-sm" aria-label="Ver Planetas">
                                <i class="bi bi-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Compras -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg border-0 hover-scale" style="background-image: linear-gradient(to bottom, #FF69B4, #FFC0CB);">
                    <div class="card-body text-center">
                        <div class="text-danger mb-3">
                            <i class="bi bi-cart4 display-1" style="color: #FF3737;"></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color: white;">COMPRAS Z</h5>
                        <div class="d-flex justify-content-between mt-3 ```html
                            <a href="<?php echo BASE_URL ?>nuevo-compra" class="btn btn-danger btn-sm" aria-label="Registrar Compra">
                                <i class="bi bi-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>compras" class="btn btn-secondary btn-sm" aria-label="Ver Compras">
                                <i class="bi bi-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS de Hover para las Tarjetas -->
    <style>
        .hover-scale:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
        .btn-danger:hover {
            background-color: black; /* Cambia el color al pasar el cursor */
            color: white; /* Cambia el color del texto al pasar el cursor */
        }
        .text-danger:hover {
            color: #FF5C5C; /* Cambia el color del texto al pasar el cursor */
        }
        .card {
            border-radius: 20px;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 24px;
        }
    </style>
</body>