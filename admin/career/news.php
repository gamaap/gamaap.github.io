<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   News Update
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
 </head>
    <body class="font-roboto bg-white">
     <?php include ('partial/navbar.php'); ?>
        <main class="p-8">
        <div class="flex justify-center mb-8">
            <button id="openModal" class="bg-yellow-600 text-white py-2 px-4 rounded">
            + News Update
            </button>
        </div>

        <!-- Modal -->
        <div class="flex justify-center space-x-4 mb-2">
            <div class="relative">
            <input class="border rounded-full py-2 px-4 pl-10" placeholder="Cari Judul" type="text"/>
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
            </i>
        </div>
            <div class="relative inline-block text-left">
            <button id="sortButton" class="border rounded-full py-2 px-4 pl-10 pr-6 bg-white text-gray-700 shadow-sm focus:outline-none">
                Urutkan Berdasarkan: <span id="sortText">Terbaru</span>
            </button>
            <i class="fas fa-sort-amount-down absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>

            <!-- Dropdown Menu -->
            <div id="sortDropdown" class="absolute mt-2 w-48 bg-white border rounded-lg shadow-lg hidden">
                <ul class="py-2 text-gray-700">
                    <li>
                        <button class="w-full text-left px-4 py-2 hover:bg-gray-100" onclick="setSorting('Terbaru')">Terbaru</button>
                    </li>
                    <li>
                        <button class="w-full text-left px-4 py-2 hover:bg-gray-100" onclick="setSorting('Terdahulu')">Terdahulu</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>


   <div class="bg-white py-32 sm:py-2">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 
                    sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            
            <!-- Artikel 1 -->
            <article class="flex flex-col items-start justify-between h-full bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-200 transition-transform transform hover:scale-105">
                <img src="src/hut-ri.jpg" alt="Article Image" class="w-full h-60 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-x-4 text-xs text-gray-500">
                        <time datetime="2020-03-16">Agustus 17, 2024</time>
                        <a href="#" class="relative rounded-full bg-gray-100 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-200 transition">Ceremony</a>
                    </div>
                    <div class="group relative flex-grow">
                        <h3 class="mt-4 text-lg font-semibold text-gray-900 group-hover:text-yellow-600 transition">
                            <a href="#">HUT RI KE-79</a>
                        </h3>
                        <p class="mt-3 text-sm text-gray-600 line-clamp-3">
                            Perayaan HUT RI KE 79 di Gedung Ewindo Harness sumedang kabupaten Bandung...
                        </p>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center gap-x-4">
                            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                                alt="" class="size-10 rounded-full bg-gray-50">
                            <div class="text-sm">
                                <p class="font-semibold text-gray-900"><a href="#">Admin PT. Ewindo</a></p>
                                <p class="text-gray-600">2024</p>
                            </div>
                        </div>
                        <a href="#" class="edit-btn bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-yellow-700 transition">
                            Edit
                        </a>
                    </div>
                </div>
            </article>
            

            <!-- Artikel 2 -->
            <article class="flex flex-col items-start justify-between h-full bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-200 transition-transform transform hover:scale-105">
                <img src="src/aniv.jpg" alt="Article Image" class="w-full h-60 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-x-4 text-xs text-gray-500">
                        <time datetime="2020-03-16">Mar 16, 2020</time>
                        <a href="#" class="relative rounded-full bg-gray-100 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-200 transition">Ceremony</a>
                    </div>
                    <div class="group relative flex-grow">
                        <h3 class="mt-4 text-lg font-semibold text-gray-900 group-hover:text-yellow-600 transition">
                            <a href="#">Anniversary PT. Ewindo Ke-45th </a>
                        </h3>
                        <p class="mt-3 text-sm text-gray-600 line-clamp-3">
                            Aniversarry PT. Ewindo Ke-45th dirayakan dengan sangat meriah...
                        </p>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center gap-x-4">
                            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                                alt="" class="size-10 rounded-full bg-gray-50">
                            <div class="text-sm">
                                <p class="font-semibold text-gray-900"><a href="#">Admin PT. Ewindo</a></p>
                                <p class="text-gray-600">2024</p>
                            </div>
                        </div>
                        <a href="#" class="edit-btn bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-yellow-700 transition">
                            Edit
                        </a>
                    </div>
                </div>
            </article>

            <!-- Artikel 3 -->
            <article class="flex flex-col items-start justify-between h-full bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-200 transition-transform transform hover:scale-105">
                <img src="src/batik.png" alt="Article Image" class="w-full h-60 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-x-4 text-xs text-gray-500">
                        <time datetime="2020-03-16">Sep, 21 2020</time>
                        <a href="#" class="relative rounded-full bg-gray-100 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-200 transition">Ceremony</a>
                    </div>
                    <div class="group relative flex-grow">
                        <h3 class="mt-4 text-lg font-semibold text-gray-900 group-hover:text-yellow-600 transition">
                            <a href="#">Hari Batik PT. Ewindo</a>
                        </h3>
                        <p class="mt-3 text-sm text-gray-600 line-clamp-3">
                            PT. Ewindo Hari Batik di rayakan dengan sangat meriah...
                        </p>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center gap-x-4">
                            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                                alt="" class="size-10 rounded-full bg-gray-50">
                            <div class="text-sm">
                                <p class="font-semibold text-gray-900"><a href="#">Admin PT. Ewindo</a></p>
                                <p class="text-gray-600">2024</p>
                            </div>
                        </div>
                        <a href="#" class="edit-btn bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-yellow-700 transition">
                            Edit
                        </a>
                    </div>
                </div>
            </article>
            
            <!-- Artikel 4 -->
            <article class="flex flex-col items-start justify-between h-full bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-200 transition-transform transform hover:scale-105">
                <img src="src/pangandaran.jpg" alt="Article Image" class="w-full h-60 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-x-4 text-xs text-gray-500">
                        <time datetime="2020-03-16">Agustus 16, 2023</time>
                        <a href="#" class="relative rounded-full bg-gray-100 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-200 transition">Vacation</a>
                    </div>
                    <div class="group relative flex-grow">
                        <h3 class="mt-4 text-lg font-semibold text-gray-900 group-hover:text-yellow-600 transition">
                            <a href="#">Liburan Ke Pantai Pangandaran</a>
                        </h3>
                        <p class="mt-3 text-sm text-gray-600 line-clamp-3">
                            Liburan Ke Pantai Pangandaran Karyawan PT. Ewindo...
                        </p>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center gap-x-4">
                            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                                alt="" class="size-10 rounded-full bg-gray-50">
                            <div class="text-sm">
                                <p class="font-semibold text-gray-900"><a href="#">Admin PT. Ewindo</a></p>
                                <p class="text-gray-600">2024</p>
                            </div>
                        </div>
                        <a href="#" class="edit-btn bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-yellow-700 transition">
                            Edit
                        </a>
                    </div>
                </div>
            </article>
            
            <!-- Artikel 5 -->
            <article class="flex flex-col items-start justify-between h-full bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-200 transition-transform transform hover:scale-105">
                <img src="src/dufan.jpg" alt="Article Image" class="w-full h-60 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-x-4 text-xs text-gray-500">
                        <time datetime="2020-03-16">Mar 16, 2018</time>
                        <a href="#" class="relative rounded-full bg-gray-100 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-200 transition">Vacation</a>
                    </div>
                    <div class="group relative flex-grow">
                        <h3 class="mt-4 text-lg font-semibold text-gray-900 group-hover:text-yellow-600 transition">
                            <a href="#">Liburan Ke Dufan</a>
                        </h3>
                        <p class="mt-3 text-sm text-gray-600 line-clamp-3">
                            Liburan PT. Ewindo Ke Dufan Jakarta,dengan sangat Meriah...
                        </p>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center gap-x-4">
                            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                                alt="" class="size-10 rounded-full bg-gray-50">
                            <div class="text-sm">
                                <p class="font-semibold text-gray-900"><a href="#">Michael Foster</a></p>
                                <p class="text-gray-600">Co-Founder / CTO</p>
                            </div>
                        </div>
                        <a href="#" class="edit-btn bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-yellow-700 transition">
                            Edit
                        </a>
                    </div>
                </div>
            </article>
            
            <!-- Artikel 6 -->
            <article class="flex flex-col items-start justify-between h-full bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-200 transition-transform transform hover:scale-105">
                <img src="src/jogja.jpg" alt="Article Image" class="w-full h-60 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-x-4 text-xs text-gray-500">
                        <time datetime="2020-03-16">Mar 16, 2020</time>
                        <a href="#" class="relative rounded-full bg-gray-100 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-200 transition">Vacation</a>
                    </div>
                    <div class="group relative flex-grow">
                        <h3 class="mt-4 text-lg font-semibold text-gray-900 group-hover:text-yellow-600 transition">
                            <a href="#">Liburan PT. Ewindo Ke Jogjakarta</a>
                        </h3>
                        <p class="mt-3 text-sm text-gray-600 line-clamp-3">
                            PT. Ewindo Melakukan Liburan Ke jogyakarta dengan sangat meriah...
                        </p>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center gap-x-4">
                            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                                alt="" class="size-10 rounded-full bg-gray-50">
                            <div class="text-sm">
                                <p class="font-semibold text-gray-900"><a href="#">Michael Foster</a></p>
                                <p class="text-gray-600">Co-Founder / CTO</p>
                            </div>
                        </div>
                        <a href="#" class="edit-btn bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-yellow-700 transition">
                            Edit
                        </a>
                    </div>
                </div>
            </article>


        </div>
    </div>
