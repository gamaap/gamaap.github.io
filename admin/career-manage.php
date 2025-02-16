<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="bg-white shadow-lg rounded-lg p-6 flex justify-between items-start w-full h-auto relative border border-gray-200">
    <!-- Left: Job Information -->
      <div class="w-2/3">
          <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-2">
               Job Name
          </h2>
          <p class="text-sm text-gray-700 flex items-center gap-2 mt-1 mb-6">
              <i class="fa-solid fa-building text-gray-500"></i> Department
          </p>
          <p class="text-sm text-gray-700 font-semibold flex items-center gap-2 mt-3">
              <i class="fa-solid fa-list-check text-yellow-500"></i> Requirements
          </p>

          <!-- Skills Badges -->
          <div class="flex flex-wrap gap-2 mt-4">
              <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full flex items-center gap-2">
                  <i class="fa-solid fa-star"></i> Skill 1
              </span>
              <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full flex items-center gap-2">
                  <i class="fa-solid fa-star"></i> Skill 2
              </span>
              <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full flex items-center gap-2">
                  <i class="fa-solid fa-star"></i> Skill 3
              </span>
              <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full flex items-center gap-2">
                  <i class="fa-solid fa-star"></i> Skill 4
              </span>
              <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full flex items-center gap-2">
                  <i class="fa-solid fa-star"></i> Skill 5
              </span>
          </div>
      </div>

      <!-- Top Right: Job Type & Location -->
      <div class="absolute top-6 right-6 flex flex-col items-end gap-2">
        <p class="text-md font-semibold text-gray-800 flex items-center gap-2">
          <i class="fa-solid fa-clock text-green-500"></i> Full-Time
        </p>
        <p class="text-sm text-gray-700 flex items-center gap-2">
          <i class="fa-solid fa-location-dot text-red-500"></i> Bandung, Indonesia
        </p>
      </div>

      <!-- Bottom Right: Posted Date -->
      <div class="absolute bottom-4 right-6 text-gray-600 text-sm italic flex items-center gap-2">
          <i class="fa-solid fa-calendar-alt"></i> Posted on Feb 15, 2025
      </div>
    </div>

    <!-- TABLE -->
    <div class="mt-4 bg-white relative shadow-md sm:rounded-lg overflow-hidden">
      <div
        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4"
      >
        <div class="w-full md:w-1/2">
          <form class="flex items-center">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
              <div
                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
              >
                <svg
                  aria-hidden="true"
                  class="w-5 h-5 text-gray-500"
                  fill="currentColor"
                  viewbox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd"
                  />
                </svg>
              </div>
              <input
                type="text"
                id="simple-search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2"
                placeholder="Search"
                required=""
              />
            </div>
          </form>
        </div>
        <div
          class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0"
        >
          <div class="flex items-center space-x-3 w-full md:w-auto">
            <button
              id="filterDropdownButton"
              data-dropdown-toggle="filterDropdown"
              class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200"
              type="button"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
                class="h-4 w-4 mr-2 text-gray-400"
                viewbox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                  clip-rule="evenodd"
                />
              </svg>
              Filter
              <svg
                class="-mr-1 ml-1.5 w-5 h-5"
                fill="currentColor"
                viewbox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                />
              </svg>
            </button>
            <div
              id="filterDropdown"
              class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow"
            >
              <h6
                class="mb-3 text-sm font-medium text-gray-900"
              >
                Choose brand
              </h6>
              <ul
                class="space-y-2 text-sm"
                aria-labelledby="filterDropdownButton"
              >
                <li class="flex items-center">
                  <input
                    id="apple"
                    type="checkbox"
                    value=""
                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2 dark:bg-gray-600"
                  />
                  <label
                    for="apple"
                    class="ml-2 text-sm font-medium text-gray-900"
                    >Apple (56)</label
                  >
                </li>
                <li class="flex items-center">
                  <input
                    id="fitbit"
                    type="checkbox"
                    value=""
                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="fitbit"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
                    >Microsoft (16)</label
                  >
                </li>
                <li class="flex items-center">
                  <input
                    id="razor"
                    type="checkbox"
                    value=""
                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="razor"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
                    >Razor (49)</label
                  >
                </li>
                <li class="flex items-center">
                  <input
                    id="nikon"
                    type="checkbox"
                    value=""
                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="nikon"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
                    >Nikon (12)</label
                  >
                </li>
                <li class="flex items-center">
                  <input
                    id="benq"
                    type="checkbox"
                    value=""
                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for="benq"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
                    >BenQ (74)</label
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
        <div class="relative overflow-x-auto shadow-md rounded-lg mx-4">
          <table class="w-full text-sm text-left rtl:text-right text-gray-500">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                  <tr>
                      <th scope="col" class="px-6 py-3">
                          No
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Nama Lengkap
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Tanggal Melamar
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Umur
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Pendidikan
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Jurusan
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Kota
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Status
                      </th>
                      <th scope="col" class="px-6 py-3">
                          <span class="sr-only">Edit</span>
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php for ($i = 1; $i <= 10; $i++) : ?>
                    <tr class="bg-white border-b border-gray-200 hover:bg-gray-50 cursor-pointer" onclick="window.location='career-individual.php';">
                        <th scope="row" class="px-6 py-4">
                            <?= $i ?>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            John Doe
                        </th>
                        <td class="px-6 py-4">
                            14 Februari 2025
                        </td>
                        <td class="px-6 py-4">
                            27
                        </td>
                        <td class="px-6 py-4">
                            S1
                        </td>
                        <td class="px-6 py-4">
                            Teknik Informatika
                        </td>
                        <td class="px-6 py-4">
                            Bandung
                        </td>
                        <td class="px-6 py-4">
                          <span class="bg-green-500 text-white text-xs font-medium me-2 px-3 py-1 rounded-full">Approved</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                          <i class="fa-solid fa-eye text-yellow-500 mr-2"></i>
                          <i class="fa-solid fa-print text-yellow-500"></i>
                        </td>
                    </tr>
                  <?php endfor; ?>
              </tbody>
          </table>
      </div>
      <nav
        class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4 mt-4"
        aria-label="Table navigation"
      >
        <span class="text-sm font-normal text-gray-500">
          Showing
          <span class="font-semibold text-gray-900"
            >1-10</span
          >
          of
          <span class="font-semibold text-gray-900"
            >1000</span
          >
        </span>
        <ul class="inline-flex items-stretch -space-x-px">
          <li>
            <a
              href="#"
              class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700"
            >
              <span class="sr-only">Previous</span>
              <svg
                class="w-5 h-5"
                aria-hidden="true"
                fill="currentColor"
                viewbox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"
              >1</a
            >
          </li>
          <li>
            <a
              href="#"
              class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"
              >2</a
            >
          </li>
          <li>
            <a
              href="#"
              aria-current="page"
              class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700"
              >3</a
            >
          </li>
          <li>
            <a
              href="#"
              class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"
              >...</a
            >
          </li>
          <li>
            <a
              href="#"
              class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"
              >100</a
            >
          </li>
          <li>
            <a
              href="#"
              class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700"
            >
              <span class="sr-only">Next</span>
              <svg
                class="w-5 h-5"
                aria-hidden="true"
                fill="currentColor"
                viewbox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</main>

<?php require("partials/footer.php") ?>