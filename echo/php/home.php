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
    <?php if ($page->readMore()): ?>
      <?php
        $break_content = $page->contentBreak();
        // Close any unclosed tags to prevent broken HTML from swallowing the rest of the page
        $doc = new DOMDocument();
        @$doc->loadHTML('<?xml encoding="UTF-8"><div>' . $break_content . '</div>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        echo $doc->saveHTML($doc->getElementsByTagName('div')->item(0));
      ?>
      <footer class="mt-3">
        <a href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Read more'); ?> &raquo;</a>
      </footer>
    <?php else: ?>
      <?php echo $page->content(); ?>
    <?php endif ?>

    <!-- Load Bludit Plugins: Page End -->
    <?php Theme::plugins('pageEnd'); ?>

  </article>
<?php endforeach ?>

<!-- Pagination -->
<?php if (Paginator::numberOfPages() > 1):
  $current = Paginator::currentPage();
  $total = Paginator::numberOfPages();
  $wing = 2;
?>
<nav>
  <ul class="pagination flex-wrap">

    <!-- First & Previous -->
    <li class="page-item <?php if ($current == 1) echo 'disabled' ?>">
      <a class="page-link" href="<?php echo Paginator::numberUrl(1) ?>">&laquo; <?php echo $L->get('first') ?></a>
    </li>
    <li class="page-item <?php if ($current == 1) echo 'disabled' ?>">
      <a class="page-link" href="<?php echo Paginator::previousPageUrl() ?>">&lsaquo; <?php echo $L->get('previous') ?></a>
    </li>

    <!-- Leading ellipsis -->
    <?php if ($current - $wing > 1): ?>
    <li class="page-item disabled"><span class="page-link">&hellip;</span></li>
    <?php endif ?>

    <!-- Numbered pages -->
    <?php for ($i = max(1, $current - $wing); $i <= min($total, $current + $wing); $i++): ?>
    <li class="page-item <?php if ($i == $current) echo 'active' ?>">
      <a class="page-link" href="<?php echo Paginator::numberUrl($i) ?>"><?php echo $i ?></a>
    </li>
    <?php endfor ?>

    <!-- Trailing ellipsis -->
    <?php if ($current + $wing < $total): ?>
    <li class="page-item disabled"><span class="page-link">&hellip;</span></li>
    <?php endif ?>

    <!-- Next & Last -->
    <li class="page-item <?php if ($current == $total) echo 'disabled' ?>">
      <a class="page-link" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('next') ?> &rsaquo;</a>
    </li>
    <li class="page-item <?php if ($current == $total) echo 'disabled' ?>">
      <a class="page-link" href="<?php echo Paginator::numberUrl($total) ?>"><?php echo $L->get('last') ?> &raquo;</a>
    </li>

  </ul>
</nav>
<?php endif ?>
