@extends('master')

@section('content')
<section class="_form_05">
    <div class="container custom-login">
        <div class="row">
            <div class="col-12">
                <div class="_form-05-box">
                    <div class="row">
                        <div class="col-sm-7 _nb-pl">
                            <div class="_mn_df">
                                <div class="main-head">
                                    <h2>Login to your account</h2>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
                                    </div>
                                    <div class="checkbox form-group d-flex justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="#">Forgot Password</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection