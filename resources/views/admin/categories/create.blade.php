@extends('adminlte::page')

@section('title')
    {{ __('Create') }} {{__('Category')}}
@stop

@section('content_header')
    <h1 class="text-center">

    </h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} {{__('Category')}}</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('admin.categories.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('admin.categories.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
