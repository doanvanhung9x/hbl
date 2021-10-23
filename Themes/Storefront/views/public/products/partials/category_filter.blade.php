<div class="sidebar sidebar-right mt-sm-30">
    <div class="widget widget_categories">
        <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">{{ trans('storefront::custom.multi.category') }}</h4>
        <ul>
            @if($categories->isNotEmpty())
                @foreach ($categories as $category)
                    <li class="cat-item"><a href="{{ request()->fullUrlWithQuery(['category' => $category->slug, 'page' => 1]) }}">{{ $category->name }}</a> </li>
{{--                    <li class="hassub">--}}
{{--                        <a href="{{ request()->fullUrlWithQuery(['category' => $category->slug, 'page' => 1]) }}" title="{{ $category->name }}">{{ $category->name }}</a>--}}
{{--                        @if ($category->items->isNotEmpty())--}}
{{--                            @include('public.products.partials.sub_category_filter', ['subCategories' => $category->items])--}}
{{--                        @endif--}}
{{--                    </li>--}}
                @endforeach
            @endif
        </ul>
    </div>
</div>
