        <?php include 'partials/head.php'; ?>
        <?php include 'partials/nav.php'; ?>
        <?php include 'partials/banner.php'; ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="mt-5 md:col-span-2 md:mt-8">
                    <form method="POST">
                        <div class="shadow sm:overflow-hidden sm:rounded-md">
                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                <div>
                                    <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                                    <div class="mt-1">
                                        <textarea
                                            name="body"
                                            id="body"
                                            rows="3"
                                            class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-600 focus:ring-indigo-600 sm:text-sm"
                                            placeholder="Here's an idea for a note...."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'partials/foooter.php'; ?>