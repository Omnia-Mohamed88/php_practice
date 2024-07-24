<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content goes here -->
        <ul>
            <?php foreach ($notes as $note): ?>
                <li>
  
                    <a href="http://localhost/laracast-php/demo/note?id=<?= $note['id'] ?>">
                        <?= $note['body']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <p class="mt-6">
    <a href="http://localhost/laracast-php/demo/notes/create" class="text-blue-500 hover:underline">Create Note</a>
</p>

    </div>
</main>

<?php require('partials/footer.php'); ?>

