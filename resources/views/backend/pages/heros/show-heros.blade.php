@extends('backend.layouts.app')

@section('page-title', __('heros.show-heros-title'))

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('heros.create', app()->getLocale())  }}" class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('heros.create-hero-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">@lang('heros.show-heros-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">Bannier</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Description</th>
                                <th scope="col">Bouton</th>
                                <th scope="col">Statut</th>
                                <th scope="col">actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($heros as $hero)
                                <tr>
                                    <th scope="row"><a href="#"><img src="{{ asset($hero->heading_bg_image) }}"
                                                                     alt="{{ $hero->id }}" width="100"></a></th>
                                    <td><a href="#" class="text-primary">{{ $hero->heading_title }}</a></td>
                                    <td>{{ $hero->heading_description }}</td>

                                    <td><a href="{{ $hero->heading_link  }}"
                                           class="text-primary">{{ $hero->heading_btn }}</a></td>

                                    <td>
                                        @if($hero->status)
                                            <span class='badge bg-success'>Actif</span>
                                        @else
                                            <span class='badge bg-danger'>Inactif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('heros.destroy',[app()->getLocale() ,$hero->id]) }}"
                                              method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('heros.show',[app()->getLocale() ,$hero->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('heros.edit',[app()->getLocale() ,$hero->id]) }}"><i
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
