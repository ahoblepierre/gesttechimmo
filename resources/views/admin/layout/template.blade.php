<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from lezato.w3itexpert.com/laravel/demo/index by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 09:52:33 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="HeNmyFvvt0lFdxDGOoTn2nlv9svpqbMGp6stcrUe">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Some description for the page" />
	<meta property="og:title" content="Lezato : Restaurant Admin Laravel Template" />
	<meta property="og:description" content="Laravel | Dashboard" />
	<meta property="og:image" content="https://lezato.dexignzone.com/laravel/social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>GestTechImmo | Dashboard</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />

	<!-- Style css -->

	<link href="{{asset('assets/vendor/chartist/css/chartist.min.css')}}" rel="stylesheet" type="text/css" />




	<link href="{{asset('assets/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />


</head>

<body>

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="gooey">
			<span class="dot"></span>
			<div class="dots">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->

	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">

		<!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
			<a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="56" height="56" viewBox="0 0 56 56" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path class="rect-primary-rect"
						d="M0 20C0 8.95431 8.95431 0 20 0H36C47.0457 0 56 8.95431 56 20V36C56 47.0457 47.0457 56 36 56H20C8.95431 56 0 47.0457 0 36V20Z"
						fill="url(#paint0_linear)" />
					<path
						d="M17 26.5L18 37.5L37.5 37.5L38.5 26.5C41.1667 26.6667 46.3 25.4 45.5 19C44.7 12.6 39.1667 12 36.5 12.5C35 11.3334 32.5 7.5 27 8.00004C22.9375 8.36939 20 10.6667 19 12.5C16.5 12.1667 11.3 12.9 10.5 18.5C9.69997 24.1 14.5 26.1667 17 26.5Z"
						stroke="white" stroke-width="2" />
					<line x1="21.1837" y1="30.9641" x2="21.8108" y2="36.9312" stroke="white" />
					<line x1="34.339" y1="31.0342" x2="33.6547" y2="37.0784" stroke="white" />
					<line x1="27.5" y1="30" x2="27.5" y2="37" stroke="white" />
					<path
						d="M18.5 50C15.2975 50.01 13.3333 46.8334 12 45C12 45 15.3959 48.5673 17.5 47.5C18.8153 46.8328 19 45.5 19.5 45L20.5 44C21.2139 43.2861 22.5 43 22.5 43C22.5 43 24.2179 42.7032 25.25 43C26.5262 43.367 28 45 28 45C28 45 29.2775 43.262 30.5 43C31.0728 42.8773 32 43 32 43C32 43 33.2379 43.2406 34 43.5C34.7039 43.7396 35.1149 43.8634 35.75 44.25C36.8115 44.8961 36.8667 45.9903 38 46.5C40.0304 47.4133 43.5 45 43.5 45C43.5 45 41.8662 48.0913 40 49C37.3434 50.2937 35 50 32.5 48C30 46 28.5 46.5 27.5 47C27.5 47 24.5 46.5 22 49C21.5 49.5 19.9215 49.9956 18.5 50Z"
						fill="white" stroke="white" stroke-width="0.1" />
					<defs>
						<linearGradient id="paint0_linear" x1="28" y1="0" x2="28" y2="56"
							gradientUnits="userSpaceOnUse">
						</linearGradient>
					</defs>
				</svg>
				<svg class="brand-title" width="165" height="35" viewBox="0 0 165 35" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path class="svg-title-path"
						d="M10.912 34C8.832 34 7.008 33.536 5.44 32.608C3.872 31.68 2.656 30.448 1.792 28.912C0.928 27.376 0.496 25.68 0.496 23.824V0.399998H8.56V24.4C8.56 25.168 8.832 25.84 9.376 26.416C9.92 26.992 10.592 27.28 11.392 27.28H20.272V34H10.912ZM36.8511 34C34.0671 34 31.6191 33.488 29.5071 32.464C27.3951 31.408 25.7471 29.968 24.5631 28.144C23.4111 26.288 22.8351 24.144 22.8351 21.712C22.8351 19.024 23.3951 16.72 24.5151 14.8C25.6351 12.88 27.1231 11.408 28.9791 10.384C30.8671 9.328 32.9471 8.8 35.2191 8.8C37.8111 8.8 39.9711 9.344 41.6991 10.432C43.4591 11.52 44.7871 13.008 45.6831 14.896C46.5791 16.784 47.0271 18.912 47.0271 21.28C47.0271 21.728 46.9951 22.224 46.9311 22.768C46.8991 23.312 46.8511 23.744 46.7871 24.064H30.6591C30.9471 25.344 31.6191 26.304 32.6751 26.944C33.7311 27.552 35.0431 27.856 36.6111 27.856H44.1471V34H36.8511ZM30.4671 19.408H39.8271C39.7311 18.064 39.2991 16.96 38.5311 16.096C37.7631 15.232 36.6591 14.8 35.2191 14.8C33.7151 14.8 32.5791 15.28 31.8111 16.24C31.0751 17.168 30.6271 18.224 30.4671 19.408ZM56.6901 34C54.6741 34 53.0741 33.376 51.8901 32.128C50.7061 30.88 50.1141 29.408 50.1141 27.712C50.1141 26.592 50.3861 25.6 50.9301 24.736C51.5061 23.872 52.2741 23.136 53.2341 22.528L62.0181 16.672C62.3061 16.512 62.4501 16.32 62.4501 16.096C62.4501 15.712 62.2261 15.52 61.7781 15.52H51.2181L51.1701 9.376H64.3701C65.6181 9.376 66.7221 9.68 67.6821 10.288C68.6741 10.864 69.4421 11.632 69.9861 12.592C70.5301 13.552 70.8021 14.592 70.8021 15.712C70.8021 16.768 70.5301 17.76 69.9861 18.688C69.4741 19.584 68.7701 20.336 67.8741 20.944L59.0901 26.704C58.8341 26.896 58.7061 27.088 58.7061 27.28C58.7061 27.664 58.9301 27.856 59.3781 27.856H70.3221V34H56.6901ZM85.4845 34.576C83.2765 34.576 81.3405 34.016 79.6765 32.896C78.0445 31.776 76.7645 30.272 75.8365 28.384C74.9085 26.464 74.4445 24.304 74.4445 21.904C74.4445 19.408 74.9725 17.184 76.0285 15.232C77.1165 13.248 78.6525 11.68 80.6365 10.528C82.6525 9.376 85.0365 8.8 87.7885 8.8C90.5405 8.8 92.8765 9.376 94.7965 10.528C96.7485 11.68 98.2365 13.232 99.2605 15.184C100.317 17.136 100.845 19.328 100.845 21.76V34H93.5485V30.064H93.3565C92.6525 31.344 91.6765 32.416 90.4285 33.28C89.1805 34.144 87.5325 34.576 85.4845 34.576ZM87.6925 28.144C89.3885 28.144 90.7325 27.536 91.7245 26.32C92.7485 25.072 93.2605 23.52 93.2605 21.664C93.2605 19.904 92.7485 18.416 91.7245 17.2C90.7325 15.952 89.3885 15.328 87.6925 15.328C85.9325 15.328 84.5405 15.952 83.5165 17.2C82.5245 18.416 82.0285 19.904 82.0285 21.664C82.0285 23.488 82.5245 25.024 83.5165 26.272C84.5405 27.52 85.9325 28.144 87.6925 28.144Z"
						fill="#FD683E" />
					<path
						d="M115.371 34C113.099 34 111.323 33.36 110.043 32.08C108.763 30.8 108.123 29.04 108.123 26.8V15.472H104.091V9.376H108.123V3.376H115.611V9.376H122.379V15.472H115.611V26.368C115.611 26.784 115.739 27.12 115.995 27.376C116.251 27.632 116.587 27.76 117.003 27.76H122.379V34H115.371ZM138.273 34.576C135.745 34.576 133.473 34.016 131.457 32.896C129.441 31.776 127.841 30.256 126.657 28.336C125.505 26.384 124.929 24.176 124.929 21.712C124.929 19.248 125.505 17.056 126.657 15.136C127.841 13.184 129.441 11.648 131.457 10.528C133.473 9.376 135.745 8.8 138.273 8.8C140.801 8.8 143.057 9.376 145.041 10.528C147.057 11.648 148.641 13.184 149.793 15.136C150.977 17.056 151.569 19.248 151.569 21.712C151.569 24.176 150.977 26.384 149.793 28.336C148.641 30.256 147.057 31.776 145.041 32.896C143.025 34.016 140.769 34.576 138.273 34.576ZM138.273 28.096C140.033 28.096 141.441 27.488 142.497 26.272C143.553 25.024 144.081 23.488 144.081 21.664C144.081 19.872 143.553 18.368 142.497 17.152C141.441 15.904 140.033 15.28 138.273 15.28C136.481 15.28 135.057 15.904 134.001 17.152C132.945 18.368 132.417 19.872 132.417 21.664C132.417 23.488 132.945 25.024 134.001 26.272C135.057 27.488 136.481 28.096 138.273 28.096ZM159.635 34.576C158.355 34.576 157.251 34.128 156.323 33.232C155.427 32.304 154.979 31.216 154.979 29.968C154.979 28.688 155.427 27.6 156.323 26.704C157.251 25.776 158.355 25.312 159.635 25.312C160.883 25.312 161.955 25.776 162.851 26.704C163.779 27.6 164.243 28.688 164.243 29.968C164.243 31.216 163.779 32.304 162.851 33.232C161.955 34.128 160.883 34.576 159.635 34.576Z"
						fill="#202020" />
				</svg>


			</a>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->

		<!--**********************************
    Chat box start
