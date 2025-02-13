<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="flex gap-6">
        <aside class="w-64 bg-gray-100 dark:bg-gray-900 p-4 rounded-lg shadow-md h-[170px]">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Messages</h2>
            <ul>
                <li>
                    <a href="#" class="flex items-center justify-between px-4 py-2 text-gray-900 bg-white rounded-lg shadow-sm dark:bg-gray-800 dark:text-yellow-400 font-semibold hover:bg-gray-200 dark:hover:bg-gray-700">
                        Inbox <span class="bg-yellow-500 text-white text-xs font-semibold px-2 py-1 rounded-full">12</span>
                    </a>
                </li>
                <li class="mt-2">
                    <a href="#" class="flex items-center justify-between px-4 py-2 text-gray-900 bg-white rounded-lg shadow-sm dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
                        Sent <span class="bg-yellow-500 text-white text-xs font-semibold px-2 py-1 rounded-full">2</span>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- TABLE CONTENT -->
        <div class="relative overflow-x-auto sm:rounded-lg">
            <div class="flex items-center justify-between">
                <div class="mb-4">
                    <label for="subjectFilter" class="block mb-2 text-sm font-medium text-gray-700">Filter by Subject</label>
                    <select id="subjectFilter" class="pr-10 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">All</option>
                        <option value="Request A Quotation">Request A Quotation</option>
                        <option value="Support Inquiry">Support Inquiry</option>
                    </select>
                </div>
                <div>
                    <label for="sort" class="text-gray-700 font-semibold">Sort by:</label>
                    <select id="sort" class="ml-2 pr-10 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none">
                        <option value="newest">Newest</option>
                        <option value="oldest">Oldest</option>
                    </select>
                </div>
            </div>
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
            <tbody class="w-full">
                <?php for ($i = 0; $i < 5; $i++) : ?>
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
                <?php endfor; ?>
            </tbody>
            </table>
        </div>
    </div>
  </div>
</main>

<?php require("partials/footer.php") ?>