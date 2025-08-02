
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Infinity India</h3>
                    <p>Premium flag manufacturing company committed to providing brands with visually appealing, durable, and flexible flag products.</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About</a></li>
                        <!-- <li><a href="#products">Products</a></li> -->
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Products</h4>
                    <ul>
                      <li><a href="feather-flag.html">Feather Flag</a></li>
                      <li><a href="teardrop-flag.html">Teardrop Flag</a></li>
                      <li><a href="promotional-flag.html">Promotion Flag</a></li>
                      <li><a href="printed-flag.html">Printed Flag</a></li>
                      <li><a href="beach-flag.html">Beach Flag</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <p>Call: +919319675133</p>
                    <p>Call: +919821593988</p>
                    <p>Email: indiainfinity70@gmail.com</p>
                    <p>Address: D-9 Azad Colony Budh Vihar Phase 2, D Samta Public School, New Delhi-110085, India</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
<p>&copy; 2025 Infinity India. All rights reserved. Designed and Managed by
   <a href="https://promopact.in" style="color: inherit; text-decoration: none;">Promopact Marketing PVT. LTD.</a>
</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
<!-- <script src="unveil-carousel.js"></script> -->
<!-- Modal Structure for Feather Flag -->
<!-- <div id="featherFlagModal" class="modal">
  <div class="modal-content" style="display: flex; gap: 2rem; flex-wrap: wrap;">
    <span class="modal-close">&times;</span>
    <div style="flex: 1; min-width: 300px;">
      <img src="img/IMG-20250716-WA0006.jpg" alt="Feather Flags" style="width: 100%; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
      <div style="display: flex; justify-content: space-around; margin-top: 1rem; font-weight: bold;">
        <span>8 FT</span>
        <span>10 FT</span>
        <span>12 FT</span>
      </div>
    </div>
    <div style="flex: 1; min-width: 300px;">
      <h2>Feather Flag Details</h2>
      <p>Elevate your brand visibility with Feather Flags by Infinity India. Designed to capture attention with their dynamic and eye-catching appearance, these feather flags are perfect for outdoor events, trade shows, retail promotions, and more.</p>
      <p>Our feather flags are made with premium materials ensuring durability and vibrant colors that last. Easy to set up and transport, they are an excellent choice for any promotional campaign.</p>
    </div>
  </div>
</div> -->

<script>
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.getElementById('navLinks');
  const dropdownToggle = document.querySelector('.dropdown-toggle');
  const dropdownMenu = document.getElementById('dropdownMenu');

  // Hamburger toggle
  hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    dropdownMenu.classList.remove('show-dropdown'); // close dropdown if open
  });

  // Dropdown toggle
  dropdownToggle.addEventListener('click', (e) => {
    e.preventDefault();
    dropdownMenu.classList.toggle('show-dropdown');
  });

  // Close dropdown on outside click
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.dropdown')) {
      dropdownMenu.classList.remove('show-dropdown');
    }
  });

</script>


</body>
</html>
