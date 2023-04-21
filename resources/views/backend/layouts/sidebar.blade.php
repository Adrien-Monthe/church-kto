<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('dashboard', app()->getLocale() ) }}">
                <i class="bi bi-grid"></i>
                <span>@lang('dash-sidebar.nav-dashboard')</span>
            </a>
        </li><!-- End Dashboard Nav -->

        @if(auth()->user()->userable == null || auth()->user()->userable->access['users'] )
            <li class="nav-heading">@lang('dash-sidebar.nav-users')</li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
                    <i class="ri ri-football-fill"></i><span>@lang('dash-sidebar.nav-users')</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="user-nav"
                    class="nav-content collapse {{ str_contains(Route::currentRouteName(), "admins")|| str_contains(Route::currentRouteName(), "internautes") ? 'show' : '' }} "
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('admins.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "admins") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-admins')</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('internautes.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "internautes") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-internautes')</span>
                        </a>
                    </li>


                </ul>
            </li> <!-- End Tables Nav -->
        @endif

        @if(auth()->user()->userable == null || auth()->user()->userable->access['blog'] )
            <li class="nav-heading">@lang('dash-sidebar.nav-blog')</li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>@lang('dash-sidebar.nav-blog')</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="blog-nav"
                    class="nav-content collapse {{  str_contains(Route::currentRouteName(), "bcategories")|| str_contains(Route::currentRouteName(), "btags")||str_contains(Route::currentRouteName(), "blogs")||str_contains(Route::currentRouteName(), "bcomments") ||str_contains(Route::currentRouteName(), "events") ? 'show' : '' }} "
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('bcategories.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "bcategories") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-bcategories')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('btags.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "btags") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-btags')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blogs.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "blogs") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-posts')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('bcomments.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "bcomments") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-bcomments')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('events.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "events") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-events')</span>
                        </a>
                    </li>
                </ul>
            </li> <!-- End Tables Nav -->
        @endif

        @if(auth()->user()->userable == null || auth()->user()->userable->access['shop'] )
            <li class="nav-heading">@lang('dash-sidebar.nav-shop')</li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#product-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-shop"></i><span>@lang('dash-sidebar.nav-shop')</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="product-nav"
                    class="nav-content collapse {{ str_contains(Route::currentRouteName(), "pcategories")|| str_contains(Route::currentRouteName(), "ptags")||str_contains(Route::currentRouteName(), "products")||str_contains(Route::currentRouteName(), "pcomments") ? 'show' : '' }} "
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('pcategories.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "pcategories") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-pcategories')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ptags.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "ptags") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-ptags')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "products") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-products')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pcomments.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "pcomments") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-bcomments')</span>
                        </a>
                    </li>
                </ul>
            </li> <!-- End Tables Nav -->
        @endif

        @if(auth()->user()->userable == null || auth()->user()->userable->access['players'] )
            <li class="nav-heading">@lang('dash-sidebar.nav-football')</li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#football-nav" data-bs-toggle="collapse" href="#">
                    <i class="ri ri-football-fill"></i><span>@lang('dash-sidebar.nav-football')</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="football-nav"
                    class="nav-content collapse {{ str_contains(Route::currentRouteName(), "players") || str_contains(Route::currentRouteName(), "clubs") || str_contains(Route::currentRouteName(), "clubowners") || str_contains(Route::currentRouteName(), "clubowners") || str_contains(Route::currentRouteName(), "games") ? 'show' : '' }} "
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('players.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "players") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-players')</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('clubowners.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "clubowners") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-clubowners')</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('competitions.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "competitions") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>Compétitions</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('editions.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "editions") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>Éditions</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('groups.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "groups") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>Groupes</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('points.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "points") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>Points</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('days.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "days") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>Journées</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('clubs.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "clubs") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-clubs')</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('games.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "games") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>Matchs</span>
                        </a>
                    </li>


                </ul>
            </li> <!-- End Tables Nav -->
        @endif

        @if(auth()->user()->userable == null || auth()->user()->userable->access['portfolio'] )
            <li class="nav-heading">@lang('dash-sidebar.nav-portfolio')</li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#portfolio-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-card-image"></i><span>@lang('dash-sidebar.nav-portfolio')</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="portfolio-nav"
                    class="nav-content collapse {{ str_contains(Route::currentRouteName(), "portfolios") || str_contains(Route::currentRouteName(), "pocategories") || str_contains(Route::currentRouteName(), "potags") ? 'show' : '' }} "
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('pocategories.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "pocategories") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-pcategories')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('potags.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "potags") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-ptags')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portfolios.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "portfolio") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-image')</span>
                        </a>
                    </li>


                </ul>
            </li> <!-- End Tables Nav -->
        @endif

        <li class="nav-heading">Gestion du Site</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('contacts.index', app()->getLocale() ) }}">
                <i class="bi bi-grid"></i>
                <span>@lang('dash-sidebar.nav-contacts')</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('heros.index', app()->getLocale() ) }}">
                <i class="bi bi-grid"></i>
                <span>@lang('dash-sidebar.nav-heros')</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('faqs.index', app()->getLocale()) }}">
                <i class="bi bi-question-circle"></i>
                <span>FAQS</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('sponsors.index', app()->getLocale()) }}">
                <i class="bi bi-diagram-3"></i>
                <span>Sponsors</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('testimonials.index', app()->getLocale()) }}">
                <i class="bi bi-chat-left-text"></i>
                <span>Temoignage</span>
            </a>
        </li><!-- End Dashboard Nav -->


    </ul>

</aside><!-- End Sidebar-->
