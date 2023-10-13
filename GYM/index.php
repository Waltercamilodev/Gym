<?php 
if(!session_id()) {
    session_start();
} 
?>
<?php include "model/conection.php" ?>
<?php include "controller/login.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running Club</title>
    <link rel="stylesheet" href="./css/style1.css">
</head>
<body>
<div class="flex" id="parte1">
			<div>
				<a href="index.php" class="parte1a"><img src="./img/Group 1.png" width="80px"></a>
			</div>
			<div>
				<ul class="parte1listas flex">
					<li class="parte1li"><a href="#" class="parte1a">HOME</a></li>
					<li class="parte1li"><a href="#" class="parte1a">OUR CATEGORY</a></li>
					<li class="parte1li"><a href="#" class="parte1a">ABOUT US</a></li>
					<li class="parte1li"><a href="#" class="parte1a">PRODUCT</a></li>
					<li class="parte1li"><a href="#" class="parte1a">INSTAGRAM</a></li>
					<li class="parte1li"><a href="#" class="parte1a">CONTACT US</a></li>
                    <?php if (isset($_SESSION['rol'])) {?>
                            <li class="parte1li"><a href="profile.php" class="parte1a">PERFIL</a></li>
                            <li class="parte1li"> 
                                <form class="form-inline my-2 my-lg-0" action="index.php" method="post"> 
                                    <button name="logout" class="btn btn-outline-success my-2 my-sm-0" type="submit">CERRAR SESION</button>
                                </form>
                            </li>
                            <?php } else {?>
                                <li class="parte1li"><a href="login.php" class="parte1a">LOGIN</a></li>
                            <?php }?>
				</ul>
			</div>
			<div>
				<div class="parte1search flex">
						<div>
							<img src="./img/vector.png" width="20px" class="search1">
						</div>
						<div>
							<img src="./img/Group.png" width="24px">
						</div>
				</div>
			</div>
		</div>
		<div class="flex">
			<img src="./img/maxO_TVsaeZNlEunsplashmin2 1.png" width="100%" class="img">
		</div>
		<div class="flex center" id="parte3">
			<div>
				<p class="parte3p">Power of running</p>
				<p class="parte3p2">Join a network of more than 500 runners supporting our local running community.</p>
			</div>
		</div>
		<div class="flex" id="parte4">
			<div class="parte4" align="center">
				<img src="./img/friends.png" width="250px" class="parte4img">
				<p class="parte4p">Local Race</p>
				<p class="parte4p2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eufugiat nulla pariatur. Excepteur 				sintoccaecat cupidatat non proident.</p>
				
			</div>
			<div class="parte4" align="center">
				<img src="./img/close.png" width="250px" class="parte4img">
				<p class="parte4p">Networking</p>
				<p class="parte4p2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eufugiat nulla pariatur. Excepteur 				sintoccaecat cupidatat non proident.</p>
			</div>
			<div class="parte4" align="center">
				<img src="./img/fitness-woman.png" width="250px" class="parte4img">
				<p class="parte4p">Programs</p>
				<p class="parte4p2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eufugiat nulla pariatur. Excepteur 				sintoccaecat cupidatat non proident.</p>
			</div>
		</div>
		<div class="flex" id="parte5">
			<div class="parte5">
				<h4 class="parte5h">Welcome To Runclub</h4>
				<h2 class="parte5h">We Are The Best Running Club in Town</h2>
				<img src="./img/Rectangle 16.png" width="130px" class="parte5img1">
				<p class="parte5p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
				<div class="parte5a-container"><a href="#" class="parte5a">ABOUT US</a></div>
			</div>
			<div>
				<div class="parte5img2">
					<img src="./img/image 1.png"  width="545px">
				</div>
			</div>
		</div>
		<div class="flex" id="parte6">
			<div>
				<p class="parte6p">OUR PRODUCT</p>
			</div>
		</div>
		<div class="flex" id="parte7">
			<div>
				<div class="parte7img1" align="center">
					<img src="./img/image-removebg-preview 5.png" width="175px">
				</div>
				<div class="parte7div">
					<p class="parte7p1">SHIRT</p>
					<p class="parte7p2">Cade-01</p>
				</div>
			</div>
			<div>
				<div class="parte7img1" align="center">
					<img src="./img/image-removebg-preview 2.png" width="200px" class="parte7img2">
				</div>
				<div class="parte7div">
					<p class="parte7p1">TRUISER</p>
					<p class="parte7p2">Cade-02</p>
				</div>
			</div>
			<div>
				<div class="parte7img1" align="center">
					<img src="./img/image-removebg-preview 3.png" width="147px" class="parte7img3">
				</div>
				<div class="parte7div">
					<p class="parte7p1">T-SHIRT</p>
					<p class="parte7p2">Cade-03</p>
				</div>
			</div>
			<div>
				<div class="parte7img1" align="center">
					<img src="./img/image-removebg-preview 4.png" width="188px">
				</div>
				<div class="parte7div">
					<p class="parte7p1">HIGH NEC</p>
					<p class="parte7p2">Cade-04</p>
				</div>
			</div>
		</div>
		<div class="flex" id="parte8">
			<div><img src="./img/NTRCxReebok_04 1.png" width="250px"></div>
			<div><img src="./img/Adidas-Runners-Event-Listing-1 1.png" width="250px"></div>
			<div><img src="./img/245a2549910825 1.png" width="250px"></div>
			<div><img src="./img/d417f9168f5dabcceddda63f550e032f 1.png" width="250px"></div>
		</div>
</body>
</html>
<img src="" width="" height="">