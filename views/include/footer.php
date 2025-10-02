    <!-- FOOTER STILOS -->
    <footer class="stilos-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>CONTACTO STILOS</h3>
                    <p><i class="fas fa-map-marker-alt embroidery-icon"></i> Av. Mariscal Castilla Nº 116, Huanta</p>
                    <p><i class="fas fa-phone embroidery-icon"></i> +51 948 356 672</p>
                    <p><i class="fas fa-envelope embroidery-icon"></i> contacto@stiloshuanta.com</p>
                    <p><i class="fas fa-clock embroidery-icon"></i> Lunes a Sábado: 9:00 AM - 8:00 PM</p>
                </div>
                
                <div class="footer-section">
                    <h3>CATEGORÍAS</h3>
                    <a href="<?php echo BASE_URL ?>producto"><i class="fas fa-tshirt embroidery-icon"></i> Ropa Tradicional</a>
                    <a href="<?php echo BASE_URL ?>novedades"><i class="fas fa-vest embroidery-icon"></i> Bordados Artesanales</a>
                    <a href="<?php echo BASE_URL ?>nosotros"><i class="fas fa-hands embroidery-icon"></i> Tejidos a Mano</a>
                    <a href="<?php echo BASE_URL ?>contactanos"><i class="fas fa-gift embroidery-icon"></i> Accesorios</a>
                </div>
                
                <div class="footer-section">
                    <h3>INFORMACIÓN</h3>
                    <a href="<?php echo BASE_URL ?>nosotros"><i class="fas fa-info-circle embroidery-icon"></i> Nuestra Historia</a>
                    <a href="<?php echo BASE_URL ?>contactanos"><i class="fas fa-map-marker-alt embroidery-icon"></i> Encuéntranos</a>
                    <a href="<?php echo BASE_URL ?>libroreclamaciones"><i class="fas fa-book embroidery-icon"></i> Libro de Reclamaciones</a>
                    <a href="<?php echo BASE_URL ?>terminos"><i class="fas fa-file-alt embroidery-icon"></i> Términos y Condiciones</a>
                </div>
                
                <div class="footer-section">
                    <h3>NEWSLETTER</h3>
                    <p>Suscríbete para recibir nuestras novedades y promociones</p>
                    <div class="newsletter-form">
                        <input type="email" placeholder="Tu correo electrónico" class="form-control mb-2">
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-envelope-open-text"></i> SUSCRIBIRME
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="mb-0">&copy; 2024 STILOS HUANTA - Ropa y Bordados Artesanales de Ayacucho</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="social-icons mt-3 mt-md-0">
                            <a href="#" class="social-icon" title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-icon" title="WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="#" class="social-icon" title="TikTok">
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <style>
        .stilos-footer {
            background: linear-gradient(135deg, #8b4513 0%, #a0522d 100%);
            color: #f9f5f0;
            padding: 40px 0 20px;
            margin-top: 50px;
            border-top: 5px solid #cd853f;
            position: relative;
            overflow: hidden;
        }

        .stilos-footer::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, 
                transparent 0%, 
                #f9f5f0 20%, 
                #cd853f 50%, 
                #f9f5f0 80%, 
                transparent 100%);
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-section h3 {
            color: #f9f5f0;
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-section h3::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: #cd853f;
        }

        .footer-section p, .footer-section a {
            color: #f9f5f0;
            margin-bottom: 10px;
            display: block;
            text-decoration: none;
            transition: all 0.3s ease;
            opacity: 0.9;
        }

        .footer-section a:hover {
            color: #cd853f;
            padding-left: 5px;
            opacity: 1;
        }

        .embroidery-icon {
            color: #cd853f;
            margin-right: 8px;
            width: 16px;
            text-align: center;
        }

        .newsletter-form .form-control {
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid #cd853f;
            border-radius: 4px;
            color: #5a3921;
        }

        .newsletter-form .form-control:focus {
            background-color: white;
            box-shadow: 0 0 5px rgba(205, 133, 63, 0.5);
        }

        .footer-bottom {
            border-top: 1px solid rgba(205, 133, 63, 0.5);
            padding-top: 20px;
        }

        .social-icons {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
        }

        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: #f9f5f0;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid rgba(205, 133, 63, 0.3);
        }

        .social-icon:hover {
            background-color: #cd853f;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .social-icons {
                justify-content: center;
                margin-top: 15px;
            }
            
            .footer-bottom .row {
                text-align: center;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';

        // Efecto de suscripción al newsletter
        document.querySelector('.newsletter-form button').addEventListener('click', function() {
            const email = document.querySelector('.newsletter-form input').value;
            if (email && isValidEmail(email)) {
                alert('¡Gracias por suscribirte a STILOS! Te hemos enviado un correo de confirmación.');
                document.querySelector('.newsletter-form input').value = '';
            } else {
                alert('Por favor, ingresa un correo electrónico válido.');
            }
        });

        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Efecto hover mejorado para enlaces del footer
        document.querySelectorAll('.footer-section a').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(5px)';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
        });
    </script>