<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - STILOS Huanta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Raleway:wght@300;400;500&display=swap');
        
        :root {
            --primary-brown: #8b4513;
            --secondary-brown: #cd853f;
            --light-beige: #f9f5f0;
            --dark-brown: #5a3921;
            --accent-gold: #d4af37;
        }
        
        body {
            background-color: var(--light-beige);
            color: var(--dark-brown);
            font-family: 'Raleway', sans-serif;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title h2 {
            font-family: 'Playfair Display', serif;
            color: var(--primary-brown);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-title::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(to right, var(--primary-brown), var(--secondary-brown));
        }

        .store-product {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.1);
            transition: all 0.3s ease;
            position: relative;
            margin-bottom: 30px;
            border: 1px solid rgba(205, 133, 63, 0.3);
        }

        .store-product:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(139, 69, 19, 0.2);
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: var(--primary-brown);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            z-index: 2;
        }

        .product-image-container {
            position: relative;
            overflow: hidden;
            height: 250px;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .store-product:hover .product-image {
            transform: scale(1.05);
        }

        .embroidery-effect {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent 40%, rgba(212, 175, 55, 0.1) 50%, transparent 60%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .store-product:hover .embroidery-effect {
            opacity: 1;
        }

        .product-info {
            padding: 20px;
        }

        .product-title {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            color: var(--dark-brown);
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .product-description {
            color: #7a6a5a;
            font-size: 0.9rem;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .product-specs {
            margin-bottom: 15px;
        }

        .product-specs p {
            margin-bottom: 5px;
            font-size: 0.85rem;
            color: #8b7355;
        }

        .product-specs i {
            color: var(--secondary-brown);
            margin-right: 5px;
        }

        .product-price {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .currency {
            font-size: 0.9rem;
            color: var(--dark-brown);
            margin-right: 5px;
        }

        .price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-brown);
        }

        .btn-add-to-cart {
            display: block;
            width: 100%;
            background-color: var(--primary-brown);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            font-weight: 500;
            text-align: center;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-add-to-cart:hover {
            background-color: var(--secondary-brown);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(139, 69, 19, 0.3);
        }

        .thread-decoration {
            position: absolute;
            width: 100%;
            height: 5px;
            bottom: 0;
            left: 0;
            background: linear-gradient(to right, var(--primary-brown), var(--secondary-brown), var(--primary-brown));
            opacity: 0.7;
        }

        .embroidery-icon {
            color: var(--secondary-brown);
            margin-right: 5px;
        }

        .location-banner {
            background: linear-gradient(to right, var(--primary-brown), var(--secondary-brown));
            color: white;
            padding: 10px 0;
            text-align: center;
            margin-bottom: 30px;
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            letter-spacing: 1px;
        }

        .fabric-pattern-bg {
            position: fixed;
            width: 200px;
            height: 200px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M0,0 L20,20 M20,0 L0,20" stroke="%23cd853f" stroke-width="0.5" opacity="0.1"/></svg>');
            animation: float 30s linear infinite;
            z-index: -1;
            opacity: 0.3;
        }

        @keyframes float {
            0% { transform: translate(-200px, 50vh) rotate(0deg); }
            100% { transform: translate(calc(100vw + 200px), calc(-50vh)) rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Efectos de fondo -->
    <div class="fabric-pattern-bg" style="top: 10%;"></div>
    <div class="fabric-pattern-bg" style="top: 60%; animation-delay: 10s; animation-duration: 35s;"></div>
    
    <!-- Banner de ubicación -->
    <div class="location-banner">
        <i class="fas fa-map-marker-alt"></i> STILOS - Huanta, Ayacucho | Ropa Urbana con Bordados Artesanales
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="content">
        <!-- SECCIÓN DE PRODUCTOS -->
        <section class="products-section py-5">
            <div class="container">
                <div class="section-title">
                    <h2><i class="fas fa-tshirt embroidery-icon"></i>PRENDAS URBANAS CON BORDADOS<i class="fas fa-tshirt embroidery-icon"></i></h2>
                </div>
                
                <div class="row">
                    <!-- Producto 1 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="store-product">
                            <div class="product-badge">NUEVO</div>
                            <div class="product-image-container">
                                <img src="https://i.pinimg.com/474x/23/31/b8/2331b8f71f46af25665db8f5bb319139.jpg" alt="Polo con bordado tradicional" class="img-fluid product-image">
                                <div class="embroidery-effect"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">POLO TRADICIONAL</h3>
                                <p class="product-description">Polo de algodón con bordados artesanales inspirados en la cultura ayacuchana</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-ruler"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-palette"></i> Material: Algodón peinado 100%</p>
                                    <p><i class="fas fa-thread"></i> Bordado: Hilo de algodón</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">S/</span>
                                    <span class="price">65.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-bag"></i> AGREGAR AL CARRITO
                                </a>
                            </div>
                            <div class="thread-decoration"></div>
                        </div>
                    </div>

                    <!-- Producto 2 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="store-product">
                            <div class="product-badge">POPULAR</div>
                            <div class="product-image-container">
                                <img src="https://opttimu.com/cdn/shop/files/5_2dcd94fb-dfba-403f-b2ea-d324961e948e_1024x1024.jpg?v=1730124955" alt="Buzo con diseño urbano" class="img-fluid product-image">
                                <div class="embroidery-effect"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">BUZO URBANO</h3>
                                <p class="product-description">Buzo de felpa con capucha y bordados de motivos andinos modernizados</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-ruler"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-palette"></i> Material: Felpa algodón/poliéster</p>
                                    <p><i class="fas fa-thread"></i> Bordado: Realce 3D</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">S/</span>
                                    <span class="price">89.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-bag"></i> AGREGAR AL CARRITO
                                </a>
                            </div>
                            <div class="thread-decoration"></div>
                        </div>
                    </div>

                    <!-- Producto 3 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="store-product">
                            <div class="product-badge">LIMITADO</div>
                            <div class="product-image-container">
                                <img src="https://images-cdn.ubuy.co.in/65afe6745e3ffc75e15ccb5b-wwe-cody-rhodes-american-nightmare.jpg" alt="Camiseta con diseño exclusivo" class="img-fluid product-image">
                                <div class="embroidery-effect"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">CAMISETA COLECCIÓN</h3>
                                <p class="product-description">Edición limitada con bordados inspirados en los carnavales de Huanta</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-ruler"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-palette"></i> Material: Algodón jersey</p>
                                    <p><i class="fas fa-thread"></i> Bordado: Hilo metálico</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">S/</span>
                                    <span class="price">75.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-bag"></i> AGREGAR AL CARRITO
                                </a>
                            </div>
                            <div class="thread-decoration"></div>
                        </div>
                    </div>

                    <!-- Producto 4 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="store-product">
                            <div class="product-badge">COLECCIÓN</div>
                            <div class="product-image-container">
                                <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/805/PMP00003446289/full_image-1.jpeg" alt="Polera básica con detalle" class="img-fluid product-image">
                                <div class="embroidery-effect"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">POLERA BÁSICA</h3>
                                <p class="product-description">Polera de corte moderno con pequeño bordado del logo STILOS</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-ruler"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-palette"></i> Material: Algodón ringspun</p>
                                    <p><i class="fas fa-thread"></i> Bordado: Logo STILOS</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">S/</span>
                                    <span class="price">45.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-bag"></i> AGREGAR AL CARRITO
                                </a>
                            </div>
                            <div class="thread-decoration"></div>
                        </div>
                    </div>

                    <!-- Producto 5 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="store-product">
                            <div class="product-badge">EXCLUSIVO</div>
                            <div class="product-image-container">
                                <img src="https://i.pinimg.com/originals/bb/b6/92/bbb692b1ede4456badd2cd29208f7357.jpg" alt="Chamarra con bordados" class="img-fluid product-image">
                                <div class="embroidery-effect"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">CHAQUETA BORDADA</h3>
                                <p class="product-description">Chamarra tipo bomber con elaborados bordados de motivos andinos</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-ruler"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-palette"></i> Material: Drill de algodón</p>
                                    <p><i class="fas fa-thread"></i> Bordado: Puntada tradicional</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">S/</span>
                                    <span class="price">120.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-bag"></i> AGREGAR AL CARRITO
                                </a>
                            </div>
                            <div class="thread-decoration"></div>
                        </div>
                    </div>

                    <!-- Producto 6 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="store-product">
                            <div class="product-badge">OFERTA</div>
                            <div class="product-image-container">
                                <img src="https://i.pinimg.com/originals/bb/b6/92/bbb692b1ede4456badd2cd29208f7357.jpg" alt="Conjunto para parejas" class="img-fluid product-image">
                                <div class="embroidery-effect"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">CONJUNTO PAREJAS</h3>
                                <p class="product-description">Diseño coordinado para parejas con bordados complementarios</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-ruler"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-palette"></i> Material: Mezcla algodón</p>
                                    <p><i class="fas fa-thread"></i> Bordado: Diseño pareja</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">S/</span>
                                    <span class="price">150.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-bag"></i> AGREGAR AL CARRITO
                                </a>
                            </div>
                            <div class="thread-decoration"></div>
                        </div>
                    </div>

                    <!-- Producto 7 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="store-product">
                            <div class="product-badge">RARO</div>
                            <div class="product-image-container">
                                <img src="https://img.kwcdn.com/product/fancy/5dcbafdb-36e5-44c2-b788-88389f94bc7d.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" alt="Chaleco bordado" class="img-fluid product-image">
                                <div class="embroidery-effect"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">CHALECO ARTESANAL</h3>
                                <p class="product-description">Chaleco con bordados complejos inspirados en textiles ayacuchanos</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-ruler"></i> Tallas: S, M, L, XL, XXL</p>
                                    <p><i class="fas fa-palette"></i> Material: Lana virgen</p>
                                    <p><i class="fas fa-thread"></i> Bordado: Técnica ancestral</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">S/</span>
                                    <span class="price">95.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-bag"></i> AGREGAR AL CARRITO
                                </a>
                            </div>
                            <div class="thread-decoration"></div>
                        </div>
                    </div>

                    <!-- Producto 8 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="store-product">
                            <div class="product-badge">NUEVO</div>
                            <div class="product-image-container">
                                <img src="https://http2.mlstatic.com/D_NQ_NP_657275-MLC73999814413_012024-O-bata-tunica-slytherin-tallas-nino-juvenil-serie-harry-potter.webp" alt="Poncho moderno" class="img-fluid product-image">
                                <div class="embroidery-effect"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">PONCHO URBANO</h3>
                                <p class="product-description">Reinterpretación moderna del poncho tradicional con bordados</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-ruler"></i> Tallas: Única talla</p>
                                    <p><i class="fas fa-palette"></i> Material: Lana y algodón</p>
                                    <p><i class="fas fa-thread"></i> Bordado: Motivos geométricos</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">S/</span>
                                    <span class="price">110.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-bag"></i> AGREGAR AL CARRITO
                                </a>
                            </div>
                            <div class="thread-decoration"></div>
                        </div>
                    </div>

                    <!-- Producto 9 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="store-product">
                            <div class="product-badge">OFERTA</div>
                            <div class="product-image-container">
                                <img src="https://i5.walmartimages.com/asr/8eea61f2-e934-4143-90f3-92964e6b4a4b.c12e03092ca59ffbe6fc85032e8b05fe.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF" alt="Gorro con bordado" class="img-fluid product-image">
                                <div class="embroidery-effect"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">GORRO CON BORDADO</h3>
                                <p class="product-description">Gorro de lana con bordado del símbolo de STILOS</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-ruler"></i> Tallas: Única talla</p>
                                    <p><i class="fas fa-palette"></i> Material: Lana acrílica</p>
                                    <p><i class="fas fa-thread"></i> Bordado: Logo STILOS</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">S/</span>
                                    <span class="price">35.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-bag"></i> AGREGAR AL CARRITO
                                </a>
                            </div>
                            <div class="thread-decoration"></div>
                        </div>
                    </div>

                    <!-- Producto 10 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="store-product">
                            <div class="product-badge">NUEVO</div>
                            <div class="product-image-container">
                                <img src="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/e0f54235f0ce91b00ec3284f9a779c03.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" alt="Mochila bordada" class="img-fluid product-image">
                                <div class="embroidery-effect"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">MOCHILA BORDADA</h3>
                                <p class="product-description">Mochila urbana con paneles bordados con motivos andinos</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-ruler"></i> Tamaño: Mediano (30L)</p>
                                    <p><i class="fas fa-palette"></i> Material: Lona de algodón</p>
                                    <p><i class="fas fa-thread"></i> Bordado: Paneles frontales</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">S/</span>
                                    <span class="price">85.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-bag"></i> AGREGAR AL CARRITO
                                </a>
                            </div>
                            <div class="thread-decoration"></div>
                        </div>
                    </div>

                    <!-- Producto 11 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="store-product">
                            <div class="product-badge">LIMITADO</div>
                            <div class="product-image-container">
                                <img src="https://prosportsperu.com/cdn/shop/files/BandaDeportivaparaCabezaAntisudor.webp?v=1713616962" alt="Bandana bordada" class="img-fluid product-image">
                                <div class="embroidery-effect"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">BANDANA BORDADA</h3>
                                <p class="product-description">Bandana con bordado de motivos geométricos tradicionales</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-ruler"></i> Tallas: Única talla</p>
                                    <p><i class="fas fa-palette"></i> Material: Algodón stretch</p>
                                    <p><i class="fas fa-thread"></i> Bordado: Diseño central</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">S/</span>
                                    <span class="price">25.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-bag"></i> AGREGAR AL CARRITO
                                </a>
                            </div>
                            <div class="thread-decoration"></div>
                        </div>
                    </div>

                    <!-- Producto 12 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="store-product">
                            <div class="product-badge">COLECCIÓN</div>
                            <div class="product-image-container">
                                <img src="https://multilevelstore.cl/cdn/shop/products/H3428ad3a295d402eb5b9b4b679f66efa4.jpg?v=1655269387" alt="Chaqueta denim bordada" class="img-fluid product-image">
                                <div class="embroidery-effect"></div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">CHAQUETA DENIM</h3>
                                <p class="product-description">Chaqueta tipo jean con bordados en espalda y mangas</p>
                                <div class="product-specs">
                                    <p><i class="fas fa-ruler"></i> Tallas: S, M, L, XL</p>
                                    <p><i class="fas fa-palette"></i> Material: Denim 100% algodón</p>
                                    <p><i class="fas fa-thread"></i> Bordado: Espalda completa</p>
                                </div>
                                <div class="product-price">
                                    <span class="currency">S/</span>
                                    <span class="price">130.00</span>
                                </div>
                                <a href="<?php echo BASE_URL ?>carrito" class="btn-add-to-cart">
                                    <i class="fas fa-shopping-bag"></i> AGREGAR AL CARRITO
                                </a>
                            </div>
                            <div class="thread-decoration"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        // Efecto de animación para los patrones de fondo
        document.querySelectorAll('.fabric-pattern-bg').forEach((pattern, index) => {
            pattern.style.left = `${Math.random() * 100}%`;
            pattern.style.animationDelay = `${index * 10}s`;
        });
    </script>
</body>
</html>