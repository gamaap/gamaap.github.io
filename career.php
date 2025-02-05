<!-- HEAD SECTION -->
<?php require 'partials/head.php' ?>

<!-- HEADER SECTION -->
<?php require 'partials/header.php' ?>
  
<!-- MAIN CONTENT -->
<main class="mb-auto">
    <!-- BANNER SECTION -->
    <section class="container mx-auto sm:px-44 pt-20 mt-8">
    <div class="w-full rounded-xl overflow-hidden shadow-lg">
        <div
        class="w-full min-h-[400px] bg-top bg-cover flex items-center justify-center"
        style="
            background-image: url(/assets/hero/4.png);
        "
        >
        <div
            class="flex items-center justify-center w-full h-full py-12"
        >
            <div class="text-center">
            <div class="container px-4 mx-auto">
                <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-extrabold tracking-wide text-gray-900 sm:text-4xl uppercase bg-white/80 px-4 py-2 rounded-lg">
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
