<div class="header">
	<div class="banner">
		<div class="welcome">Welcome</div>
		<div class="gambar"><a href="{{ URL::to('/') }}"><img src="http://localhost/project/local/img/banner-header.jpg" width:"100px" height="129px"></a></div>
		<div class="username">Spartan</div>
	</div>
	<hr>
	<div class="menu">
		<div class="kiri">
			<div class="dropdown">
			<li onclick="myFunction()" class="dropbtn">Menu</li>
			<div id="myDropdown" class="dropdown-content">
				<a onclick="location.href='{{ URL::to('admin/laravel') }}';">Laravel</a>
				<a href="#">Windows</a>
				<a href="#">Ubuntu</a>
				<a href="#">PHP</a>
				<a href="#">Ruby</a>
				<a href="#">Rails</a>
				<a href="#">Sintax</a>
				<a href="#">How to</a>
				<a href="#">What is</a>
			</div>
			</div>
		</div>
		<div class="kanan">
			<li><a onclick="location.href='{{ URL::to('admin/logout') }}';">Logout</a></li>
		</div>
	</div>
</div>