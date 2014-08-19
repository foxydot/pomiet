<?php global $wpalchemy_media_access; ?>
<style>
    .meta_meta_control .table {display: block; width: 100%;}
    .meta_meta_control .row {display: block;cursor: move;padding: 1rem;border-bottom: 1px solid #F1F1F1;}
    .meta_meta_control .row:before,
.meta_meta_control .row:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.meta_meta_control .row:after {
    clear: both;
}

/**
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */
.meta_meta_control .row {
    *zoom: 1;
}
.meta_meta_control .cell {display: block; clear: both;margin-left: 1rem;}
   .meta_meta_control .cell .even {background: #eee;}
   .meta_meta_control .cell .odd {background: #efefef;}
    .meta_meta_control .cell .file input[type="text"] {width: 75%}
    .meta_meta_control label{ display:block; font-weight:bold; }
     .meta_meta_control .file input[type='text']{width: 76%;}
     
</style>
<div class="meta_meta_control" id="formats_metabox">
    <p>
        <?php $mb->the_field('event_name'); ?>
        <label>Item Name</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" />
    </p>
    <p>
        <?php $mb->the_field('event_date'); ?>
        <label>Event Date</label>
        <input class="datepicker" type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" />
    </p>
    <p>
        <?php $mb->the_field('event_location'); ?>
        <label>Event Location</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" />
    </p>
    <p>
        <h3>Buttons</h3>
        <div class="table">
        <?php $i = 1; ?>
    <?php while($mb->have_fields_and_multi('buttons')): ?>
    <?php $mb->the_group_open(); ?>
    <div class="row <?php print $i%2==0?'even':'odd'; ?>">
        <div class="cell">
        <?php $mb->the_field('title'); ?>
        <label>Button Title</label>            
        <div class="input_container">
            <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></div>
        </div>
        <div class="cell file">
            <label>File or URL</label>
            <div class="input_container">
        <?php $mb->the_field('file'); ?>
        <?php $wpalchemy_media_access->setGroupName('button-file'. $mb->get_the_index())->setInsertButtonLabel('Insert This')->setTab('gallery'); ?>
        <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        <?php echo $wpalchemy_media_access->getButton(array('label' => '+')); ?>
            </div>
        </div>
        <div class="cell">
            <a href="#" class="dodelete button btn btn-danger">Remove Button</a>
        </div>
    </div>
    <?php $i++; ?>
    <?php $mb->the_group_close(); ?>
    <?php endwhile; ?>
    <div class="row"><div class="cell">
        <a href="#" class="docopy-buttons button">Add Button</a>
    </div></div>
</div>
<script>
jQuery(function($){
    $("#wpa_loop-tabs").sortable();
});</script>
    </p>
</div>