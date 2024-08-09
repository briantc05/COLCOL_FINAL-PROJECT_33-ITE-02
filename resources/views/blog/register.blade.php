
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DevBlog - Bootstrap 5 Blog Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
	<script defer src="{{ url('assets/fontawesome/js/all.min.js') }}"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ url('assets/css/theme-1.css') }}">

</head>

<body>

    <header class="header text-center">
	    <h1 class="blog-name pt-lg-1 mb-0"><a class="no-text-decoration" href="index.html">BLOG ME!</a></h1>

	    <nav class="navbar navbar-expand-lg navbar-dark" >

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="{{ url('assets/images/Laravel.png') }}" alt="image" >

					<div class="bio mb-3">Hello my name is Brian Colcol. I am the one who simply codes this very basic project<br><a href="https://github.com/briantc05/">MY GITHUB</a></div><!--//bio-->

			        </ul><!--//social-list-->
			        <hr>
				</div><!--//profile-section-->

				<ul class="navbar-nav flex-column text-start">
					<li class="nav-item">
					    <a class="nav-link active" href="/"><i class="fas fa-home fa-fw me-2"></i>All Blogs<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="login"><i class="fas fa-bookmark fa-fw me-2"></i>Login</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="/"><i class="fas fa-user fa-fw me-2"></i>back</a>
					</li>
				</ul>

			</div>
		</nav>
    </header>

    <div class="main-wrapper">

	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center single-col-max-width">
			    <h2 class="heading">Register</h2>
			    <div class="intro">Please enter the requirements for the registration</div>

		    </div><!--//container-->
	    </section>

        <div class="single-form-max-width pt-3 mx-auto">
            <form class="signup-form row g-2 g-lg-2 align-items-center">
                <div class="col-12 col-md-9">
                    <label class="sr-only" for="semail">Name</label>
                    <input type="text" id="registername" name="registeremail" class="form-control me-md-1 semail" placeholder="Enter Full Name">
                </div>

        <div class="single-form-max-width pt-3 mx-auto">
            <form action="/register" method="POST" class="signup-form row g-2 g-lg-2 align-items-center">
                <div class="col-12 col-md-9">
                    <label class="sr-only" for="semail">Email</label>
                    <input type="email" id="registerpassword" name="registeremail" class="form-control me-md-1 semail" placeholder="Enter Email">
                </div>

                <div class="single-form-max-width pt-3 mx-auto">
                    <form class="signup-form row g-2 g-lg-2 align-items-center">
                        <div class="col-12 col-md-9">
                            <label class="sr-only" for="semail">Password</label>
                            <input type="password" id="registerpassword" name="registerpassword" class="form-control me-md-1 semail" placeholder="Enter Password">
                        </div>
                        <div class="col-50 col-md-10
                    ">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

            </form><!--//signup-form-->
        </div><!--//single-form-max-width-->


		    </div>
	    </section>

	    <footer class="footer text-center py-2 theme-bg-dark">

	        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="https://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

	    </footer>

    </div><!--//main-wrapper-->


    <!-- Javascript -->
    <script src="{{ url('assets/plugins/popper.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.min.js') }} "></script>



</body>
</html>

