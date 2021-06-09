<?php get_header(); ?>



<!-- main content will come here -->
<h1>THIS IS THE MAIN CONTENT</h1>

<div class="container">
  <div class="row">
    <div class="col">
      <p> this is row one </p>
    </div>

    <div class="col">
      <p> this is row two </p>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php the_content(); ?></div>
  </div>
</div>


<?php get_footer(); ?>