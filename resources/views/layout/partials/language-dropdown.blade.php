<a class="btn btn-light btn-sm dropdown-toggle mr-2" id="languageDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    @if(Session::get('locale') == 'ar') <img src="{{url('template/assets/img/illustrations/j.png')}}" width="20" alt="" />
    @elseif(Session::get('locale') == 'en') <img src="{{url('template/assets/img/illustrations/united-states.svg')}}" width="20" alt="" />
    @elseif(Session::get('locale') == 'fr') <img src="{{url('template/assets/img/illustrations/f.png')}}" width="20" alt="" /> @endif
</a>
<div class="dropdown-menu" aria-labelledby="languageDropdown">
    <a class="dropdown-item font-weight-semi-bold text-primary @if(Session::get('locale') == 'ar') d-flex justify-content-between @endif" href="/Language?locale=ar">
        <div class="media align-items-center">
            <img src="{{url('template/assets/img/illustrations/j.png')}}" width="20" alt="" />
            <div class="media-body ml-2">العربية</div>
        </div>
        @if(Session::get('locale') == 'ar') <span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span> @endif
    </a>
    <a class="dropdown-item font-weight-semi-bold text-primary @if(Session::get('locale') == 'en') d-flex justify-content-between @endif" href="/Language?locale=en">
        <div class="media align-items-center">
            <img src="{{url('template/assets/img/illustrations/united-states.svg')}}" width="20" alt="" />
            <div class="media-body ml-2">English</div>
        </div>
        @if(Session::get('locale') == 'en') <span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span> @endif
    </a>
    <a class="dropdown-item font-weight-semi-bold text-primary @if(Session::get('locale') == 'fr') d-flex justify-content-between @endif" href="/Language?locale=fr">
        <div class="media align-items-center">
            <img src="{{url('template/assets/img/illustrations/f.png')}}" width="20" alt="" />
            <div class="media-body ml-2">Frence</div>
        </div>
        @if(Session::get('locale') == 'fr') <span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span> @endif
    </a>
</div>
