<div class="header__menu navbar-expand-xl">
    <div class="collapse navbar-collapse" id="menubar">
        <ul>

            <li class="{{ Route::currentRouteName() == "home" ? "active" : "" }}">
                <a href="{{ route('home') }}">Accueil</a>

            </li>

            <li>
                <a href="#">Actualités</a>
                <ul>
                    <li><a href="index.html" class="">Agenda</a></li>
                    <li><a href="index-2.html">Vie de la diocèse</a></li>
                    <li><a href="index-3.html">Vie des enfants</a></li>
                    <li><a href="index-3.html">culture</a></li>
                    <li><a href="index-3.html">évènements</a></li>
                </ul>

            </li>

            <li class="{{ Route::currentRouteName() == "prayer" ? "active" : "" }}">
                <a href="#">Questions de foi</a>

                <ul>
                    <li><a href="index.html" class="">Questions réponses</a></li>
                    <li><a href="index-2.html">Textes du jour</a></li>
                    <li><a href="index-2.html">Evangile en Image</a></li>
                    <li class="{{ Route::currentRouteName() == "prayer" ? "active" : "" }}"><a href="{{ route('prayer') }}">Prières</a></li>
                    <li><a href="index-3.html">Réflexions et catéchèses</a></li>

                </ul>

            </li>

            <li>
                <a href="#">Amour & Sexualité</a>

                <ul>
                    <li><a href="index.html" class="">Témoignages, </a></li>
                    <li><a href="index-2.html">Réponses aux questions</a></li>
                </ul>

            </li>

            <li>
                <a href="#">Ktosphère</a>

                <ul>
                    <li><a href="index.html" class="">Galeries</a></li>
                    <li><a href="index-2.html">Vidéos</a></li>
                    <li><a href="index-2.html">Groupes & Mouvements</a></li>
                    <li><a href="index-2.html">Liens</a></li>
                </ul>

            </li>



            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <a href="cause-single.html" class="default-btn"><span>Faites un Don <i class="fas fa-heart"></i></span></a>
    </div>
</div>
