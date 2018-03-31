@extends('layouts.index')

@section('content')


<div class="about chose-about" id="empires" style="background: url('/images/back.jpg');">    
        <!-- qveynebis konteineri -->
        <div class="container">
            <!-- header -->
            <h3> Your <span>EMPIRE</span> </h3> 
            <!-- choose your country -->
            <div class="about-image row">
                <!-- nazi -->
                <div class="col-md-4 margin-center about-size">
                    <div class="shadow choosed" @if($id == 1) style="background: url('/images/nazi.jpg')" @elseif($id == 2) style="background: url('/images/ussr.jpg')" @endif ></div>
                    <h5>nazi</h5>
                </div>

            </div>
        </div> 
    </div> 
    <div class="d-flex align-items-center justify-content-center ">
        <div class=" align-items-center justify-content-center col-12">

            <!-- form -->
            <form method="POST" action="{{ route('register',$id)}}">
                {{ csrf_field() }}
                <div class="login-wrapper  pd-25 pd-xs-40 col-12 rounded ht-100v wall-my" style="background: url('/images/brick.jpg')">
                    <div class="signin-logo tx-center tx-28 tx-bold tx-white col-6 margin-center">
                        <div class="logo align-items-center row">
                            <div class="game_logo reg-logo" style="background: url('/images/main_logo.png');"></div>
                        </div>
                    </div>

                    <div class="form-group col-7 margin-center he-i {{ $errors->has('name') ? ' has-error' : '' }} ">
                        <input type="text" class="form-control fc-dark" name="name" value="{{ old('name') }}" placeholder="Name">
                        @if ($errors->has('name'))
                                    <span class="help-block" style="color: red">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group col-7 margin-center he-i {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="form-control fc-dark" name="email" value="{{ old('email') }}" placeholder="Email">
                        @if ($errors->has('email'))
                                    <span class="help-block"  style="color: red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group col-7 margin-center he-i {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control fc-dark" name="password" placeholder="Password">
                         @if ($errors->has('password'))
                                    <span class="help-block"  style="color: red">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group col-7 margin-center he-i">
                        <input type="password" name="password_confirmation" class="form-control fc-dark  " placeholder="Repeat Password">
                    </div>
                    <button type="submit" class="btn btn-dark btn-block log-in  margin-center col-3">Sign up</button>


                </div>
            </form>
            <!-- form -->

        </div>
    </div>
@endsection
