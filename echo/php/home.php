<?php if (empty($content)): ?>
  <div class="mt-4">
  <?php $language->p('No pages found') ?>
  </div>
<?php endif ?>

<?php foreach ($content as $page): ?>

  <!-- Post -->
  <article class="page">

    <!-- Load Bludit Plugins: Page Begin -->
    <?php Theme::plugins('pageBegin'); ?>

    <!-- Post header -->
    <header>
      <h2><a href="<?php echo $page->permalink() ?>"><?php echo $page->title() ?></a></h2>
      <?php if ($page->coverImage()): ?>
        <img src="<?php echo $page->coverImage() ?>" alt="<?php echo $page->slug() ?>">
      <?php endif ?>
      <div class="publish-date">
        <span class="month"><?php echo mb_substr($page->date("M"), 0, 3); ?></span>
        <span class="day"><?php echo $page->date("d"); ?></span>
        <span class="year"><?php echo $page->date("Y"); ?></span>
      </div>
    </header>

    <!-- Post body -->
    <?php echo $page->contentBreak(); ?>

    <!-- "Read more" button -->
    <?php if ($page->readMore()): ?>
    <footer class="mt-3">
      <a href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Read more'); ?> &raquo;</a>
    </footer>
    <?php endif ?>

    <!-- Load Bludit Plugins: Page End -->
    <?php Theme::plugins('pageEnd'); ?>

  </article>
<?php endforeach ?>

<!-- Pagination -->
<?php
  if (Paginator::numberOfPages() > 1) {
    echo Paginator::html();
  }
?>
