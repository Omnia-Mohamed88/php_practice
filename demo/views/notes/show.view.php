<?php require __DIR__ . '/../partials/head.php'; ?>
<?php require __DIR__ . '/../partials/nav.php'; ?>
<?php require __DIR__ . '/../partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content goes here -->
        <p><a href="/laracast-php/demo/notes">Go back</a></p>
        <p><?= htmlspecialchars($note['body']); ?></p>
    </div>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
