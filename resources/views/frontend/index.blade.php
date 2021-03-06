<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Food Cart- The Old Stars</title>
	<!-- All CSS link is here -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/css/slick.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/css/venobox.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
</head>
<body data-spy="scroll" data-target=".menu_bg">
<!--=====================================
			Hotline Section Start
======================================-->
<section id="hotline">
	<div class="container" style="position: relative">
		<div class="main flex">
			<p>Have any Trouble?</p>
			<div class="icon icon1 flex">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<p><a href="tel:+8801234567890">(+880) 1234 567 890</a></p>
			</div>
			<div class="open_hour">
				<p>Opening Hour: 08:00 a.m to 10:00 p.m</p>
			</div>
			<div class="order">
				<a href="#">order online</a>
			</div>
		</div>
        <div style="position: absolute; right:-5%; top:0%; padding: 3px 15px;
                    background: #fefefe;
                    border: 1px solid #fefefe;
                    border-radius: 25px;font-weight: 700; color: #f89f24;
                    font-size: 16px;
                    font-family: 'Bitter', serif;">
            <a href="{{ route('login') }}" class="mr-1" style="color: #f89f24;">Login</a>/
            <a href="{{ route('register') }}" style="color: #f89f24;">Register</a>
        </div>
	</div>
</section>
<!--=====================================
			Hotline Section End
======================================-->
<!--=============================
		Navbar Part Start
==============================-->
<nav class="navbar navbar-expand-lg menu_bg">
	<div class="container">
		<div class="logo">
			<a class="navbar-brand" href="#">
				<img src="{{ asset('assets') }}/images/logo.png" alt="logo">
				<p>Restourant</p>
			</a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav m-auto">
			<li class="nav-item ">
			  <a class="nav-link active" href="#banner">Dashboard <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#about">About</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#free_delivary">Offer</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#popular_menu">menus</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#booking">Reservation</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#blog">blog</a>
			</li>
			<li class="nav-item ">
			  <a class="nav-link" href="#footer">contact</a>
			</li>
		  </ul>
		</div>
		<div class="search">
			<i class="fa fa-search srch" aria-hidden="true"></i>
		</div>
		<div class="cart">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i>
			<span>0</span>
		</div>

		<div class="totalClose">
			<div class="againClose">
				<div class="close">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
				<div class="input">
					<input type="text" placeholder="Search by keyword">
					<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
</nav>
<!--=============================
		Navbar Part End
==============================-->
<!--=============================
		Banner Part Start
==============================-->
<section id="banner">
	<div class="banner_slider">
		<div class="item item1">
			<div class="overlay">
				<div class="container">
					<h1>sushi special</h1>
					<p>Rimply dummy text of the printing and typesetting industry areorem Ipsum has been the industry's standard.</p>
					<div class="button">
						<a href="#">buy now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="item item2">
			<div class="overlay">
				<div class="container">
					<h1>sushi special</h1>
					<p>Rimply dummy text of the printing and typesetting industry areorem Ipsum has been the industry's standard.</p>
					<div class="button">
						<a href="#">buy now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="item item3">
			<div class="overlay">
				<div class="container">
					<h1>sushi special</h1>
					<p>Rimply dummy text of the printing and typesetting industry areorem Ipsum has been the industry's standard.</p>
					<div class="button">
						<a href="#">buy now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--=============================
		Banner Part End
==============================-->
<!--=============================
		About Part Start
==============================-->
<section id="about">
	<div class="title">
		<h4>Our Story</h4>
		<p>Lorem ipsum dolor site amet consectetur adipiscing aliqua.</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="left">
					<div class="text flex">
						<h4>A</h4>
						<p>lways continue the climb. It is possible for you to do whatever you choose, if you first get to know who you are and are willing to work </p>
					</div>
					<p>with a power that is greater than ourselves to do it. We are taught you must blame your father, your sisters, your brothers, the school, the teachers - but never blame yourself.</p>
					<p class="last_p">Nothing can be done without hope and confidence. If you can dream it, you can do it. Do it now, not tomorrow. Always continue the climb. </p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="right">
					<div class="img">
						<img src="{{ asset('assets') }}/images/about2.jpg" alt="about2">
						<div class="overlay"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--=============================
		About Part End
