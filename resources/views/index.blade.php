@extends('layout.main')

@push('title')
    Groco | Home
@endpush

@section('body')

<!-- header section starts  -->
<x-sections.header-section/>
<!-- header section ends -->

<!-- home section starts  -->
<x-sections.home-section/>
<!-- home section ends -->

<!-- features section starts  -->
<x-sections.features-section/>
<!-- features section ends -->

<!-- products section starts  -->
<x-sections.products-section/>
<!-- products section ends -->

<!-- categories section starts  -->
<x-sections.categories-section/>
<!-- categories section ends -->

<!-- review section starts  -->
<x-sections.review-section/>
<!-- review section ends -->

<!-- blogs section starts  -->
<x-sections.blogs-section/>
<!-- blogs section ends -->

@endsection
