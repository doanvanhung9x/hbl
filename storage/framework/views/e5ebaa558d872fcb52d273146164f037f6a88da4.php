<script type="text/html" id="slide-template">
    <div class="slide">
        <div class="slide-header clearfix">
            <span class="slide-drag pull-left">
                <i class="fa">&#xf142;</i>
                <i class="fa">&#xf142;</i>
            </span>
            <span class="pull-left"><?php echo e(trans('slider::sliders.slide.image_slide')); ?></span>
            <button type="button" class="delete-slide btn pull-right"><i class="fa fa-times"></i></button>
        </div>

        <div class="slide-body">
            <input type="hidden" name="slides[<%- slideNumber %>][id]" value="<%- slide.id %>">

            <div class="slide-image" data-slide-number="<%- slideNumber %>">
                <% if (slide.file && slide.file.path) { %>
                    <img src="<%- slide.file.path %>">
                    <input type="hidden" name="slides[<%- slideNumber %>][file_id]" value="<%- slide.file.id %>">
                <% } else { %>
                    <i class="fa fa-picture-o"></i>
                <% } %>
            </div>

            <div class="slide-tabs tab-wrapper">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#slides-<%- slideNumber %>-general" data-toggle="tab">
                            <?php echo e(trans('slider::sliders.slide.form.tabs.general')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="#slider-<%- slideNumber %>-options" data-toggle="tab">
                            <?php echo e(trans('slider::sliders.slide.form.tabs.options')); ?>

                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="slides-<%- slideNumber %>-general" class="general tab-pane fade in active">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                    <label for="slides-<%- slideNumber %>-caption-1">
                                        <?php echo e(trans('slider::attributes.caption_1')); ?>

                                    </label>

                                    <input type="text"
                                        name="slides[<%- slideNumber %>][caption_1]"
                                        class="form-control"
                                        id="slides-<%- slideNumber %>-caption-1"
                                        value="<%- slide.caption_1 %>"
                                    >
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                    <label for="slides-<%- slideNumber %>-caption-2">
                                        <?php echo e(trans('slider::attributes.caption_2')); ?>

                                    </label>

                                    <input type="text"
                                        name="slides[<%- slideNumber %>][caption_2]"
                                        class="form-control"
                                        id="slides-<%- slideNumber %>-caption-2"
                                        value="<%- slide.caption_2 %>"
                                    >
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                    <label for="slides-<%- slideNumber %>-caption-3">
                                        <?php echo e(trans('slider::attributes.caption_3')); ?>

                                    </label>

                                    <input type="text"
                                        name="slides[<%- slideNumber %>][caption_3]"
                                        class="form-control"
                                        id="slides-<%- slideNumber %>-caption-3"
                                        value="<%- slide.caption_3 %>"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                    <label for="slides[<%- slideNumber %>][call-to-action-text]">
                                        <?php echo e(trans('slider::attributes.call_to_action_text')); ?>

                                    </label>

                                    <input type="text"
                                        name="slides[<%- slideNumber %>][call_to_action_text]"
                                        class="form-control"
                                        id="slides[<%- slideNumber %>][call-to-action-text]"
                                        value="<%- slide.call_to_action_text %>"
                                    >
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                    <label for="slides-<%- slideNumber %>-call-to-action-url">
                                        <?php echo e(trans('slider::attributes.call_to_action_url')); ?>

                                    </label>

                                    <input type="text"
                                        name="slides[<%- slideNumber %>][call_to_action_url]"
                                        class="form-control"
                                        id="slides-<%- slideNumber %>-call-to-action-url"
                                        value="<%- slide.call_to_action_url %>"
                                    >
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div class="checkbox">
                                    <input type="hidden" name="slides[<%- slideNumber %>][open_in_new_window]" value="0">

                                    <input type="checkbox"
                                        name="slides[<%- slideNumber %>][open_in_new_window]"
                                        value="1"
                                        id="slides-<%- slideNumber %>-open-in-new-window"
                                        <%= slide.open_in_new_window ? 'checked' : '' %>
                                    >

                                    <label for="slides-<%- slideNumber %>-open-in-new-window">
                                        <?php echo e(trans('slider::attributes.open_in_new_window')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="slider-<%- slideNumber %>-options" class="tab-pane fade in clearfix">
                        <select class="change-option-block custom-select-black pull-right">
                            <option value="caption-1" selected><?php echo e(trans('slider::sliders.slide.form.caption_1')); ?></option>
                            <option value="caption-2"><?php echo e(trans('slider::sliders.slide.form.caption_2')); ?></option>
                            <option value="caption-3"><?php echo e(trans('slider::sliders.slide.form.caption_3')); ?></option>
                            <option value="call-to-action"><?php echo e(trans('slider::sliders.slide.form.call_to_action')); ?></option>
                        </select>

                        <?php echo $__env->make('slider::admin.sliders.templates.partials.slide_caption', ['captionNumber' => 1], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('slider::admin.sliders.templates.partials.slide_caption', ['captionNumber' => 2], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('slider::admin.sliders.templates.partials.slide_caption', ['captionNumber' => 3], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('slider::admin.sliders.templates.partials.slide_call_to_action', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>
