@extends('backend.layouts.app')

@section('page-name', __('pcomments.show-pcomment-name'))

@section('content')
    <div class="pagename">
        <h1>@lang('pcomments.show-pcomment-name')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>
                <li class="breadcrumb-item active">@lang('pcomments.show-pcomment-name')</li>
            </ol>
        </nav>
    </div><!-- End Page name -->

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-name">{{ $pcomment->name}}</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3">

                            <div class="col-md-6">
                                <label for="name" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="{{$pcomment->name}}" readonly>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Courriel</label>
                                <input type="email" class="form-control" name="email" id="email"
                                       value="{{ $pcomment->email }}">
                            </div>
                            <div class="col-12">
                                <label for="comment" class="form-label">Commentaire</label>
                                <textarea name="comment" class="form-control" id="comment" cols="30"
                                          rows="3">{{ $pcomment->comment }}</textarea>
                            </div>

                            <div class="col-md-12">

                                <label for="product_id" class="form-label">@lang('pcomments.table-product')</label>

                                <select class="form-select" name="product_id" aria-label="Default select example"
                                        readonly>

                                    @foreach ($products as $product)

                                        @if($pcomment->product && $pcomment->product->id == $product->id )
                                            <option selected value="{{$product->id}}">{{$product->name }}</option>
                                        @else
                                            <option value="{{$product->id}}">{{$product->name }}</option>
                                        @endif

                                    @endforeach

                                </select>

                            </div>

                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>

            </div>


            <div class="col-lg-6">


            </div>

        </div>
    </section>
@endsection
