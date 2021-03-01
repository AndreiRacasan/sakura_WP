<div class="container">
  <header class="content-header">
    <div class="meta mb-3">
      <span class="date">Published on <?php the_date(); ?></span>
      <span class="tag">
        <?php the_tags('<span class="tag">', '</span> <span class="tag">', '</span>'); ?>
      </span>
      <span class="comment"><a href="#comments"><?php comments_number(); ?></a></span>
    </div>
  </header>

  <?php
  the_content();
  ?>

  <?php
  comments_template();
  ?>

</div>