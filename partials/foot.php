</div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- from node_modules -->
    <script src="node_modules/@material-tailwind/html@latest/scripts/dialog.js"></script>
    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
    <script>
      const swiper = new Swiper(".swiper-index", {
        // Optional parameters
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,

        // If we need pagination
        pagination: {
          el: ".swiper-pagination-index",
          clickable: true,
        },
      });
      
      // Swiper for main page (plant 1 & 2)
      const swiperPlant = new Swiper(".swiper-plant", {
        // Optional parameters
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,

        autoplay: {
          delay: 10000,
          disableOnInteraction: false
        },

        // If we need pagination
        pagination: {
          el: ".swiper-pagination-plant",
          clickable: true,
        },
      });
      

      // Swiper for certificate
      const swiperCertificate = new Swiper(".swiper-certificate", {
        slidesPerView: 4,
        spaceBetween: 20,
        slidesPerGroup: 4,
        navigation: {
          nextEl: ".swiper-button-next-certificate",
          prevEl: ".swiper-button-prev-certificate",
        },
      });

      // Document Fragments
      document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll(".nav-link");

        function setActiveLink() {
          links.forEach(link => link.classList.remove("border-b-4", "border-yellow-500"));
          this.classList.add("border-b-4", "border-yellow-500");
        }

        links.forEach(link => link.addEventListener("click", setActiveLink));
      });
    </script>
  </body>
</html>