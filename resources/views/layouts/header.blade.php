
<!--Menu Principal---------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="position-relative">
            <div class="position-absolute tm-site-header">
                <div class="container-fluid position-relative">
                    <div class="row">
                        <div class="col-7 col-md-4 mt-4">
                            <div class="tm-bg-black text-center tm-logo-container">
                                <i class="fas fa-paint-roller fa-2x"></i>
                                <h1 class="tm-site-name">Pintures la Selva</h1>
                            </div>
                        </div>
                        <!--Menu Principal Links---------------------------------------------------------------------------------------------------------------------------------------------------->
                        <div class="col-5 col-md-8 ml-auto mr-0">
                            <div class="tm-site-nav">
                                <nav class="navbar navbar-expand-lg mr-0 ml-auto" id="tm-main-nav">
                                    <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed" type="button"
                                        data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span>
                                            <i class="fas fa-bars tm-menu-closed-icon"></i>
                                            <i class="fas fa-times tm-menu-opened-icon"></i>
                                        </span>
                                    </button>
                                    <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                        <ul class="navbar-nav text-uppercase">
                                            <li class="nav-item active">
                                                <a class="nav-link tm-nav-link" href="{{route('/')}}">Inici <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="{{ url('galeria') }}">Galeria</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="{{ url('contacte') }}">Contacte</a>
                                            </li>

                                            <div class="dropdown">
                                                <button class="btn  dropdown-toggle tm-bg-black"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  IDIOMES
                                                </button>
                                                <div class="dropdown-menu tm-bg-black" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item tm-bg-black" href="#">INGLES</a>
                                                  <a class="dropdown-item tm-bg-black" href="#">ESPANYOL</a>
                                                  <a class="dropdown-item tm-bg-black" href="#">CATALÀ</a>
                                                </div>
                                              </div>
                                        </ul>
                                        
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <!--Menu Principal Links--------------------------------------------------------------------------------------------------------------------------------------------------------->
                    </div>
                </div>
            </div>
            <div class="tm-welcome-container text-center text-white">
                <div class="tm-welcome-container-inner">
                    <p class="tm-welcome-text mb-1 text-black">Benvinguts a Pintures la Selva.</p>
                    <p class="tm-welcome-text mb-5 text-black">Tot en Pintura.</p>
                    <a href="#content" class="btn tm-btn-animate tm-btn-cta tm-icon-down">
                        <span>Coneixens</span>
                    </a>
                </div>
            </div>

            <div id="tm-video-container">
                <img src="{{asset('/storage/images/patata.jpg') }}" alt="Image" class="img-fluid tm-catalog-item-img">
            </div>

            <i id="tm-video-control-button" class="fas fa-pause"></i>
        </div>
        <!--Menu Principal---------------------------------------------------------------------------------------------------------------------------------------------------->
       