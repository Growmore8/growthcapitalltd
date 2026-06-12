<?php
/**
 * Reusable inner-page banner. Set $pageHeading and (optional) $pageSub before including.
 * @var string $pageHeading
 */
$heading = $pageHeading ?? '';
$sub     = $pageSub ?? '';
?>
<section class="page-banner">
    <div class="container">
        <h1><?= e($heading) ?></h1>
        <?php if ($sub !== ''): ?>
            <p><?= e($sub) ?></p>
        <?php endif; ?>
    </div>
</section>
