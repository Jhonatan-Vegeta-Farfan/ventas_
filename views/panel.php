<body>
    <!-- EFECTOS ESPECIALES -->
    <div class="alien-scanner"></div>
    <div class="ufo-fleet" style="top: 15%; animation: fly 25s linear infinite;"></div>
    <div class="ufo-fleet" style="top: 65%; animation: fly 30s linear infinite 5s;"></div>
    <div class="ufo-fleet" style="top: 40%; animation: fly 35s linear infinite 10s; width: 80px; height: 40px;"></div>
    <div class="parallax-bg"></div>

    <div class="container my-4">
        <h2 class="text-center mb-4 text-uppercase fw-bold" style="color: var(--ufo-blue); text-shadow: 0 0 10px var(--alien-green);">PANEL DE CONTROL ALIENÍGENA</h2>
        <div class="row g-4">
            <!-- Productos -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg border-0 hover-scale card-productos">
                    <div class="card-body text-center">
                        <div class="mb-3" style="color: var(--alien-green);">
                            <i class="fas fa-cubes display-1"></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color: var(--ufo-blue);">ARTEFACTOS EXTRATERRESTRES</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="<?php echo BASE_URL ?>nuevo-producto" class="btn btn-producto btn-sm" aria-label="Registrar Producto">
                                <i class="fas fa-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>productos" class="btn btn-ver btn-sm" aria-label="Ver Productos">
                                <i class="fas fa-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Usuarios -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg border-0 hover-scale card-usuarios">
                    <div class="card-body text-center">
                        <div class="mb-3" style="color: var(--alien-purple);">
                            <i class="fas fa-user-astronaut display-1"></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color: var(--ufo-blue);">ESPECIES INTERGALÁCTICAS</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="<?php echo BASE_URL ?>nuevo-persona" class="btn btn-usuario btn-sm" aria-label="Registrar Usuario">
                                <i class="fas fa-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>usuarios" class="btn btn-ver btn-sm" aria-label="Ver Usuarios">
                                <i class="fas fa-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categorías -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg border-0 hover-scale card-categorias">
                    <div class="card-body text-center">
                        <div class="mb-3" style="color: var(--energy-pink);">
                            <i class="fas fa-atom display-1"></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color: var(--ufo-blue);">DIMENSIONES</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="<?php echo BASE_URL ?>nuevo-categoria" class="btn btn-categoria btn-sm" aria-label="Registrar Categoría">
                                <i class="fas fa-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>categorias" class="btn btn-ver btn-sm" aria-label="Ver Categorías">
                                <i class="fas fa-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Compras -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-lg border-0 hover-scale card-compras">
                    <div class="card-body text-center">
                        <div class="mb-3" style="color: var(--ufo-blue);">
                            <i class="fas fa-rocket display-1"></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color: var(--ufo-blue);">EXPEDICIONES</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="<?php echo BASE_URL ?>nuevo-compra" class="btn btn-compra btn-sm" aria-label="Registrar Compra">
                                <i class="fas fa-plus-circle me-1"></i> Registrar
                            </a>
                            <a href="<?php echo BASE_URL ?>compras" class="btn btn-ver btn-sm" aria-label="Ver Compras">
                                <i class="fas fa-eye me-1"></i> Ver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS de Hover para las Tarjetas -->
    <style>
        .hover-scale {
            transition: all 0.3s ease;
            background: rgba(20, 10, 40, 0.7) !important;
            border: 2px solid var(--alien-green) !important;
            color: var(--alien-green);
        }

        .hover-scale:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 0 30px var(--alien-green);
            border-color: var(--ufo-blue) !important;
        }

        .card-productos {
            border-color: var(--alien-green) !important;
        }

        .card-productos:hover {
            box-shadow: 0 0 30px var(--alien-green) !important;
        }

        .card-usuarios {
            border-color: var(--alien-purple) !important;
        }

        .card-usuarios:hover {
            box-shadow: 0 0 30px var(--alien-purple) !important;
        }

        .card-categorias {
            border-color: var(--energy-pink) !important;
        }

        .card-categorias:hover {
            box-shadow: 0 0 30px var(--energy-pink) !important;
        }

        .card-compras {
            border-color: var(--ufo-blue) !important;
        }

        .card-compras:hover {
            box-shadow: 0 0 30px var(--ufo-blue) !important;
        }

        .btn-producto {
            background: rgba(0, 255, 157, 0.3) !important;
            border: 1px solid var(--alien-green) !important;
            color: var(--alien-green) !important;
        }

        .btn-usuario {
            background: rgba(157, 0, 255, 0.3) !important;
            border: 1px solid var(--alien-purple) !important;
            color: var(--alien-purple) !important;
        }

        .btn-categoria {
            background: rgba(255, 0, 170, 0.3) !important;
            border: 1px solid var(--energy-pink) !important;
            color: var(--energy-pink) !important;
        }

        .btn-compra {
            background: rgba(0, 225, 255, 0.3) !important;
            border: 1px solid var(--ufo-blue) !important;
            color: var(--ufo-blue) !important;
        }

        .btn-ver {
            background: rgba(100, 100, 100, 0.3) !important;
            border: 1px solid #aaa !important;
            color: #aaa !important;
        }

        .btn-producto:hover, .btn-usuario:hover, 
        .btn-categoria:hover, .btn-compra:hover, 
        .btn-ver:hover {
            background: rgba(255, 255, 255, 0.2) !important;
            color: white !important;
            box-shadow: 0 0 15px currentColor;
        }
    </style>
</body>