           <!-- Side Nav START -->
            <div class="side-nav expand-lg">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="side-nav-header">
                            <span>Navigation</span>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-bus-school"></i>
                                </span>
                                <span class="title">Voyages</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('/voyages') }}">Voyages</a>
                                </li>
                                <li>
                                    <a href="{{ url('/reservation/new') }}">Nouveau voyage</a>
                                </li> 
                                <li>
                                    <a href="{{ url('/voyage/listes') }}">Liste des voyages</a>
                                </li> 
                            </ul>
                        </li>  

                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-bus-school"></i>
                                </span>
                                <span class="title">Réservations</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu"> 
                                <li>
                                    <a href="{{ url('/reservation/new') }}">Nouveau réservation</a>
                                </li> 
                                <li>
                                    <a href="{{ url('/reservation/listes') }}">Liste des réservations</a>
                                </li> 
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->