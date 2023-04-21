@php use Carbon\Carbon; @endphp
@extends('backend.layouts.app')

@section('page-title', __('contacts.show-contacts-title'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('contacts.show-contacts-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>

                <li class="breadcrumb-item active">@lang('contacts.show-contacts-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('contacts.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('contacts.create-contact-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('contacts.show-contacts-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>

                                <th scope="col">@lang('contacts.table-name')</th>
                                <th scope="col">@lang('contacts.table-email')</th>
                                <th scope="col">@lang('contacts.table-phonenumber')</th>
                                <th scope="col">@lang('contacts.table-subject')</th>

                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <th scope="row"><a href="#">{{ $contact->id }}</a></th>
                                    <td>{{ $contact->name }}</td>
                                    <td><a href="#" class="text-primary">{{ $contact->email }}</a></td>
                                    <td>{{ $contact->phonenumber }}</td>
                                    {{--                                    <td>{{ floor(abs(date("Y-m-d H:i:s") - strtotime($contact->birthdate))/ (365*60*60*24)) }}</td>--}}
                                    <td>{{ $contact->subject }}</td>
                                    <td>
                                        <form
                                            action="{{ route('contacts.destroy',[app()->getLocale() ,$contact->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('contacts.show',[app()->getLocale() ,$contact->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('contacts.edit',[app()->getLocale() ,$contact->id]) }}"><i
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
