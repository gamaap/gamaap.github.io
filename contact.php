<!-- HEAD SECTION -->
<?php require 'partials/head.php' ?>

<!-- HEADER SECTION -->
<?php require 'partials/header.php' ?>
  
<!-- MAIN CONTENT -->
<main class="mb-auto pt-20">
  <!-- BANNER SECTION -->
  <section class="container mx-auto sm:px-44 pt-20 mt-8">
    <div class="w-full rounded-xl overflow-hidden shadow-lg">
      <div
        class="w-full min-h-[400px] bg-top bg-cover flex items-center justify-center"
        style="
          background-image: url(/assets/hero/1.png);
        "
      >
        <div
          class="flex items-center justify-center w-full h-full py-12"
        >
          <div class="text-center">
            <div class="container px-4 mx-auto">
              <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-extrabold tracking-wide text-gray-900 sm:text-4xl uppercase bg-white/80 px-4 py-2 rounded-lg">
                  Contact Us
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MESSAGE SECTION -->
  <section class="mx-auto max-w-6xl text-justify leading-relaxed text-gray-800 mt-8 bg-gray-100 p-6">
    <form>
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-8">
          <h2 class="font-semibold text-gray-900 text-3xl">Leave A Message</h2>
          <p class="mt-1 text-sm/6 text-gray-600">Feel free to reach out to us with any questions or inquiries. Our team is here to assist you and provide the support you need.</p>

          <div class="grid gap-4 mb-4 grid-cols-10 mt-10">
              <div class="col-span-2">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                <select id="title" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  <option selected disabled>Title</option>
                  <option value="mr">Mr</option>
                  <option value="mrs">Mrs</option>
                  <option value="miss">Miss</option>
                  <option value="ms">Ms</option>
                </select>
              </div>
              <div class="col-span-4">
                <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                <input type="text" name="first-name" id="first-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
              </div>
              <div class="col-span-4">
                <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                <input type="text" name="last-name" id="last-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
              </div>
              <div class="col-span-10">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" name="email" id="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="someone@example.com" required>
              </div>
              <div class="col-span-10">
                <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Company Name</label>
                <input type="text" name="company" id="company" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
              </div>
              <div class="col-span-5">
                <label
                  for="phone-number"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Phone number</label
                >
                <div class="mt-1">
                  <div
                    class="flex bg-white outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600"
                  >
                    <div
                      class="grid shrink-0 grid-cols-1 focus-within:relative"
                    >
                      <select
                        id="country"
                        name="country"
                        autocomplete="country"
                        aria-label="Country"
                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                      >
                        <option>US</option>
                        <option>CA</option>
                        <option>EU</option>
                      </select>
                    </div>
                    <input
                      type="text"
                      name="phone-number"
                      id="phone-number"
                      class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                    />
                  </div>
                </div>
              </div>
              <div class="col-span-5">
                <label for="country" class="block mb-2 text-sm font-medium text-gray-900">Country</label>
                <input type="text" name="country" id="country" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
              </div>
              <div class="col-span-10">
                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Subject</label>
                <select id="subject" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  <option selected disabled>Subject</option>
                  <option value="contact">Contact</option>
                  <option value="distributor">Distributor</option>
                  <option value="supplier">Supplier</option>
                  <option value="quotation">Request A Quotation</option>
                  <option value="feedback">Feedback</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div class="col-span-10">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Message</label>
                <textarea id="message" name="message" class="resize-y block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
              </div>
            </div>
        </div>
      <div class="flex items-center justify-center">
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-md font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Request</button>
      </div>
    </form>
  </section>

  <!-- EMBED MAPS SECTION -->
  <section class="container mx-auto sm:px-44 py-20 mt-8">
    <h2
      class="my-8 text-pretty text-center text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl"
    >
      Our Locations
    </h2>
    <div class="max-w-full rounded overflow-hidden shadow-lg mb-8">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126749.6605787355!2d107.4980086972656!3d-6.899346999999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7e3329fd20d%3A0x9b4d627819303906!2sPT%20Ewindo!5e0!3m2!1sid!2sid!4v1736908737367!5m2!1sid!2sid"
        width="100%"
        height="400"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      >
      </iframe>
      <div class="flex flex-col md:flex-row bg-gray-100 p-6 rounded-b">
        <!-- Left Side: Map Icon -->
        <div class="w-full sm:w-1/4 flex items-center justify-center p-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12">
            <path fill-rule="evenodd" d="M8.161 2.58a1.875 1.875 0 0 1 1.678 0l4.993 2.498c.106.052.23.052.336 0l3.869-1.935A1.875 1.875 0 0 1 21.75 4.82v12.485c0 .71-.401 1.36-1.037 1.677l-4.875 2.437a1.875 1.875 0 0 1-1.676 0l-4.994-2.497a.375.375 0 0 0-.336 0l-3.868 1.935A1.875 1.875 0 0 1 2.25 19.18V6.695c0-.71.401-1.36 1.036-1.677l4.875-2.437ZM9 6a.75.75 0 0 1 .75.75V15a.75.75 0 0 1-1.5 0V6.75A.75.75 0 0 1 9 6Zm6.75 3a.75.75 0 0 0-1.5 0v8.25a.75.75 0 0 0 1.5 0V9Z" clip-rule="evenodd" />
          </svg>
        </div>

        <!-- Right Side: Full Address -->
        <div class="w-full md:w-3/4 text-gray-700 text-md p-4 font-semibold">
          <h3 class="font-bold text-xl text-amber-500">Plant 1</h3>
          <p>Jl. Cimuncang No. 68, Bandung, Jawa Barat, Indonesia</p>
          <p>T +62 22 720 8008</p>
          <p>F +62 22 720 7132, 720 8263</p>
        </div>
      </div>
    </div>
    <div class="max-w-full rounded overflow-hidden shadow-lg">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126734.57124324786!2d107.64736409726561!3d-6.955490500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c4fa06ad4a47%3A0x53f1a4efa49afef!2sPT.%20Ewindo!5e0!3m2!1sid!2sid!4v1736908908414!5m2!1sid!2sid"
        width="100%"
        height="400"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      >
      </iframe>
      <div class="flex flex-col md:flex-row bg-gray-100 p-6 rounded-b">
        <!-- Left Side: Map Icon -->
        <div class="w-full sm:w-1/4 flex items-center justify-center p-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12">
            <path fill-rule="evenodd" d="M8.161 2.58a1.875 1.875 0 0 1 1.678 0l4.993 2.498c.106.052.23.052.336 0l3.869-1.935A1.875 1.875 0 0 1 21.75 4.82v12.485c0 .71-.401 1.36-1.037 1.677l-4.875 2.437a1.875 1.875 0 0 1-1.676 0l-4.994-2.497a.375.375 0 0 0-.336 0l-3.868 1.935A1.875 1.875 0 0 1 2.25 19.18V6.695c0-.71.401-1.36 1.036-1.677l4.875-2.437ZM9 6a.75.75 0 0 1 .75.75V15a.75.75 0 0 1-1.5 0V6.75A.75.75 0 0 1 9 6Zm6.75 3a.75.75 0 0 0-1.5 0v8.25a.75.75 0 0 0 1.5 0V9Z" clip-rule="evenodd" />
          </svg>
        </div>

        <!-- Right Side: Full Address -->
        <div class="w-full md:w-3/4 text-gray-700 text-md p-4 font-semibold">
          <h3 class="font-bold text-xl text-amber-500">Plant 2</h3>
          <p>Kawasan Industri Rancaekek Kav. A.8,</p>
          <p>Jalan Raya Rancaekek KM 24.5 Sumedang, 45364, Jawa Barat, Indonesia.</p>
          <p>T +62 22 778 0008</p>
          <p>F +62 22 778 0001</p>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- FOOTER SECTION -->
<?php require 'partials/footer.php' ?>

<!-- FOOT SECTION -->
<?php require 'partials/foot.php' ?>