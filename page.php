<!-- Header -->
<?php get_header(); ?>
<div class="row left-shift">
    <div>
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    </div>
</div>
<!-- Footer -->
<?php get_footer(); ?>
