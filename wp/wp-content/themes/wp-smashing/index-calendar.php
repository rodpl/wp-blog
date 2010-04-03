<?php $wp_calendar = wp_calendar(date("F Y", time())); ?>

<?php get_header(); ?>

<div id="wp_calendar">
	<h3><?=$wp_calendar['active_month']?></h3>	
	<ul class="weekdays">
		<li><?php _e('Sunday') ?></li>
		<li><?php _e('Monday') ?></li>
		<li><?php _e('Tuesday') ?></li>
		<li><?php _e('Wednesday') ?></li>
		<li><?php _e('Thursday') ?></li>
		<li><?php _e('Friday') ?></li>
		<li><?php _e('Saturday') ?></li>
	</ul>

<?php foreach($wp_calendar['calendar'] as $item): ?>
<?php if($item['weekday'] == 'sunday'): ?>
	<ul class="week">
<?php endif; ?>
<?php if($item['is_day'] == "no"): ?>
		<li class="noday"></li>
<?php else: ?>
		<li class="<?=(isset($item['is_today']) ? ' today' : '')?><?=(isset($item['posts']) ? '' : ' empty')?>">
			<div class="head"><?=$item['day']?><?=(isset($item['is_today']) ? ' *' : '')?></div>
			<div class="day">
<?php if(isset($item['posts'])): ?>
				<ul>
<?php foreach($item['posts'] as $post): ?>
					<li><a title="<?=$post['post_title']?>" href="<?=get_permalink($post['id'])?>"><?=truncate($post['post_title'], 150)?></a></li>
<?php endforeach; ?>
				</ul>
<?php endif; ?>
			</div>
		</li>
<?php endif; ?>
<?php if($item['weekday'] == 'saturday' || isset($item["last_day"])): ?>
	</ul>
<?php endif; ?>
<?php endforeach; ?>
</div>

<?php get_footer(); ?>
