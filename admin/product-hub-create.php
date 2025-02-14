<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form>
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <h2 class="mt-2 text-pretty text-center text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Add Product</h2>
          <div class="col-span-full">
            <label for="prd-category" class="block text-sm/6 font-medium text-gray-900">Category <span class="text-red-500">*</span></label>
            <div class="mt-2 grid grid-cols-1">
              <select id="prd-category" name="prd-category" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                <option selected disabled>Choose</option>
                <option value="cables">Cables</option>
                <option value="enamelled-wires">Enamelled Wires</option>
                <option value="power-supply-cord">Power Supply Cord and Cord Set</option>
              </select>
            </div>
          </div>
          <div class="col-span-full mt-4">
            <label for="prd-type" class="block text-sm/6 font-medium text-gray-900">Type <span class="text-red-500">*</span></label>
            <div class="mt-2 grid grid-cols-1">
              <select id="prd-type" name="prd-type" autocomplete="prd-type" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                <option selected disabled>Choose</option>
              </select>
            </div>
          </div>
        </div>
        <div class="border-b border-gray-900/10 pb-12">
          <h2 class="mt-2 text-pretty text-center text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Display</h2>
          <div class="col-span-full mt-4">
            <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Upload Media <span class="text-red-500">*</span></label>
            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
              <div class="text-center">
                <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                </svg>
                <div class="mt-4 flex text-sm/6 text-gray-600">
                  <label for="file-upload" class="relative cursor-pointer rounded-md font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                    <span>Upload a file</span>
                    <input id="file-upload" name="file-upload" type="file" class="sr-only" multiple>
                  </label>
                  <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 1MB.</p>
              </div>
            </div>
          </div>
          <div class="col-span-full mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Certification <span class="text-red-500">*</span></label>
            <div class="grid grid-cols-5 gap-4">
              <div class="flex items-center gap-3">
                <div class="flex h-6 shrink-0 items-center">
                  <div class="group grid size-4 grid-cols-1">
                    <input id="cert-1" aria-describedby="cert-1-description" name="cert-1" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                      <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
                <div class="text-sm/6">
                  <label for="cert-1" class="font-medium text-gray-900">
                    <img src="/assets/qa-small/1.png" width="150" alt="">
                  </label>
                </div>
              </div>
              <div class="flex items-center gap-3">
                <div class="flex h-6 shrink-0 items-center">
                  <div class="group grid size-4 grid-cols-1">
                    <input id="cert-2" aria-describedby="cert-2-description" name="cert-2" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                      <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
                <div class="text-sm/6">
                  <label for="cert-2" class="font-medium text-gray-900">
                    <img src="/assets/qa-small/2.png" width="150" alt="">
                  </label>
                </div>
              </div>
              <div class="flex items-center gap-3">
                <div class="flex h-6 shrink-0 items-center">
                  <div class="group grid size-4 grid-cols-1">
                    <input id="cert-3" aria-describedby="cert-3-description" name="cert-3" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                      <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
                <div class="text-sm/6">
                  <label for="cert-3" class="font-medium text-gray-900">
                    <img src="/assets/qa-small/3.png" width="120" alt="">
                  </label>
                </div>
              </div>
              <div class="flex items-center gap-3">
                <div class="flex h-6 shrink-0 items-center">
                  <div class="group grid size-4 grid-cols-1">
                    <input id="cert-4" aria-describedby="cert-4-description" name="cert-4" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                      <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
                <div class="text-sm/6">
                  <label for="cert-4" class="font-medium text-gray-900">
                    <img src="/assets/qa-small/4.png" width="150" alt="">
                  </label>
                </div>
              </div>
              <div class="flex items-center gap-3">
                <div class="flex h-6 shrink-0 items-center">
                  <div class="group grid size-4 grid-cols-1">
                    <input id="cert-5" aria-describedby="cert-5-description" name="cert-5" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                      <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
                <div class="text-sm/6">
                  <label for="cert-5" class="font-medium text-gray-900">
                    <img src="/assets/qa-small/5.png" width="120" alt="">
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border-b border-gray-900/10 pb-12">
          <h3 class="mt-2 text-pretty text-center text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">Item Details</h3>
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="col-span-full flex items-center gap-x-2">
              <label for="title" class="w-48 flex-none block text-sm/6 font-medium text-gray-900">Type</label>
              <div class="mt-2 w-full">
                <input id="title" name="title" type="text" autocomplete="title" class="block flex-1 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              </div>
            </div>
            <div class="col-span-full flex items-center gap-x-2" id="plug-input">
              <label for="title" class="w-48 flex-none block text-sm/6 font-medium text-gray-900">Plug Type <span class="text-red-500">*</span></label>
              <div class="mt-2 w-full">
                <input id="title" name="title" type="text" autocomplete="title" class="block flex-1 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              </div>
            </div>
            <div class="col-span-full flex items-center gap-x-2" id="connector-input">
              <label for="title" class="w-48 flex-none block text-sm/6 font-medium text-gray-900">Connector Type <span class="text-red-500">*</span></label>
              <div class="mt-2 w-full">
                <input id="title" name="title" type="text" autocomplete="title" class="block flex-1 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              </div>
            </div>
            <div class="col-span-full flex items-center gap-x-2">
              <label for="title" class="w-48 flex-none block text-sm/6 font-medium text-gray-900">Cable Type <span class="text-red-500">*</span></label>
              <div class="mt-2 w-full">
                <input id="title" name="title" type="text" autocomplete="title" class="block flex-1 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              </div>
            </div>
            <div class="col-span-full flex items-center gap-x-2">
              <label for="title" class="w-48 flex-none block text-sm/6 font-medium text-gray-900">Size (AWG/mm<sup>2</sup>) <span class="text-red-500">*</span></label>
              <div class="mt-2 w-full">
                <input id="title" name="title" type="text" autocomplete="title" class="block flex-1 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              </div>
            </div>
            <div class="col-span-full flex items-center gap-x-2">
              <label for="title" class="w-48 flex-none block text-sm/6 font-medium text-gray-900">Rated Voltage <span class="text-red-500">*</span></label>
              <div class="mt-2 w-full">
                <input id="title" name="title" type="text" autocomplete="title" class="block flex-1 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              </div>
            </div>
            <div class="col-span-full flex items-center gap-x-2">
              <label for="title" class="w-48 flex-none block text-sm/6 font-medium text-gray-900">Colour</label>
              <div class="mt-2 w-full">
                <input id="title" name="title" type="text" autocomplete="title" class="block flex-1 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              </div>
            </div>
            <div class="col-span-full flex items-center gap-x-2">
              <label for="title" class="w-48  flex-none block text-sm/6 font-medium text-gray-900">Application</label>
              <div class="mt-2 w-full">
                <input id="title" name="title" type="text" autocomplete="title" class="block flex-1 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              </div>
            </div>
          </div>
        </div>
        <div class="border-b border-gray-900/10 pb-12">
          <h2 class="mt-2 text-pretty text-center text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">Technical Data</h2>
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="col-span-full flex items-center gap-x-2">
              <label for="title" class="w-48 flex-none block text-sm/6 font-medium text-gray-900">Product Standard <span class="text-red-500">*</span></label>
              <div class="mt-2 w-full">
                <input id="title" name="title" type="text" autocomplete="title" class="w-48 block flex-1 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              </div>
            </div>
            <div class="col-span-full flex items-center gap-x-2">
              <label for="title" class="w-48 flex-none block text-sm/6 font-medium text-gray-900">RoHS Compliance <span class="text-red-500">*</span></label>
              <div class="flex items-center gap-6">
                <div class="flex items-center gap-x-3">
                  <input id="rohs-yes" name="push-notifications" type="radio" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                  <label for="rohs-yes" class="block text-sm/6 font-medium text-gray-900">Yes</label>
                </div>
                <div class="flex items-center gap-x-3">
                  <input id="rohs-no" name="push-notifications" type="radio" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden">
                  <label for="rohs-no" class="block text-sm/6 font-medium text-gray-900">No</label>
                </div>
                <!-- <input id="title" name="title" type="text" autocomplete="title" class="block flex-1 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"> -->
              </div>
            </div>
            <div class="col-span-full flex items-center gap-x-2">
              <label for="title" class="w-48 flex-none block text-sm/6 font-medium text-gray-900">Heat Resistance Class <span class="text-red-500">*</span></label>
              <div class="mt-2 w-full">
                <input id="title" name="title" type="text" autocomplete="title" class="block flex-1 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              </div>
            </div>
            <div class="col-span-full flex items-center gap-x-2">
              <label for="title" class="w-48 flex-none block text-sm/6 font-medium text-gray-900">Test</label>
              <div class="mt-2 w-full">
                <input id="title" name="title" type="text" autocomplete="title" class="block flex-1 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              </div>
            </div>
          </div>
        </div>
        <div class="border-b border-gray-900/10 pb-12">
          <h2 class="my-2 text-pretty text-center text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">Details</h2>
          <div class="col-span-full">
            <label for="detail-product" class="block text-sm/6 font-medium text-gray-900">Detail Product <span class="text-red-500">*</span></label>
            <div class="mt-2">
              <textarea name="detail-product" id="detail-product" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
            </div>
          </div>
          <div class="col-span-full mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload Data Sheet <span class="text-red-500">*</span></label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer focus:outline-none p-3" id="file_input" type="file">
          </div>
        </div>
      </div>
      <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button"></button>
        <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </div>
    </form>
  </div>
</main>

<?php require("partials/footer.php") ?>