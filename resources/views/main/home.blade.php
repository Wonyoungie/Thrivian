@extends('layouts.template_main')
@section('title', 'Home')
@section('content')
    <main class="container-fluid border" style="margin-top: 78px;">
        <div class="row justify-content-center">
            <div class="col-md-3 border-start border-end ml-3 d-none d-md-block" style="overflow-y: auto;">
                <button type="button" class="btn btn-outline-light" style="width: 280px; margin-top: 9px; border-radius: 30px; border-color: #13005A; color: #13005A;">
                <i class="add circle icon" style="font-size: 15px; color: #13005A;"></i>
                Create New Post
                </button>
                <div class="mt-3">
                    <h6 style="color: #13005A;">My Communities</h6>
                    <div class="d-flex align-items-center mt-2">
                        <div class="rounded-circle overflow-hidden" style="width: 30px; height: 30px; background-color: #f0f0f0;">
                            <img src="/assets2/img/icon/Ellipse 14.png" alt="Community Image" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <a href="link_ke_halaman_komunitas_1" class="ms-2 text-decoration-none" style="color: black;">Business</a>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <div class="rounded-circle overflow-hidden" style="width: 30px; height: 30px; background-color: #f0f0f0;">
                            <img src="/assets2/img/icon/Ellipse 15.png" alt="Community Image" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <a href="link_ke_halaman_komunitas_2" class="ms-2 text-decoration-none" style="color: black;">Personal Development</a>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <div class="rounded-circle overflow-hidden" style="width: 30px; height: 30px; background-color: #f0f0f0;">
                            <img src="/assets2/img/icon/Ellipse 16.png" alt="Community Image" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <a href="link_ke_halaman_komunitas_2" class="ms-2 text-decoration-none" style="color: black;">Finance</a>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mt-2">
                        <a href="#" class="text-decoration-none" style="color: #13005A;">
                        <i class="angle down icon"></i>
                        See All
                        </a>
                    </div>
                </div>
                <hr class="my-3" style="border-top: 3px solid #E5E5E5;">
                <div class="mt-3">
                    <h6 style="color: #13005A;">Upcoming Events</h6>
                    <div class="border-radius mb-2">
                        <img src="/assets2/img/pidato.jpg" class="card-img-top img-fluid" style="border-radius: 15px;" alt="Pidato">
                        <div class="card-body">
                            <h5 class="card-title fs-6">Personal Finance Webinar <span class="badge rounded-pill badge-custom" style="background-color: #13005A;">September 10th</span></h5>
                            <p class="card-text">
                                Come reserve your seat at our free gathering and 
                                sharing online seminar talking about how to manage 
                                your personal finance today!
                            </p>
                        </div>
                    </div>
                    <div class="card-row row align-items-center">
                        <div class="col-md-2">
                            <img src="/assets2/img/waiting-room-with-monitors.jpg" alt="..." class="rounded" style="width: 130px; height: 130px;">
                        </div>
                        <div class="col-md-10 d-flex align-items-start">
                            <!-- Menggunakan d-flex dan align-items-start -->
                            <div class="card-body" style="margin-left: 77px;">
                                <span class="badge rounded-pill badge-custom mb-2" style="background-color: #13005A;">September 10th</span>
                                <h6 class="card-title text-sm">Stocks market reope...</h6>
                                <p class="card-text text-sm">
                                    Come reserve your seat at 
                                    our free gathering and<a href="" class="full-posts" style="text-decoration: none;">....</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-row row align-items-center">
                        <div class="col-md-2">
                            <img src="/assets2/img/waiting-room-with-monitors.jpg" alt="..." class="rounded" style="width: 130px; height: 130px;">
                        </div>
                        <div class="col-md-10 d-flex align-items-start">
                            <!-- Menggunakan d-flex dan align-items-start -->
                            <div class="card-body" style="margin-left: 77px;">
                                <span class="badge rounded-pill badge-custom mb-2" style="background-color: #13005A;">September 10th</span>
                                <h6 class="card-title text-sm">Stocks market reope...</h6>
                                <p class="card-text text-sm">
                                    Come reserve your seat at 
                                    our free gathering and<a href="" class="full-posts" style="text-decoration: none;">....</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center text-align-center mt-4">
                    <span class="text-muted small fs-9" style="text-align: center; text-decoration: none;">
                        <a href="about_us.html" class="text-muted">About Us</a> • 
                        <a href="privacy_terms.html" class="text-muted">Privacy & Terms</a> • 
                        <a href="more.html" class="text-muted">More</a>
                        <p class="text-muted fs-9">Thrivian.org © 2024</p>
                    </span>
                </div>
            </div>
            <div class="col-md-8 border-end border-start">
                <div class="posts">
                    <div class="posts">
                        <p style="margin-top: 5px;"><b>Show posts from</b>
                            <a href="#" id="allBtn" class="badge rounded-pill bg-light text-dark me-1 border border-secondary active" onclick="showPosts('All')">All</a>
                            <a href="#" id="businessBtn" class="badge rounded-pill bg-light text-dark me-1 border border-secondary" onclick="showPosts('Business')">Business</a>
                            <a href="#" id="financeBtn" class="badge rounded-pill bg-light text-dark border border-secondary" onclick="showPosts('Finance')">Finance</a>
                        </p>
                    </div>
                </div>
                <div class="all-posts overflow-auto" style="max-height: 1000px;">
                    <div class="post mt-4 me-5" data-category="Business">
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
                                <p class="mb-0" style="text-align: justify;">
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
                            <div class="col-auto">
                                <a class="link-posts me-3 me-md-5" href="javascript:void(0)" onclick="toggleIcon(event, 'likeIconOutline_6', 'likeIconSolid_6', 'likeCount_6')">
                                <i id="likeIconOutline_6" class="thumbs up outline black icon" style="font-size: 20px;"></i>
                                <i id="likeIconSolid_6" class="thumbs up black icon" style="font-size: 20px; display: none;"></i>
                                <span id="likeCount_6" style="margin-left: 5px; color: black;">5</span>
                                </a>                            
                                <a class="link-posts me-3 me-md-5" href="#">
                                <i class="comment alternate outline black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                                <a class="link-posts me-3 me-md-5" href="#">
                                <i class="bookmark outline black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                                <a class="link-posts me-1" href="#">
                                <i class="share black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                            </div>
                        </div>
                        <hr class="mt-3" style="border-top: 3px solid #E5E5E5;">
                    </div>
                    <div class="post mt-4 me-5" data-category="Finance">
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
                                <img src="/assets2/img/freepik-export-20240423071858bC0K.png" class="img-fluid smaller-image" style="border-radius: 15px;" alt="Image">
                                <p class="mb-0 mt-1" style="text-align: justify;">
                                    Well first off as someone else already mentioned you haven’t made a nickle or lost a nickle until you sell a stock. 
                                    What goes up today can go down tomorrow and the whole market can crash but here are my figures for this year on about 
                                    a 200 grand investment from the closing of the last day o<a href="" class="full-posts" style="text-decoration: none;">....</a>
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-3 me-2">
                            <div class="col-auto">
                                <a class="link-posts me-3 me-md-5" href="javascript:void(0)" onclick="toggleIcon(event, 'likeIconOutline_6', 'likeIconSolid_6', 'likeCount_6')">
                                <i id="likeIconOutline_6" class="thumbs up outline black icon" style="font-size: 20px;"></i>
                                <i id="likeIconSolid_6" class="thumbs up black icon" style="font-size: 20px; display: none;"></i>
                                <span id="likeCount_6" style="margin-left: 5px; color: black;">5</span>
                                </a>                            
                                <a class="link-posts me-3 me-md-5" href="#">
                                <i class="comment alternate outline black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                                <a class="link-posts me-3 me-md-5" href="#">
                                <i class="bookmark outline black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                                <a class="link-posts me-1" href="#">
                                <i class="share black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                            </div>
                        </div>
                        <hr class="mt-3" style="border-top: 3px solid #E5E5E5;">
                    </div>
                    <div class="post mt-4 me-5" data-category="All">
                        <div class="d-flex align-items-center mb-2">
                            <div class="rounded-circle overflow-hidden me-2" style="width: 50px; height: 50px; background-color: #f0f0f0;">
                                <img src="/assets2/img/shroud-4f375e-2.jpg" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div>
                                <h6 class="mb-0">Zeno Hurricane <span class="text-muted"> @zenhrcn • 3 minutes ago</span></h6>
                                <p class="fs-6" style="color: #1877F2; margin-bottom: 0;"> > Personal Development</p>
                            </div>
                        </div>
                        <div class="row mb-0 ms-5 mb-2">
                            <div class="col">
                                <h5 class="mb-0">We need to always consistently improve ourselves</h5>
                            </div>
                        </div>
                        <div class="row ms-5 mt-2">
                            <div class="col-md-6" style="padding-right: 1px;">
                                <img src="/assets2/img/pidato.jpg" alt="Gambar Besar" class="img-fluid" style="width: 550px; height: 200px; object-fit: cover; border-radius: 15px;">
                            </div>
                            <div class="col-md-6">
                                <div style="padding-bottom: 5px;">
                                    <img src="/assets2/img/pidato.jpg" alt="Gambar Kecil 1" class="img-fluid" style="width: 350px; height: 100px; object-fit: cover; border-radius: 15px;">
                                </div>
                                <div>
                                    <img src="/assets2/img/pidato.jpg" alt="Gambar Kecil 2" class="img-fluid" style="width: 350px; height: 100px; object-fit: cover; border-radius: 15px;">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0 ms-5">
                            <div class="col">
                                <p class="mb-0" style="text-align: justify;">
                                    Continuous Improvement: Personal development encourages individuals to strive for continuous 
                                    improvement. It's about refining skills, acquiring new knowledge, and honing one's abilities to 
                                    become a better version of oneself. Adaptability: In a rapidly changing world, the ability to ada<a href="" class="full-posts" style="text-decoration: none;">....</a>
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-3 me-2">
                            <div class="col-auto">
                                <a class="link-posts me-3 me-md-5" href="javascript:void(0)" onclick="toggleIcon(event, 'likeIconOutline_6', 'likeIconSolid_6', 'likeCount_6')">
                                <i id="likeIconOutline_6" class="thumbs up outline black icon" style="font-size: 20px;"></i>
                                <i id="likeIconSolid_6" class="thumbs up black icon" style="font-size: 20px; display: none;"></i>
                                <span id="likeCount_6" style="margin-left: 5px; color: black;">5</span>
                                </a>                            
                                <a class="link-posts me-3 me-md-5" href="#">
                                <i class="comment alternate outline black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                                <a class="link-posts me-3 me-md-5" href="#">
                                <i class="bookmark outline black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                                <a class="link-posts me-1" href="#">
                                <i class="share black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                            </div>
                        </div>
                        <hr class="mt-3" style="border-top: 3px solid #E5E5E5;">
                    </div>
                    <div class="post mt-4 me-5" data-category="Finance">
                        <div class="d-flex align-items-center mb-2">
                            <div class="rounded-circle overflow-hidden me-2" style="width: 50px; height: 50px; background-color: #f0f0f0;">
                                <img src="/assets2/img/smiling-young-asian-businessman-with-crossed-arms.jpg" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div>
                                <h6 class="mb-0">Mikael Angel <span class="text-muted"> @mikangelo • 2 hours ago</span></h6>
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
                            <div class="col-auto">
                                <a class="link-posts me-3 me-md-5" href="javascript:void(0)" onclick="toggleIcon(event, 'likeIconOutline_6', 'likeIconSolid_6', 'likeCount_6')">
                                <i id="likeIconOutline_6" class="thumbs up outline black icon" style="font-size: 20px;"></i>
                                <i id="likeIconSolid_6" class="thumbs up black icon" style="font-size: 20px; display: none;"></i>
                                <span id="likeCount_6" style="margin-left: 5px; color: black;">5</span>
                                </a>                            
                                <a class="link-posts me-3 me-md-5" href="#">
                                <i class="comment alternate outline black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                                <a class="link-posts me-3 me-md-5" href="#">
                                <i class="bookmark outline black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                                <a class="link-posts me-1" href="#">
                                <i class="share black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                            </div>
                        </div>
                        <hr class="mt-3" style="border-top: 3px solid #E5E5E5;">
                    </div>
                    <div class="post mt-4 me-5" data-category="Business">
                        <div class="d-flex align-items-center mb-2">
                            <div class="rounded-circle overflow-hidden me-2" style="width: 50px; height: 50px; background-color: #f0f0f0;">
                                <img src="/assets2/img/s1mple.jpg" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div>
                                <h6 class="mb-0">Ryan Reynolds<span class="text-muted"> @reynoldishere • 2 hours ago</span></h6>
                                <p class="fs-6" style="color: orange; margin-bottom: 0;"> > Business</p>
                            </div>
                        </div>
                        <div class="row mb-0 ms-5 mb-2">
                            <div class="col">
                                <h5 class="mb-0">My Life as a CEO for 31 years</h5>
                            </div>
                        </div>
                        <div class="row mb-0 ms-5">
                            <div class="col">
                                <p class="mb-0" style="text-align: justify;">
                                    I first became CEO of G3 Systems Inc in 1993 at age 28. I was married to my first wife and working 40 
                                    hours a week at my University job and 40-60 hours a week at G3 as “CEO”. Just to clarify, a Chief 
                                    Executive Officer (CEO) is simply a legal definition of the highest ranking corporate officer o<a href="" class="full-posts" style="text-decoration: none;">....</a>
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-3 me-2">
                            <div class="col-auto">
                                <a class="link-posts me-3 me-md-5" href="javascript:void(0)" onclick="toggleIcon(event, 'likeIconOutline_6', 'likeIconSolid_6', 'likeCount_6')">
                                <i id="likeIconOutline_6" class="thumbs up outline black icon" style="font-size: 20px;"></i>
                                <i id="likeIconSolid_6" class="thumbs up black icon" style="font-size: 20px; display: none;"></i>
                                <span id="likeCount_6" style="margin-left: 5px; color: black;">5</span>
                                </a>                            
                                <a class="link-posts me-3 me-md-5" href="#">
                                <i class="comment alternate outline black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                                <a class="link-posts me-3 me-md-5" href="#">
                                <i class="bookmark outline black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                                <a class="link-posts me-1" href="#">
                                <i class="share black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                            </div>
                        </div>
                        <hr class="mt-3" style="border-top: 3px solid #E5E5E5;">
                    </div>
                    <div class="post mt-4 me-5" data-category="Business">
                        <div class="d-flex align-items-center mb-2">
                            <div class="rounded-circle overflow-hidden me-2" style="width: 50px; height: 50px; background-color: #f0f0f0;">
                                <img src="/assets2/img/confident-asian-businessman-suit-posing-office.jpg" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div>
                                <h6 class="mb-0">Bruno Herald<span class="text-muted"> @brunogotyou • 2 hours ago</span></h6>
                                <p class="fs-6" style="color: orange; margin-bottom: 0;"> > Business</p>
                            </div>
                        </div>
                        <div class="row mb-0 ms-5 mb-2">
                            <div class="col">
                                <h5 class="mb-0">Can a person develop a 225lb bench press doing only body-weight exercises?</h5>
                            </div>
                        </div>
                        <div class="row ms-5 mt-2">
                            <div class="col-md-6 col-sm-12" style="padding-right: 1px;">
                                <img src="/assets2/img/business-people-casual-meeting.jpg" alt="Gambar Besar" class="img-fluid" style="width: 550px; height: 200px; object-fit: cover; border-radius: 15px;">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div style="padding-bottom: 5px;">
                                    <img src="/assets2/img/business-people-casual-meeting.jpg" alt="Gambar Kecil 1" class="img-fluid" style="width: 350px; height: 100px; object-fit: cover; border-radius: 15px;">
                                </div>
                                <div>
                                    <img src="/assets2/img/business-people-casual-meeting.jpg" alt="Gambar Kecil 2" class="img-fluid" style="width: 350px; height: 100px; object-fit: cover; border-radius: 15px;">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0 ms-5">
                            <div class="col">
                                <p class="mb-0" style="text-align: justify;">
                                    Well, it’s certainly unusual especially with that much disparity. Typically out of the “big three”, 
                                    people will deadlift the most weight, and bench press the least, with squat being somewhere in the 
                                    middle. The only people who will have bench presses higher than their squat or deadlift ar<a href="" class="full-posts" style="text-decoration: none;">....</a>
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-3 me-2">
                            <div class="col-auto">
                                <a class="link-posts me-3 me-md-5" href="javascript:void(0)" onclick="toggleIcon(event, 'likeIconOutline_6', 'likeIconSolid_6', 'likeCount_6')">
                                <i id="likeIconOutline_6" class="thumbs up outline black icon" style="font-size: 20px;"></i>
                                <i id="likeIconSolid_6" class="thumbs up black icon" style="font-size: 20px; display: none;"></i>
                                <span id="likeCount_6" style="margin-left: 5px; color: black;">5</span>
                                </a>                            
                                <a class="link-posts me-3 me-md-5" href="#">
                                <i class="comment alternate outline black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                                <a class="link-posts me-3 me-md-5" href="#">
                                <i class="bookmark outline black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                                <a class="link-posts me-1" href="#">
                                <i class="share black icon" style="font-size: 20px;"></i>
                                <span style="margin-left: 5px; color: black;">5</span>
                                </a>
                            </div>
                        </div>
                        <hr class="mt-3" style="border-top: 3px solid #E5E5E5;">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

