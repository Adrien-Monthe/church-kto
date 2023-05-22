<div class="header__menu navbar-expand-xl">
    <div class="collapse navbar-collapse" id="menubar">
        <ul>

            <li class="{{ Route::currentRouteName() == "home" ? "active" : "" }}">
                <a href="{{ route('home') }}">Accueil</a>

            </li>

            <li>
                <a href="#">Actualités</a>
                <ul>
                    <li><a href="{{ route('home') }}" class="">Agenda</a></li>
                    <li><a href="{{ route('home') }}">Vie de la diocèse</a></li>
                    <li><a href="{{ route('home') }}">Vie des enfants</a></li>
                    <li><a href="{{ route('home') }}">culture</a></li>
                    <li><a href="{{ route('home') }}">évènements</a></li>
                </ul>

            </li>

            <li class="{{ Route::currentRouteName() == "prayer" ? "active" : "" }}">
                <a href="#">Questions de foi</a>

                <ul>
                    <li><a href="{{ route('blog_category', 7) }}" class="">Questions réponses</a></li>
                    <li><a href="{{ route('home') }}">Textes du jour</a></li>
                    <li><a href="{{ route('home') }}">Evangile en Image</a></li>
                    <li class="{{ Route::currentRouteName() == "prayer" ? "active" : "" }}"><a href="{{ route('prayer') }}">Prières</a></li>
                    <li><a href="{{ route('home') }}">Réflexions et catéchèses</a></li>

                </ul>

            </li>

            <li>
                <a href="#">Amour & Sexualité</a>

                <ul>
                    <li><a href="{{ route('blog_category', 1) }}" class="">Témoignages, </a></li>
                    <li><a href="{{ route('blog_category', 11) }}">Réponses aux questions</a></li>
                </ul>

            </li>

            <li>
                <a href="#">Ktosphère</a>

                <ul>
                    <li><a href="{{ route('home') }}" class="">Galeries</a></li>
                    <li><a href="{{ route('home') }}">Vidéos</a></li>
                    <li><a href="{{ route('blog_category', 14) }}">Groupes & Mouvements</a></li>
                    <li><a href="{{ route('home') }}">Liens</a></li>
                </ul>

            </li>



            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <a href="#" class="default-btn"><span>Faites un Don <i class="fas fa-heart"></i></span></a>
    </div>
</div>
