@extends('backend.layouts.app')

@section('page-title', __('potags.show-potags-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('potags.page-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>
                <li class="breadcrumb-item active">@lang('potags.show-potags-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('potags.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('potags.create-potag-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('potags.show-potags-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('potags.table-name')</th>
                                <th scope="col">@lang('potags.table-description')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($potags as $potag)
                                <tr>
                                    <th scope="row"><a href="#">{{ $potag->codename }}</a></th>
                                    <td><a href="#" class="text-primary">{{ $potag->name }}</a></td>
                                    <td>{{ $potag->description }}</td>
                                    <td>
                                        <form action="{{ route('potags.destroy',[app()->getLocale() ,$potag->id]) }}"
                                              method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('potags.show',[app()->getLocale() ,$potag->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('potags.edit',[app()->getLocale() ,$potag->id]) }}"><i
                                                    class="bi bi-pencil-square"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    disabled><i class="bi bi-trash"></i></button>
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
