<footer id="site-footer">
  <div class="row">
    <div class="col-md-12">
      <p><?php echo $site->footer(); ?><br />
         <?php if ($plugins['all']['pluginRSS']->installed()):?><a href="<?php echo Theme::rssUrl(); ?>">RSS Feed</a> &#124; <?php endif ?>
         <?php foreach (Theme::socialNetworks() as $key=>$label) { ?><a href="<?php echo $site->{$key}(); ?>" rel="nofollow" target="_blank"><?php echo $label; ?></a> &#124; <?php } ?>
         Powered by <a target="_blank" href="https://www.bludit.com">Bludit</a>
      </p>
    </div>
  </div>
</footer>
