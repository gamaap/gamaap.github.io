<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Career</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
   <?php include ('partial/navbar.php');?>
   <body>

<!-- Header -->

<header class="bg-gray">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Career Control</h1>
    </div>
  </header>

  <!-- Main Class -->
  <main class="grid grid-cols-1 md:grid-cols-2 gap-6 mx-auto max-w-7xl bg-gray shadow-lg rounded-lg p-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Daftar Lowongan Kerja</h2>
            <ul class="max-w-sm divide-y divide-gray-200">
            <li class="py-3 flex items-center justify-between">
                    <p class="text-sm text gray-700 font-medium">Semua Lowongan</p>
                    <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                        <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span> <span id="aktifCount">4</span>
                    </span>
                </li>
                <li class="py-3 flex items-center justify-between">
                    <p class="text-sm text-gray-700 font-medium">Lowongan Aktif</p>
                    <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                        <span class="w-2 h-2 me-1 bg-green-500 rounded-full "></span> <span id="aktifCount">4</span>
                    </span>
                </li>
                <li class="py-3 flex items-center justify-between">
                    <p class="text-sm text-gray-700 font-medium">Lowongan Non Aktif</p>
                    <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                        <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span> <span id="nonAktifCount">0</span>
                    </span>
                </li>
            </ul>
            <!-- Button Tambah Lowongan -->
        <button onclick="openModal()" class="block text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-400 dark:hover:bg-yellow-700 dark:focus:ring-blue-800 shadow-lg" type="button">
          + Tambah Loker
        </button>
        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-[calc(150%-1rem)] max-h-full bg-gray-900 bg-opacity-50 backdrop-blur-sm">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow-sm bg-white-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900 text-black text-center w-full">
                        💼 Create New Job</h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" onclick="closeModal()">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                    <div class="p-4 md:p-8">
                        <form class="space-y-4" action="#">
                        <div class="flex gap-4">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Date Post</label>
                    <input type="date" class="w-full p-2 border rounded mb-3" placeholder="Job Position">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">End Date Post</label>
                    <input type="date" class="w-full p-2 border rounded mb-3" placeholder="Job Position">
                </div>
            </div>
            <label class="block text-sm font-medium text-gray-700">Quota</label>
                    <input type="number" class="w-full p-2 border rounded mb-3" placeholder="Quota">
                        <div class="col-span-2 sm:col-span-1">
                          <label for="job-type" class="block mb-2 text-sm font-medium text-gray-900 text-black">Job Type</label>
                          <select id="job-type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-black-400 text-black dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              <option selected disabled>Select category</option>
                              <option value="intern">Internship</option>
                              <option value="fulltime">Full Time</option>
                              <option value="shift">Shift</option>
                          </select>
                      </div>
                      <div>
                        <label for="job-desc" class="block mb-2 text-sm font-medium text-gray-900 text-black">Job Description</label>
                        <input type="text" name="job-desc" id="job-position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-black-400 text-black" placeholder="Job Description" required />
                    </div>
                    <div>
                    <label for="job-req" class="block mb-2 text-sm font-medium text-gray-900 text-black">Job Requirements</label>
                    <div id="job-req-container">
                        <div class="flex space-x-2 mb-2">
                            <input type="text" name="job-req[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-black-400 text-black" placeholder="Job Requirement" required />
                            <button type="button" id="add-btn" onclick="addJobRequirement()" class="bg-green-500 text-white px-3 py-2 rounded-lg hover:bg-green-600">
                               +
                            </button>
                        </div>
                    </div>
                </div>

                    <div class="col-span-2 sm:col-span-1">
                      <label for="job-loc" class="block mb-2 text-sm font-medium text-gray-900 text-black">Job Location</label>
                      <select id="job-loc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-black-400 text-black dark:focus:ring-primary-500 dark:focus:border-primary-500">
                          <option selected disabled>Select Location</option>
                          <option value="plant1">Plant 1 Cimuncang</option>
                          <option value="plant2">Plant 2 Rancaekek</option>
                      </select>
                  </div>
                        <div class="flex justify-end">
                            <div class="flex items-end">    
                            </div>  
                        </div>
                        <div class="flex justify-end mt4">
                        <button type="submit" class="w-1/4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-4">Post</button>
                        <button type="button" onclick="closeModal()" class="w-1/4 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    </div>
    


        <div id="lowonganContainer">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Daftar Lowongan</h2>
        <!-- CARD LOKER -->
            <div class="flex justify-between items-center mb-4">
    <!-- Search Input -->
    
    <i class="fas fa-search"> 
    <input type="text" id="searchInput" onkeyup="searchJobs()" placeholder="Cari lowongan..." class="px-3 py-2 border rounded-lg w-80">
    </i>
    
    <!-- Filter Dropdown -->
    <select id="filterSelect" onchange="filterJobs()" class="px-3 py-2 border rounded-lg">
        <option value="latest">Terbaru</option>
        <option value="oldest">Terlama</option>
    </select>
