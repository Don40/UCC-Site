@extends('layouts.app')

@section('content')
    @include('pages.home.slider')

    @include('pages.home.announcements')

    @include('pages.home.notice')

    @include('pages.home.academic_calendar')

    @include('pages.home.contact_area')
@endsection
