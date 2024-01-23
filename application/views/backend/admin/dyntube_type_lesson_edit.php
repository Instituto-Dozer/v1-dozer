<input type="hidden" name="lesson_type" value="video-url">
<input type="hidden" name="lesson_provider" value="vdocipher">

<div class="form-group">
    <label><?php echo get_phrase('video_url'); ?>( <?php echo get_phrase('for_web_application'); ?> )</label>
    <input type="text" name = "key_url" class="form-control" value="<?php echo $lesson_details['video_url']; ?>" placeholder="">
</div>

<div class="form-group">
    <label><?php echo get_phrase('duration'); ?>( <?php echo get_phrase('for_web_application'); ?> )</label>
    <input type="text" name = "duration" id = "duration" class="form-control" value="<?php echo $lesson_details['duration']; ?>">
</div>

<!-- This portion is for mobile application video lesson -->
<div class="form-group">
    <label for="lesson_provider"><?php echo get_phrase('lesson_provider'); ?>( <?php echo get_phrase('for_mobile_application'); ?> )</label>
    <select class="form-control select2" data-toggle="select2" name="lesson_provider_for_mobile_application" id="lesson_provider_for_mobile_application">
        <option value="html5" <?php if(strtolower($lesson_details['video_type_for_mobile_application']) == 'html5') echo 'selected'; ?>>HTML5</option>
    </select>
</div>

<div class="form-group">
    <label><?php echo get_phrase('video_url'); ?>( <?php echo get_phrase('for_mobile_application'); ?> )</label>
    <input type="text" id = "html5_video_url_for_mobile_application" name = "html5_video_url_for_mobile_application" class="form-control" placeholder="<?php echo get_phrase('only'); ?> HTML5 <?php echo get_phrase('type_video_is_acceptable_for_mobile_application'); ?>" value="<?php echo $lesson_details['video_url_for_mobile_application']; ?>">
</div>

<div class="form-group">
    <label><?php echo get_phrase('duration'); ?>( <?php echo get_phrase('for_mobile_application'); ?> )</label>
    <input type="text" class="form-control" data-toggle='timepicker' data-minute-step="5" name="html5_duration_for_mobile_application" id = "html5_duration_for_mobile_application" data-show-meridian="false" value="<?php echo $lesson_details['duration_for_mobile_application']; ?>">
</div>