</div>

<div id="cardContainer" class="space-y-4">
    <?php for ($x = 0; $x < 6; $x++) : ?>
        <div class="card max-w-full p-4 bg-white border-3 border-gray-200 rounded-lg shadow-lg dark:border-gray-700 grid grid-cols-1 md:grid-cols-2 gap-6 relative">
            <div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray">Front End Website</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray">📅 25 Januari 2025 - 02 Februari 2025</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray">💼 FullTime</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray">👥 2 Orang</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray">📍 Plant 1 Cimuncang</p>
                <a href="candidat.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Kelola Kandidat
                </a>

                <!-- Tombol Aksi Lainnya -->
                <div class="relative inline-block text-left">
                    <button onclick="toggleMenu(event, this)" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Aksi Lainnya
                    </button>

                    <!-- Dropdown Menu -->
                    <div class="dropdownMenu absolute mt-2 w-40 bg-white border border-gray-300 rounded-lg shadow-lg hidden z-10">
                    <ul class="py-1 text-gray-700">
    <li>
        <button onclick="openEditModal()" class="flex items-center gap-2 px-4 py-2 w-full text-left text-gray-700 hover:bg-blue-500 hover:text-white transition-all duration-300 rounded-md">
            <svg class="w-5 h-5 text-gray-500 hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4h2m1 0h4a2 2 0 012 2v4m0 1v7a2 2 0 01-2 2h-7m-1 0H6a2 2 0 01-2-2v-7m0-1V6a2 2 0 012-2h4m1 9v4m-4-4h8" />
            </svg>
            Edit
        </button>
    </li>
    <li>
        <button onclick="openDeleteConfirm()" class="flex items-center gap-2 px-4 py-2 w-full text-left text-gray-700 hover:bg-red-500 hover:text-white transition-all duration-300 rounded-md">
            <svg class="w-5 h-5 text-gray-500 hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            Delete
        </button>
    </li>
</ul>

                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-between">
                <div class="flex items-center justify-between mb-8 ml-4">
                    <span class="text-gray-700 font-medium dark:text-gray-400">Status Lowongan</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked onchange="toggleStatus(this)">
                        <div class="w-11 h-6 bg-red-600 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-1 after:left-1 after:bg-white after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-green-500"></div>
                    </label>
                </div>
                <div class="p-4 bg-gray-50 border rounded-lg">
                    <p class="text-sm font-medium text-gray-700 dark:text-gray-400">👥 Kandidat Mendaftar: <span class="font-semibold text-gray-900" id="kandidatTotal">15</span></p>
                    <p class="text-sm font-medium text-gray-700 dark:text-gray-400 mt-2">👀 Sudah Dilihat: <span class="font-semibold text-gray-900" id="kandidatDilihat">5</span></p>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>

