@extends('layout.layout')
@section('title', 'Beranda')
@include('components.navbar')
@section('body')
    <main class="min-h-screen">
        <section class="container mx-auto py-10">
            <h1 class="text-3xl font-bold mb-6">Kursus</h1>
            <!-- Course content goes here -->

        </section>


        @include('components.footer')
    @endsection
