<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen bg-gray-100 flex items-center justify-center">
    <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden grid grid-cols-1 md:grid-cols-2">
        <!-- Kolom Kiri (Gambar) -->
        <div class="relative hidden md:flex flex-col items-center justify-center p-8 bg-grey-600">
            <img src="src/plant1.jpg" alt="Gambar Atas" class="w-full h-1/2 object-cover rounded-lg shadow-lg">
            <img src="src/plant2.jpg" alt="Gambar Bawah" class="w-full h-1/2 object-cover mt-6 rounded-lg shadow-lg">
        </div>

        <!-- Kolom Kanan (Form Login) -->
        <div class="flex flex-col justify-center p-4">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-10 w-auto" src="src/ewindo.png" alt="Your Company">
                <h2 class="mt-2 text-center text-2xl font-bold tracking-tight text-gray-900">Sign in</h2>
            </div>
           
            <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
                <form cl    ass="space-y-6" action="#" method="POST">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-600">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                           
                        </div>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-600">
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-white font-semibold shadow-md hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-indigo-600">Sign in</button>
                    </div>
                    <div class="mt-10">
                    <div>
                <a href="/admin/career/beranda.php" button type="masuk" class="flex w-20 justify-center rounded-md bg-blue-600 px-3 py-1.5 text-white font-semibold shadow-md hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-indigo-600">Bypass</a>
                    </div>
                    </div>
                </form>

               
            </div>
        </div>
    </div>
</body>
</html>
