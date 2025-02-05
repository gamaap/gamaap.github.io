<!-- HEAD SECTION -->
<?php require 'partials/head.php' ?>

<!-- HEADER SECTION -->
<?php require 'partials/header.php' ?>
  
<!-- MAIN CONTENT -->
<main class="mb-auto">
  <!-- BANNER SECTION -->
  <section class="container mx-auto sm:px-44 pt-20 mt-8">
    <div class="w-full rounded-xl overflow-hidden shadow-lg">
      <div
        class="w-full min-h-[400px] bg-center bg-cover flex items-center justify-center"
        style="
          background-image: url(/assets/hero/2.png);
        "
      >
        <div
          class="flex items-center justify-center w-full h-full py-12"
        >
          <div class="text-center">
            <div class="container px-4 mx-auto">
              <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-extrabold tracking-wide text-gray-900 sm:text-4xl uppercase bg-white/80 px-4 py-2 rounded-lg">
                  What's New
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- GALLERY NEWS SECTION -->
  <div class="bg-white py-24 sm:py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 mb-8 mx-64">
        <button class="category-button bg-gray-200 text-center py-4 px-13 rounded shadow hover:bg-gray-300 hover:text-yellow-500 focus:text-yellow-500 transition">
            Exhibition
        </button>
        <button class="category-button bg-gray-200 text-center py-4 px-13 rounded shadow hover:bg-gray-300 hover:text-yellow-500 focus:text-yellow-500 transition">
            Gathering
        </button>
        <button class="category-button bg-gray-200 text-center py-4 px-13 rounded shadow hover:bg-gray-300 hover:text-yellow-500 focus:text-yellow-500 transition">
            Training
        </button>
        <button class="category-button bg-gray-200 text-center py-4 px-13 rounded shadow hover:bg-gray-300 hover:text-yellow-500 focus:text-yellow-500 transition">
            Celebration
        </button>
        <button class="category-button bg-gray-200 text-center py-4 px-13 rounded shadow hover:bg-gray-300 hover:text-yellow-500 focus:text-yellow-500 transition">
            Vacation
        </button>
        <button class="category-button bg-gray-200 text-center py-4 px-13 rounded shadow hover:bg-gray-300 hover:text-yellow-500 focus:text-yellow-500 transition">
            Others
        </button>
      </div>
      <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <?php for ($i = 0; $i < 9; $i++) : ?>
          <div
            class="border border-gray-300 rounded-2xl p-4"
            >
            <article class="flex max-w-xl flex-col items-start justify-between">
              <img src="/assets/google-hq.png" 
              alt="Article Image" 
              class="w-full h-48 rounded-lg mb-4">
              <div class="flex items-center gap-x-4 text-xs">
                <time datetime="2020-03-16" class="text-gray-500">Feb 04, 2025</time>
                <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Vacation</a>
              </div>
              <div class="group relative">
                <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                  <a href="post.php">
                    <span class="absolute inset-0"></span>
                    Boost your conversion rate
                  </a>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                <a
                href="javascript:;"
                class="cursor-pointer text-md text-indigo-600 font-semibold"
                >Read more</a
              >
              </div>
              <div class="relative mt-8 flex items-center gap-x-4">
                <img src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="" class="size-10 rounded-full bg-gray-50">
                <div class="text-sm/6">
                  <p class="font-semibold text-gray-900">
                    <a href="post.php">
                      <span class="absolute inset-0"></span>
                      John Doe
                    </a>
                  </p>
                  <p class="text-gray-600">Administrator</p>
                </div>
              </div>
            </article>
          </div>
        <?php endfor ?>
      </div>
  </div>

  <!-- PAGINATION -->
  <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 mt-10 py-3 sm:px-6">
    <div class="flex flex-1 justify-between sm:hidden">
      <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
      <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
    </div>
    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
      <div>
        <p class="text-sm text-gray-700">
          Showing
          <span class="font-medium">1</span>
          to
          <span class="font-medium">10</span>
          of
          <span class="font-medium">97</span>
          results
        </p>
      </div>
      <div>
        <nav class="isolate inline-flex -space-x-px rounded-md shadow-xs" aria-label="Pagination">
          <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
            <span class="sr-only">Previous</span>
            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
            </svg>
          </a>
          <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
          <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
          <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
          <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
          <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-gray-300 ring-inset focus:outline-offset-0">...</span>
          <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
          <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
          <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
          <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
            <span class="sr-only">Next</span>
            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
          </a>
        </nav>
      </div>
    </div>
  </div>

</div>

</main>

<!-- FOOTER SECTION -->
<?php require 'partials/footer.php' ?>

<!-- FOOT SECTION -->
<?php require 'partials/foot.php' ?>
