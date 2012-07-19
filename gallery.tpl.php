<? if (count ($images)) {
    $counter = 0;
?>
	<span class="gallery gallery-<?= $gallery_type ?>">
		<? foreach ($images as $image_id => $image_file) { ?>
			<input type="radio" name="<?= $unique_id ?>" id="<?= $unique_id ?>_<?= $image_id ?>"
				<? if (!$counter++) { ?>checked="checked" <? } ?> tabindex="<?= $counter ?>" />
			<span class="gallery-image">
				<img src="<?= $image_file ?>" alt="" />
			</span>
			<span class="gallery-nav-wrapper">
      			<span class="gallery-nav">
      				<? foreach ($images as $nav_image_id => $nav_image_file) { ?>
        				<label class="gallery-nav-point <? if ($nav_image_id == $image_id) { ?>gallery-nav-point-current <? } ?>" for="<?= $unique_id ?>_<?= $nav_image_id ?>">&nbsp;</label>
        			<? } ?>
        		</span>
        	</span>
       <? } ?>
	</span>
<?
}