</div>


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


<!-- Modal -->
<!-- <div id="editModal" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 flex items-center justify-center"> -->
<div id="editModal" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
        <!-- Modal Header -->
        <div class="flex justify-between items-center border-b pb-3">
            <h2 class="text-lg font-semibold">✏️ Edit News</h2>
            <button id="closeEditModal" class="text-gray-500 hover:text-red-600 text-xl">&times;</button>
        </div>
        <form id="editForm" class="mt-3 space-y-3">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input type="text" id="editTitle" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>

            <!-- Category -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                <select id="editCategory" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                    <option selected disabled>Select Category</option>
                    <option value="Marketing">Exhibition</option>
                    <option value="Tech">Gathring</option>
                    <option value="Finance">Ceremony</option>
                    <option value="Sports">Vacation</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                <input type="date" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>

            
            <!-- Brief Description -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Brief Description</label>
                <textarea class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" rows="2" placeholder="Enter brief news details..." required></textarea>
            </div>
               
            <!-- News Detail -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">News Detail</label>
                <textarea class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" rows="3" placeholder="Enter full news details..." required></textarea>
            </div>

            <!-- Image Upload with Dynamic Limit -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Upload Images (Max 3)</label>
                <input type="file" id="imageInput" class="hidden" accept="image/*" onchange="addImage(event)">
                <label for="imageInput" class="cursor-pointer block border rounded-md px-3 py-2 text-center bg-gray-100 hover:bg-gray-200">+ Add Image</label>
                <div id="imagePreviewContainer" class="flex flex-wrap gap-2 mt-2"></div>
            </div>

            <!-- Modal Footer -->
            <div class="flex justify-end space-x-2">
                <button type="button" id="closeEditModalFooter" class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400 transition">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700 transition">Save Changes</button>
            </div>
        </form>
    </div>
