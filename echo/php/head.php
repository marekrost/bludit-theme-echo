<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Bludit CMS">

<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>

<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>

<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- Bootstrap 5 CSS -->
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>vendor/bootstrap/bootstrap.min.css">

<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/style.css'); ?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
