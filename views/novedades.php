<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLECCIÓN ALIENÍGENA - ÁREA 51</title>
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

        /* SECCIÓN DE PRODUCTOS */
        .alien-products-section {
            padding: 50px 15px;
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
            margin-top: 30px;
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

        @media (max-width: 768px) {
            .section-title h2 {
                font-size: 2rem;
            }
            
            .product-image {
                height: 200px;
            }
            
            .alien-product {
                padding: 15px;
            }
            
            .product-title {
                font-size: 1rem;
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

    <!-- CONTENIDO PRINCIPAL -->
    <div class="alien-products-section">
        <div class="container">
            <div class="section-title">
                <h2><i class="fas fa-ufo-beam me-2"></i>ARTEFACTOS EXTRATERRESTRES<i class="fas fa-ufo-beam ms-2"></i></h2>
            </div>
            
            <div class="row">
                <!-- Producto 1 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="alien-product">
                        <div class="product-badge">NUEVO</div>
                        <div class="product-image-container">
                            <a href="<?php echo BASE_URL ?>detalleproducto">
                                <img src="https://elricostore.com/wp-content/uploads/2021/04/conjunto_polo_short_dragonball_3-min.jpg" alt="Artefacto Alien 1" class="product-image">
                                <div class="alien-energy"></div>
                            </a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">TRAJE DIMENSIONAL</h3>
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
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="alien-product">
                        <div class="product-badge">POPULAR</div>
                        <div class="product-image-container">
                            <a href="<?php echo BASE_URL ?>detalleproducto">
                                <img src="https://abejareinaperu.com/wp-content/uploads/2021/05/casaca-dragon-ball-z.jpeg" alt="Artefacto Alien 2" class="product-image">
                                <div class="alien-energy"></div>
                            </a>
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
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="alien-product">
                        <div class="product-badge">LIMITADO</div>
                        <div class="product-image-container">
                            <a href="<?php echo BASE_URL ?>detalleproducto">
                                <img src="https://goku-shop.es/cdn/shop/products/product-image-595661469.jpg?v=1574611707&width=533" alt="Artefacto Alien 3" class="product-image">
                                <div class="alien-energy"></div>
                            </a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">UNIFORME KAIOSHIN</h3>
                            <p class="product-description">Vestimenta de los dioses de los 12 universos</p>
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

                <!-- Producto 4 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="alien-product">
                        <div class="product-badge">COLECCIÓN</div>
                        <div class="product-image-container">
                            <a href="<?php echo BASE_URL ?>detalleproducto">
                                <img src="https://abejareinaperu.com/wp-content/uploads/2021/05/polera-dragon-ballz.jpeg" alt="Artefacto Alien 4" class="product-image">
                                <div class="alien-energy"></div>
                            </a>
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

                <!-- Producto 5 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="alien-product">
                        <div class="product-badge">EXCLUSIVO</div>
                        <div class="product-image-container">
                            <a href="<?php echo BASE_URL ?>detalleproducto">
                                <img src="https://sumerlabs.com/sumer-app-90b8f.appspot.com/product_photos%2F2abb5503083a7cde0429adc245247230%2F181a9ea0-f596-11ec-811e-214fcc8a3ba5?alt=media&token=80808e95-5c87-41ac-a73a-4dd9091b0ba5" alt="Artefacto Alien 5" class="product-image">
                                <div class="alien-energy"></div>
                            </a>
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
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="alien-product">
                        <div class="product-badge">OFERTA</div>
                        <div class="product-image-container">
                            <a href="<?php echo BASE_URL ?>detalleproducto">
                                <img src="https://richstore.com.pe/wp-content/uploads/2022/06/Dragon-Boll-6.jpg" alt="Artefacto Alien 6" class="product-image">
                                <div class="alien-energy"></div>
                            </a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">POLO DIMENSIONAL</h3>
                            <p class="product-description">Tecnología de tejido interdimensional</p>
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

                <!-- Producto 7 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="alien-product">
                        <div class="product-badge">RARO</div>
                        <div class="product-image-container">
                            <a href="<?php echo BASE_URL ?>detalleproducto">
                                <img src="https://http2.mlstatic.com/D_NQ_NP_996506-MPE71311277804_082023-O.webp" alt="Artefacto Alien 7" class="product-image">
                                <div class="alien-energy"></div>
                            </a>
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
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="alien-product">
                        <div class="product-badge">NUEVO</div>
                        <div class="product-image-container">
                            <a href="<?php echo BASE_URL ?>detalleproducto">
                                <img src="https://richstore.com.pe/wp-content/uploads/2023/02/Dragon-boll-5.jpg" alt="Artefacto Alien 8" class="product-image">
                                <div class="alien-energy"></div>
                            </a>
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
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animación aleatoria para UFOs
        document.querySelectorAll('.ufo-fleet').forEach((ufo, index) => {
            ufo.style.left = `${Math.random() * 100}%`;
            ufo.style.animationDelay = `${index * 5}s`;
            ufo.style.animationDuration = `${20 + Math.random() * 10}s`;
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
    </script>
</body>
</html>