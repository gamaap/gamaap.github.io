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
                background-image: url(/assets/hero/joinus2.png);
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
    <!-- JOBS SECTION -->
    <div class="flex items-center justify-center">
        <a href="career-empty.php" class="text-white mt-6 bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Empty State</a>
    </div>
    <div class="text-center mt-14">
        <h1 class="text-3xl font-bold">Available Jobs</h1>
        <p class="text-gray-500 mt-4">Placement will be adjusted based on the results of the test and interview.</p>
    </div>
    <div class="mt-12 space-y-8 max-w-4xl mx-auto mb-14">
        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="border-8 border-gray-200 rounded-lg p-6">
                <h2 class="text-xl font-bold">Job Name</h2>
                <p class="text-gray-500">Job Description</p>
                <div class="mt-4">
                    <span class="font-bold">Requirements</span>
                    <div class="flex space-x-2 mt-2">
                        <span class="bg-gray-200 rounded-full px-4 py-1">Requirement 1</span>
                        <span class="bg-gray-200 rounded-full px-4 py-1">Requirement 2</span>
                        <span class="bg-gray-200 rounded-full px-4 py-1">Requirement 3</span>
                    </div>
                </div>
                <div class="mt-4 mb-8">
                    <span class="font-bold">Location:</span>
                    <span class="text-gray-500">Location details</span>
                </div>
                <a class="mt-4 bg-yellow-500 text-white text-bold px-6 py-2 rounded-full hover:bg-yellow-400" href="career-form.php">
                    Apply
                </a>
            </div>
        <?php endfor ?>
    </div>
</main>

<!-- FOOTER SECTION -->
<?php require 'partials/footer.php' ?>

<!-- FOOT SECTION -->
<?php require 'partials/foot.php' ?>
