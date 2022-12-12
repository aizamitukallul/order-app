<header class="top-header">
	<nav class="navbar navbar-expand gap-3">
		<div class="mobile-toggle-icon fs-3"> <i class="bi bi-list"></i> </div>
		
		<div class="top-navbar-right ms-auto">
			<ul class="navbar-nav align-items-center">
				<li class="nav-item search-toggle-icon">
					<a class="nav-link" href="#">
						<div class=""> <i class="bi bi-search"></i> </div>
					</a>
				</li>
				<li class="nav-item dropdown dropdown-user-setting">
					<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
						<div class="user-setting d-flex align-items-center"> <img src="assets/images/avatars/avatar-1.png" class="user-img" alt=""> </div>
					</a>
					<ul class="dropdown-menu dropdown-menu-end">
						<li>
							<a class="dropdown-item" href="#">
								<div class="d-flex align-items-center"> <img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="54" height="54">
									<div class="ms-3">
									<?php 
										$userid = $_SESSION['login_user']; 
										$query = "Select * From Users where UserName = '$userid'";										
										$result = mysqli_query($link, $query);
										$row = mysqli_fetch_array($result);										
									?>
										<h6 class="mb-0 dropdown-user-name"><?php echo $row['UserName']; ?></h6> <small class="mb-0 dropdown-user-designation text-secondary">BoSS</small> 
									</div>
								</div>
							</a>
						</li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li>
							<a class="dropdown-item" href="user-profile.php">
								<div class="d-flex align-items-center">
									<div class=""><i class="bi bi-person-fill"></i></div>
									<div class="ms-3"><span>Profile</span></div>
								</div>
							</a>
						</li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li>
							<a class="dropdown-item" href="login.php">
								<div class="d-flex align-items-center">
									<div class=""><i class="bi bi-lock-fill"></i></div>
									<div class="ms-3"><span>Logout</span></div>
								</div>
							</a>
						</li>
					</ul>
				</li>
				
				<li class="nav-item dropdown dropdown-large">
					<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
						<div class="notifications"> <span class="notify-badge">8</span> <i class="bi bi-bell-fill"></i> </div>
					</a>
					<div class="dropdown-menu dropdown-menu-end p-0">
						<div class="p-2 border-bottom m-2">
							<h5 class="h5 mb-0">Notifications</h5> 
						</div>
						<div class="header-notifications-list p-2">
							<a class="dropdown-item" href="#">
								<div class="d-flex align-items-center">
									<div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
									<div class="ms-3 flex-grow-1">
										<h6 class="mb-0 dropdown-msg-user">New Stock <span class="msg-time float-end text-secondary">1 m</span></h6> <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have recived new orders</small> </div>
								</div>
							</a>
							<a class="dropdown-item" href="#">
								<div class="d-flex align-items-center">
									<div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
									<div class="ms-3 flex-grow-1">
										<h6 class="mb-0 dropdown-msg-user">New Orders <span class="msg-time float-end text-secondary">1 m</span></h6> <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have recived new orders</small> </div>
								</div>
							</a>
							<a class="dropdown-item" href="#">
								<div class="d-flex align-items-center">
									<div class="notification-box bg-light-primary text-primary"><i class="bi bi-mic-fill"></i></div>
									<div class="ms-3 flex-grow-1">
										<h6 class="mb-0 dropdown-msg-user">Expire Soon<span class="msg-time float-end text-secondary">7 m</span></h6> <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Successfully shipped your item</small> </div>
								</div>
							</a>							
						</div>
						<div class="p-2">
							<div>
								<hr class="dropdown-divider">
							</div>
							<a class="dropdown-item" href="#">
								<div class="text-center">View All Notifications</div>
							</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</nav>
</header>