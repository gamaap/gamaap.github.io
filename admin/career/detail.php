<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Career</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<?php include ('partial/navbar.php');?>
<body>
    <header>
    <main class="p-12">
        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center space-x-2">
                <div class="bg-gray-200 hover:bg-gray-200 p-2 rounded-full inline-flex items-center justify-center">
                    <i class="fas fa-arrow-left text-xl"></i>
                </div>
                <h1 class="text-2xl font-bold">UJANG CODET</h1>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full flex items-center gap-2">
                🖨 Cetak
                </button>
            </div>
            <div class="flex space-x-2">
                <button class="bg-green-500 text-white px-4 py-2 rounded-full">Approve</button>
                <button class="bg-gray-500 text-white px-4 py-2 rounded-full">Pending</button>
                <button class="bg-red-500 text-white px-4 py-2 rounded-full">Reject</button>
            </div>
        </div>
        <div class="mb-4">
            <h2 class="text-lg font-bold">CV Digital</h2>
            <img src="src/foto.png" class="border border-yellow-500 w-40 h-60 mt-2"></>
        </div>
        
<!-- DATA DIRI -->

        <div class="max-w-full bg-white p-4 rounded-lg shadow-md border">
            <h2 class="text-lg font-semibold mb-4">Data Diri</h2>

            <div class="flex items-center mb-2">
                <label for="nik" class="text-gray-700 font-medium w-64">NIK</label>
                <span class="mr-2">:</span>
                <input type="text" id="nik" class="border rounded-md px-2 py-1 flex-1 nik" placeholder="NIK">
            </div>
        
            <div class="flex items-center mb-2">
                <label for="nama-lengkap" class="text-gray-700 font-medium w-64">Nama Lengkap</label>
                <span class="mr-2">:</span>
                <input type="text" id="nama-lengkap" placeholder="Nama Lengkap" id="nama-lengkap" class="border rounded-md px-2 py-1 flex-1 nama-lengkap">
            </div>
        
            <div class="flex items-center mb-2">
                <label for="jenis-kelamin" class="text-gray-700 font-medium w-64">Jenis Kelamin</label>
                <span class="mr-2">:</span>
                <input type="text" id="jk" placeholder="Jenis Kelamin" class="border rounded-md px-2 py-1 flex-1">
            </div>
        
            <div class="flex items-center mb-2">
                <label for="no-hp" class="text-gray-700 font-medium w-64">No.HP</label>
                <span class="mr-2">:</span>
                <input type="text" id="no-hp" placeholder="nohp" class="border rounded-md px-2 py-1 flex-1">
            </div>
            
            <div class="flex items-center mb-2">
                <label for="email" class="text-gray-700 font-medium w-64">Email</label>
                <span class="mr-2">:</span>
                <input type="email" id="email" placeholder="Email" class="border rounded-md px-2 py-1 flex-1">
            </div>

            <div class="flex items-center mb-2">
                <label for="ttl" class="text-gray-700 font-medium w-64">Tempat/Tanggal Lahir</label>
                <span class="mr-2">:</span>
                <input type="text" id="ttl" placeholder="Tempat dan Tanggal Lahir" class="border rounded-md px-2 py-1 flex-1">
            </div>
            
            <div class="flex items-center mb-2">
                <label for="alamat-ktp" class="text-gray-700 font-medium w-64">Alamat KTP</label>
                <span class="mr-2">:</span>
                <input type="text" id="alamat-ktp" placeholder="Alamat KTP" class="border rounded-md px-2 py-1 flex-1">
            </div>

            <div class="flex items-center mb-2">
                <label for="alamat-domisili" class="text-gray-700 font-medium w-64">Alamat Domisili</label>
                <span class="mr-2">:</span>
                <input type="text" id="alamat-domisili" placeholder="Alamat Domisili" class="border rounded-md px-2 py-1 flex-1">
            </div>

            <div class="flex items-center mb-2">
                <label for="agama" class="text-gray-700 font-medium w-64">Agama</label>
                <span class="mr-2">:</span>
                <input type="text" id="agama" placeholder="Agama" class="border rounded-md px-2 py-1 flex-1">
            </div>

            <div class="flex items-center mb-2">
                <label for="status" class="text-gray-700 font-medium w-64">Status</label>
                <span class="mr-2">:</span>
                <input type="text" id="status" placeholder="Status" class="border rounded-md px-2 py-1 flex-1">
            </div>
        </div>

        
        <!-- PENDIDIKAN -->

        <hr class="h-px my-4 bg-gray-200">
        <div class="max-w-full bg-white p-4 rounded-lg shadow-md border">
            <h2 class="text-lg font-semibold mb-4">PENDIDIKAN</h2>
        
            <div class="flex items-center mb-2">
                <label for="pendidikan" class="text-gray-700 font-medium w-64">Pendidikan Terakhir</label>
                <span class="mr-2">:</span>
                <input type="text" placeholder="Pendidikan Terakhir" class="border rounded-md px-2 py-1 flex-1">
            </div>
        
            <div class="flex items-center mb-2">
                <label for="universitas" class="text-gray-700 font-medium w-64">Nama Institusi/Universitas</label>
                <span class="mr-2">:</span>
                <input type="text" id="universitas" placeholder="Universitas/Institusi" class="border rounded-md px-2 py-1 flex-1">
            </div>
        
            <div class="flex items-center mb-2">
                <label for="jurusan" class="text-gray-700 font-medium w-64">Program Studi/Jurusan</label>
                <span class="mr-2">:</span>
                <input type="text" id="jurusan" placeholder="Jurusan" class="border rounded-md px-2 py-1 flex-1">
            </div>
        
            <div class="flex items-center mb-2">
                <label for="tahun-lulus" class="text-gray-700 font-medium w-64">Tahun Kelulusan</label>
                <span class="mr-2">:</span>
                <input type="text" id="tahun-lulus" placeholder="Tahun Kelulusan" class="border rounded-md px-2 py-1 flex-1">
            </div>
            
            <div class="flex items-center mb-2">
                <label for="nilai" class="text-gray-700 font-medium w-64">Nilai/IPK Akhir</label>
                <span class="mr-2">:</span>
                <input type="text" id="nilai" placeholder="Nilai IPK" class="border rounded-md px-2 py-1 flex-1">
            </div>
        </div>


        <!-- PENGALAMAN KERJA -->

        <hr class="h-px my-4 bg-gray-200">
        <div class="max-w-full bg-white p-4 rounded-lg shadow-md border">
            <h2 class="text-lg font-semibold mb-4">PENGALAMAN KERJA</h2>
        
            <div class="flex items-center mb-2">
                <label for="perusahaan" class="text-gray-700 font-medium w-64">Nama Instansi/Perusahaan</label>
                <span class="mr-2">:</span>
                <input type="text" id="perusahaan" placeholder="perusahaan" class="border rounded-md px-2 py-1 flex-1">
            </div>
        
            <div class="flex items-center mb-2">
                <label for="jabatan" class="text-gray-700 font-medium w-64">Posisi/Jabatan</label>
                <span class="mr-2">:</span>
                <input type="text" id="jabatan" placeholder="Jabatan" class="border rounded-md px-2 py-1 flex-1">
            </div>
        
            <div class="flex items-center mb-2">
                <label for="jenis-pekerjaan" class="text-gray-700 font-medium w-64">Jenis Pekerjaan</label>
                <span class="mr-2">:</span>
                <input type="text" id="jenis-pekerjaan" placeholder="Jenis Pekerjaan" class="border rounded-md px-2 py-1 flex-1">
            </div>
        
            <div class="flex items-center mb-2">
                <label for="periode" class="text-gray-700 font-medium w-64">Periode</label>
                <span class="mr-2">:</span>
                
                    <div id="date-range-picker" date-rangepicker class="flex items-center">
                        <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input id="datepicker-range-start" name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5   dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                        </div>
                        <span class="mx-4 text-gray-500">to</span>
                        <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input id="datepicker-range-end" name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                    </div>
                </div>
            </div>
            
            <div class="flex items-center mb-2">
                <label for="gaji" class="text-gray-700 font-medium w-64">Gaji Terakhir</label>
                <span class="mr-2">:</span>
                <input type="text" id="gaji" placeholder="Gaji Terakhir" class="border rounded-md px-2 py-1 flex-1">
            </div>
        </div>


        <!-- INFORMASI TAMBAHAN -->

        <hr class="h-px my-4 bg-gray-200">
        <div class="max-w-full bg-white p-4 rounded-lg shadow-md border">
            <h2 class="text-lg font-semibold mb-4">INFORMASI TAMBAHAN</h2>
        
            <div class="flex items-center mb-2">
                <label for="Keahlian" class="text-gray-700 font-medium w-64">Keahlian Khusus</label>
                <span class="mr-2">:</span>
                <textarea class="resize-x rounded-md border rounded-md ..." placeholder="Keahlian"></textarea>
            </div>
        
            <div class="flex items-center mb-2">
                <label for="riwayat-kesehatan" class="text-gray-700 font-medium w-64">Riwayat Kesehatan</label>
                <span class="mr-2">:</span>
                <input type="text" id="riwayat-kesehatan" placeholder="Riwayat Kesehatan" class="border rounded-md px-2 py-1 flex-1">
            </div>
        
            <div class="flex items-center mb-2">
                <label for="kesediaan" class="text-gray-700 font-medium w-64">Kesediaan Bekerja</label>
                <span class="mr-2">:</span>
                <input type="email" id="kesediaan-kerja" placeholder="Kesediaan-Kerja" class="border rounded-md px-2 py-1 flex-1">
            </div>
        </div>

        <!-- INFORMASI lOWONGAN -->

        <hr class="h-px my-4 bg-gray-200">
        <div class="max-w-full bg-white p-4 rounded-lg shadow-md border">
            <h2 class="text-lg font-semibold mb-4">INFORMASI LOWONGAN KERJA</h2>
        
            <div class="flex items-center mb-2">
                <label for="media-sosial" class="text-gray-700 font-medium w-64">Media Sosial</label>
                <span class="mr-2">:</span>
                <input type="text" id="media-sosial" placeholder="Media Sosial" class="border rounded-md px-2 py-1 flex-1">
            </div>
        
            <div class="flex items-center mb-2">
                <label for="teman-kerabat" class="text-gray-700 font-medium w-64">Teman/Kerabat</label>
                <span class="mr-2">:</span>
                <input type="text" id="teman-kerabat" placeholder="teman-kerabat" class="border rounded-md px-2 py-1 flex-1">
            </div>
        </div>
    <div>
        
                <h2 class="text-lg font-bold mb-2">Attachment</h2> 
                <div class="flex justify-between">
                <!-- Button CV -->
                        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-3.5 h-3.5 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                                <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                            </svg>
                            <span class="px-4 py-2">CV</span>
                        </button>


                <!-- Button KTP -->
                <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-3.5 h-3.5 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                    <span class="px-4 py-2">KTP</span>
                </button>

                <!-- Button KK -->
                <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-3.5 h-3.5 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                    <span class="px-4 py-2">KK</span>
                </button>

                <!-- Button Ijazah -->
                <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-3.5 h-3.5 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                    <span class="px-4 py-2">Ijazah Terakhir</span>
                </button>

                <!-- Button Sertifikat -->
                <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-3.5 h-3.5 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                    <span class="px-4 py-2">Sertifikasi Pendukung</span>
                </button>

            </div>
        </div>
    </main>
</header>
<?php include ('partial/footer.php');?>
</body>