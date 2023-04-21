@extends('backend.layouts.app')

@section('page-title', __('events.show-events-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('events.page-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>
                <li class="breadcrumb-item active">@lang('events.show-events-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('events.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('events.create-event-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('events.show-events-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('events.table-preview')</th>
                                <th scope="col">@lang('events.table-name')</th>
                                <th scope="col">@lang('events.table-category')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <th scope="row"><a href="#">{{ $event->codename }}</a></th>
                                    <th scope="row"><a href="#"><img src="{{ asset($event->image_path)}}"
                                                                     alt="{{ $event->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $event->title }}</a></td>
                                    <td>{{ $event->portfolio ? $event->portfolio->name : '' }}</td>
                                    <td>
                                        <form
                                            action="{{ route('events.destroy',[app()->getLocale() ,$event->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('events.show',[app()->getLocale() ,$event->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('events.edit',[app()->getLocale() ,$event->id]) }}"><i
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
