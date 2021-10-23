<?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <rs-slide data-key="rs-9" data-title="Slide 1" data-thumb="<?php echo e($slide->file->path); ?>" data-anim="ei:d;eo:d;s:d;r:0;t:slotslide-horizontal;sl:d;">
        <img src="<?php echo e($slide->file->path); ?>" title="slide1" width="1920" height="1280" data-parallax="off" class="rev-slidebg" data-no-retina>
        <rs-layer
            id="slider-4-slide-9-layer-18"
            data-type="text"
            data-rsp_ch="on"
            data-xy="x:l,l,l,c;xo:45px,45px,35px,0;yo:260px,203px,233px,212px;"
            data-text="w:normal;s:120,93,92,68;l:115,89,90,68;ls:1px,0px,0px,0px;fw:700;a:left,left,left,center;"
            data-frame_1="st:1000;sp:1000;sR:220;"
            data-frame_999="o:0;st:w;sR:7790;"
            style="z-index:9;"
            class="font-current-theme2"
        ><span class="text-theme-colored2"><?php echo e($slide->caption_1); ?></span>
        </rs-layer>
        <rs-layer
            id="slider-4-slide-9-layer-21"
            data-type="text"
            data-rsp_ch="on"
            data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:218px,170px,195px,169px;"
            data-text="w:normal;s:22,22,21,20;l:25,19,23,22;ls:1px,0px,0px,0px;a:left,left,left,center;"
            data-frame_1="st:500;sp:1000;"
            data-frame_999="o:0;st:w;sR:8000;"
            style="z-index:10;font-style:italic;"
            class="font-current-theme1"
        ><span style="color: #777;"><?php echo e($slide->caption_2); ?></span>
        </rs-layer>
        <rs-layer
            id="slider-4-slide-9-layer-22"
            data-type="text"
            data-rsp_ch="on"
            data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:540px,422px,448px,390px;"
            data-text="w:normal;s:20,15,18,20;l:25,19,18,22;a:left,left,left,center;"
            data-frame_1="st:1500;sp:1000;"
            data-frame_999="o:0;st:w;sR:8700;"
            style="z-index:8;"
        ><a href="<?php echo e($slide->call_to_action_url); ?>" class="btn btn-flat btn-lg btn-theme-colored1">Xem thêm</a>
        </rs-layer>
        <rs-layer
            id="slider-4-slide-9-layer-33"
            data-type="shape"
            data-rsp_ch="on"
            data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
            data-dim="w:100%;h:100%;"
            data-basealign="slide"
            data-frame_1="st:500;sp:1000;"
            data-frame_999="o:0;st:w;sR:8000;"
            style="z-index:3;background-color:rgba(250,250,250,0.15);"
        >
        </rs-layer>
    </rs-slide>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

