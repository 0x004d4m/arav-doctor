@if (Session::has('Message') && Session::has('Color'))
    <div class="p-4">
        <div class="alert alert-{{Session::get('Color')}} alert-dismissible fade show" role="alert">
            {{Session::get('Message')}}
        </div>
    </div>
@endif
