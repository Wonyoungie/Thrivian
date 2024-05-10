<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('title')</title>
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<style>
			/* Gaya CSS tambahan */
			.nav-item:hover .nav-link {
			text-decoration: underline;
			}
			.profile-info {
			display: none;
			position: absolute;
			top: 40px;
			right: 250px;
			background-color: #fff;
			border: 1px solid #ccc;
			padding: 10px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
			z-index: 1;
			}
			.nav-item .profile:hover .profile-info {
			display: block;
			}
			.profile-info a {
			text-decoration: none;
			color: #333;
			display: block;
			}
			.profile-info a:hover {
			text-decoration: underline;
			}
			.profile-info p {
			margin: 5px 0;
			color: #333;
			}
			.icon.user.outline {
			color: black;
			}
			.hidden {
			display: none;
			}
			.navbar-bawah .nav-item .nav-link.active {
			text-decoration: underline; 
			color: #13005A !important; 
			}
		</style>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-light bg-light fixed-top">
				<div class="container">
					<a class="navbar-brand" href="#">
					<img src="/assets2/img/Thrivian.org.png" alt="" width="180" height="35">
					</a>
					<ul class="nav me-auto">
						<li class="nav-item">
							<a class="nav-link text-secondary" href="{{ route('home') }}">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-secondary" href="#">Community</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-secondary" href="#">Event & Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-secondary" href="#">E-Learning</a>
						</li>
					</ul>
					<div class="navbar-text ms-auto">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="#">
								<i class="fas fa-search"></i> 
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
								<i class="fas fa-users"></i> 
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
								<i class="far fa-envelope"></i> 
								</a>
							</li>
							<li class="nav-item">
								<div id="profileLink" class="nav-link profile">
									<div class="rounded-circle overflow-hidden me-2" style="width: 25px; height: 25px; background-color: #f0f0f0;">
										<img id="userImage" src="{{ $avatar }}" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
									</div>
									<div id="profileInfo" class="profile-info">
										<p class="username">{{ $name }}</p>
										<p class="account">{{ '@' . $username }}</p>
										<a href="{{ route('profile') }}" class="view-profile">View my profile</a>
										<a href="my-events.html" class="my-events">My Events</a>
										<a href="manage-communities.html" class="manage-communities">Manage your communities</a>
										<a href="{{ route('settings') }}" class="settings">Settings</a>
										<a href="{{ route('logout') }}" class="log-out">Log Out</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		@yield('content')
	</body>
</html>