==============================-->
<!--=============================
	Free Delivay Part Start
==============================-->
<section id="free_delivary">
	<div class="row">
		<div class="col-lg-12">
			<div class="main">
				<div class="delivary">
					<span>free delivary</span>
				</div>
				<h3>pizza of the day</h3>
				<div class="dollar">
					<div class="money flex">
						<h2>$15</h2>
						<span>.99</span>
					</div>
					<p>Vegitable, Chessese Pizza
						Sumber, Beef Strome</p>
				</div>
				<div class="button">
					<a href="#">Order now</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--=============================
	Free Delivay Part End
==============================-->
<!--=============================
		Menu Part Start
==============================-->
<section id="menu">
	<div class="up_menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 p-0">
					<div class="item">
						<img src="{{ asset('assets') }}/images/menu1.png" alt="menu1">
						<div class="overlay">
							<h4>Pizza Lazio<i class="fa fa-angle-right" aria-hidden="true"></i></h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 p-0">
					<div class="item">
						<img src="{{ asset('assets') }}/images/menu2.png" alt="menu1">
						<div class="overlay">
							<h4>Pizza Lazio<i class="fa fa-angle-right" aria-hidden="true"></i></h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 p-0">
					<div class="item">
						<img src="{{ asset('assets') }}/images/menu3.png" alt="menu1">
						<div class="overlay">
							<h4>Pizza Lazio<i class="fa fa-angle-right" aria-hidden="true"></i></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="down_menu" id="down_menu">
		<div class="container">
			<div class="title">
				<h4>featured menu</h4>
				<p>Lorem ipsum dolor site amet consectetur adipiscing aliqua.</p>
			</div>
			<div class="menu_slider">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu1.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$25.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu2.png" alt="featuredmenu1">
						</div>
						<h4>Italiano Pasta</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
				<div class="item item3">
					<div class="main">
						<div class="dollar">
							<span>$40.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu3.png" alt="featuredmenu1">
						</div>
						<h4>Burger King</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$12.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu4.png" alt="featuredmenu1">
						</div>
						<h4>Fried Rice</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu2.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--=============================
		Menu Part End
==============================-->
<!--=============================
	Popular Menu Part Start
==============================-->
<section id="popular_menu">
	<div class="title">
		<h4>popular menu</h4>
		<p>Lorem ipsum dolor site amet consectetur adipiscing aliqua.</p>
	</div>
	<div class="container">
		<div class="butt">
			<!--<button type="button" data-filter="all">All Colors</button> -->
				<button type="button" data-filter=".item1">Breakfast</button>
				<button type="button" data-filter=".item2">Lunch</button>
				<button type="button" data-filter=".item3">Dinner</button>
				<button type="button" data-filter=".item4">Drinks</button>
			</div>

		<div class="popularmenu_mixitup">

			<div class="mix item1 one"      data-order="1">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu1.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item1 two"      data-order="2">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu2.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item1 three common"    data-order="3">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu3.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item1 four"     data-order="4">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu4.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item1 five "     data-order="5">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu4.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item1 six common"      data-order="6">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu3.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item1 seven"    data-order="7">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu2.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item1 eight"    data-order="8">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu1.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>

			<div class="mix item2 nine"     data-order="9">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu4.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item2 ten common"      data-order="10">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu3.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item2 eleven"   data-order="11">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu2.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item2 twelve"   data-order="12">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu1.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item2 thirteen" data-order="13">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu1.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item2 fourteen" data-order="14">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu2.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item2 fifteen common"      data-order="15">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu3.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item2 sixteen"      data-order="16">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu4.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>

			<div class="mix item3 seventeen"    data-order="17">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu1.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item3 eighteen"     data-order="18">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu2.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item3 nineteen common"     data-order="19">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu3.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item3 twenty"       data-order="20">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu4.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item3 twentyone"    data-order="21">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu4.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item3 twentytwo common"    data-order="22">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu3.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item3 twentythree"    data-order="23">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu2.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item3 twentyfour"     data-order="24">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu1.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>

			<div class="mix item4 twentyfive"     data-order="25">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu4.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item4 twentysix common"       data-order="26">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu3.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item4 twentyseven"    data-order="27">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu2.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item4 twentyeight"    data-order="28">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu1.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item4 twentynine"     data-order="29">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu1.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item4 thirty"       data-order="30">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu2.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item4 thirtyone common"    data-order="31">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu3.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mix item4 thirtytwo"    data-order="32">
				<div class="item">
					<div class="main">
						<div class="dollar">
							<span>$35.00</span>
						</div>
						<div class="img">
							<img src="{{ asset('assets') }}/images/featuredmenu4.png" alt="featuredmenu1">
						</div>
						<h4>Pen Pizza</h4>
						<p>Pimply dummy text the printing been standard wera area.</p>
						<div class="button">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!--=============================
	Popular Menu Part End