</div>


        <div id="newsModal" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 flex items-center justify-center">
            <div class="bg-white p-5 rounded-lg shadow-lg max-w-md w-full">
                <div class="flex justify-between items-center border-b pb-2">
                    <h2 class="text-lg font-semibold text-gray-800">📰 Add News Update</h2>
                    <button id="closeModal" class="text-gray-500 hover:text-red-600 text-xl">&times;</button>
                </div>

                <form id="newsForm" class="mt-3 space-y-3"> <!-- Spasi antar elemen dikurangi -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                        <input type="text" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Enter news title" required>
                    </div>

            <!-- Category Dropdown -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                <select id="editCategory" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                    <option selected disabled>Select Category</option>
                    <option value="Marketing">Exhibition</option>
                    <option value="Tech">Gathring</option>
                    <option value="Finance">Ceremony</option>
                    <option value="Sports">Vacation</option>
                </select>
            </div>

            <!-- Date Picker -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                <input type="date" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>

            <!-- Brief Description -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Brief Description</label>
                <textarea class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" rows="2" placeholder="Enter brief news details..." required></textarea>
            </div>

            <!-- News Detail -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">News Detail</label>
                <textarea class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" rows="3" placeholder="Enter full news details..." required></textarea>
            </div>

            <!-- Image Upload with Dynamic Limit -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Upload Images (Max 3)</label>
                <input type="file" id="imageInput" class="hidden" accept="image/*" onchange="addImage(event)">
                <label for="imageInput" class="cursor-pointer block border rounded-md px-3 py-2 text-center bg-gray-100 hover:bg-gray-200">+ Add Image</label>
                <div id="imagePreviewContainer" class="flex flex-wrap gap-2 mt-2"></div>
            </div>

            <!-- Modal Footer -->
            <div class="flex justify-end space-x-2">
                <button type="button" id="closeModalFooter" class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400 transition">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700 transition">Submit</button>
            </div>
        </form>
    </div>
