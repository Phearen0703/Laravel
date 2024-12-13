@extends('layouts.master')
<!-- -------push title to home page ------------ -->
@push('title')
home page
@endpush

<!-- ---------------add content title --------------------->
@section('content-title')
<div class="row">
    <div class="col-sm-6">
        <h3 class="mb-0">Home</h3>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href={{route('home')}}">Home</a></li>
        </ol>
    </div>
</div>

@endsection




<!-- --------------------content home page---------------- -->

@section('content')
<h2>Content home page</h2>
@endsection