</div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
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
      document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll(".nav-link");

        function updateActiveLink() {
          let scrollY = window.scrollY;

          sections.forEach((section) => {
            const sectionTop = section.offsetTop - 150; // Adjust offset to match nav height
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute("id");

            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
              navLinks.forEach((link) =>
                link.classList.remove(
                  "border-b-4",
                  "border-yellow-500",
                  "text-yellow-500"
                )
              );
              document
                .querySelector(`.nav-link[href="#${sectionId}"]`)
                .classList.add(
                  "border-b-4",
                  "border-yellow-500",
                  "text-yellow-500"
                );
            }
          });
        }

        window.addEventListener("scroll", updateActiveLink);
        updateActiveLink(); // Call on load in case user refreshes in the middle of page
      });

      // Modal Certificates
      function openModal(event, imgSrc) {
        event.preventDefault();
        document.getElementById('modalImage').src = imgSrc;
        document.getElementById('imageModal').classList.remove('hidden');
      }

      function closeModal() {
        document.getElementById('imageModal').classList.add('hidden');
      }

      // Active Current Page
      document.addEventListener("DOMContentLoaded", function () {
        const currentPage = window.location.pathname.split("/").pop(); // Get current page
        const navLinks = document.querySelectorAll(".main-nav-link"); // Select all links

        navLinks.forEach(link => {
          if (link.getAttribute("href") === currentPage) {
            link.classList.add("text-yellow-500"); // Add active border
          }
        });
      });

      // Event for Request A Quotation in Contact Page
      if(window.location.pathname == '/contact.php') {
        document.getElementById("subject").addEventListener("change", function () {
          const selectContainer = document.getElementById("select-container");
          const quotationBox = document.getElementById("quotation-box");
  
          if (this.value === "quotation") {
            selectContainer.classList.replace("col-span-10", "col-span-5"); // Shrink select box
            quotationBox.classList.remove("hidden"); // Show text input
          } else {
            selectContainer.classList.replace("col-span-5", "col-span-10"); // Restore full width
            quotationBox.classList.add("hidden"); // Hide text input
          }
        });
      }

      // Toggle language
      document.getElementById("lang-toggle").addEventListener("click", function (event) {
        event.stopPropagation(); // Prevents click from closing immediately
        const dropdown = document.getElementById("lang-dropdown");
        dropdown.classList.toggle("hidden");
      });

      // Close dropdown when clicking outside
      document.addEventListener("click", function (event) {
        const dropdown = document.getElementById("lang-dropdown");
        if (!dropdown.contains(event.target) && event.target.id !== "lang-toggle") {
          dropdown.classList.add("hidden");
        }
      });

    </script>
    <!-- Modal (Hidden by Default) -->
    <div id="imageModal" class="fixed inset-0 z-[9999] hidden bg-black bg-opacity-75 flex items-center justify-center">
      <div class="relative max-w-4xl">
        <!-- Close Button -->
        <button onclick="closeModal()" class="absolute top-3 right-3 text-black text-3xl font-bold">&times;</button>
        <!-- Full Image -->
        <img id="modalImage" class="max-h-screen w-auto rounded-lg shadow-lg">
      </div>
    </div>
  </body>
</html>