<script>
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
	
	// Reset background colors and text colors for all badges
	document.getElementById('allBtn').classList.remove('active', 'bg-secondary', 'text-light');
	document.getElementById('allBtn').classList.add('bg-light', 'text-dark');
	document.getElementById('businessBtn').classList.remove('active', 'bg-secondary', 'text-light');
	document.getElementById('businessBtn').classList.add('bg-light', 'text-dark');
	document.getElementById('financeBtn').classList.remove('active', 'bg-secondary', 'text-light');
	document.getElementById('financeBtn').classList.add('bg-light', 'text-dark');
	
	// Set background color and text color for clicked button
	var btn = document.getElementById(category.toLowerCase() + 'Btn');
	btn.classList.add('active');
	btn.classList.remove('bg-light', 'text-dark');
	btn.style.backgroundColor = '#13005A'; // Set your desired background color here
	btn.classList.add('text-light');
	
	}
	
	document.addEventListener('DOMContentLoaded', function() {
	const profileLink = document.getElementById('profileLink');
	const userOutlineIcon = document.getElementById('userOutlineIcon');
	const userIcon = document.getElementById('userIcon');
	const profileInfo = document.getElementById('profileInfo');
	
	profileLink.addEventListener('click', function() {
	// Toggle icon
	if (userOutlineIcon.style.display === 'none') {
	    userOutlineIcon.style.display = 'inline';
	    userIcon.style.display = 'none';
	    profileInfo.style.display = 'none'; // Hide profile-info when switching back to outline icon
	} else {
	    userOutlineIcon.style.display = 'none';
	    userIcon.style.display = 'inline';
	    profileInfo.style.display = 'block'; // Show profile-info when switching to user icon
	}
	});
	});
	
	function toggleIcon(event, outlineId, solidId, countId) {
	var likeIconOutline = document.getElementById(outlineId);
	var likeIconSolid = document.getElementById(solidId);
	var likeCountSpan = document.getElementById(countId);
	
	// Mengubah ikon saat tombol ditekan
	if (likeIconOutline.style.display === 'none') {
	likeIconOutline.style.display = 'inline';
	likeIconSolid.style.display = 'none';
	likeCountSpan.textContent = parseInt(likeCountSpan.textContent) - 1; // Mengurangi angka saat tombol ditekan
	} else {
	likeIconOutline.style.display = 'none';
	likeIconSolid.style.display = 'inline';
	likeCountSpan.textContent = parseInt(likeCountSpan.textContent) + 1; // Menambah angka saat tombol ditekan
	}
	
	// Mencegah perubahan default (scrolling ke atas) saat tombol ditekan
	event.preventDefault();
	}
	
</script>