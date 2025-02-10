<!-- HEAD SECTION -->
<?php require 'partials/head.php' ?>

<!-- HEADER SECTION -->
<?php require 'partials/header.php' ?>
  
<!-- MAIN CONTENT -->
<main class="mb-auto pt-20">
  <!-- BANNER SECTION -->
  <section class="container mx-auto sm:px-44 pt-20 mt-8">
      <div class="w-full rounded-lg overflow-hidden shadow-lg">
        <div
        class="w-full min-h-[400px] bg-top bg-cover relative flex items-end p-6"
        style="
            background-image: url(/assets/hero/4.png);
        "
        >
          <div
              class="flex items-start justify-items-start w-full h-full py-6"
          >
            <div class="text-left">
              <div class="container mx-auto">
                <div class="max-w-4xl mx-auto text-left">
                  <h2 class="text-4xl font-extrabold tracking-wide text-yellow-500 sm:text-4xl uppercase shadow-text px-4 py-2 rounded-lg" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 1);">
                      Join Us
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- EMPTY STATE SECTION -->
  <section class="flex items-center justify-center my-16">
    <div class="grid gap-4 w-full">
      <!-- <div
        class="w-20 h-20 mx-auto bg-gray-50 rounded-full shadow-sm justify-center items-center inline-flex"
      >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke="#4F46E5" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
        </svg>
      </div> -->
      <div>
        <h2
          class="text-center text-black text-xl font-semibold leading-loose pb-2"
        >
          No Jobs Available
        </h2>
        <p
          class="text-center text-black text-base font-normal leading-relaxed pb-4"
        >
          We currently don't have any open position.<br />Please check back soon for new opportunities.
        </p>
        <!-- <div class="flex gap-3">
          <button
            class="w-full px-3 py-2 rounded-full border border-gray-300 text-gray-900 text-xs font-semibold leading-4"
          >
            Clear Filter
          </button>
          <button
            class="w-full px-3 py-2 bg-indigo-600 hover:bg-indigo-700 transition-all duration-500 rounded-full text-white text-xs font-semibold leading-4"
          >
            Change Filter
          </button>
        </div> -->
      </div>
    </div>
  </section>
</main>

<!-- FOOTER SECTION -->
<?php require 'partials/footer.php' ?>

<!-- FOOT SECTION -->
<?php require 'partials/foot.php' ?>