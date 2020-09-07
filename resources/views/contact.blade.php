@extends('layouts.frontmaster')

@section('content')
	<section id="fancy-form">
		<div class="containers">
			<div class="form-section">
				<div class="form-left">
					<h1>Get In Touch</h1>
					<div class="line"></div>
					<p>Contact Us to know about the Offers and Packages.</p>
					<h4>ADDRESS</h4>
					<span>123, Main Street, Biratnagar Nepal</span>
					<hr><br><br>

					<h4>PHONE</h4>
					<span>123456789</span>
					<hr><br><br>

					<h4>EMAIL</h4>
					<span>user@example.com</span>
					<hr><br><br>

					<h4>FAX</h4>
					<span>+123112312</span>
					<hr><br>

					<a href="#" class="fac fab fa-facebook"></a>
					<a href="#" class="fac fab fa-twitter"></a>
					<a href="#" class="fac fab fa-linkedin"></a>
					<a href="#" class="fac fab fa-instagram"></a>
					<a href="#" class="fac fab fa-youtube"></a>

				</div>

				<div class="form-right">
					<h1>Contact Us</h1>
					<div class="line"></div>

					<form action="">
						<h5>NAME</h5>
						<input type="text" name=""><br><br>
						<h5>EMAIL</h5>
						<input type="email" name=""><br><br>
						<h5>MOBILE NUMBER</h5>
						<input type="text" name=""><br><br>
						<h5>MESSAGE</h5>
						<textarea name="" cols="50" rows="7"></textarea><br>
						<button>SEND</button>
					</form>

				</div>
				
			</div>
		</div>
	</section>


@endsection