</div>
</main>
<?php include ('partial/footer.php');?>
 </body>

 <script>
    // Tampilkan dropdown saat tombol diklik
    document.getElementById("sortButton").addEventListener("click", function () {
        document.getElementById("sortDropdown").classList.toggle("hidden");
    });

    // Set nilai sorting
    function setSorting(value) {
        document.getElementById("sortText").textContent = value;
        document.getElementById("sortDropdown").classList.add("hidden");
        
        // Tambahkan logika sorting di sini (misalnya, sorting daftar artikel)
        console.log("Urutan dipilih: " + value);
    }

    // Sembunyikan dropdown jika klik di luar
    document.addEventListener("click", function (event) {
        if (!document.getElementById("sortButton").contains(event.target)) {
            document.getElementById("sortDropdown").classList.add("hidden");
        }
    });
</script>

 <script>
    document.getElementById("openModal").addEventListener("click", function () {
        document.getElementById("newsModal").classList.remove("hidden");
    });
    
    document.getElementById("closeModal").addEventListener("click", function () {
        document.getElementById("newsModal").classList.add("hidden");
    });
    
    document.getElementById("closeModalFooter").addEventListener("click", function () {
        document.getElementById("newsModal").classList.add("hidden");
    });
    </script>

<script>
    let images = [];

    function addImage(event) {
        if (images.length >= 3) {
            alert("You can only upload up to 3 images.");
            return;
        }

        const file = event.target.files[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = function(e) {
            const imageContainer = document.getElementById("imagePreviewContainer");
            
            const div = document.createElement("div");
            div.classList.add("relative");

            const img = document.createElement("img");
            img.src = e.target.result;
            img.classList.add("w-20", "h-20", "object-cover", "rounded-lg", "border");

            const removeBtn = document.createElement("button");
            removeBtn.innerHTML = "&times;";
            removeBtn.classList.add("absolute", "top-0", "right-0", "bg-red-600", "text-white", "w-5", "h-5", "rounded-full", "flex", "items-center", "justify-center", "text-xs", "cursor-pointer");
            removeBtn.onclick = function() {
                images = images.filter(img => img !== e.target.result);
                imageContainer.removeChild(div);
            };

            div.appendChild(img);
            div.appendChild(removeBtn);
            imageContainer.appendChild(div);

            images.push(e.target.result);
        };
        reader.readAsDataURL(file);
    }
</script>


<script>
    // Ambil semua tombol edit
    const editButtons = document.querySelectorAll(".edit-btn");
    const editModal = document.getElementById("editModal");
    const closeEditModal = document.getElementById("closeEditModal");
    const closeEditModalFooter = document.getElementById("closeEditModalFooter");

    // Input fields dalam modal
    // const editTitle = document.getElementById("editTitle");
    // const editCategory = document.getElementById("editCategory");
    // const editDescription = document.getElementById("editDescription");

    // Saat tombol Edit diklik
    editButtons.forEach(button => {
        button.addEventListener("click", function (event) {
            event.preventDefault();

            // Ambil data dari atribut data-*
            const title = button.getAttribute("data-title");
            const category = button.getAttribute("data-category");
            const description = button.getAttribute("data-description");

            // Isi form dengan data dari tombol yang ditekan
            // editTitle.value = title;
            // editCategory.value = category;
            // editDescription.value = description;

            // Tampilkan modal
            editModal.classList.remove("hidden");
        });
    });

    // Fungsi untuk menutup modal
    function closeModal() {
        editModal.classList.add("hidden");
    }

    // Event listener untuk menutup modal
    closeEditModal.addEventListener("click", closeModal);
    closeEditModalFooter.addEventListener("click", closeModal);
</script>
</html>
