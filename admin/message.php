<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Subject
            </th>
            <th scope="col" class="px-6 py-3">
                Message
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
          </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    John Doe
                </th>
                <td class="px-6 py-4">
                    Request A Quotation
                </td>
                <td class="px-6 py-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt velit cupiditate amet debitis cumque animi iste quia id quidem consequuntur.
                </td>
                <td class="flex items-center px-6 py-4">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Reply</a>
                  <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Delete</a>
                </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php require("partials/footer.php") ?>