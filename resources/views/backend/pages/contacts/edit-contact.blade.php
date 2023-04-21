@extends('backend.layouts.app')

@section('page-title', __('contacts.edit-contact-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('contacts.edit-contact-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>

                <li class="breadcrumb-item active">@lang('contacts.edit-contact-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('contacts.edit-contact-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('contacts.update', [app()->getLocale(), $contact->id])  }}"
                              enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="col-md-4">
                                <label for="name" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="{{ $contact->name }}" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">@lang('contacts.table-email') </label>
                                <input type="email" class="form-control" name="email" id="email"
                                       value="{{ $contact->email }}" readonly>
                            </div>

                            <div class="col-md-4">
                                <label for="phonenumber" class="form-label">@lang('contacts.table-phonenumber') </label>
                                <input type="tel" class="form-control" name="phonenumber" id="phonenumber"
                                       value="{{ $contact->phonenumber }}" readonly>
                            </div>

                            <div class="col-md-12">
                                <label for="subject" class="form-label">@lang('contacts.table-subject')</label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                       value="{{ $contact->subject }}" readonly>
                            </div>

                            <div class="col-md-12">
                                <label for="status"
                                       class="form-label">@lang('players.table-status')</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="Non resolu">Non resolu</option>
                                    <option value="Résolu">Résolu</option>
                                    <option value="En attente">En attente</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" class="form-control" id="message"
                                          cols="30" rows="3" readonly>{{ $contact->message }}</textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">@lang('general.btn-submit')</button>
                                <button type="reset" class="btn btn-secondary">@lang('general.btn-reset')</button>
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
