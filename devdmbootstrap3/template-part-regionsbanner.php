<?php
$slug = $_GET['region'];
$args = array(
  'name'        => $slug,
  'post_type'   => 'post',
  'post_status' => 'publish',
  'numberposts' => 1
);
$post = get_posts($args);
if ($post) :
?>
<div class="regions-banner">
	<?= get_the_post_thumbnail($post[0], 'full', array('class' => 'img-responsive')); ?>
	<div class="regions-banner-text">
		<h2><?= $post[0]->post_title ?></h2>
		<p><?= strip_tags($post[0]->post_content) ?></p>
	</div>
</div>
<?php endif; ?>