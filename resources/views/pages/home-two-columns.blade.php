@extends('layouts.app')
@section('title', 'Creative Digital Agency Template')
@section('content')

    @include('pages.widgets.banner-two-columns')

    @include('pages.widgets.about-welcome')

    @include('pages.widgets.about-agency')

    @include('pages.widgets.portfolio-filter')

    @include('pages/widgets/service-slide-tabs')

    @include('pages.widgets.pricing-one')

    @include('pages/widgets/testimonial-one')

    @include('pages/widgets/team-one')

    @include('pages/widgets/blog-one')

    @include('pages.widgets.contact-form-one')

    @include('pages.widgets.partners-one')

    @include('pages.widgets.contact-one')

@endsection

