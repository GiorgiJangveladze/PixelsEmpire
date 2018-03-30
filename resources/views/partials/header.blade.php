<div class="header">
		
		<div class="nav">
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						   <a class="navbar-brand" href="#"><img src="./images/logo2.png" alt="logo"></a>
						</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
						<ul class="nav navbar-nav navbar-right">
							<li><a href="{{ route('home')}}">Home</a></li>
							<li><a href="#about" class="scroll">About</a></li>
							<li><a href="#requirements" class="scroll">Requirements</a></li>
							<li><a href="#games" class="scroll">Games</a></li>
							@guest
							<li><a href="{{route('login')}}">Login</a></li>
							<li><a href="{{route('register',['id' => 1])}}">Register</a></li>
							@else
								<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
							@endguest
						</ul>
						
					</div><!-- navbar-collapse -->
				</div><!-- container -->
			</nav>
		</div> <!-- Nav Ends -->
				
		<div class="banner" id="home">
			<div class="container">
				<div class="banner-content">
					<h1>PIXELS EMPIRE</h1>
					<h2>Modern combat Game Template	For Action Games </h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
					   standard dummy text </p>
				</div>
			</div>
		</div> <!-- Banner Ends Here -->
</div> <!-- Header Ends -->