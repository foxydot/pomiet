<div class="my_meta_control" id="subtitle_metabox">
    <p>
        <?php $mb->the_field('subtitle'); ?>
        <label>Subtitle</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" />
    </p>
    <p>
        <?php $mb->the_field('header_text'); ?>
        <label>Description</label>
        <?php 
        $mb_content = html_entity_decode($mb->get_the_value(), ENT_QUOTES, 'UTF-8');
        $mb_editor_id = sanitize_key($mb->get_the_name());
        $mb_settings = array('textarea_name'=>$mb->get_the_name(),'textarea_rows' => '5',);
        wp_editor( $mb_content, $mb_editor_id, $mb_settings );
        ?>
    </p>
</div>