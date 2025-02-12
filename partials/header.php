<!-- HEADER MENU -->
<header class="fixed inset-x-0 top-0 bg-white/70 backdrop-blur-md shadow-md transition duration-300">
  <nav
    class="flex items-center justify-between p-6 lg:px-8"
    aria-label="Global"
  >
    <!-- LEFT LOGO -->
    <div class="flex flex-shrink-0">
      <a href="/" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img
          class="h-8 w-auto"
          src="assets/ewindo.png"
          alt="PT Ewindo Logo"
          width="200"
        />
      </a>
    </div>
    <!-- MOBILE MENU (HIDDEN IN DESKTOP) -->
    <div class="flex lg:hidden">
      <button
        type="button"
        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
      >
        <span class="sr-only">Open main menu</span>
        <svg
          class="size-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          aria-hidden="true"
          data-slot="icon"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
          />
        </svg>
      </button>
    </div>
    <!-- RIGHT MENU -->
    <div class="hidden lg:flex lg:flex-1 justify-end">
      <nav class="flex gap-x-10">
        <a href="company.php" class="main-nav-link text-sm/6 font-semibold text-gray-900 hover:text-yellow-500"
          >Company</a
        >
        <a
          href="products.php"
          class="main-nav-link text-sm/6 font-semibold text-gray-900 hover:text-yellow-500"
          >Product</a
        >
        <a
          href="newsroom.php"
          class="main-nav-link text-sm/6 font-semibold text-gray-900 hover:text-yellow-500"
          >Newsroom</a
        >
        <a
          href="contact.php"
          class="main-nav-link text-sm/6 font-semibold text-gray-900 hover:text-yellow-500"
          >Contact</a
        >
        <a href="career.php" class="main-nav-link text-sm/6 font-semibold text-gray-900 hover:text-yellow-500"
          >Career</a
        >
        <div class="relative inline-block">
          <button id="lang-toggle" class="text-sm/6 font-semibold text-gray-900 hover:text-yellow-500 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
            </svg>
          </button>
        </div>
        <div id="lang-dropdown" class="absolute right-0 mt-2 w-auto bg-white border border-gray-300 rounded-md shadow-lg hidden">
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">EN</a>
          <!-- <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">ID</a> -->
        </div>
      </nav>
    </div>
  </nav>
</header>
<div class="bg-white flex flex-col h-screen justify-between">