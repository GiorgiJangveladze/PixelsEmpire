@extends('layouts.index')
@section('title','PixelsEmpire')
@section('content')
<header class="header ">
<div class="container row justify-content-between margin-center">
			<div class="logo align-items-center row">
				<div class="img" style="background: url(./images/logo2.png);"></div>
			</div>
			<div class="navbar col">
				<ul class="nav">
					<li class="item">
						<a href="#home">home</a>
					</li>

					<li class="item">
						<a href="#stalingrad">STALINGRAD</a>
					</li>
					@guest
                            <li class="item"><a href="{{ route('login') }}">Login</a></li>
                    @else
                    <li class="item">
						<a href="#">{{ Auth::user()->name }}</a>
					</li>
					<li class="item">
						<a href="{{ route('logout') }}">LOGOUT</a>
					</li>
                       
                    @endguest
			</ul> 
	</div>
</div>
</header>
		<div class="banner" id="home">
		<div class="container">
			<div class="banner-content">
				<h1>PIXELS EMPIRE</h1>
				<h2>Modern combat Game Template	For Action Games </h2>
				 @guest
					<div class="btn btn-success start-game">
						<!-- login html es ar dagaviwydet -->
						<p id='red' >START GAME</p>
					</div>
				@else
				<a href="{{route('game')}}">
					<div class="btn btn-success start-game">
						<!-- login html es ar dagaviwydet -->
						<p id='red' >START GAME</p>
					</div>
				</a>
				@endguest
			</div>
		</div>
	</div>
	<div class="requirement" id="stalingrad">
		<div class="container">
			<div class="all-require">
				<div class="heading">
					<h3> STALINGRAD </h3>
				</div>
				<div class="specification">
					<div class="col-md-12 require-size">
						<div class="grid">
							<div class="video-body">
								<div  id="play" style="background: url(images/play.svg);"></div>
								<video  class="main-video">
									<source src="https://r5---sn-4g5e6nsz.googlevideo.com/videoplayback?gir=yes&signature=5E2F873486159B40D86AC17B894F21B8145FA8EF.0F1AADDB6371DCF5066914AB83405DDBF5EA8E39&key=cms1&ip=138.36.159.21&dur=0.000&fvip=2&source=youtube&lmt=1521433867162138&ei=Gs2-WszXEsScxQTX94-wBg&id=o-AHaMfJ0xfET5cVSd0I5VRFWVcSV6IAZIztZWQz74DXl1&itag=43&c=WEB&pl=23&sparams=clen,dur,ei,expire,gir,id,initcwndbps,ip,ipbits,itag,lmt,mime,mip,mm,mn,ms,mv,pl,ratebypass,requiressl,source&ratebypass=yes&ipbits=0&clen=30300785&requiressl=yes&mime=video%2Fwebm&expire=1522475386&video_id=m0MnueKIufQ&title=Call+of+Duty+-+World+at+War+-+All+German+Level+Intro%27s+%5BHD%5D&rm=sn-h5gcg-nn5e7e&req_id=6f3ad646121ea3ee&redirect_counter=2&cm2rm=sn-bg0e67e&cms_redirect=yes&mip=80.241.251.138&mm=34&mn=sn-4g5e6nsz&ms=ltu&mt=1522453170&mv=u">
									</video>
								</div>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
		

<script src="{{asset('js/player.js')}}"></script>
<script type="text/javascript">
	document.getElementById('red').addEventListener('click', function(){
		location.href = "{{route('login')}}"
	});
</script>
@stop