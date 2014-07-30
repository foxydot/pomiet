<div class="my_meta_control" id="subtitle_metabox">
    <p>
        <?php $mb->the_field('subtitle'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" />
    </p>
    <p>
        <?php $mb->the_field('header_text'); ?>
        <textarea name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea>
    </p>
</div>