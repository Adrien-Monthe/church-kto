<div class="header__menu navbar-expand-xl">
    <div class="collapse navbar-collapse" id="menubar">
        <ul>

            <li class="{{ Route::currentRouteName() == "home" ? "active" : "" }}">
                <a href="{{ route('home') }}">Accueil</a>

            </li>

            <li>
                <a href="#">Gallerie</a>

            </li>

            <li class="{{ Route::currentRouteName() == "prayer" ? "active" : "" }}">
                <a href=" {{ route('prayer') }}">Prières</a>

            </li>

            <li>
                <a href="#">Blog</a>

            </li>
            <li>
                <a href="#">Boutique</a>

            </li>
            <li><a href="{{ route('contact') }}">Contactez Nous</a></li>
        </ul>
        <a href="cause-single.html" class="default-btn"><span>Faites un Don <i class="fas fa-heart"></i></span></a>
    </div>
</div>