<!-- Modal Edit -->
<div id="edit-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-[calc(150%-1rem)] max-h-full bg-gray-900 bg-opacity-50 backdrop-blur-sm">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow-sm bg-white-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900 text-black text-center w-full">
                        💼 Edit Job</h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" onclick="closeModalEdit()">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                    <div class="p-4 md:p-8">
                        <form class="space-y-4" action="#">
                        <div class="flex gap-4">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Date Post</label>
                    <input type="date" class="w-full p-2 border rounded mb-3" placeholder="Job Position">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">End Date Post</label>
                    <input type="date" class="w-full p-2 border rounded mb-3" placeholder="Job Position">
                </div>
            </div>
            <label class="block text-sm font-medium text-gray-700">Quota</label>
                    <input type="number" class="w-full p-2 border rounded mb-3" placeholder="Quota">
                        <div class="col-span-2 sm:col-span-1">
                          <label for="job-type" class="block mb-2 text-sm font-medium text-gray-900 text-black">Job Type</label>
                          <select id="job-type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-black-400 text-black dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              <option selected disabled>Select category</option>
                              <option value="intern">Internship</option>
                              <option value="fulltime">Full Time</option>
                              <option value="shift">Shift</option>
                          </select>
                      </div>
                      <div>
                        <label for="job-desc" class="block mb-2 text-sm font-medium text-gray-900 text-black">Job Description</label>
                        <input type="text" name="job-desc" id="job-position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-black-400 text-black" placeholder="Job Description" required />
                    </div>
                    <div>
                    <label for="job-req" class="block mb-2 text-sm font-medium text-gray-900 text-black">Job Requirements</label>
                    <div id="job-req-container">
                        <div class="flex space-x-2 mb-2">
                            <input type="text" name="job-req[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-black-400 text-black" placeholder="Job Requirement" required />
                            <button type="button" id="add-btn" onclick="addJobRequirement()" class="bg-green-500 text-white px-3 py-2 rounded-lg hover:bg-green-600">
                               +
                            </button>
                        </div>
                    </div>
               

                    <div class="col-span-2 sm:col-span-1">
                      <label for="job-loc" class="block mb-2 text-sm font-medium text-gray-900 text-black">Job Location</label>
                      <select id="job-loc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-black-400 text-black dark:focus:ring-primary-500 dark:focus:border-primary-500">
                          <option selected disabled>Select Location</option>
                          <option value="plant1">Plant 1 Cimuncang</option>
                          <option value="plant2">Plant 2 Rancaekek</option>
                      </select>
                  </div>
                        <div class="flex justify-between">
                            <div class="flex items-start">    
                            </div>  
                        </div>

            <div class="flex justify-end mt-4">
                <button type="submit" class="w-1/4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-4">Save</button>
                <button type="button" onclick="closeModalEdit()" class="w-1/4 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Cancel</button>
            </div>
        </form>
    </div>
</div>
</div>
            </div>
        </div>

       
        <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
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
          <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
          </svg>
        </a>
        <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white">1</a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50">2</a>
        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 md:inline-flex">3</a>
        <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-gray-300 ring-inset">...</span>
        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50">10</a>
        <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50">
          <span class="sr-only">Next</span>
          <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
        </a>
      </nav>
    </div>
  </div>
</div>

<!-- Modal Konfirmasi Delete -->
<div id="delete-modal" class="hidden fixed inset-0 flex justify-center items-center bg-gray-900 bg-opacity-50 backdrop-blur-sm">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-center">
        <h3 class="text-lg font-semibold mb-4">⚠️ Konfirmasi</h3>
        <p>Apakah Anda yakin ingin menghapus lowongan ini?</p>
        <div class="mt-4 flex justify-center space-x-4">
            <button onclick="confirmDelete('delete-modal')" class="bg-red-600 text-white px-4 py-2 rounded">Ya</button>
            <button onclick="confirmNo()" class="bg-green-400 text-white px-4 py-2 rounded">Tidak</button>
        </div>
    </div>
</div>



       

    

    
<!-- Pagination -->




</div>
</div>
</div>
</main>
</div>
</header>
    <?php include ('partial/footer.php');?>


            <!-- JavaScript -->

<script>
function toggleMenu(event, button) {
    event.stopPropagation(); // Mencegah event klik keluar dari tombol

    // Tutup semua dropdown sebelum membuka yang baru
    document.querySelectorAll(".dropdownMenu").forEach(menu => menu.classList.add("hidden"));

    // Ambil dropdown menu yang berada dalam card yang sama
    let dropdown = button.nextElementSibling;
    dropdown.classList.toggle("hidden");
}

// Menutup dropdown saat klik di luar
document.addEventListener("click", function() {
    document.querySelectorAll(".dropdownMenu").forEach(menu => menu.classList.add("hidden"));
});
</script>


