<a class="bottom-to-top rounded-soft" href="#top" data-fancyscroll>
    <span class="fas fa-angle-up lg" data-fa-transform="down-2"></span>
</a>
<nav class="navbar navbar-expand navbar-light bg-light sticky-top font-weight-semi-bold fs--1 text-base shadow-sm">
    <div class="container">
        <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown">
                @include('layout.partials.language-dropdown')
            </li>
            <li class="nav-item">
                <form class="input-iconic">
                    <div class="input-icon"><button type="submit"><span class="fas fa-search text-300"></span></button></div><input class="form-control form-control-sm" type="search" placeholder="{{__('website.search')}}..." />
                </form>
            </li>
        </ul>
        <ul class="navbar-nav align-items-center">
            @if (Session::has('client_token'))
                <li class="nav-item">
                    <a class="btn btn-outline-danger btn-sm mx-2" href="/Client/Logout">{{__('website.logout')}}</a>
                </li>
            @elseif (Session::has('client_token'))
                <li class="nav-item">
                    <a class="btn btn-outline-danger btn-sm mx-2" href="/Client/Logout">{{__('website.logout')}}</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="btn btn-outline-danger btn-sm mx-2" href="/Doctor/Login">{{__('website.doctorLogin')}}</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-danger btn-sm mx-2" href="/Client/Login">{{__('website.clientLogin')}}</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-200 navbar-split py-3">
    {{-- <div class="container"><a class="navbar-brand d-flex align-items-center z-index-1" href="index.html"><img src="{{url('template/assets/img/logo.png')}}" alt="" height="30" /></a> --}}
    <div class="container">
        <a class="navbar-brand d-flex align-items-center z-index-1" href="/">{{__('website.ArabDoctor')}}</a>
        <div class="navbar-nav text-base d-none d-lg-flex">
            {{-- <div class="nav-item">
                <div class="media border-right pr-3 mr-3">
                    <span class="fas fa-map-marker-alt fs-2 text-primary" data-fa-transform="down-1.5"></span>
                    <div class="media-body ml-2">
                        <h5 class="fs-0 mb-1">Address</h5>
                        <p class="fs--1 mb-0">5525 W Slauson Ave,<br />LA, CA 90056, USA</p>
                    </div>
                </div>
            </div> --}}
            <div class="nav-item">
                <div class="media">
                    <span class="fas fa-headset fs-2 text-primary" data-fa-transform="down-1.5"></span>
                    <div class="media-body ml-2">
                        <h5 class="fs-0 mb-1">{{__('website.contactus')}}</h5>
                        <ul class="nav flex-column fs--1">
                            <li class="nav-item">
                                <a dir='ltr' target="_blank" href="https://wa.me/962791198572">+962791198572</a>
                            </li>
                            <li class="nav-item">
                                <a dir='ltr' href="mailto:info@arab-doctor.com">info@arab-doctor.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <button class="navbar-toggler ml-4 z-index-1" type="button" data-toggle="collapse" data-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
