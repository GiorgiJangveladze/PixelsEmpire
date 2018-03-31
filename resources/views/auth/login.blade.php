@extends('layouts.index')
@section('content')
<div class="d-flex align-items-center justify-content-center ht-100v">
        <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
            <source src="https://r4---sn-ab5sznle.googlevideo.com/videoplayback?fvip=4&requiressl=yes&mime=video%2Fwebm&gir=yes&ratebypass=yes&lmt=1375115614483924&expire=1522479378&mm=31%2C26&ipbits=0&mn=sn-ab5sznle%2Csn-p5qs7n7e&pl=18&mt=1522457624&dur=0.000&mv=m&initcwndbps=1487500&ms=au%2Conr&itag=43&sparams=clen%2Cdur%2Cei%2Cgir%2Cid%2Cinitcwndbps%2Cip%2Cipbits%2Citag%2Clmt%2Cmime%2Cmm%2Cmn%2Cms%2Cmv%2Cpl%2Cratebypass%2Crequiressl%2Csource%2Cexpire&id=o-ADaYDuyPDM0y7LGHSaZHl5JQRf_r_ovfNhTRkzWPBaSE&ei=sty-Wp-8C8SphwbC25HoCA&c=WEB&key=yt6&signature=CF2AFC18848049EE80AE9970A9A2343A4D4D8DB7.BA56B6DEAA438F4F544DC1E7EF0B548B23942955&source=youtube&ip=75.150.88.59&clen=22704866&video_id=DOSvLWK5Z2A&title=Band+of+Brothers+Crossroads+The+Island+Charge" type="video/mp4">
            </video><!-- /video -->
            <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
                
                <!-- form -->
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="login-wrapper wd-400 wd-xs-400 pd-25 pd-xs-40 rounded bg-black-6" style="background: url(./images/brick.jpg);">
                        <div class="signin-logo tx-center tx-28 tx-bold tx-white">
                            <div class="logo align-items-center row">
                                <div class="game_logo" style="background: url(./images/main_logo.png);"></div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control fc-dark" name="email" value="{{ old('email') }}" placeholder="Email">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" name="password" class="form-control fc-dark" placeholder="Password">
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark btn-block log-in">Sign In</button>

                        <div class="mg-t-30 tx-center">
                            <a href="#empires" class="tx-20 btn-teal btn">Sign Up</a>
                        </div>
                    </div>
                </form>
            <!-- form -->


            </div>
        </div>
        <div class="about" id="empires" style="background: url('images/back.jpg');">    
            <!-- qveynebis konteineri -->
            <div class="container">
                <!-- header -->
                <h3>Choose Your <span>EMPIRE</span> </h3>   
                <!-- choose your country -->
                <div class="about-image row">
                    <!-- nazi -->
                    <div class="col-md-5 about-size">
                        <a href="{{route('register',1)}}">
                            <div class="shadow hover register"  style="background: url(./images/nazi.jpg);" data-id='1'></div>
                        </a>
                        <h5>nazi</h5>
                    </div>
                    <!-- nazi -->
                    <div class="col-md-2 about-size">
                        <div class="shadow row align-items-center " >
                            <img src="./images/vs.png" alt="image">
                        </div>      
                    </div>
                    <!-- soviet union -->
                    <div class="col-md-5 about-size">
                        <a href="{{route('register',2)}}">
                            <div class="shadow hover register"  style="background: url(./images/ussr.jpg);" data-id='2'>
                            </div>
                        </a>    
                        <h5>soviet union</h5>       
                    </div>
                </div>
            </div> 
        </div> 
@endsection
