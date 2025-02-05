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

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next-index",
          prevEl: ".swiper-button-prev-index",
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
    </script>
  </body>
</html>