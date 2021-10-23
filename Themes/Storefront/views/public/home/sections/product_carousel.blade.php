@if ($products->isNotEmpty())
    <div class="section-header">
        <h3 style="text-align: center;">{{ $title }}</h3>
    </div>
    @foreach ($products as $product)
        @include('public.products.partials.product_card')
    @endforeach
@endif
