<?php

/*
* Template Name: Page - Block Template
*/

get_header(); ?>

<?php $container_blocks = get_field('blocks'); ?>
<?php foreach ($container_blocks as $block) : ?>

  <?php $file_name = str_replace("block-", "", $block["acf_fc_layout"]); ?>

  <?php if (file_exists(get_template_directory() . '/template/blocks/' . $file_name . '.php')) :

    if ($file_name == 'history') :
      $block['block-options'] = '';
    endif;

    render_theme_block($file_name, ["id_block" => $block['block-' . $file_name], "options" => $block['block-options']]);

  endif; ?>

<?php endforeach; ?>

<?php get_footer(); ?>