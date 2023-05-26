<!-- ================> gallery section start here <================== -->
<div class="gallery padding--top padding--bottom bg-light">
    <div class="container-fluid">
        <div class="section__header text-center">
            <h2>Notre Gallerie D'image</h2>
        </div>
        <div class="section__wrapper">
            <div class="gallery__filter">
                <ul>
                    <li data-filter="*" class="active">Tous</li>
                    @foreach($portfolios as $cat)
                        <li data-filter=".{{ $cat->codename }}">{{ $cat->name }}</li>
                    @endforeach

                </ul>
            </div>
            <div class="row g-3 grid">
                @foreach($images as $image)
                    <div class="col-lg-4 col-sm-6 col-12 {{ $image->imageable->codename }}">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="{{ asset($image->image_path) }}" alt="gallery-thumb" class="w-100" style="height: 320px; object-fit: cover">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="{{ asset($image->image_path) }}" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="text-center mt-5">
                <a href="#" class="default-btn move-right"><span>Gallerie</span></a>
            </div>
        </div>
    </div>
</div>
<!-- ================> gallery section end here <================== -->
