<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main>
  <div class="mx-auto max-w-4xl px-4 py-6 sm:px-6 lg:px-8 p-6">
    <!-- Navigation Bar -->
    <div class="flex justify-between items-center mb-4">
      <div class="flex items-center space-x-2">
        <button
          onclick="history.back()"
          class="text-gray-700 hover:text-gray-900"
        >
          <i class="fa-solid fa-arrow-left"></i>
        </button>
        <span class="text-xl font-semibold">CV Digital</span>
        <i class="fa-solid fa-print"></i>
      </div>
      <div class="inline-flex rounded-md shadow-xs" role="group">
        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-green-500 border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-green-700 focus:text-green-700">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 me-2">
          <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
        </svg>
          Approve
        </button>
        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-gray-400 border-t border-b border-gray-200 hover:bg-gray-100 hover:text-gray-700 focus:z-10 focus:ring-2 focus:ring-gray-700 focus:text-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 me-2">
          <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
        </svg>
          Pending
        </button>
        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-red-500 border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-red-700 focus:text-red-700">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 me-2">
          <path fill-rule="evenodd" d="m6.72 5.66 11.62 11.62A8.25 8.25 0 0 0 6.72 5.66Zm10.56 12.68L5.66 6.72a8.25 8.25 0 0 0 11.62 11.62ZM5.105 5.106c3.807-3.808 9.98-3.808 13.788 0 3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788Z" clip-rule="evenodd" />
        </svg>
          Reject
        </button>
      </div>
    </div>
    <header class="bg-white shadow-md rounded-lg p-6 mb-6 flex items-center">
      <!-- Photo Placeholder -->
      <div class="w-40 h-60 bg-gray-300 rounded-lg flex items-center justify-center text-gray-600 text-sm">
          160x240
      </div>
      
      <!-- Text Content -->
      <div class="ml-6 flex-1">
        <h1 class="text-3xl font-bold text-gray-800">John Doe</h1>
        <div class="mt-4 text-gray-700 text-sm">
          <div class="grid gap-y-2">
            <div class="flex">
                <p class="font-medium w-40">NIK</p> 
                <p class="mr-2">:</p> 
                <p>1234567890123456</p>
            </div>
            <div class="flex">
                <p class="font-medium w-40">Jenis Kelamin</p> 
                <p class="mr-2">:</p> 
                <p>Laki-laki</p>
            </div>
            <div class="flex">
                <p class="font-medium w-40">No HP</p> 
                <p class="mr-2">:</p> 
                <p>0812-3456-7890</p>
            </div>
            <div class="flex">
                <p class="font-medium w-40">Email</p> 
                <p class="mr-2">:</p> 
                <p>johndoe@example.com</p>
            </div>
            <div class="flex">
                <p class="font-medium w-40">Tempat, Tanggal Lahir</p> 
                <p class="mr-2">:</p> 
                <p>Bandung, 14 Februari 1995</p>
            </div>
            <div class="flex">
                <p class="font-medium w-40">Alamat</p> 
                <p class="mr-2">:</p> 
                <p>Jl. Merdeka No. 10, Bandung</p>
            </div>
            <div class="flex">
                <p class="font-medium w-40">Agama</p> 
                <p class="mr-2">:</p> 
                <p>Islam</p>
            </div>
            <div class="flex">
                <p class="font-medium w-40">Status</p> 
                <p class="mr-2">:</p> 
                <p>Belum Menikah</p>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-white shadow-md rounded-lg p-6 mb-6">
      <h2 class="text-2xl font-semibold text-gray-800 mb-4">Pendidikan</h2>
      <div class="mt-4 text-gray-700 text-sm">
        <div class="grid gap-y-2">
          <div class="flex">
              <p class="font-medium w-60">Pendidikan Terakhir</p> 
              <p class="mr-2">:</p> 
              <p>S1 (Sarjana)</p>
          </div>
          <div class="flex">
              <p class="font-medium w-60">Nama Institusi / Universitas</p> 
              <p class="mr-2">:</p> 
              <p>Universitas Padjajaran</p>
          </div>
          <div class="flex">
              <p class="font-medium w-60">Program Studi / Jurusan</p> 
              <p class="mr-2">:</p> 
              <p>Teknik Informatika</p>
          </div>
          <div class="flex">
              <p class="font-medium w-60">Tahun Kelulusan</p> 
              <p class="mr-2">:</p> 
              <p>2020</p>
          </div>
          <div class="flex">
              <p class="font-medium w-60">Nilai / IPK Akhir</p> 
              <p class="mr-2">:</p> 
              <p>3,99</p>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-white shadow-md rounded-lg p-6 mb-6">
      <h2 class="text-2xl font-semibold text-gray-800 mb-4">Pengalaman Kerja</h2>
      <div class="mt-4 text-gray-700 text-sm">
        <div class="grid gap-y-2">
          <div class="flex">
              <p class="font-medium w-60">Nama Instansi / Perusahaan</p> 
              <p class="mr-2">:</p> 
              <p>PT XYZ</p>
          </div>
          <div class="flex">
              <p class="font-medium w-60">Posisi / Jabatan</p> 
              <p class="mr-2">:</p> 
              <p>Head of Accountant</p>
          </div>
          <div class="flex">
              <p class="font-medium w-60">Jenis Pekerjaan</p> 
              <p class="mr-2">:</p> 
              <p>Full Time</p>
          </div>
          <div class="flex">
              <p class="font-medium w-60">Periode</p> 
              <p class="mr-2">:</p> 
              <p>28 Juli 2014 - 29 Agustus 2024</p>
          </div>
          <div class="flex">
              <p class="font-medium w-60">Gaji Terakhir</p> 
              <p class="mr-2">:</p> 
              <p>Rp. 7.999.999,00 ,-</p>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-white shadow-md rounded-lg p-6 mb-6">
      <h2 class="text-2xl font-semibold text-gray-800 mb-4">Informasi Tambahan</h2>
      <div class="mt-4 text-gray-700 text-sm">
        <div class="grid gap-y-2">
          <div class="flex">
              <p class="font-medium w-60">Keahlian Khusus</p> 
              <p class="mr-2">:</p> 
              <span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-gray-300">Skill 1</span>
              <span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-gray-300">Skill 2</span>
              <span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-gray-300">Skill 3</span>
              <span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-gray-300">Skill 4</span>
          </div>
          <div class="flex">
              <p class="font-medium w-60">Riwayat Kesehatan</p> 
              <p class="mr-2">:</p> 
              <p>Tidak Ada Riwayat</p>
          </div>
          <div class="flex">
              <p class="font-medium w-60">Ketersediaan Bekerja</p> 
              <p class="mr-2">:</p> 
              <p>Ya</p>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-white shadow-md rounded-lg p-6 mb-6">
      <h2 class="text-2xl font-semibold text-gray-800 mb-4">Informasi Lowongan Kerja</h2>
      <div class="mt-4 text-gray-700 text-sm">
        <div class="grid gap-y-2">
          <div class="flex">
              <p class="font-medium w-60">Media Sosial</p>
              <p class="mr-2">:</p> 
              <p>LinkedIn PT Ewindo</p>
          </div>
          <div class="flex">
              <p class="font-medium w-60">Rekan / Kerabat</p> 
              <p class="mr-2">:</p> 
              <p>Kevin (Yg punya pabrik)</p>
          </div>
        </div>
      </div>     
    </section>

    </section class="mt-6 border-t pt-4">
    <h2 class="text-lg font-semibold text-gray-800 mb-3">Attachments</h2>
      <div class="flex flex-wrap gap-3">
          <a href="cv.pdf" target="_blank" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">
              View CV
          </a>
          <a href="ktp.pdf" target="_blank" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">
              View KTP
          </a>
          <a href="kk.pdf" target="_blank" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">
              View KK
          </a>
          <a href="ijazah.pdf" target="_blank" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">
              View Ijazah
          </a>
          <a href="sertifikat.pdf" target="_blank" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">
              View Sertifikat Pendukung
          </a>
      </div>
    <section>
  </div>
</main>

<?php require("partials/footer.php") ?>