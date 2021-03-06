<?php snippet('header') ?>
<?php snippet('menu') ?>

  <main role="main">

    <article>
    	<header>
        <h1><a href="<?php echo $page->customlink() ?>"><?php echo html($page->linktitle()) ?> →</a></h1>
        <div class="meta">
          <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('F dS, Y'); ?></time>
          <?php if($page->tags() != ''): ?> |
          <ul class="tags">
            <?php foreach(str::split($page->tags()) as $tag): ?>
            <li><a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>
        </div>
      </header>
      <div class="content">
		    <?php echo kirbytext($page->text()) ?>
      </div>
      <footer>
        <a class="button" href="<?php echo url() ?>">← Back to the blog</a>
      </footer>
    </article>

  </main>

<?php snippet('footer') ?>
