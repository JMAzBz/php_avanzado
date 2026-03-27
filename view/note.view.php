        
        <?php include 'partials/head.php'; ?>
        <?php include 'partials/nav.php'; ?>
        <?php include 'partials/banner.php'; ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <p>
                    <a href="/notes" class="text-blue-500 underline">
                    Go Back..
                    </a>
                </p>
                <p>
                    <?= $note['body'] ?>
                </p>
            </div>
        </main>
        <?php include 'partials/foooter.php' ?>