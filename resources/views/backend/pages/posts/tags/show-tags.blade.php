@extends('backend.layouts.app')

@section('page-title', __('btags.show-btags-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('btags.page-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>
                <li class="breadcrumb-item active">@lang('btags.show-btags-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('btags.create', app()->getLocale())  }}"  class="btn btn-primary btn-primary-custom"><i class="bi bi-bag-plus me-1"></i> @lang('btags.create-btag-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('btags.show-btags-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">@lang('btags.table-name')</th>
                                    <th scope="col">@lang('btags.table-description')</th>
                                    <th scope="col">actions</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($btags as $btag)
                                <tr>
                                    <th scope="row"><a href="#">{{ $btag->codename }}</a></th>
                                    <td><a href="#" class="text-primary">{{ $btag->name }}</a></td>
                                    <td>{{ $btag->description }}</td>
                                    <td>
                                        <form action="{{ route('btags.destroy',[app()->getLocale() ,$btag->id]) }}"
                                              method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('btags.show',[app()->getLocale() ,$btag->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('btags.edit',[app()->getLocale() ,$btag->id]) }}"><i
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
