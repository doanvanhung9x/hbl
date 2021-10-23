@foreach ($slider->slides as $slide)
    <div class="swiper-slide">
        <img src="{{ $slide->file->path }}" width="100%">
    </div>
@endforeach

