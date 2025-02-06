<!-- HEAD SECTION -->
<?php require 'partials/head.php' ?>

<!-- HEADER SECTION -->
<?php require 'partials/header.php' ?>
  
<!-- MAIN CONTENT -->
<main class="mb-auto pt-20">
  <section class="container mx-auto sm:px-44 py-16 mt-16">
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
  }
  ```
-->
    <div class="bg-white">
      <div class="pt-6">
        <nav aria-label="Breadcrumb">
          <ol
            role="list"
            class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8"
          >
            <li>
              <div class="flex items-center">
                <a href="#" class="mr-2 text-sm font-medium text-gray-900"
                  >Products</a
                >
                <svg
                  width="16"
                  height="20"
                  viewBox="0 0 16 20"
                  fill="currentColor"
                  aria-hidden="true"
                  class="h-5 w-4 text-gray-300"
                >
                  <path
                    d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z"
                  />
                </svg>
              </div>
            </li>
            <li>
              <div class="flex items-center">
                <a href="#" class="mr-2 text-sm font-medium text-gray-900"
                  >Category</a
                >
                <svg
                  width="16"
                  height="20"
                  viewBox="0 0 16 20"
                  fill="currentColor"
                  aria-hidden="true"
                  class="h-5 w-4 text-gray-300"
                >
                  <path
                    d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z"
                  />
                </svg>
              </div>
            </li>

            <li class="text-sm">
              <a
                href="#"
                aria-current="page"
                class="font-medium text-gray-500 hover:text-gray-600"
                >Product Name</a
              >
            </li>
          </ol>
        </nav>

        <!-- Image gallery -->
        <div
          class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8"
        >
          <img
            src="https://www.irdmech.com/product-images/M601015.jpg/1374657000017508337/700x700"
            alt="Two each of gray, white, and black shirts laying flat."
            class="hidden size-full rounded-lg object-cover lg:block"
          />
          <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT77XibcBfLvgAOY8gxntsiniwpfGh5udi4hw&s"
              alt="Model wearing plain black basic tee."
              class="aspect-3/2 w-full rounded-lg object-cover"
            />
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT77XibcBfLvgAOY8gxntsiniwpfGh5udi4hw&s"
              alt="Model wearing plain gray basic tee."
              class="aspect-3/2 w-full rounded-lg object-cover"
            />
          </div>
          <img
            src="https://img3.exportersindia.com/product_images/bc-full/2022/3/4671968/submersible-flat-cable-1648445236-6260112.jpeg"
            alt="Model wearing plain white basic tee."
            class="aspect-4/5 size-full object-cover sm:rounded-lg lg:aspect-auto"
          />
        </div>

        <!-- Product info -->
        <div
          class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24"
        >
          <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
            <h1
              class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl"
            >
              Product Name
            </h1>
          </div>

          <!-- Options -->
          <div class="mt-4 lg:row-span-3 lg:mt-0">
            <!-- ISO CERTIFICATES -->
            <div class="flex space-x-4 mt-6">
              <div
                class="w-12 h-12 border-2 border-yellow-600 rounded-lg"
              ></div>
              <div
                class="w-12 h-12 border-2 border-yellow-600 rounded-lg"
              ></div>
              <div
                class="w-12 h-12 border-2 border-yellow-600 rounded-lg"
              ></div>
              <div
                class="w-12 h-12 border-2 border-yellow-600 rounded-lg"
              ></div>
            </div>

            <form class="mt-10">
              <!-- Colors -->
              <div>
                <h3 class="text-sm font-medium text-gray-900">Color</h3>

                <fieldset aria-label="Choose a color" class="mt-4">
                  <div class="flex items-center gap-x-3">
                    <!-- Active and Checked: "ring-3 ring-offset-1" -->
                    <label
                      aria-label="White"
                      class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-hidden"
                    >
                      <input
                        type="radio"
                        name="color-choice"
                        value="White"
                        class="sr-only"
                      />
                      <span
                        aria-hidden="true"
                        class="size-8 rounded-full border border-black/10 bg-white"
                      ></span>
                    </label>
                    <!-- Active and Checked: "ring-3 ring-offset-1" -->
                    <label
                      aria-label="Gray"
                      class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-hidden"
                    >
                      <input
                        type="radio"
                        name="color-choice"
                        value="Gray"
                        class="sr-only"
                      />
                      <span
                        aria-hidden="true"
                        class="size-8 rounded-full border border-black/10 bg-gray-200"
                      ></span>
                    </label>
                    <!-- Active and Checked: "ring-3 ring-offset-1" -->
                    <label
                      aria-label="Black"
                      class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-900 focus:outline-hidden"
                    >
                      <input
                        type="radio"
                        name="color-choice"
                        value="Black"
                        class="sr-only"
                      />
                      <span
                        aria-hidden="true"
                        class="size-8 rounded-full border border-black/10 bg-gray-900"
                      ></span>
                    </label>
                  </div>
                </fieldset>
              </div>

              <button
                data-dialog-target="quotation-dialog"
                type="button"
                class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden"
              >
                Request A Quotation
              </button>
            </form>
          </div>

          <div
            class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pr-8 lg:pb-16"
          >
            <!-- Description and details -->
            <div>
              <h3 class="sr-only">Description</h3>

              <div class="space-y-6">
                <p class="text-base text-gray-900">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Error, voluptas, fugit sapiente nemo incidunt saepe
                  commodi sunt reprehenderit voluptatibus magni quis ipsa
                  fuga ipsum? Cupiditate aut quis nesciunt saepe sed! Id
                  repellat molestiae asperiores nihil fugit hic reiciendis,
                  autem ullam, tempore, neque saepe quod et velit ea sed
                  deleniti laboriosam.
                </p>
              </div>
            </div>

            <div class="mt-10">
              <h3 class="text-sm font-medium text-gray-900">Features</h3>

              <div class="mt-4">
                <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                  <li class="text-gray-400">
                    <span class="text-gray-600"
                      >Lorem ipsum dolor sit amet</span
                    >
                  </li>
                  <li class="text-gray-400">
                    <span class="text-gray-600"
                      >Lorem ipsum dolor sit amet</span
                    >
                  </li>
                  <li class="text-gray-400">
                    <span class="text-gray-600"
                      >Lorem ipsum dolor sit amet</span
                    >
                  </li>
                  <li class="text-gray-400">
                    <span class="text-gray-600"
                      >Lorem ipsum dolor sit amet</span
                    >
                  </li>
                </ul>
              </div>
            </div>

            <div class="mt-10">
              <h2 class="text-sm font-medium text-gray-900">
                Applications
              </h2>

              <div class="mt-4 space-y-6">
                <p class="text-sm text-gray-600">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Sapiente inventore ab optio dignissimos necessitatibus,
                  aut libero totam, error velit sint dicta quisquam
                  accusamus quis voluptate rerum accusantium dolore delectus
                  pariatur.
                </p>
              </div>
            </div>
            <div class="mt-10">
              <h2 class="text-sm font-medium text-gray-900">Downloads</h2>

              <div class="mt-2 space-y-3">
                <button
                  type="button"
                  class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    class="size-4 mr-2"
                  >
                    <path
                      d="M8.75 2.75a.75.75 0 0 0-1.5 0v5.69L5.03 6.22a.75.75 0 0 0-1.06 1.06l3.5 3.5a.75.75 0 0 0 1.06 0l3.5-3.5a.75.75 0 0 0-1.06-1.06L8.75 8.44V2.75Z"
                    />
                    <path
                      d="M3.5 9.75a.75.75 0 0 0-1.5 0v1.5A2.75 2.75 0 0 0 4.75 14h6.5A2.75 2.75 0 0 0 14 11.25v-1.5a.75.75 0 0 0-1.5 0v1.5c0 .69-.56 1.25-1.25 1.25h-6.5c-.69 0-1.25-.56-1.25-1.25v-1.5Z"
                    />
                  </svg>
                  Data Sheet Product XXX
                </button>
                <button
                  type="button"
                  class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    class="size-4 mr-2"
                  >
                    <path
                      d="M8.75 2.75a.75.75 0 0 0-1.5 0v5.69L5.03 6.22a.75.75 0 0 0-1.06 1.06l3.5 3.5a.75.75 0 0 0 1.06 0l3.5-3.5a.75.75 0 0 0-1.06-1.06L8.75 8.44V2.75Z"
                    />
                    <path
                      d="M3.5 9.75a.75.75 0 0 0-1.5 0v1.5A2.75 2.75 0 0 0 4.75 14h6.5A2.75 2.75 0 0 0 14 11.25v-1.5a.75.75 0 0 0-1.5 0v1.5c0 .69-.56 1.25-1.25 1.25h-6.5c-.69 0-1.25-.56-1.25-1.25v-1.5Z"
                    />
                  </svg>
                  Certificates of Compliance Product XXX
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MODAL BOX ORDER A QUOTATION -->
  <div
    data-dialog-backdrop="quotation-dialog"
    class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300"
  >
    <div
      data-dialog="quotation-dialog"
      class="relative mx-auto w-full max-w-7xl rounded-lg overflow-hidden shadow-sm"
    >
      <div class="relative p-4 w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-100 rounded-lg shadow-sm">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900">Request A Quotation</h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
              data-dialog-close="true"
            >
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <form class="p-4 md:p-5">
            <div class="grid gap-4 mb-4 grid-cols-10">
              <div class="col-span-2">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                <select id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                  <option selected disabled>Title</option>
                  <option value="mr">Mr</option>
                  <option value="mrs">Mrs</option>
                  <option value="miss">Miss</option>
                  <option value="ms">Ms</option>
                </select>
              </div>
              <div class="col-span-4">
                <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                <input type="text" name="first-name" id="first-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-2 focus:outline-indigo-500 block w-full p-2.5" required>
              </div>
              <div class="col-span-4">
                <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                <input type="text" name="last-name" id="last-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-2 focus:outline-indigo-500 block w-full p-2.5" required>
              </div>
              <div class="col-span-10">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-2 focus:outline-indigo-500 block w-full p-2.5" placeholder="someone@example.com" required>
              </div>
              <div class="col-span-10">
                <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Company Name</label>
                <input type="text" name="company" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-2 focus:outline-indigo-500 block w-full p-2.5" required>
              </div>
              <div class="col-span-5">
                <label
                  for="phone-number"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Phone number</label
                >
                <div class="mt-2.5">
                  <div
                    class="flex rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600"
                  >
                    <div
                      class="grid shrink-0 grid-cols-1 focus-within:relative"
                    >
                      <select
                        id="country"
                        name="country"
                        autocomplete="country"
                        aria-label="Country"
                        class="col-start-1 row-start-1 w-full appearance-none rounded-md py-2 pr-7 pl-3.5 text-base text-gray-500 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                      >
                        <option>US</option>
                        <option>CA</option>
                        <option>EU</option>
                      </select>
                      <svg
                        class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 dark:text-gray-400 sm:size-4"
                        viewBox="0 0 16 16"
                        fill="currentColor"
                        aria-hidden="true"
                        data-slot="icon"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </div>
                    <input
                      type="text"
                      name="phone-number"
                      id="phone-number"
                      class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                      placeholder="123-456-7890"
                    />
                  </div>
                </div>
              </div>
              <div class="col-span-5">
                <label for="country" class="block mb-2 text-sm font-medium text-gray-900">Country</label>
                <input type="text" name="country" id="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-2 focus:outline-indigo-500 block w-full p-2.5" required>
              </div>
              <div class="col-span-5">
                <label for="quot" class="block mb-2 text-sm font-medium text-gray-900">Subject</label>
                <input type="text" name="quot" id="quot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-2 focus:outline-indigo-500 block w-full p-2.5" value="Request A Quotation" disabled>
              </div>
              <div class="col-span-5">
                <label for="product" class="block mb-2 text-sm font-medium text-gray-900">Product Name</label>
                <input type="text" name="product" id="product" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-2 focus:outline-indigo-500 block w-full p-2.5" required>
              </div>
              <div class="col-span-10">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Message</label>
                <textarea id="message" name="message" class="resize-y bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-2 focus:outline-indigo-500 block w-full p-2.5"></textarea>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center">
                Request
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- FOOTER SECTION -->
<?php require 'partials/footer.php' ?>

<!-- FOOT SECTION -->
<?php require 'partials/foot.php' ?>
