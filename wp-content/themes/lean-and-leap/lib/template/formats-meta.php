<div class="my_meta_control" id="formats_metabox">
    <p>
        <?php $mb->the_field('event_date'); ?>
        <label>Event Date</label>
        <input class="datepicker" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" />
    </p>
    <p>
        <?php $mb->the_field('buttons'); ?>
        <label>Button Multi-field goes here</label>
    </p>
</div>