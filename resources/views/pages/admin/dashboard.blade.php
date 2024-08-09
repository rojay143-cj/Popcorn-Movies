@extends('pages.admin.components.admin_layout')
@section('title', 'Admin Panel - Manage Page & Movies')
@section('body')
<div class="flex justify-center h-screen w-screen">
    @include('pages.admin.components.sidebar')
    @include('pages.admin.components.DT_role', ['production' => $production])
    @include('pages.admin.components.country', ['countries' => $countries])
    @include('pages.admin.components.genre',['genres' => $genres])
</div>
@endsection