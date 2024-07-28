<?php require __DIR__ . '/../partials/head.php'; ?>
<?php require __DIR__ . '/../partials/nav.php'; ?>
<?php require __DIR__ . '/../partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content goes here -->
        <p><a href="/laracast-php/demo/notes">Go back</a></p>
        <p><?= htmlspecialchars($note['body']); ?></p>
        <form class="mt-6" methode="Post">
            <input type="hidden" name="id" value="<?= $note['id']?>">
            <button class="text-sm text-red-500">Delete</button>
</form>
    </div>
</main>

<?php require __DIR__ . '/../partials/footer.php'; ?>
