    <!-- FOOTER ALIEN -->
    <footer class="alien-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>CONTACTO INTERGALÁCTICO</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Área 51, Nevada, Tierra</p>
                    <p><i class="fas fa-phone"></i> +1 555-ALIEN-51</p>
                    <p><i class="fas fa-envelope"></i> contacto@area51store.com</p>
                </div>
                
                <div class="footer-section">
                    <h3>NAVEGACIÓN</h3>
                    <a href="<?php echo BASE_URL ?>producto"><i class="fas fa-chevron-right"></i> Tienda</a>
                    <a href="<?php echo BASE_URL ?>novedades"><i class="fas fa-chevron-right"></i> Novedades</a>
                    <a href="<?php echo BASE_URL ?>nosotros"><i class="fas fa-chevron-right"></i> Sobre Nosotros</a>
                    <a href="<?php echo BASE_URL ?>contactanos"><i class="fas fa-chevron-right"></i> Contacto</a>
                </div>
                
                <div class="footer-section">
                    <h3>LEGAL</h3>
                    <a href="<?php echo BASE_URL ?>libroreclamaciones"><i class="fas fa-chevron-right"></i> Libro de Reclamaciones</a>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 ÁREA 51 STORE - Todos los derechos reservados en este y otros universos</p>
                <div class="social-icons mt-3">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </footer>

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