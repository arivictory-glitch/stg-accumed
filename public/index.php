<?php

declare(strict_types=1);

session_start();

date_default_timezone_set('Asia/Dubai');

require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Accumed';

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<main class="container py-5">
    <div class="text-center">
        <h1>Welcome to Accumed</h1>
        <p class="lead">
            Website migration in progress.
        </p>
    </div>
</main>

<?php

include __DIR__ . '/includes/footer.php';
