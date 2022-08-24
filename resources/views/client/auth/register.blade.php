@extends('layout.main')
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 p-4 mt-xl-0 border">
                    <form method="POST">
                        @csrf
                        <h5 class="text-center">{{__('website.clientRegister')}}</h5>
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{__('website.email')}}</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{__('website.email')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">{{__('website.password')}}</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="{{__('website.password')}}">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <a href="/Client/Login">{{__('website.clientLogin')}}</a><br><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
