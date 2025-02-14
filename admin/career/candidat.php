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
    <header>
   <main class="container mx-auto mt-8 px-40">
        <!-- card Info Lowongan -->
<div class="max-w-full p-2 bg-white border-4 border-gray-200 rounded-lg shadow-md bg-white dark:border-gray-300 relative">
    <div class="absolute top-12 right-4 text-right">
        <p class="text-md font-semibold text-gray-900">Kuota Pendaftar: <span class="text-blue-600">50</span></p>
        <p class="text-sm text-gray-700">Jumlah Pendaftar: <span class="text-blue-600">120</span></p>
        <p class="text-sm text-gray-700">Sudah Dilihat: <span class="text-blue-600">85</span></p>
        <p class="font-bold text-md text-gray-700">📅 01 Feb 2024 - 28 Feb 2024</p>
    </div>
    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-gray">Front End Developer</h5>
    <p class="mb-1 font-bold text-gray-500 dark:text-black">💼 FullTime</p>
    <div class="flex flex-wrap gap-4 mt-2">
        <div class="bg-blue-100  text-blue-800 text-xs font-semibold px-2.5 py-1.5 rounded-lg dark:bg-white dark:text-black border border-black inline-flex items-center justify-center">JavaScript</div>
        <div class="bg-blue-100  text-blue-800 text-xs font-semibold px-2.5 py-1.5 rounded-lg dark:bg-white dark:text-black border border-black inline-flex items-center justify-center">PHP</div>
        <div class="bg-blue-100  text-blue-800 text-xs font-semibold px-2.5 py-1.5 rounded-lg dark:bg-white dark:text-black border border-black inline-flex items-center justify-center">HTML</div>
        <div class="bg-blue-100  text-blue-800 text-xs font-semibold px-2.5 py-1.5 rounded-lg dark:bg-white dark:text-black border border-black inline-flex items-center justify-center">Figma</div>
        <div class="bg-blue-100  text-blue-800 text-xs font-semibold px-2.5 py-1.5 rounded-lg dark:bg-white dark:text-black border border-black inline-flex items-center justify-center">CSS</div>
    </div>
    <p class="mt-2 font-bold text-gray-500 dark:text-black  ">📍 Plant 1 Cimuncang</p>
</div>

    
        <div class="flex justify-between items-center mt-6 shadow-lg">
            <div class="relative">
            <i class="fas fa-search"></i>
                <input type="text" placeholder="Cari nama" class="border rounded-lg py-2 px-4 w-64">
            </div>

            <div class="flex space-x-4">
     <button onclick="toggleSortMenu()" class="border rounded-lg py-2 px-4 flex items-center">
        <i class="fas fa-sort mr-2"></i> Urutkan Berdasarkan: <span id="sortText">Terbaru</span>
    </button>
    <button onclick="toggleFilterModal()" class="border rounded-lg py-2 px-4 flex items-center">
        <i class="fas fa-filter mr-2"></i> Filter Berdasarkan
    </button>
            </div>
        </div>

        <div id="sortMenu" class="absolute mt-2 bg-white border rounded-lg shadow-lg hidden w-48">
    <ul class="py-2 text-gray-700">
        <li><button onclick="setSort('Terbaru')" class="block w-full px-4 py-2 text-left hover:bg-gray-200">Terbaru</button></li>
        <li><button onclick="setSort('Terlama')" class="block w-full px-4 py-2 text-left hover:bg-gray-200">Terlama</button></li>
    </ul>
</div>

<div id="filterModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-lg font-bold mb-4">Filter Berdasarkan</h2>

        <!-- Filter Pendidikan -->
        <label class="block mb-2">Pendidikan:</label>
        <select id="pendidikanFilter" class="w-full border p-2 rounded-lg">
            <option value="">Semua</option>
            <option value="SMA">SMA</option>
            <option value="D3">D3</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
        </select>

        <!-- Filter Range Umur -->
        <label class="block mt-4 mb-2">Range Umur:</label>
        <input id="umurMin" type="number" placeholder="Min" class="w-20 border p-2 rounded-lg">
        <input id="umurMax" type="number" placeholder="Max" class="w-20 border p-2 rounded-lg ml-2">

        <!-- Filter Kota -->
        <label class="block mt-4 mb-2">Kota:</label>
        <input id="kotaFilter" type="text" placeholder="Masukkan kota" class="w-full border p-2 rounded-lg">

        <!-- Tombol Apply & Close -->
        <div class="flex justify-end mt-4">
            <button onclick="applyFilter()" class="w-1/4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-4 ">Terapkan</button>
            <button onclick="toggleFilterModal()" class="w-1/4 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Batal</button>
        </div>
    </div>
</div>

        <!-- Tabel Data Pelamar -->

        <div class="mt-6 bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gray-200">
                    <tr>

                        <th class="py-3 px-4 text-left">No</th>
                        <th class="py-3 px-4 text-left">Nama Lengkap</th>
                        <th class="py-3 px-4 text-left">Umur</th>
                        <th class="py-3 px-4 text-left">Pendidikan</th>
                        <th class="py-3 px-4 text-left">Jurusan</th>
                        <th class="py-3 px-4 text-left">Kota</th>
                        <th class="py-3 px-4 text-left">Status</th>
                        <th class="py-3 px-4 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($x=1; $x <= 10; $x++):?>
                        <tr class="border-b">
                       
                         <td class="py-3 px-4"><?= $x ?></td>
                        <td class="py-3 px-4">John Doloe</td>
                        <td class="py-3 px-4">30</td>
                        <td class="py-3 px-4">S1</td>
                        <td class="py-3 px-4">Teknik Informatika</td>
                        <td class="py-3 px-4">Jakarta</td>
                        <td class="py-3 px-4">
                            <span class="bg-green-500 text-white py-1 px-3 rounded-full text-sm">Approve</span>
                        </td>
                        <td class="py-3 px-4 flex space-x-2">
                            <a href="detail.php">👀</a></i>
                            🖨
                        </td>
                    </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>

<!-- Pagination -->
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

    </main>
</header>
<?php include ('partial/footer.php');?>
   </body>
   <script>
function toggleSortMenu() {
    document.getElementById("sortMenu").classList.toggle("hidden");
}

function setSort(order) {
    document.getElementById("sortText").textContent = order;
    document.getElementById("sortMenu").classList.add("hidden");
    console.log("Urutan berdasarkan:", order);
}

function toggleFilterModal() {
    document.getElementById("filterModal").classList.toggle("hidden");
}

function applyFilter() {
    let pendidikan = document.getElementById("pendidikanFilter").value;
    let umurMin = document.getElementById("umurMin").value;
    let umurMax = document.getElementById("umurMax").value;
    let kota = document.getElementById("kotaFilter").value;

    console.log("Filter Diterapkan:");
    console.log("Pendidikan:", pendidikan || "Semua");
    console.log("Umur:", umurMin || "Any", "-", umurMax || "Any");
    console.log("Kota:", kota || "Semua");

    // Tutup modal setelah filter diterapkan
    toggleFilterModal();
}

// Menutup dropdown saat klik di luar
document.addEventListener("click", function (event) {
    if (!event.target.closest(".dropdown-menu")) {
        document.getElementById("sortMenu").classList.add("hidden");
    }
});
</script>
