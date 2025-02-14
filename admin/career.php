<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="flex gap-6">
      <aside class="w-64 flex-none bg-gray-100 p-4 h-[200px]">
          <ul class="my-3">
            <li class="border-b border-gray-900 pb-4">
              <a href="#" class="flex items-center justify-between px-4 py-2 text-white bg-yellow-500 rounded-lg shadow-sm font-semibold hover:bg-yellow-400">
                  Semua Loker <span class="bg-white text-yellow-500 text-xs font-semibold px-2 py-1 rounded-full">20</span>
              </a>
            </li>
            <li class="mt-2 pt-3">
              <a href="#" class="flex items-center justify-between px-4 py-2 text-gray-900 bg-white rounded-lg shadow-sm font-semibold hover:bg-gray-200">
                  Aktif <span class="bg-yellow-500 text-white text-xs font-semibold px-2 py-1 rounded-full">7</span>
              </a>
            </li>
            <li class="mt-2">
              <a href="#" class="flex items-center justify-between px-4 py-2 text-gray-900 bg-white rounded-lg shadow-sm font-semibold hover:bg-gray-200">
                Nonaktif <span class="bg-yellow-500 text-white text-xs font-semibold px-2 py-1 rounded-full">13</span>
              </a>
            </li>
          </ul>
      </aside>
      <div class="w-full relative overflow-x-auto sm:rounded-lg">
        <div class="card mt-7 p-4 bg-white border-3 border-gray-200 rounded-lg shadow-xl">
          <div class="flex items-center justify-between gap-20">
            <div>
              <h3 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray">Job Position</h3>
              <div class="flex items-center space-x-6 my-2">
                <i class="fa-solid fa-calendar text-2xl" title="Posted On"></i>
                <span class="text-base text-gray-700 leading-7">13 Februari 2024</span>
              </div>
              <div class="flex items-center space-x-6 my-2">
                <i class="fa-solid fa-briefcase text-2xl" title="Job Type"></i>
                <span class="text-base text-gray-700 leading-7">Full Time</span>
              </div>
              <div class="flex items-center space-x-6 my-2">
                <i class="fa-solid fa-person text-2xl" title="Quota"></i>
                <span class="text-base text-gray-700 leading-7">2 Orang</span>
              </div>
              <div class="flex items-center space-x-6 my-2">
                <i class="fa-solid fa-map-pin text-2xl inline-block align-middle" title="Location"></i>
                <span class="text-base text-gray-700 leading-7">Plant 1</span>
              </div>
            </div>
            <div>
              <label class="inline-flex items-center me-5 cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer" checked>
                    <div class="relative w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600 dark:peer-checked:bg-green-600"></div>
                  <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
                </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
  
<?php require("partials/footer.php") ?>