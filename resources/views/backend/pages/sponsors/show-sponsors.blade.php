@extends('backend.layouts.app')

@section('page-title', __('sponsors.show-sponsors-title'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('sponsors.show-sponsors-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>

                <li class="breadcrumb-item active">@lang('sponsors.show-sponsors-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('sponsors.create', app()->getLocale())  }}" class="btn btn-primary"><i
                        class="bi bi-bag-plus me-1"></i> @lang('sponsors.create-sponsor-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('sponsors.show-sponsors-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">@lang('sponsors.table-preview')</th>
                                <th scope="col">@lang('sponsors.table-name')</th>

                                <th scope="col">@lang('sponsors.table-status')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($sponsors as $sponsor)
                                <tr>

                                    <th scope="row"><a href="#"><img src="{{ asset($sponsor->image_path) }}"
                                                                     alt="{{ $sponsor->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $sponsor->name }}</a></td>
                                    @if($sponsor->status)
                                        <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Actif</span>
                                        </td>
                                    @else
                                        <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Inactif</span>
                                        </td>
                                    @endif


                                    <td>
                                        <form
                                            action="{{ route('sponsors.destroy',[app()->getLocale() ,$sponsor->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('sponsors.show',[app()->getLocale() ,$sponsor->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('sponsors.edit',[app()->getLocale() ,$sponsor->id]) }}">
                                                <i
                                                    class="bi bi-pencil-square"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" disabled><i
                                                    class="bi bi-trash"></i></button>
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
