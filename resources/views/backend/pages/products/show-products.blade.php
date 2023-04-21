@extends('backend.layouts.app')

@section('page-title', __('products.show-products-title'))

@section('content')

<div class="pagetitle">
    <h1>@lang('products.show-products-title')</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebard.nav-dashboard')</a></li>
            <li class="breadcrumb-item">@lang('dash-sidebard.nav-ecomm')</li>
            <li class="breadcrumb-item active">@lang('products.show-products-title')</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">

    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('products.create', app()->getLocale())  }}" class="btn btn-primary btn-primary-custom"><i
                    class="bi bi-bag-plus me-1"></i> @lang('products.create-product-title')</a>
            <br>
            <br>
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <h5 class="card-title">@lang('products.show-products-title')</h5>

                    <table class="table table-borderless datatable">
                        <thead>
                        <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('products.table-preview')</th>
                                <th scope="col">@lang('products.table-name')</th>
                                <th scope="col">@lang('products.table-price')</th>
                                <th scope="col">@lang('products.table-quantity-in-stock')</th>
                                <th scope="col">@lang('products.table-category')</th>
                                <th scope="col">actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row"><a href="#">{{ $product->reference }}</a></th>
                                    <th scope="row"><a href="#"><img src="{{ asset($product->image_path)}}"
                                                                     alt="{{ $product->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $product->name }}</a></td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->quantity_in_stock }}</td>

                                    <td>{{  $product->category ? $product->category->name : ''  }}</td>
                                    <td>
                                        <form
                                            action="{{ route('products.destroy',[app()->getLocale() ,$product->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('products.show',[app()->getLocale() ,$product->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('products.edit',[app()->getLocale() ,$product->id]) }}"><i
                                                    class="bi bi-pencil-square"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    disabled>@lang('general.btn-delete')</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</section>
@endsection
