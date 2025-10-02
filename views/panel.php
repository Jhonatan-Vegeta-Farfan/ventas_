<div class="container my-4" style="padding-top: 100px; min-height: calc(100vh - 100px);">
    <!-- Efectos especiales integrados -->
    <div class="fabric-scanner"></div>
    <div class="fabric-pattern" style="top: 15%; animation: float 25s linear infinite;"></div>
    
    <div class="store-header">
        <h1 class="store-title">PANEL DE CONTROL <span style="color: var(--accent-brown);">STILOS</span></h1>
        <p class="store-subtitle">Huanta, Ayacucho - Sistema de Gestión</p>
    </div>
    
    <div class="row g-4">
        <!-- Productos -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 hover-scale" style="background: rgba(255, 253, 250, 0.95); border: 2px solid var(--accent-brown) !important;">
                <div class="card-body text-center">
                    <div class="mb-3" style="color: var(--accent-brown);">
                        <i class="fas fa-tshirt display-1"></i>
                    </div>
                    <h5 class="card-title fw-bold" style="color: var(--dark-brown);">PRODUCTOS</h5>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="<?php echo BASE_URL ?>nuevo-producto" class="btn btn-sm" 
                           style="background: rgba(139, 69, 19, 0.1); border: 1px solid var(--accent-brown); color: var(--accent-brown);">
                            <i class="fas fa-plus-circle me-1"></i> Nuevo
                        </a>
                        <a href="<?php echo BASE_URL ?>productos" class="btn btn-sm" 
                           style="background: rgba(205, 133, 63, 0.1); border: 1px solid var(--warm-orange); color: var(--warm-orange);">
                            <i class="fas fa-eye me-1"></i> Ver
                        </a>
                    </div>
                </div>
                <div class="fabric-border" style="background: var(--accent-brown);"></div>
            </div>
        </div>
        
        <!-- Usuarios -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 hover-scale" style="background: rgba(255, 253, 250, 0.95); border: 2px solid var(--warm-orange) !important;">
                <div class="card-body text-center">
                    <div class="mb-3" style="color: var(--warm-orange);">
                        <i class="fas fa-users display-1"></i>
                    </div>
                    <h5 class="card-title fw-bold" style="color: var(--dark-brown);">CLIENTES</h5>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="<?php echo BASE_URL ?>nuevo-persona" class="btn btn-sm" 
                           style="background: rgba(205, 133, 63, 0.1); border: 1px solid var(--warm-orange); color: var(--warm-orange);">
                            <i class="fas fa-plus-circle me-1"></i> Nuevo
                        </a>
                        <a href="<?php echo BASE_URL ?>usuarios" class="btn btn-sm" 
                           style="background: rgba(205, 133, 63, 0.1); border: 1px solid var(--warm-orange); color: var(--warm-orange);">
                            <i class="fas fa-eye me-1"></i> Ver
                        </a>
                    </div>
                </div>
                <div class="fabric-border" style="background: var(--warm-orange);"></div>
            </div>
        </div>
        
        <!-- Categorías -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 hover-scale" style="background: rgba(255, 253, 250, 0.95); border: 2px solid var(--golden-yellow) !important;">
                <div class="card-body text-center">
                    <div class="mb-3" style="color: var(--golden-yellow);">
                        <i class="fas fa-tags display-1"></i>
                    </div>
                    <h5 class="card-title fw-bold" style="color: var(--dark-brown);">CATEGORÍAS</h5>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="<?php echo BASE_URL ?>nuevo-categoria" class="btn btn-sm" 
                           style="background: rgba(218, 165, 32, 0.1); border: 1px solid var(--golden-yellow); color: var(--golden-yellow);">
                            <i class="fas fa-plus-circle me-1"></i> Nuevo
                        </a>
                        <a href="<?php echo BASE_URL ?>categorias" class="btn btn-sm" 
                           style="background: rgba(205, 133, 63, 0.1); border: 1px solid var(--warm-orange); color: var(--warm-orange);">
                            <i class="fas fa-eye me-1"></i> Ver
                        </a>
                    </div>
                </div>
                <div class="fabric-border" style="background: var(--golden-yellow);"></div>
            </div>
        </div>
        
        <!-- Compras -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 hover-scale" style="background: rgba(255, 253, 250, 0.95); border: 2px solid var(--dark-brown) !important;">
                <div class="card-body text-center">
                    <div class="mb-3" style="color: var(--dark-brown);">
                        <i class="fas fa-shopping-bag display-1"></i>
                    </div>
                    <h5 class="card-title fw-bold" style="color: var(--dark-brown);">VENTAS</h5>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="<?php echo BASE_URL ?>nuevo-compra" class="btn btn-sm" 
                           style="background: rgba(90, 57, 33, 0.1); border: 1px solid var(--dark-brown); color: var(--dark-brown);">
                            <i class="fas fa-plus-circle me-1"></i> Nuevo
                        </a>
                        <a href="<?php echo BASE_URL ?>compras" class="btn btn-sm" 
                           style="background: rgba(205, 133, 63, 0.1); border: 1px solid var(--warm-orange); color: var(--warm-orange);">
                            <i class="fas fa-eye me-1"></i> Ver
                        </a>
                    </div>
                </div>
                <div class="fabric-border" style="background: var(--dark-brown);"></div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --accent-brown: #8b4513;
        --dark-brown: #5a3921;
        --warm-orange: #cd853f;
        --golden-yellow: #daa520;
        --cream-bg: #f9f5f0;
    }

    /* Efectos hover consistentes con el tema textil */
    .hover-scale {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border-radius: 0.5rem !important;
        box-shadow: 0 4px 8px rgba(139, 69, 19, 0.1);
    }
    
    .hover-scale:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 8px 20px rgba(139, 69, 19, 0.2);
        background: rgba(255, 253, 250, 1) !important;
    }
    
    /* Barra decorativa inferior */
    .fabric-border {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 3px;
        opacity: 0.7;
        transition: all 0.3s ease;
    }
    
    .hover-scale:hover .fabric-border {
        height: 5px;
        opacity: 1;
        box-shadow: 0 2px 8px rgba(139, 69, 19, 0.3);
    }
    
    /* Animación de patrones de tela */
    @keyframes float {
        0% { left: -10%; transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-10px) rotate(5deg); }
        100% { left: 110%; transform: translateY(0) rotate(0deg); }
    }
    
    .fabric-pattern {
        position: fixed;
        width: 120px;
        height: 120px;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M0,10 L20,10 M10,0 L10,20" stroke="%23cd853f" stroke-width="0.3" opacity="0.2"/></svg>');
        z-index: -1;
        opacity: 0.4;
    }
    
    /* Scanner de hilo consistente */
    .fabric-scanner {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, var(--accent-brown), transparent);
        box-shadow: 0 0 8px var(--accent-brown);
        animation: weave 6s linear infinite;
        z-index: 1000;
    }
    
    @keyframes weave {
        0% { top: 0; opacity: 0.7; }
        50% { opacity: 1; }
        100% { top: 100vh; opacity: 0.7; }
    }

    /* Encabezado de la tienda */
    .store-header {
        text-align: center;
        margin-bottom: 3rem;
        padding: 2rem;
        background: linear-gradient(135deg, rgba(255,253,250,0.9) 0%, rgba(249,245,240,0.9) 100%);
        border-radius: 1rem;
        border: 1px solid var(--warm-orange);
        position: relative;
        overflow: hidden;
    }

    .store-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(to right, var(--accent-brown), var(--warm-orange), var(--accent-brown));
    }

    .store-title {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        color: var(--dark-brown);
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
        text-shadow: 1px 1px 2px rgba(90, 57, 33, 0.1);
    }

    .store-subtitle {
        font-family: 'Raleway', sans-serif;
        color: var(--warm-orange);
        font-style: italic;
        font-size: 1.1rem;
        margin: 0;
    }
    
    /* Adaptación responsive */
    @media (max-width: 768px) {
        .container {
            padding-top: 80px;
            min-height: calc(100vh - 80px);
        }
        
        .store-title {
            font-size: 1.8rem;
        }
        
        .store-subtitle {
            font-size: 0.9rem;
        }
        
        .row.g-4 {
            margin-left: -0.5rem;
            margin-right: -0.5rem;
        }
        
        .col-md-6, .col-lg-3 {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
    }

    /* Estilos para las tarjetas */
    .card-body {
        padding: 2rem 1.5rem;
    }

    .display-1 {
        font-size: 4rem;
    }

    .btn-sm {
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
        border-radius: 0.25rem;
        transition: all 0.3s ease;
    }

    .btn-sm:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(139, 69, 19, 0.2);
    }
</style>

<script>
    // Efecto hover mejorado
    document.querySelectorAll('.hover-scale').forEach(card => {
        card.addEventListener('mouseenter', function() {
            const color = this.style.borderColor;
            this.style.boxShadow = `0 8px 20px ${color.replace(')', ', 0.2)')}`;
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.boxShadow = '0 4px 8px rgba(139, 69, 19, 0.1)';
        });
    });
</script>