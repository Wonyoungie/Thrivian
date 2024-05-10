@extends('layouts.template_main')
@section('title', 'My Profile')
@section('content')
<main class="container-fluid border" style="margin-top: 69px;">
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4 border-start border-end" style="overflow-y: auto;">
			<div class="profile-container">
				<div class="profile-header bg-light">
					<div class="d-flex justify-content-center align-items-center pt-5" style="height: 450px; position: relative;">
						<div class="position-absolute top-0 start-0 w-100" style="background-color: #4D88FF; height: 140px;"></div>
						<div style="position: relative; text-align: center; z-index: 1;">
							<div class="rounded-circle overflow-hidden border border-dark shadow" style="width: 140px; height: 140px; margin-top: -10px; position: absolute; left: 50%; transform: translateX(-50%);">
								<img src="{{ $avatar }}" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
							</div>
							<div style="text-align: center; margin-top: 140px;">
								<!-- Adjusted margin-top to push the content below the centered profile picture -->
								<h2 class="mt-3 mb-2">{{ $name }}</h2>
								<span class="mt-3 mb-2">{{ '@' . $username }}</span>
								<p class="fs-6 mt-2 mb-2">
									<span style="color: orange; margin-right: 8px;">Business </span> • <span style="color: #9747FF; margin-left: 8px;"> Finance</span>
								</p>
								<p class="fs-6 mt-2 mb-2">{{ $bio }}</p>
								<div class="user-stats">
									<div class="d-flex justify-content-center fs-5" style="margin-top: 40px;">
										<div style="padding: 0 20px; border-right: 3px solid black;">
											<div class="mb-4">270</div>
											<div>Followers</div>
										</div>
										<div style="padding: 0 20px; border-right: 3px solid black;">
											<div class="mb-4">40</div>
											<div>Following</div>
										</div>
										<div style="padding: 0 20px;">
											<div class="mb-4">3</div>
											<div>Communities</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr class="mt-1" style="border-top: 4px solid #E5E5E5;">
				</div>
				<div class="mt-3">
					<h6 style="color: #13005A;">My Communities</h6>
					<div class="d-flex align-items-center mt-2">
						<div class="rounded-circle overflow-hidden" style="width: 30px; height: 30px; background-color: #f0f0f0;">
							<img src="/assets2/img/business.jpg" alt="Community Image" style="width: 100%; height: 100%; object-fit: cover;">
						</div>
						<a href="link_ke_halaman_komunitas_1" class="ms-2 text-decoration-none" style="color: black;">Business</a>
					</div>
					<div class="d-flex align-items-center mt-2">
						<div class="rounded-circle overflow-hidden" style="width: 30px; height: 30px; background-color: #f0f0f0;">
							<img src="/assets2/img/finance.jpg" alt="Community Image" style="width: 100%; height: 100%; object-fit: cover;">
						</div>
						<a href="link_ke_halaman_komunitas_2" class="ms-2 text-decoration-none" style="color: black;">Personal Development</a>
					</div>
					<div class="d-flex align-items-center mt-2">
						<div class="rounded-circle overflow-hidden" style="width: 30px; height: 30px; background-color: #f0f0f0;">
							<img src="/assets2/img/self-development.jpg" alt="Community Image" style="width: 100%; height: 100%; object-fit: cover;">
						</div>
						<a href="link_ke_halaman_komunitas_2" class="ms-2 text-decoration-none" style="color: black;">Finance</a>
					</div>
					<div class="d-flex justify-content-center align-items-center mt-2 mb-5">
						<a href="#" class="text-decoration-none" style="color: #13005A;">
						<i class="angle down icon"></i>
						See All
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7 border-start border-end">
			<div class="posts" style="position: sticky; top: 0; z-index: 1;">
				<div class="posts">
					<ul class="nav justify-content-center navbar-bawah">
						<!-- Tambahkan kelas 'navbar-bawah' untuk membedakan -->
						<li class="nav-item">
							<a class="nav-link text-secondary active" href="#" style="margin-right: 9px; margin-left: 9px;" onclick="showPosts('Posts')">Posts</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-secondary" href="#" style="margin-right: 9px; margin-left: 9px;" onclick="showPosts('Likes')">Likes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-secondary" href="#" style="margin-right: 9px; margin-left: 9px;" onclick="showPosts('Saves')">Saves</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-secondary" href="#" style="margin-right: 9px; margin-left: 9px;" onclick="showPosts('Events')">Events</a>
						</li>
					</ul>
					<hr class="mt-1" style="border-top: 3px solid #E5E5E5;">
				</div>
				<div class="all-posts" style="max-height: 500px; overflow-y: auto;">
					<div class="post mt-4 me-5" data-category="Posts">
						<div class="d-flex align-items-center mb-2">
							<div class="rounded-circle overflow-hidden me-2" style="width: 50px; height: 50px; background-color: #f0f0f0;">
								<img src="/assets2/img/3582.jpg" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
							</div>
							<div>
								<h6 class="mb-0">Christoper Kim <span class="text-muted"> @stoperkim • 2 hours ago</span></h6>
								<p class="fs-6" style="color: orange; margin-bottom: 0;"> > Business</p>
							</div>
						</div>
						<div class="row mb-0 ms-5 mb-2">
							<div class="col">
								<h5 class="mb-0">Is UPS in business calculation?</h5>
							</div>
						</div>
						<div class="row mb-0 ms-5">
							<div class="col">
								<p class="mb-0" style="text-align: justify;">
									Yes, UPS (United Parcel Service) is often a key factor in business calculations, especially for companies involved in shipping goods. 
									Businesses frequently consider UPS services for their shipping needs, assessing factors such as shipping costs, delivery times, reliability, 
									and coverage area. Calculations may involve comparing UPS rates with those of other carriers, estimating shipping expenses for budgeting 
									purposes, analyzing shipping data to optimize logistics, and forecasting delivery times for customer satisfaction. 
									UPS’s services and rates can significantly impact a business’s bottom line and operational efficiency, making it an important 
									consideration in various business calculations.
								</p>
							</div>
						</div>
						<div class="row justify-content-end mt-3 me-2">
							<div class="col-auto ">
								<a class="link-posts me-5" href="javascript:void(0)" onclick="toggleIcon(event, 'likeIconOutline_4', 'likeIconSolid_4', 'likeCount_4')">
								<i id="likeIconOutline_4" class="thumbs up outline black icon" style="font-size: 20px;"></i>
								<i id="likeIconSolid_4" class="thumbs up black icon" style="font-size: 20px; display: none;"></i>
								<span id="likeCount_4" style="margin-left: 5px; color: black;">5</span>
								</a>                            
								<a class="link-posts me-5" href="#"><i class="comment alternate outline black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-5" href="#"><i class="bookmark outline black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-1" href="#"><i class="share black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
							</div>
						</div>
						<hr class="mt-3" style="border-top: 3px solid #E5E5E5;">
					</div>
					<div class="post mt-4 me-5" data-category="Posts">
						<div class="d-flex align-items-center mb-2">
							<div class="rounded-circle overflow-hidden me-2" style="width: 50px; height: 50px; background-color: #f0f0f0;">
								<img src="/assets2/img/3582.jpg" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
							</div>
							<div>
								<h6 class="mb-0">Christoper Kim <span class="text-muted"> @stoperkim • 2 hours ago</span></h6>
								<p class="fs-6" style="color: orange; margin-bottom: 0;"> > Business</p>
							</div>
						</div>
						<div class="row mb-0 ms-5 mb-2">
							<div class="col">
								<h5 class="mb-0">Is a coffee alarm clock machine a good business idea? When the alarm clock rings, coffee is prepared automatically. What do you think?</h5>
							</div>
						</div>
						<div class="row mb-0 ms-5">
							<div class="col">
								<p class="mb-0" style="text-align: justify;">
									It’s not a terrible idea, it’s just one step up from a programable coffee maker but the question is, 
									how do you turn the alarm off? If you have to get up and walk to another room, like the kitchen, this may not 
									be a very popular device. If it’s small enough to fit on a night stand by the bed you run the risk of knocking 
									the whole thing over as you attempt to shut it off. 
									Why not give up on coffee? If you drink Teeccino instead you’ll be able to wake up naturally without an alarm.
								</p>
							</div>
						</div>
						<div class="row justify-content-end mt-3 me-2">
							<div class="col-auto ">
								<a class="link-posts me-5" href="javascript:void(0)" onclick="toggleIcon(event, 'likeIconOutline_4', 'likeIconSolid_4', 'likeCount_4')">
								<i id="likeIconOutline_4" class="thumbs up outline black icon" style="font-size: 20px;"></i>
								<i id="likeIconSolid_4" class="thumbs up black icon" style="font-size: 20px; display: none;"></i>
								<span id="likeCount_4" style="margin-left: 5px; color: black;">5</span>
								</a>                            
								<a class="link-posts me-5" href="#"><i class="comment alternate outline black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-5" href="#"><i class="bookmark outline black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-1" href="#"><i class="share black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
							</div>
						</div>
						<hr class="mt-3" style="border-top: 3px solid #E5E5E5;">
					</div>
					<div class="post mt-4 me-5" data-category="Posts">
						<div class="d-flex align-items-center mb-2">
							<div class="rounded-circle overflow-hidden me-2" style="width: 50px; height: 50px; background-color: #f0f0f0;">
								<img src="/assets2/img/3582.jpg" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
							</div>
							<div>
								<h6 class="mb-0">Christoper Kim <span class="text-muted"> @stoperkim • 2 hours ago</span></h6>
								<p class="fs-6" style="color: #9747FF; margin-bottom: 0;"> > Finance</p>
							</div>
						</div>
						<div class="row mb-0 ms-5 mb-2">
							<div class="col">
								<h5 class="mb-0">What are the 5 habits to develop financial stability?</h5>
							</div>
						</div>
						<div class="row mb-0 ms-5">
							<div class="col">
								<img src="/assets2/img/freepik-export-20240423071858bC0K.png" class="img-fluid" style="border-radius: 15px; width: 300%; height: 300px;" alt="Image">
								<p class="mb-0" style="text-align: justify;">
									My top 5. And I’m glad we learned early on. Plan for it. Many people rarely take time to plan out their finances. 
									They spend hours planning vacations but rarely five minutes planning their financial future. 
									And it shows. Instead, take time to plan out what you actually need, what you can affor<a href="" class="full-posts" style="text-decoration: none;">....</a>
								</p>
							</div>
						</div>
						<div class="row justify-content-end mt-3 me-2">
							<div class="col-auto ">
								<a class="link-posts me-5" href="javascript:void(0)" onclick="toggleIcon(event, 'likeIconOutline_4', 'likeIconSolid_4', 'likeCount_4')">
								<i id="likeIconOutline_4" class="thumbs up outline black icon" style="font-size: 20px;"></i>
								<i id="likeIconSolid_4" class="thumbs up black icon" style="font-size: 20px; display: none;"></i>
								<span id="likeCount_4" style="margin-left: 5px; color: black;">5</span>
								</a>                            
								<a class="link-posts me-5" href="#"><i class="comment alternate outline black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-5" href="#"><i class="bookmark outline black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-1" href="#"><i class="share black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
							</div>
						</div>
						<hr class="mt-3" style="border-top: 3px solid #E5E5E5;">
					</div>
					<div class="post mt-4 me-5" style="display: none;" data-category="Likes">
						<div class="d-flex align-items-center mb-2">
							<div class="rounded-circle overflow-hidden me-2" style="width: 50px; height: 50px; background-color: #f0f0f0;">
								<img src="/assets2/img/culture_replay_ninja_1054462188.jpg" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
							</div>
							<div>
								<h6 class="mb-0">Chanatip Singkrasong <span class="text-muted"> @chanasing • 2 hours ago</span></h6>
								<p class="fs-6" style="color: #9747FF; margin-bottom: 0;"> > Finance</p>
							</div>
						</div>
						<div class="row mb-0 ms-5 mb-2">
							<div class="col">
								<h5 class="mb-0">I have been investing to the stocks market for 12 years and here is how much i got from it</h5>
							</div>
						</div>
						<div class="row mb-0 ms-5">
							<div class="col">
								<img src="/assets2/img/business-people-casual-meeting.jpg" class="img-fluid" style="border-radius: 15px; width: 300%; height: 300px;" alt="Image">
								<p class="mb-0 mt-1">
									Well first off as someone else already mentioned you haven’t made a nickle or lost a nickle until you sell a stock. 
									What goes up today can go down tomorrow and the whole market can crash but here are my figures for this year on about 
									a 200 grand investment from the closing of the last day o<a href="" class="full-posts" style="text-decoration: none;">....</a>
								</p>
							</div>
						</div>
						<div class="row justify-content-end mt-3 me-2">
							<div class="col-auto ">
								<a class="link-posts me-5" href="#">
								<i class="thumbs up icon" style="font-size: 20px; color: #13005A;"></i>
								<span style="margin-left: 5px; color: black;">5</span>
								</a>                              
								<a class="link-posts me-5" href="#"><i class="comment alternate outline black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-5" href="#"><i class="bookmark icon" style="font-size: 20px; color: orange;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-1" href="#"><i class="share black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
							</div>
						</div>
						<hr class="mt-3" style="border-top: 3px solid #E5E5E5;">
					</div>
					<div class="post mt-4 me-5" style="display: none;" data-category="Likes">
						<div class="d-flex align-items-center mb-2">
							<div class="rounded-circle overflow-hidden me-2" style="width: 50px; height: 50px; background-color: #f0f0f0;">
								<img src="/assets2/img/cheerful-confident-man-standing-arms-folded-plaid-shirt.jpg" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
							</div>
							<div>
								<h6 class="mb-0">Ray John <span class="text-muted"> @johhnyray • 3 minutes ago</span></h6>
								<p class="fs-6" style="color: orange; margin-bottom: 0;"> > Business</p>
							</div>
						</div>
						<div class="row mb-0 ms-5 mb-2">
							<div class="col">
								<h5 class="mb-0">What are the most important things to know about business?</h5>
							</div>
						</div>
						<div class="row mb-0 ms-5">
							<div class="col">
								<p class="mb-0">
									You've heard it many times before but it’s so true. Without capital, you won’t survive. Be super cheap in the beginning 
									as you’ll make a lot of mistakes and then spend a lot once you know you’re right. This goes for everything from hiring 
									people to marketing budgets. | used to think corporate culture stuff was fluffy babble until | started a business and 
									saw how important it is to have a distinct culture. It’s what binds people together. If a person is not a good cultural fit, 
									it’s better they leave than try to “make it work.”It is so super easy to be doing a lot of things and thinking you are 
									making progress because it feels good to be busy. Meanwhile, you are addressin<a href="" class="full-posts" style="text-decoration: none;">....</a>
								</p>
							</div>
						</div>
						<div class="row justify-content-end mt-3 me-2">
							<div class="col-auto ">
								<a class="link-posts me-5" href="#">
								<i class="thumbs up icon" style="font-size: 20px; color: #13005A;"></i>
								<span style="margin-left: 5px; color: black;">5</span>
								</a>                          
								<a class="link-posts me-5" href="#"><i class="comment alternate outline black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-5" href="#"><i class="bookmark outline black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-1" href="#"><i class="share black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
							</div>
						</div>
						<hr class="mt-3" style="border-top: 3px solid #E5E5E5;">
					</div>
					<div class="post mt-4 me-5" data-category="Saves">
						<div class="d-flex align-items-center mb-2">
							<div class="rounded-circle overflow-hidden me-2" style="width: 50px; height: 50px; background-color: #f0f0f0;">
								<img src="/assets2/img/3582.jpg" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
							</div>
							<div>
								<h6 class="mb-0">Christoper Kim <span class="text-muted"> @stoperkim • 2 hours ago</span></h6>
								<p class="fs-6" style="color: #9747FF; margin-bottom: 0;"> > Finance</p>
							</div>
						</div>
						<div class="row mb-0 ms-5 mb-2">
							<div class="col">
								<h5 class="mb-0">What are the 5 habits to develop financial stability?</h5>
							</div>
						</div>
						<div class="row mb-0 ms-5">
							<div class="col">
								<p class="mb-0" style="text-align: justify;">
									My top 5. And I’m glad we learned early on. Plan for it. Many people rarely take time to plan out their finances. 
									They spend hours planning vacations but rarely five minutes planning their financial future. 
									And it shows. Instead, take time to plan out what you actually need, what you can affor<a href="" class="full-posts" style="text-decoration: none;">....</a>
								</p>
							</div>
						</div>
						<div class="row justify-content-end mt-3 me-2">
							<div class="col-auto ">
								<a class="link-posts me-5" href="#">
								<i class="thumbs up outline black icon" style="font-size: 20px;"></i>
								<span style="margin-left: 5px; color: black;">5</span>
								</a>                              
								<a class="link-posts me-5" href="#"><i class="comment alternate outline black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-5" href="#"><i class="bookmark icon" style="font-size: 20px; color: orange;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-1" href="#"><i class="share black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
							</div>
						</div>
						<hr class="mt-3" style="border-top: 3px solid #E5E5E5;">
					</div>
					<div class="post mt-4 me-5" data-category="Saves">
						<div class="d-flex align-items-center mb-2">
							<div class="rounded-circle overflow-hidden me-2" style="width: 50px; height: 50px; background-color: #f0f0f0;">
								<img src="/assets2/img/3582.jpg" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
							</div>
							<div>
								<h6 class="mb-0">Christoper Kim <span class="text-muted"> @stoperkim • 2 hours ago</span></h6>
								<p class="fs-6" style="color: #9747FF; margin-bottom: 0;"> > Finance</p>
							</div>
						</div>
						<div class="row mb-0 ms-5 mb-2">
							<div class="col">
								<h5 class="mb-0">What are the 5 habits to develop financial stability?</h5>
							</div>
						</div>
						<div class="row mb-0 ms-5">
							<div class="col">
								<p class="mb-0" style="text-align: justify;">
									My top 5. And I’m glad we learned early on. Plan for it. Many people rarely take time to plan out their finances. 
									They spend hours planning vacations but rarely five minutes planning their financial future. 
									And it shows. Instead, take time to plan out what you actually need, what you can affor<a href="" class="full-posts" style="text-decoration: none;">....</a>
								</p>
							</div>
						</div>
						<div class="row justify-content-end mt-3 me-2">
							<div class="col-auto ">
								<a class="link-posts me-5" href="#">
								<i class="thumbs up outline black icon" style="font-size: 20px;"></i>
								<span style="margin-left: 5px; color: black;">5</span>
								</a>                              
								<a class="link-posts me-5" href="#"><i class="comment alternate outline black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-5" href="#"><i class="bookmark icon" style="font-size: 20px; color: orange;"></i><span style="margin-left: 5px; color: black;">5</span></a>
								<a class="link-posts me-1" href="#"><i class="share black icon" style="font-size: 20px;"></i><span style="margin-left: 5px; color: black;">5</span></a>
							</div>
						</div>
						<hr class="mt-3" style="border-top: 3px solid #E5E5E5;">
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection

<script>
	function removeActiveClass() {
		var navLinks = document.querySelectorAll('.nav-link');
		navLinks.forEach(function(link) {
			link.classList.remove('active');
		});
	}
	
	// Fungsi untuk menambahkan kelas active ke teks yang diklik
	function setActiveLink(link) {
		removeActiveClass(); // Hapus kelas active dari semua elemen nav-link
		link.classList.add('active'); // Tambahkan kelas active ke teks yang diklik
	}
	
	// Ambil semua elemen anchor dengan kelas nav-link
	var navLinks = document.querySelectorAll('.nav-link');
	
	// Tambahkan event listener ke setiap elemen anchor
	navLinks.forEach(function(link) {
		link.addEventListener('click', function() {
			setActiveLink(link); // Ketika teks navigasi diklik, atur teks yang diklik sebagai aktif
		});
	});
	
	function showPosts(category) {
		var posts = document.getElementsByClassName('post');
		for (var i = 0; i < posts.length; i++) {
			var post = posts[i];
			var postCategory = post.getAttribute('data-category');
			if (category === 'All' || postCategory === category) {
				post.style.display = 'block';
			} else {
				post.style.display = 'none';
			}
		}
	}
</script>