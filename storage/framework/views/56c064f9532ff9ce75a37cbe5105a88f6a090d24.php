<script type="text/html" id="option-template">
    <div class="content-accordion panel-group options-group-wrapper" id="option-<%- optionId %>">
        <div class="panel panel-default option">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#option-<%- optionId %>" href="#custom-collapse-<%- optionId %>">
                        <span class="drag-icon pull-left">
                            <i class="fa">&#xf142;</i>
                            <i class="fa">&#xf142;</i>
                        </span>

                        <span id="option-name" class="pull-left"><?php echo e(trans('option::options.form.new_option')); ?></span>
                    </a>
                </h4>
            </div>

            <div id="custom-collapse-<%- optionId %>" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="new-option clearfix">
                        <input type="hidden" name="options[<%- optionId %>][id]" value="<%- option.id %>">

                        <div class="col-lg-6 col-md-12 p-l-0">
                            <div class="form-group">
                                <label for="option-<%- optionId %>-name"><?php echo e(trans('option::attributes.name')); ?></label>
                                <input type="text" name="options[<%- optionId %>][name]" class="form-control option-name-field" id="option-<%- optionId %>-name" value="<%- option.name %>">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12 p-l-0">
                            <div class="form-group">
                                <label for="option-<%- optionId %>-type"><?php echo e(trans('option::attributes.type')); ?></label>

                                <select name="options[<%- optionId %>][type]" class="form-control custom-select-black" id="option-<%- optionId %>-type">
                                    <option value=""
                                        <%= option.type === null ? 'selected' : '' %>
                                    >
                                        <?php echo e(trans('option::options.form.option_types.please_select')); ?>

                                    </option>

                                    <option value="dropdown"
                                        <%= option.type === 'dropdown' ? 'selected' : '' %>
                                    >
                                        <?php echo e(trans('option::options.form.option_types.dropdown')); ?>

                                    </option>

                                    <option value="checkbox"
                                        <%= option.type === 'checkbox' ? 'selected' : '' %>
                                    >
                                        <?php echo e(trans('option::options.form.option_types.checkbox')); ?>

                                    </option>

                                    <option value="radio"
                                        <%= option.type === 'radio' ? 'selected' : '' %>
                                    >
                                        <?php echo e(trans('option::options.form.option_types.radio')); ?>

                                    </option>

                                    <option value="multiple_select"
                                        <%= option.type === 'multiple_select' ? 'selected' : '' %>
                                    >
                                        <?php echo e(trans('option::options.form.option_types.multiple_select')); ?>

                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="checkbox">
                            <input type="hidden" name="options[<%- optionId %>][is_required]" value="0">

                            <input type="checkbox"
                                name="options[<%- optionId %>][is_required]"
                                class="form-control"
                                id="option-<%- optionId %>-is-required"
                                value="1"
                                <%= option.is_required ? 'checked' : '' %>
                            >

                            <label for="option-<%- optionId %>-is-required"><?php echo e(trans('option::attributes.is_required')); ?></label>
                        </div>

                        <button type="button" class="btn btn-default delete-option pull-right" data-toggle="tooltip" title="<?php echo e(trans('option::options.form.delete_option')); ?>">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="option-values clearfix" id="option-<%- optionId %>-values">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<?php echo $__env->make('option::admin.options.templates.option.select', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('option::admin.options.templates.option.select_values', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
