<!-- HEAD SECTION -->
<?php require 'partials/head.php' ?>

<!-- HEADER SECTION -->
<?php require 'partials/header.php' ?>
  
<!-- MAIN CONTENT -->
<main class="mb-auto">
  <section class="container mx-auto px-10 py-20 sm:mt-24 dark:bg-gray-100 dark:text-gray-800">
    <div class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert pl-5">
      <header class="mb-4 lg:mb-6 not-format">
        <address class="flex items-center mb-6 not-italic">
          <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
            <div>
              <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-gray-800">John Doe</a>
              <p class="text-base text-gray-700 dark:text-gray-600">Administrator</p>
              <p class="text-base text-gray-700 dark:text-gray-600"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Feb. 4, 2025</time></p>
            </div>
          </div>
        </address>
        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-gray-800">Best practices for creating nice catchy title</h1>
      </header>
    </div>
    <div class="flex flex-col items-center gap-4">
      <!-- Centered main image with reduced size -->
      <div class="w-3/5">
        <img class="w-full h-auto rounded-lg" 
              src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" 
              alt="Main Image">
      </div>

      <!-- Smaller images grid with total width equal to main image -->
      <div class="w-3/5 grid grid-cols-4 gap-4">
        <div>
          <img class="w-full h-auto rounded-lg" 
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" 
                alt="">
        </div>
        <div>
          <img class="w-full h-auto rounded-lg" 
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" 
                alt="">
        </div>
        <div>
          <img class="w-full h-auto rounded-lg" 
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" 
                alt="">
        </div>
        <div>
          <img class="w-full h-auto rounded-lg" 
                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" 
                alt="">
        </div>
      </div>
    </div>
    <!-- Article Below Images -->
    <article class="mx-auto w-3/5 text-base/7 text-justify leading-relaxed text-gray-800 mt-8">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aliquid delectus itaque error, ducimus at ipsam deserunt, a ex, vel repellendus iusto obcaecati. Ad hic, quas voluptatem consequuntur error facilis, sequi cupiditate fuga numquam non similique? Veniam fugit dolore corrupti quia, ratione harum atque voluptatum id debitis sapiente explicabo neque.
      </p>
      <p class="mt-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aliquid delectus itaque error, ducimus at ipsam deserunt, a ex, vel repellendus iusto obcaecati. Ad hic, quas voluptatem consequuntur error facilis, sequi cupiditate fuga numquam non similique? Veniam fugit dolore corrupti quia, ratione harum atque voluptatum id debitis sapiente explicabo neque.
      </p>
      <p class="mt-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aliquid delectus itaque error, ducimus at ipsam deserunt, a ex, vel repellendus iusto obcaecati. Ad hic, quas voluptatem consequuntur error facilis, sequi cupiditate fuga numquam non similique? Veniam fugit dolore corrupti quia, ratione harum atque voluptatum id debitis sapiente explicabo neque.
      </p>
    </article>
    <div class="mx-auto mt-10 w-3/5 border-t border-gray-300 pt-10"></div>
    <section class="bg-gray-100 py-4">
      <div class="text-center mb-6">
        <h2 class="text-3xl font-bold">Newsroom</h2>
        <p class="text-gray-500">The latest news and updates, direct from EWINDO</p>
      </div>
      <div class="text-center">
        <a href="newsroom.php">
        <button class="bg-gray-300 text-gray-800 py-2 px-6 rounded-full hover:underline bg-yellow-300">Read More</button></a>
      </div>
    </section>
  </section>
</main>

<!-- FOOTER SECTION -->
<?php require 'partials/footer.php' ?>

<!-- FOOT SECTION -->
<?php require 'partials/foot.php' ?>