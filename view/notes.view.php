        
        <?php include 'partials/head.php'; ?>
        <?php include 'partials/nav.php'; ?>
        <?php include 'partials/banner.php'; ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <ul>
                    <?php foreach ($notes as $note) :?>
                        <li class="text-blue-500 hover:underline">
                            <a href="/note?id=<?= $note['id'] ?>" >
                                <?= $note['body'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <p class="mt-5">
                    <a href="note/create" class="text-blue-500 hover:underline">
                    Create Note..</a>
                </p>
            </div>
        </main>
        <?php include 'partials/foooter.php' ?>