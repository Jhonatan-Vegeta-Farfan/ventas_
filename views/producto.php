<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÁREA 51 - ACCESO RESTRINGIDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --alien-green: #00ff9d;
            --alien-purple: #9d00ff;
            --ufo-blue: #00e1ff;
            --dark-space: #0a001a;
            --energy-pink: #ff00aa;
        }
        
        @font-face {
            font-family: 'Alien Encounter';
            src: url('https://www.dafontfree.io/data/30/a/12484/Alien-Encounters-Regular.ttf') format('truetype');
        }
        
        body {
            background-color: var(--dark-space);
            background-image: 
                radial-gradient(circle at 70% 30%, rgba(157, 0, 255, 0.15) 0%, transparent 25%),
                radial-gradient(circle at 30% 70%, rgba(0, 255, 157, 0.15) 0%, transparent 25%),
                url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%2300ff9d" opacity="0.8"/></svg>');
            color: var(--alien-green);
            font-family: 'Alien Encounter', 'Orbitron', sans-serif;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* NAVBAR ALIENÍGENA */
        .navbar-area51 {
            background: rgba(10, 0, 26, 0.95) !important;
            border-bottom: 3px solid var(--alien-green);
            box-shadow: 0 0 25px rgba(0, 255, 157, 0.4);
            backdrop-filter: blur(10px);
            padding: 10px 0;
        }

        .navbar-brand-alien {
            position: relative;
            display: flex;
            align-items: center;
        }

        .logo-alien {
            width: 180px;
            filter: drop-shadow(0 0 10px var(--alien-green));
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .nav-link-alien {
            color: var(--alien-green) !important;
            background: rgba(0, 50, 40, 0.3) !important;
            border: 1px solid var(--alien-green) !important;
            margin: 0 8px;
            border-radius: 8px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
            padding: 10px 20px;
        }

        .nav-link-alien:hover {
            background: rgba(0, 255, 157, 0.2) !important;
            color: var(--ufo-blue) !important;
            border-color: var(--ufo-blue) !important;
            box-shadow: 0 0 15px rgba(0, 225, 255, 0.6);
            transform: translateY(-3px);
        }

        .nav-link-alien::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 255, 157, 0.4), transparent);
            transition: 0.5s;
        }

        .nav-link-alien:hover::before {
            left: 100%;
        }

        /* BOTONES ALIEN */
        .btn-alien {
            background: rgba(0, 40, 30, 0.7);
            color: var(--alien-green);
            border: 1px solid var(--alien-green);
            border-radius: 8px;
            padding: 8px 20px;
            font-weight: bold;
            letter-spacing: 1px;
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 255, 157, 0.3);
        }

        .btn-alien:hover {
            background: var(--alien-green);
            color: #000;
            box-shadow: 0 0 20px var(--alien-green);
            transform: translateY(-3px);
        }

        .btn-alien::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 255, 157, 0.4), transparent);
            transform: translateX(-100%);
            transition: 0.5s;
        }

        .btn-alien:hover::after {
            transform: translateX(100%);
        }

        /* EFECTOS ESPECIALES */
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

        .security-badge {
            position: absolute;
            right: 20px;
            top: 15px;
            font-size: 0.7rem;
            color: var(--energy-pink);
            transform: rotate(15deg);
            text-shadow: 0 0 5px var(--energy-pink);
            font-weight: bold;
            letter-spacing: 1px;
        }

        .content {
            padding-top: 120px;
            position: relative;
            z-index: 1;
        }

        /* SECCIÓN DE PRODUCTOS */
        .alien-products-section {
            padding: 50px 0;
            position: relative;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title h2 {
            color: var(--alien-green);
            text-shadow: 0 0 10px var(--alien-green);
            letter-spacing: 3px;
            font-size: 2.5rem;
            position: relative;
            display: inline-block;
        }

        .section-title h2::before,
        .section-title h2::after {
            content: '✧';
            color: var(--ufo-blue);
            margin: 0 15px;
        }

        .alien-product {
            background: rgba(20, 10, 40, 0.7);
            border: 2px solid var(--alien-green);
            border-radius: 15px;
            padding: 20px;
            position: relative;
            overflow: hidden;
            transition: all 0.5s;
            box-shadow: 0 0 20px rgba(0, 255, 157, 0.2);
            height: 100%;
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }

        .alien-product:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 30px var(--alien-green);
            border-color: var(--ufo-blue);
        }

        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--alien-purple);
            color: #000;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            z-index: 2;
            text-transform: uppercase;
        }

        .product-image-container {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .product-image {
            transition: all 0.5s;
            display: block;
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .alien-product:hover .product-image {
            transform: scale(1.05);
        }

        .alien-energy {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--alien-green), var(--ufo-blue), var(--alien-purple));
            opacity: 0.7;
            transition: all 0.5s;
        }

        .alien-product:hover .alien-energy {
            height: 10px;
            opacity: 1;
        }

        .product-info {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            color: var(--ufo-blue);
            font-size: 1.2rem;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .product-description {
            color: #aaa;
            font-size: 0.9rem;
            margin-bottom: 15px;
            flex-grow: 1;
        }

        .product-specs {
            background: rgba(0, 30, 40, 0.5);
            border-left: 3px solid var(--alien-green);
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 0 5px 5px 0;
        }

        .product-specs p {
            margin-bottom: 5px;
            font-size: 0.8rem;
            color: #ccc;
        }

        .product-specs i {
            color: var(--alien-green);
            margin-right: 5px;
        }

        .product-price {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .currency {
            background: var(--alien-green);
            color: #000;
            padding: 3px 8px;
            border-radius: 5px;
            font-weight: bold;
            margin-right: 10px;
            font-size: 0.9rem;
        }

        .price {
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
            text-shadow: 0 0 5px var(--alien-green);
        }

        .btn-add-to-cart {
            background: linear-gradient(45deg, var(--alien-green), var(--ufo-blue));
            color: #000;
            border: none;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s;
            text-align: center;
            display: block;
            width: 100%;
        }

        .btn-add-to-cart:hover {
            background: linear-gradient(45deg, var(--ufo-blue), var(--alien-purple));
            color: #fff;
            box-shadow: 0 0 15px var(--alien-green);
            transform: translateY(-2px);
        }

        /* FOOTER ALIEN */
        .alien-footer {
            background: rgba(10, 0, 26, 0.95);
            border-top: 3px solid var(--alien-green);
            padding: 30px 0;
            margin-top: 50px;
            position: relative;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-section {
            flex: 1;
            min-width: 250px;
            margin-bottom: 20px;
            padding: 0 15px;
        }

        .footer-section h3 {
            color: var(--ufo-blue);
            margin-bottom: 20px;
            font-size: 1.2rem;
            border-bottom: 1px solid var(--alien-green);
            padding-bottom: 10px;
        }

        .footer-section p, .footer-section a {
            color: #aaa;
            margin-bottom: 10px;
            display: block;
            transition: all 0.3s;
        }

        .footer-section a:hover {
            color: var(--alien-green);
            transform: translateX(5px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(0, 255, 157, 0.2);
            margin-top: 20px;
        }

        /* EFECTO PARALLAX */
        .parallax-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background-image: url('https://images.unsplash.com/photo-1534796636912-3b95b3ab5986?q=80&w=1000');
            background-size: cover;
            background-position: center;
            opacity: 0.1;
        }

        @media (max-width: 992px) {
            .logo-alien {
                width: 140px;
            }
            
            .product-image {
                height: 200px;
            }
            
            .nav-link-alien {
                padding: 8px 15px;
                margin: 5px 0;
                font-size: 0.8rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .alien-product {
                padding: 15px;
            }
            
            .product-title {
                font-size: 1rem;
            }
            
            .section-title h2 {
                font-size: 1.5rem;
            }
            
            .footer-section {
                min-width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- EFECTOS ESPECIALES -->
    <div class="alien-scanner"></div>
    <div class="ufo-fleet" style="top: 15%; animation: fly 25s linear infinite;"></div>
    <div class="ufo-fleet" style="top: 65%; animation: fly 30s linear infinite 5s;"></div>
    <div class="ufo-fleet" style="top: 40%; animation: fly 35s linear infinite 10s; width: 80px; height: 40px;"></div>
    <div class="parallax-bg"></div>

    <!-- NAVBAR ALIEN -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-area51 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand navbar-brand-alien" href="<?php echo BASE_URL ?>producto">
                <img src="https://cdn-icons-png.flaticon.com/512/3618/3618730.png" alt="ÁREA 51" class="logo-alien">
                <span class="security-badge">NIVEL 5<br>CLASIFICADO</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAlien">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarAlien">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>producto"><i class="fas fa-shopping-cart"></i> TIENDA</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>novedades"><i class="fas fa-newspaper"></i> NOVEDADES</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>nosotros"><i class="fas fa-user-astronaut"></i> NOSOTROS</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>contactanos"><i class="fas fa-phone-volume"></i> CONTACTO</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>ubicacion"><i class="fas fa-map-marked-alt"></i> UBICACIÓN</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>rutadeenvio"><i class="fas fa-route"></i> ENVÍOS</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>libroreclamaciones"><i class="fas fa-book"></i> RECLAMOS</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-alien" href="<?php echo BASE_URL ?>comentarios"><i class="fas fa-comments"></i> COMENTARIOS</a></li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item me-2">
                        <button class="btn btn-alien">
                            <i class="fas fa-user-secret"></i> 
                            <?php echo isset($_SESSION['sesion_ventas_nombres']) ? strtoupper($_SESSION['sesion_ventas_nombres']) : 'INVITADO'; ?>
                        </button>
                    </li>
                    <li class="nav-item me-2">
                        <button class="btn btn-alien" onclick="cerrar_sesion();">
                            <i class="fas fa-sign-out-alt"></i> SALIR
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-alien" href="<?php echo BASE_URL ?>panel" style="background: rgba(157, 0, 255, 0.3); border-color: var(--alien-purple);">
                            <i class="fas fa-lock"></i> PANEL
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="content">
        <!-- SECCIÓN DE PRODUCTOS -->
        <section class="alien-products-section">
            <div class="container">
                <div class="section-title">
                    <h2><i class="fas fa-ufo-beam me-2"></i>ARTEFACTOS EXTRATERRESTRES<i class="fas fa-ufo-beam ms-2"></i></h2>
                </div>
                
                <div class="row">
                    <!-- Producto 1 -->
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="alien-product">
                            <div class="product-badge">NUEVO</div>
                            <div class="product-image-container">
                                <img src="https://richstore.com.pe/wp-content/uploads/2022/06/Dragon-Boll-6.jpg" alt="Artefacto Alien 1" class="img-fluid product-image">
                                <div class="alien-energy"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">POLO DIMENSIONAL</h3>
                                <p class="product-description">Tecnología de tejido interdimensional para máxima comodidad</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-expand-arrows-alt"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-atom"></i> Material: Fibra de meteorito</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">CREDITS</span>
                                    <span class="price">130.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-basket"></i> TELEPORTAR AL CARRITO
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 2 -->
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="alien-product">
                            <div class="product-badge">POPULAR</div>
                            <div class="product-image-container">
                                <img src="https://http2.mlstatic.com/D_NQ_NP_996506-MPE71311277804_082023-O.webp" alt="Artefacto Alien 2" class="img-fluid product-image">
                                <div class="alien-energy"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">ARMADURA SAYAYIN</h3>
                                <p class="product-description">Resistente a explosiones de energía galáctica</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-expand-arrows-alt"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-atom"></i> Material: Aleación de Namek</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">CREDITS</span>
                                    <span class="price">130.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-basket"></i> TELEPORTAR AL CARRITO
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 3 -->
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="alien-product">
                            <div class="product-badge">LIMITADO</div>
                            <div class="product-image-container">
                                <img src="https://pbs.twimg.com/media/CpWo5YVXYAAeslv.jpg" alt="Artefacto Alien 3" class="img-fluid product-image">
                                <div class="alien-energy"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">CAMISETA KAMEHAMEHA</h3>
                                <p class="product-description">Carga tu energía vital con este diseño especial</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-expand-arrows-alt"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-atom"></i> Material: Tela de androide</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">CREDITS</span>
                                    <span class="price">130.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-basket"></i> TELEPORTAR AL CARRITO
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 4 -->
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="alien-product">
                            <div class="product-badge">COLECCIÓN</div>
                            <div class="product-image-container">
                                <img src="https://buhorockshop.com/wp-content/uploads/2021/10/dragon-ball-esferas-450x450.jpg" alt="Artefacto Alien 4" class="img-fluid product-image">
                                <div class="alien-energy"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">ESFERAS DEL DRAGÓN</h3>
                                <p class="product-description">Reúne las 7 y haz tu deseo realidad</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-expand-arrows-alt"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-atom"></i> Material: Cristal de Namek</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">CREDITS</span>
                                    <span class="price">130.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-basket"></i> TELEPORTAR AL CARRITO
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 5 -->
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="alien-product">
                            <div class="product-badge">EXCLUSIVO</div>
                            <div class="product-image-container">
                                <img src="https://sumerlabs.com/sumer-app-90b8f.appspot.com/product_photos%2F2abb5503083a7cde0429adc245247230%2F181a9ea0-f596-11ec-811e-214fcc8a3ba5?alt=media&token=80808e95-5c87-41ac-a73a-4dd9091b0ba5" alt="Artefacto Alien 5" class="img-fluid product-image">
                                <div class="alien-energy"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">TRAJE DE BATALLA</h3>
                                <p class="product-description">Diseñado para combates interestelares</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-expand-arrows-alt"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-atom"></i> Material: Aleación de Katchin</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">CREDITS</span>
                                    <span class="price">130.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-basket"></i> TELEPORTAR AL CARRITO
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 6 -->
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="alien-product">
                            <div class="product-badge">OFERTA</div>
                            <div class="product-image-container">
                                <img src="https://goku-shop.es/cdn/shop/products/product-image-595661469.jpg?v=1574611707&width=533" alt="Artefacto Alien 6" class="img-fluid product-image">
                                <div class="alien-energy"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">UNIFORME KAIOSHIN</h3>
                                <p class="product-description">Vestimenta de los dioses de los universos</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-expand-arrows-alt"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-atom"></i> Material: Tela divina</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">CREDITS</span>
                                    <span class="price">130.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-basket"></i> TELEPORTAR AL CARRITO
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 7 -->
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="alien-product">
                            <div class="product-badge">RARO</div>
                            <div class="product-image-container">
                                <img src="https://wishiny.com/sites/default/files/quality-dragon-ball-son-goku-polo-shirts-men-boy-black-polo_2.jpg" alt="Artefacto Alien 7" class="img-fluid product-image">
                                <div class="alien-energy"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">VESTIMENTA GALÁCTICA</h3>
                                <p class="product-description">Estilo cósmico para viajeros estelares</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-expand-arrows-alt"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-atom"></i> Material: Polvo de estrella</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">CREDITS</span>
                                    <span class="price">130.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-basket"></i> TELEPORTAR AL CARRITO
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 8 -->
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="alien-product">
                            <div class="product-badge">NUEVO</div>
                            <div class="product-image-container">
                                <img src="https://richstore.com.pe/wp-content/uploads/2023/02/Dragon-boll-5.jpg" alt="Artefacto Alien 8" class="img-fluid product-image">
                                <div class="alien-energy"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">TÚNICA MÍSTICA</h3>
                                <p class="product-description">Protección ancestral para guerreros Z</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-expand-arrows-alt"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-atom"></i> Material: Seda de la Torre Karin</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">CREDITS</span>
                                    <span class="price">130.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-basket"></i> TELEPORTAR AL CARRITO
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
        
        // Efecto de movimiento para los UFOs
        document.querySelectorAll('.ufo-fleet').forEach((ufo, index) => {
            ufo.style.left = `${Math.random() * 100}%`;
            ufo.style.animationDelay = `${index * 5}s`;
            ufo.style.animationDuration = `${20 + Math.random() * 20}s`;
            ufo.style.animationName = 'fly';
        });

        // Definir la animación fly dinámicamente
        const style = document.createElement('style');
        style.innerHTML = `
            @keyframes fly {
                0% { transform: translate(-100px, ${Math.random() * 100}vh); }
                100% { transform: translate(calc(100vw + 100px), ${Math.random() * 100}vh); }
            }
        `;
        document.head.appendChild(style);

        // Efecto activo para los enlaces
        const navLinks = document.querySelectorAll('.nav-link-alien');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Efecto de carga alienígena
        document.addEventListener('DOMContentLoaded', () => {
            const scanner = document.querySelector('.alien-scanner');
            scanner.style.animation = 'none';
            setTimeout(() => {
                scanner.style.animation = 'scan 4s linear infinite';
            }, 100);
        });
    </script>
</body>
</html>