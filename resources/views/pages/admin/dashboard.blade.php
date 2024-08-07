@extends('pages.admin.components.admin_layout')
@section('title', 'Admin Panel - Manage Page & Movies')
@section('body')
<section class="main grid grid-cols-5 gap-3 w-screen h-svh">
    @include('pages.admin.components.sidebar')
    @include('pages.admin.components.DT_role')
</section>
@endsection