***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
										xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
										viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
											<rect fill="#000000" opacity="0.3"
												transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
												x="4" y="11" width="16" height="2" rx="1" />
										</g>
									</svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
										xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
										viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<circle fill="#000000" cx="5" cy="12" r="2" />
											<circle fill="#000000" cx="12" cy="12" r="2" />
											<circle fill="#000000" cx="19" cy="12" r="2" />
										</g>
									</svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/3.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/4.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/5.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/3.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/4.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/5.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/3.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/4.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/5.jpg" class="rounded-circle user_img"
													alt="" />
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<rect fill="#000000" opacity="0.3"
												transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
												x="14" y="7" width="2" height="10" rx="1" />
											<path
												d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
												fill="#000000" fill-rule="nonzero"
												transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
										</g>
									</svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>
								<div class="dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<circle fill="#000000" cx="5" cy="12" r="2" />
												<circle fill="#000000" cx="12" cy="12" r="2" />
												<circle fill="#000000" cx="19" cy="12" r="2" />
											</g>
										</svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i>
											View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to
											btn-close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to
											group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg"
											alt="" />
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i
												class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
										xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
										viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<circle fill="#000000" cx="5" cy="12" r="2" />
											<circle fill="#000000" cx="12" cy="12" r="2" />
											<circle fill="#000000" cx="19" cy="12" r="2" />
										</g>
									</svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
										xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
										viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path
												d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
												fill="#000000" fill-rule="nonzero" opacity="0.3" />
											<path
												d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
												fill="#000000" fill-rule="nonzero" />
										</g>
									</svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU</div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
										xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
										viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
											<rect fill="#000000" opacity="0.3"
												transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
												x="4" y="11" width="16" height="2" rx="1" />
										</g>
									</svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
										xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
										viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path
												d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
												fill="#000000" fill-rule="nonzero" opacity="0.3" />
											<path
												d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
												fill="#000000" fill-rule="nonzero" />
										</g>
									</svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);"
													class="btn btn-primary btn-xs sharp me-1"><i
														class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
														class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);"
													class="btn btn-primary btn-xs sharp me-1"><i
														class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
														class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);"
													class="btn btn-primary btn-xs sharp me-1"><i
														class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
														class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);"
													class="btn btn-primary btn-xs sharp me-1"><i
														class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
														class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
    Chat box End
***********************************-->
    @include('admin.layout.menu')

	@include('admin.layout.sidebar')


    <div class="content-body">
        @yield('contenu')
    </div>

		<!--**********************************
            Footer start
        ***********************************-->

		<!--**********************************
  Footer start
***********************************-->
		<div class="footer">
			<div class="copyright">
				<p>Copyright © Designed &amp; Developed by <a href="https://dexignzone.com/"
						target="_blank">Pierre AHOBLE</a> {{now()->format('Y')}}</p>
			</div>
		</div>
		<!--**********************************
  Footer end
***********************************-->
		<!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

		<!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->

	<script src="{{asset('assets/vendor/global/global.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/vendor/chart.js/Chart.bundle.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/vendor/apexchart/apexchart.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/vendor/peity/jquery.peity.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/dashboard/dashboard-1.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/custom.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/deznav-init.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/demo.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/styleSwitcher.js')}}" type="text/javascript"></script>


</body>

<!-- Mirrored from lezato.w3itexpert.com/laravel/demo/index by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 09:54:51 GMT -->

</html>