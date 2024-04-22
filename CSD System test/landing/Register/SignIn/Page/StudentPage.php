<?php

session_start();

if (!isset($_SESSION['user_name']) || !isset($_SESSION['user_id'])) {
    header('Location: /CSD%20System/landing/Register/SignIn/signin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/student.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title>CSD Faculty</title>
    <script>
		$(document).ready(function(){
			$(".profile .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			  $(".notifications").removeClass("active");
			});

			$(".notifications .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			   $(".profile").removeClass("active");
			});

			$(".show_all .link").click(function(){
			  $(".notifications").removeClass("active");
			  $(".popup").show();
			});

			$(".close").click(function(){
			  $(".popup").hide();
			});
		});
	</script>
  </head>
  <body>

<nav>  

<div class="wrapper">
  <nav class="navbar">
    <div class="navbar_left">
      <div class="nav__logo">
        <a href="#"><img src="imahe/FAST.png" alt="logo" /></a>
      </div>
    </div>
    <div class="navbar_center_text">
      <a href="#">Home</a>
      <a href="proflist.php">Professors</a>
    </div>

    <div class="navbar_right">
      <div class="notifications">
        <div class="icon_wrap"><i class="far fa-bell"></i></div>
        
        <div class="notification_dd">
            <ul class="notification_ul">
                <li class="starbucks success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li>  
                <li class="baskin_robbins failed">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Failed</p>  
                    </div>
                </li> 
                <li class="mcd success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li>  
                <li class="pizzahut failed">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Failed</p>  
                    </div>
                </li> 
                <li class="kfc success">
                    <div class="notify_icon">
                        <span class="icon"></span>  
                    </div>
                    <div class="notify_data">
                        <div class="title">
                            Lorem, ipsum dolor.  
                        </div>
                        <div class="sub_title">
                          Lorem ipsum dolor sit amet consectetur.
                      </div>
                    </div>
                    <div class="notify_status">
                        <p>Success</p>  
                    </div>
                </li> 
                <li class="show_all">
                    <p class="link">Show All Activities</p>
                </li> 
            </ul>
        </div>
        
      </div>
      <div class="profile">
        <div class="icon_wrap">
          <img src="imahe/profile/icon.png" alt="profile_pic">
        </div>

        <div class="profile_dd">
          <ul class="profile_ul">
            <li class="profile_li"><a class="profile" href="#"><span class="picon"><i class="fas fa-user-alt"></i>
                </span>Lastname, First Name</a>
            </li>
            <li><a class="logout" href="#"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

    </nav>
    
    <header class="itloog__container header__container" id="homealone">
      <div class="header__content">
        <h1>Computer Studies<br><h1 class="dp">Department</h1></h1>
    
        <form action="" class="search-bar">
         <input type="text" placeholder="search name..">
         <button type="submit" i class="ri-search-line"></i></button>
        </form> 

      </div>
      <div class="header__image">
        <img src="imahe/torch.png" alt="header" />
      </div>
    </header>

    <body>
    <div class="container" id="prof">
        <div class="row">
            <div class="tree">
                <h1>CSD FACULTY</h1>
                <ul>
                    <li>
                        <div class="professor">
                        <div class="dropdown">
                            <a class="prof-mscs" href="#"><img src="imahe/profile/prof1.png"><span>Professor, MSCS</span></a>
                     
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a>System Analysis Design and Development</a></li>
                                        <li><a>9:00-10:00</a></li>
                                        <li><a>ECB 204</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul>
                          <li><a href="#"><img src="imahe/profile/prof2.png"><span>Professor 1</span></a></li>
					                <li><a href="#"><img src="imahe/profile/prof3.png"><span>Professor 2</span></a></li>
					                <li><a href="#"><img src="imahe/profile/prof4.png"><span>Professor 3</span></a></li>
					                <li><a href="#"><img src="imahe/profile/prof5.png"><span>Professor 4</span></a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
		<div class="row">
			<div class="additional-boxes">
				<ul>
					<li><a href="#"><img src="imahe/profile/prof6.png"><span>Professor 5</span></a></li>
					<li><a href="#"><img src="imahe/profile/prof7.png"><span>Professor 6</span></a></li>
					<li><a href="#"><img src="imahe/profile/prof8.png"><span>Professor 7</span></a></li>
					<li><a href="#"><img src="imahe/profile/prof9.png"><span>Professor 8</span></a></li>
				</ul>
				<ul>
					<li><a href="#"><img src="imahe/profile/prof10.png"><span>Professor 9</span></a></li>
					<li><a href="#"><img src="imahe/profile/prof11.png"><span>Professor 10</span></a></li>
					<li><a href="#"><img src="imahe/profile/prof12.png"><span>Professor 11</span></a></li>
					<li><a href="#"><img src="imahe/profile/prof13.png"><span>Professor 12</span></a></li>
				</ul>
			</div>
		</div>
	</div>

  <script>
        $(document).ready(function(){
            $(".prof-mscs").hover(function(){
                $(this).siblings(".dropdown-menu").toggle();
            });
        });
    </script>

  </body>
</html>
