<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form>
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="col-span-4">
              <label for="title" class="block text-sm/6 font-medium text-gray-900">Title <span class="text-red-500">*</span></label>
              <div class="mt-2">
                <input id="title" name="title" type="text" autocomplete="title" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              </div>
            </div>
            <div class="sm:col-span-3">
              <label for="country" class="block text-sm/6 font-medium text-gray-900">Category <span class="text-red-500">*</span></label>
              <div class="mt-2 grid grid-cols-1">
                <select id="country" name="country" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  <option selected disabled>Choose</option>
                  <option>Gathering</option>
                  <option>Exhibition</option>
                  <option>Training</option>
                  <option>Celebration</option>
                  <option>Vacation</option>
                  <option>Others</option>
                </select>
              </div>
            </div>
            <div class="col-span-full">
              <label for="notes" class="block text-sm/6 font-medium text-gray-900">Notes <span class="text-red-500">*</span></label>
              <div class="mt-2">
                <textarea name="notes" id="notes" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
              </div>
              <p class="mt-3 text-sm/6 text-gray-600">Write some sentences about the event.</p>
            </div>
            <div class="col-span-full">
              <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Upload Media</label>
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
                  <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB and max 20 files.</p>
                </div>
              </div>
            </div>
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