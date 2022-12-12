<div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
        <!--\\\\\\\ brand Start \\\\\\-->
        <div class="logo" style="display:block"><span class="theme_color">Zahir</span> C&C</div>
        <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
        <!--\\\\\\\ header top bar start \\\\\\-->
        <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
        <div class="top_left">
            <div class="top_left_menu">
                <ul>
                    <li> <a href="javascript:void(0);"><i class="fa fa-repeat"></i></a> </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="javascript:void(0);"> <i class="fa fa-th-large"></i> </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="top_right_bar">           
            <div class="user_admin dropdown">
                <a href="javascript:void(0);" data-toggle="dropdown"><img src="images/user.png" />
                    <span class="user_adminname">
						<?php 
							$userid = $_SESSION['login_user']; 
							$query = "Select * From Users where UserName = '$userid'";										
							$result = mysqli_query($link, $query);
							$row = mysqli_fetch_array($result);
							echo $row['UserName'];
						?>
						</span> <b class="caret"></b> </a>
                <ul class="dropdown-menu">
                    <div class="top_pointer"></div>
                    <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                    <li> <a href="#"><i class="fa fa-cog"></i> Setting </a></li>
                    <li> <a href="login.php"><i class="fa fa-power-off"></i> Logout</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>