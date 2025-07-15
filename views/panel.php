<div class="container my-4">
    <!-- Efectos especiales integrados -->
    <div class="alien-scanner"></div>
    <div class="ufo-fleet" style="top: 15%; animation: fly 25s linear infinite;"></div>
    
    <h2 class="text-center mb-4 text-uppercase fw-bold" style="color: var(--ufo-blue); text-shadow: 0 0 10px var(--alien-green);">
        PANEL DE CONTROL <span style="color: var(--alien-green);">NIVEL 5</span>
    </h2>
    
    <div class="row g-4">
        <!-- Productos -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 hover-scale" style="background: rgba(20, 10, 40, 0.7); border: 2px solid var(--alien-green) !important;">
                <div class="card-body text-center">
                    <div class="mb-3" style="color: var(--alien-green);">
                        <i class="fas fa-cubes display-1"></i>
                    </div>
                    <h5 class="card-title fw-bold" style="color: var(--ufo-blue);">ARTEFACTOS</h5>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="<?php echo BASE_URL ?>nuevo-producto" class="btn btn-sm" 
                           style="background: rgba(0, 255, 157, 0.2); border: 1px solid var(--alien-green); color: var(--alien-green);">
                            <i class="fas fa-plus-circle me-1"></i> Nuevo
                        </a>
                        <a href="<?php echo BASE_URL ?>productos" class="btn btn-sm" 
                           style="background: rgba(0, 225, 255, 0.2); border: 1px solid var(--ufo-blue); color: var(--ufo-blue);">
                            <i class="fas fa-eye me-1"></i> Ver
                        </a>
                    </div>
                </div>
                <div class="alien-energy" style="background: var(--alien-green);"></div>
            </div>
        </div>
        
        <!-- Usuarios -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 hover-scale" style="background: rgba(20, 10, 40, 0.7); border: 2px solid var(--alien-purple) !important;">
                <div class="card-body text-center">
                    <div class="mb-3" style="color: var(--alien-purple);">
                        <i class="fas fa-user-astronaut display-1"></i>
                    </div>
                    <h5 class="card-title fw-bold" style="color: var(--ufo-blue);">ESPECIES</h5>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="<?php echo BASE_URL ?>nuevo-persona" class="btn btn-sm" 
                           style="background: rgba(157, 0, 255, 0.2); border: 1px solid var(--alien-purple); color: var(--alien-purple);">
                            <i class="fas fa-plus-circle me-1"></i> Nuevo
                        </a>
                        <a href="<?php echo BASE_URL ?>usuarios" class="btn btn-sm" 
                           style="background: rgba(0, 225, 255, 0.2); border: 1px solid var(--ufo-blue); color: var(--ufo-blue);">
                            <i class="fas fa-eye me-1"></i> Ver
                        </a>
                    </div>
                </div>
                <div class="alien-energy" style="background: var(--alien-purple);"></div>
            </div>
        </div>
        
        <!-- Categorías -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 hover-scale" style="background: rgba(20, 10, 40, 0.7); border: 2px solid var(--energy-pink) !important;">
                <div class="card-body text-center">
                    <div class="mb-3" style="color: var(--energy-pink);">
                        <i class="fas fa-atom display-1"></i>
                    </div>
                    <h5 class="card-title fw-bold" style="color: var(--ufo-blue);">DIMENSIONES</h5>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="<?php echo BASE_URL ?>nuevo-categoria" class="btn btn-sm" 
                           style="background: rgba(255, 0, 170, 0.2); border: 1px solid var(--energy-pink); color: var(--energy-pink);">
                            <i class="fas fa-plus-circle me-1"></i> Nuevo
                        </a>
                        <a href="<?php echo BASE_URL ?>categorias" class="btn btn-sm" 
                           style="background: rgba(0, 225, 255, 0.2); border: 1px solid var(--ufo-blue); color: var(--ufo-blue);">
                            <i class="fas fa-eye me-1"></i> Ver
                        </a>
                    </div>
                </div>
                <div class="alien-energy" style="background: var(--energy-pink);"></div>
            </div>
        </div>
        
        <!-- Compras -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 hover-scale" style="background: rgba(20, 10, 40, 0.7); border: 2px solid var(--ufo-blue) !important;">
                <div class="card-body text-center">
                    <div class="mb-3" style="color: var(--ufo-blue);">
                        <i class="fas fa-rocket display-1"></i>
                    </div>
                    <h5 class="card-title fw-bold" style="color: var(--ufo-blue);">EXPEDICIONES</h5>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="<?php echo BASE_URL ?>nuevo-compra" class="btn btn-sm" 
                           style="background: rgba(0, 225, 255, 0.2); border: 1px solid var(--ufo-blue); color: var(--ufo-blue);">
                            <i class="fas fa-plus-circle me-1"></i> Nuevo
                        </a>
                        <a href="<?php echo BASE_URL ?>compras" class="btn btn-sm" 
                           style="background: rgba(0, 225, 255, 0.2); border: 1px solid var(--ufo-blue); color: var(--ufo-blue);">
                            <i class="fas fa-eye me-1"></i> Ver
                        </a>
                    </div>
                </div>
                <div class="alien-energy" style="background: var(--ufo-blue);"></div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Efectos hover */
    .hover-scale {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .hover-scale:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 255, 157, 0.3);
    }
    
    /* Barra de energía inferior */
    .alien-energy {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 3px;
        opacity: 0.7;
        transition: all 0.3s ease;
    }
    
    .hover-scale:hover .alien-energy {
        height: 6px;
        opacity: 1;
    }
    
    /* Animación UFO */
    @keyframes fly {
        0% { left: -10%; }
        100% { left: 110%; }
    }
    
    .ufo-fleet {
        position: fixed;
        width: 120px;
        height: 60px;
        background: radial-gradient(ellipse at center, var(--ufo-blue) 0%, transparent 70%);
        border-radius: 50%;
        filter: drop-shadow(0 0 15px var(--ufo-blue));
        z-index: -1;
        opacity: 0.7;
    }
    
    /* Scanner alien */
    .alien-scanner {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, transparent, var(--alien-green), transparent);
        box-shadow: 0 0 10px var(--alien-green);
        animation: scan 4s linear infinite;
        z-index: 1000;
    }
    
    @keyframes scan {
        0% { top: 0; opacity: 0.7; }
        50% { opacity: 1; }
        100% { top: 100vh; opacity: 0.7; }
    }
</style>

<script>
    // Efecto hover mejorado
    document.querySelectorAll('.hover-scale').forEach(card => {
        card.addEventListener('mouseenter', function() {
            const color = this.style.borderColor;
            this.style.boxShadow = `0 10px 20px ${color.replace(')', ', 0.4)')}`;
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.boxShadow = 'none';
        });
    });
</script>