==============================-->
<!--=============================
		Booking Part Start
==============================-->
<section id="booking" style="background: url({{ asset('assets') }}/images/chairs-2179044_1920.jpg) no-repeat center;">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 p-0">
					<div class="left">
						<div class="img">
							<img src="{{ asset('assets') }}/images/booking_left2.jpg" alt="bookleft">
							<div class="overlay">
								<div class="icon">
									<a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=9mtlSiKm3kg">
										<i class="fa fa-play" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="right">
						<div class="main">
							<h4>Book your table</h4>
							<p>Eimply dummy texte printing and typese</p>
                            @foreach ($indexs as $index)
                                <div class="shift1 shift">
                                    <span>{{ $index->day }}</span>
                                    <p>{{ $index->time }}</p>
                                </div>
                            @endforeach
							<div class="button">
								<a href="#">book now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--=============================
		Booking Part End
==============================-->
<!--=============================
		Blog Part Start
==============================-->
<section id="blog">
	<div class="title">
		<h4>Our Blogs</h4>
		<p>Latest Delicious Food Post.</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="item">
					<div class="img">
						<img src="{{ asset('assets') }}/images/blog1.png" alt="blog1">
					</div>
					<div class="buttonz">
						<a href="#">26 dec / 2020</a>
					</div>
					<h4>Italian Special Fish Curry</h4>
					<p>Morbi ut sapien scelerisqueentum ex ultrices, bm lacusty quamd are nsequat uisque ...</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="item">
					<div class="img">
						<img src="{{ asset('assets') }}/images/blog2.png" alt="blog1">
					</div>
					<div class="buttonz">
						<a href="#">21 dec / 2020</a>
					</div>
					<h4>Italian Special Fish Curry</h4>
					<p>Morbi ut sapien scelerisqueentum ex ultrices, bm lacusty quamd are nsequat uisque ...</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="item">
					<div class="img">
						<img src="{{ asset('assets') }}/images/blog3.png" alt="blog1">
					</div>
					<div class="buttonz">
						<a href="#">19 dec / 2020</a>
					</div>
					<h4>Italian Special Fish Curry</h4>
					<p>Morbi ut sapien scelerisqueentum ex ultrices, bm lacusty quamd are nsequat uisque ...</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--=============================
		Blog Part End
==============================-->
<!--=============================
		Footer Part Start
