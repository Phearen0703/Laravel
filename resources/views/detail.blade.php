@extends('layouts.master')

@push('title')
detail page
@endpush

@section('content-title')
<div class="row">
    <div class="col-sm-6">
        <h3 class="mb-0">detail</h3>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href={{route('home')}}">detail</a></li>
        </ol>
    </div>
</div>
<!--end::Row-->
@endsection

@section('content')
<h2>content detail page</h2>
@endsection