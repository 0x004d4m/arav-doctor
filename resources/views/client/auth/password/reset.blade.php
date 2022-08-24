@extends('layout.main')
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 p-4 mt-xl-0 border">
                    <form method="POST">
                        @csrf
                        <h5 class="text-center">{{__('website.ResetPassword')}}</h5>
                        <div class="form-group">
                            <label for="exampleInputpass1">New Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputpass1" placeholder="Enter new password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm New Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Confirm New Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
