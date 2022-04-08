<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">
        <div class="swiper-wrapper">

            <x-cards.product-card title="fresh orange" price="$4.99" imgSrc="{{ asset('image/product-1.png') }}"/>
            
            <x-cards.product-card title="fresh onion" price="$4.99" imgSrc="{{ asset('image/product-2.png') }}"/>
            
            <x-cards.product-card title="fresh meat" price="$4.99" imgSrc="{{ asset('image/product-3.png') }}"/>
            
            <x-cards.product-card title="fresh cabbage" price="$4.99" imgSrc="{{ asset('image/product-4.png') }}"/>

        </div>
    </div>

    <div class="swiper product-slider">
        <div class="swiper-wrapper">

            <x-cards.product-card title="fresh potato" price="$4.99" imgSrc="{{ asset('image/product-5.png') }}"/>

            <x-cards.product-card title="fresh avocado" price="$4.99" imgSrc="{{ asset('image/product-6.png') }}"/>

            <x-cards.product-card title="fresh carrot" price="$4.99" imgSrc="{{ asset('image/product-7.png') }}"/>

            <x-cards.product-card title="fresh lemon" price="$4.99" imgSrc="{{ asset('image/product-8.png') }}"/>

        </div>
    </div>

</section>