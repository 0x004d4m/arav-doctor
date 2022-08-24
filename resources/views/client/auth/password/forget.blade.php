@extends('layout.main')
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 p-4 mt-xl-0 border">
                    <form method="POST">
                        @csrf
                        <h5 class="text-center">{{__('website.ForgetPassword')}}</h5>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
