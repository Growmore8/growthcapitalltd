<?php
/**
 * Reusable inner-page banner.
 * Set before including:
 *   $pageHeading (string), $pageSub (string, optional),
 *   $bannerPhoto (bool, optional) — use photographic background,
 *   $bannerImg   (string, optional) — asset path, e.g. 'images/city-skyline.jpg'
 * @var string $pageHeading
 */
$heading = $pageHeading ?? '';
$sub     = $pageSub ?? '';
$photo   = !empty($bannerPhoto);
$img     = $bannerImg ?? 'images/city-skyline.jpg';
$style   = $photo ? ' style="--banner-img:url(\'' . asset($img) . '\')"' : '';
?>
<section class="page-banner<?= $photo ? ' page-banner--photo' : '' ?>"<?= $style ?>>
    <div class="container">
        <h1 data-reveal><?= e($heading) ?></h1>
        <?php if ($sub !== ''): ?>
            <p data-reveal><?= e($sub) ?></p>
        <?php endif; ?>
    </div>
</section>