==============================-->
<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 p-0">
				<div class="item about_us">
					<h4>about Us</h4>
					<p>Fummy text of the printing antype- setting industry. Lorem Ipsum heen the industry's standard dummy text ever since m Ipsum heen the industry's standard dummy text ever since tm standard dummy text ever since.</p>
					<div class="icon">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<i class="fa fa-twitter" aria-hidden="true"></i>
						<i class="fa fa-instagram" aria-hidden="true"></i>
						<i class="fa fa-linkedin" aria-hidden="true"></i>
						<i class="fa fa-pinterest-p" aria-hidden="true"></i>
						<i class="fa fa-youtube-play" aria-hidden="true"></i>
					</div>
				</div>
			</div>
			<div class="col-lg-3 p-0">
				<div class="item contact_us">
					<h4>Contact Us</h4>
					<div class="location same flex">
						<div class="icon flex">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<p>1234, Park Street Avenue, NewYork America.</p>
					</div>
					<div class="email same flex">
						<div class="icon flex">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
						</div>
						<p>information@adminrosui.com helptotal@adminrosui.com</p>
					</div>
					<div class="phone same flex">
						<div class="icon flex">
							<i class="fa fa-phone phn" aria-hidden="true"></i>
						</div>
						<p>+880 1234 5678 +880 9876 5432</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 p-0">
				<div class="item link">
					<h4>useful links</h4>
					<ul>
						<li><p>Support</p></li>
						<li><p>Privacy</p></li>
						<li><p>Terms</p></li>
						<li><p>Projects</p></li>
						<li><p>Meet Team</p></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 p-0">
				<div class="item schedule">
					<h4>happy hours</h4>
					<div class="text flex">
						<div class="date common">
							<ul>
								<li><p>Monday</p></li>
								<li><p>Tuesday</p></li>
								<li><p>Wednesday</p></li>
								<li><p>Thrusday</p></li>
								<li><p>Friday</p></li>
								<li><p>Saterday</p></li>
								<li><p>Sunday</p></li>
							</ul>
						</div>
						<div class="time common">
							<ul>
								<li><p>09:00 am - 08:00 pm</p></li>
								<li><p>09:00 am - 08:00 pm</p></li>
								<li><p>09:00 am - 08:00 pm</p></li>
								<li><p>09:00 am - 05:00 pm</p></li>
								<li class="closed"><p>Closed</p></li>
								<li><p>09:00 am - 05:00 pm</p></li>
								<li><p>09:00 am - 08:00 pm</p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--=============================
		Footer Part End
==============================-->
<!--=============================
		Gallery Part Start
==============================-->
<section id="gallery">
	<div class="main gallery_slider">
		<div class="item">
			<div class="img">
				<img src="{{ asset('assets') }}/images/gallery1.png" alt="gallery1">
				<div class="overlay">
					<h4>Instagram Photos</h4>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="img">
				<img src="{{ asset('assets') }}/images/gallery2.png" alt="gallery1">
				<div class="overlay">
					<h4>Instagram Photos</h4>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="img">
				<img src="{{ asset('assets') }}/images/gallery3.png" alt="gallery1">
				<div class="overlay">
					<h4>Instagram Photos</h4>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="img">
				<img src="{{ asset('assets') }}/images/gallery4.png" alt="gallery1">
				<div class="overlay">
					<h4>Instagram Photos</h4>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="img">
				<img src="{{ asset('assets') }}/images/gallery5.png" alt="gallery1">
				<div class="overlay">
					<h4>Instagram Photos</h4>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="img">
				<img src="{{ asset('assets') }}/images/gallery6.png" alt="gallery1">
				<div class="overlay">
					<h4>Instagram Photos</h4>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="img">
				<img src="{{ asset('assets') }}/images/gallery3.png" alt="gallery1">
				<div class="overlay">
					<h4>Instagram Photos</h4>
				</div>
			</div>
		</div>
	</div>
</section>
<!--=============================
		Gallery Part End
==============================-->
<!--=============================
		Copyright Part Start
==============================-->
<section id="copyright">
	<div class="container">
        <div class="main flex">
			<p>Copyright ?? 2020 <span>FOODCART</span></p>
        	<p class="item2">All Rights Reserved</p>
       		<p> Designed By <span>The Old Stars</span></p>
		</div>
    </div>
</section>
<!--=============================
		Copyright Part End
==============================-->
<!--=============================
	Go To Top Button Part Start
==============================-->
<div href="#" id="backTotop">
	<i class="fa fa-arrow-up" aria-hidden="true"></i>
</div>
<!--=============================
	Go To Top Button Part End
==============================-->

	<!-- All JS link is here -->
	<script src="{{ asset('assets') }}/js/jquery-1.12.4.min.js"></script>
	<script src="{{ asset('assets') }}/js/popper.min.js"></script>
	<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('assets') }}/js/slick.min.js"></script>
	<script src="{{ asset('assets') }}/js/mixitup.min.js"></script>
	<script src="{{ asset('assets') }}/js/venobox.min.js"></script>
	<script src="{{ asset('assets') }}/js/script.js"></script>
</body>
</html>