<script>
    function openEditModal() {
        document.getElementById("edit-modal").classList.remove("hidden");
    }

    function openDeleteConfirm() {
        document.getElementById("delete-modal").classList.remove("hidden");
    }

    function closeModal(id) {
        document.getElementById(id).classList.add("hidden");
    }
    function confirmNo() {
        window.location.href = ""; // Redirect ke halaman delete
    }

    function confirmDelete() {
        window.location.href = ""; // Redirect ke halaman delete
    }

    // Tutup dropdown jika klik di luar area
    document.addEventListener("click", function(event) {
        if (!event.target.closest("button")) {
            document.getElementById("dropdownMenu").classList.add("hidden");
        }
    });
</script>

<script>
    // Menutup dropdown jika klik di luar area
    document.addEventListener("click", function(event) {
        const dropdown = document.getElementById("dropdownMenu");
        const button = event.target.closest("button");
        
        if (!button) {
            dropdown.classList.add("hidden");
        }
    });
</script>
            <script>
    
    // Menutup dropdown jika klik di luar area
    document.addEventListener("click", function(event) {
        const dropdown = document.getElementById("dropdownMenu");
        const button = event.target.closest("button");
        
        if (!button) {
            dropdown.classList.add("hidden");
        }
    });
</script>
            <script>
    let maxFields = 3; // Maksimal input yang bisa ditambahkan
    let fieldCount = 1; // Awal sudah ada 1 input

    function addJobRequirement() {
        const container = document.getElementById("job-req-container");
        const addButton = document.getElementById("add-btn");

        if (fieldCount < maxFields) {
            const newField = document.createElement("div");
            newField.classList.add("flex", "space-x-2", "mb-2");

            const newInput = document.createElement("input");
            newInput.type = "text";
            newInput.name = "job-req[]";
            newInput.classList.add("bg-gray-50", "border", "border-gray-300", "text-gray-900", "text-sm", "rounded-lg", "focus:ring-blue-500", "focus:border-blue-500", "block", "w-full", "p-2.5", "dark:bg-white-600", "dark:border-gray-500", "dark:placeholder-black-400", "text-black");
            newInput.placeholder = "Job Requirement";
            newInput.required = true;

            const deleteButton = document.createElement("button");
            deleteButton.type = "button";
            deleteButton.innerHTML = "−";
            deleteButton.classList.add("bg-red-500", "text-white", "px-3", "py-2", "rounded-lg", "hover:bg-red-600");
            deleteButton.onclick = function () {
                container.removeChild(newField);
                fieldCount--;
                addButton.disabled = false; // Aktifkan kembali tombol tambah jika kurang dari 3
                addButton.classList.remove("opacity-50", "cursor-not-allowed");
            };

            newField.appendChild(newInput);
            newField.appendChild(deleteButton);
            container.appendChild(newField);

            fieldCount++;

            // Jika sudah mencapai batas maksimal, disable tombol tambah
            if (fieldCount >= maxFields) {
                addButton.disabled = true;
                addButton.classList.add("opacity-50", "cursor-not-allowed");
            }
        }
    }
</script>

        <script>
            // Function Job
            function searchJobs() {
                let input = document.getElementById('searchInput').value.toLowerCase();
                let jobCards = document.querySelectorAll('.job-card');
                
                jobCards.forEach(card => {
                    let title = card.querySelector('.job-title').innerText.toLowerCase();
                    card.style.display = title.includes(input) ? '' : 'none';
                });
            }

            function filterJobs() {
                let filterValue = document.getElementById('filterSelect').value;
                let jobContainer = document.getElementById('cardContainer');
                let jobCards = Array.from(document.querySelectorAll('.job-card'));
                
                jobCards.sort((a, b) => {
                    let dateA = new Date(a.querySelector('.job-date').innerText.split('📅 ')[1]);
                    let dateB = new Date(b.querySelector('.job-date').innerText.split('📅 ')[1]);
                    return filterValue === 'latest' ? dateB - dateA : dateA - dateB;
                });
                
                jobCards.forEach(card => jobContainer.appendChild(card));
            }

            // <!-- Function untuk Modal -->
            function openModal() {
                        document.getElementById('authentication-modal').classList.remove('hidden');
                    }
                
                    function closeModal() {
                        document.getElementById('authentication-modal').classList.add('hidden');
                    }
                    
                    function closeModalEdit() {
                        document.getElementById('edit-modal').classList.add('hidden');
                    }
        </script>
</body>
<html>  