<?php include 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>
<style>
	
	*{
		margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
          
      }
      body{
        min-height: 100vh;
		align-items:center;
		justify-content:center;
      }
	  
		.heads{
            text-transform: capitalize;
            color: rgb(140, 140, 233);
			font-size: 44px;
			margin-top:5%;
            font-weight: bold;
        }
		.paras{
			margin-top:5%;
			text-transform:lowercase;
			font-size:22px;
			
		}
		.middlest {
            position: absolute;
            margin-top:15%;
			left:13%;
            transform: translate(-50%, -50%);
        }
        
        .btnd {
            position: relative;
            display: block;
            color: #000;
            font-size: 14px;
            font-family: fantasy;
            font-weight: 200;
            text-decoration: none;
            margin: 30px 0;
            border: 2px solid dodgerblue;
            padding: 14px 50px;
            text-transform: uppercase;
            letter-spacing: 2px;
            overflow: hidden;
            transition: 1s all ease;
        }
        
        .btnd:hover {
            color: #000;
        }
        
        .btnd::before {
            background-color:rgb(172, 172, 247);
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
            transition: all 0.6s ease;
        }
        /*----------btnd 1------------*/
        
        .btnd1::before {
            width: 0;
            height: 100%;
        }
        
        .btnd1:hover::before {
            width: 100%;
        }
        /*----------btnd 2------------*/
        
        .btnd2::before {
            width: 100%;
            height: 0;
        }
        
        .btnd2:hover::before {
            height: 100%;
        }
		/*--------about us----------------*/
		#feature {
            width: 100%;
			margin-top:30%;
			margin-left:22%;
            padding: 70px 0;
			align-items:center;
			justify-content:center;
			display:flex;
			flex-wrap:wrap;
		

			
			

        }
        
        .title-text {
            text-align: center;
            padding-bottom: 70px;
			left:50%;
        }
        
        .title-text p {
            margin: auto;
            font-size: 20px;
			align-items:center;
			justify-content:center;
            color: #009688;
            font-weight: bold;
            padding: 10px;
            position: relative;
            z-index: 1;
            display: inline-block;
			

        }
        
        .title-text p::after {
            content: '';
            width: 50px;
            height: 35px;
            background: linear-gradient(#019587, #fff);
            position: absolute;
            top: -20px;
            left: 10px;
            z-index: -1;
            transform: rotate(10deg);
            border-top-left-radius: 35px;
            border-bottom-right-radius: 35px;
        }
        
        .title-text h1 {
            font-size: 50px;
			left:50%;
        }
        
        .feature-box {
            width: 80%;
            margin: auto;
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            text-align: center;
        }
        
        .features {
            flex-basis: 50%;
        }
        
        .features-img {
            flex-basis: 50%;
            margin: auto;
        }
        
        .features-img img {
            width: 70%;
            border-radius: 10px;
        }
        
        .features h1 {
            text-align: left;
            margin-bottom: 10px;
            font-weight: 100;
            color: #009688;
        }
        
        .features-description {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }
        
        .feature-icon .fa {
            width: 50px;
            height: 50px;
            font-size: 30px;
            line-height: 50px;
            border-radius: 8px;
            color: #009688;
            border: 1px solid #009688;
        }
        
        .feature-text p {
            padding: 0 20px;
            text-align: initial;
        }
        /*-----------media query for features section------------*/
        
        @media screen and (max-width:770px) {
            .title-text h1 {
                font-size: 35px;
            }
            .features {
                flex-basis: 100%;
            }
            .features-img {
                flex-basis: 100%;
            }
            .features-img img {
                width: 200%;
            }
		}
		.imger{
			height:400px;
			width:600px;
		}
			/*--------------con------------*/
			.contacted{
  width: 85%;
  margin-left:25%;
  background: #fff;
  border-radius: 6px;
  align-items:center;
  justify-content:center;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  
}
.contacted .tented{
  display: flex;
  align-items: center;
  justify-tented: space-between;
}
.contacted .tented .smith{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-tented: center;
  margin-top: 15px;
  position: relative;
}
.tented .smith::before{
  tented: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.tented .smith .bios{
  margin: 14px;
  text-align: center;
}
.tented .smith .bios i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.tented .smith .bios .mayor{
  font-size: 18px;
  font-weight: 500;
}
.tented .smith .bios .txt1,
.tented .smith .bios .txt2{
  font-size: 14px;
  color: #afafb6;
}
.contacted .tented .william{
  width: 75%;
  margin-left: 75px;
}
.tented .william .mayor-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.william .inptbox{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.william .inptbox input,
.william .inptbox textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.william .message-box{
  min-height: 110px;
}
.william .inptbox textarea{
  padding-top: 6px;
}
.william .button{
  display: inline-block;
  margin-top: 12px;
}
.william .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #3e2093;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #5029bc;
}

@media (max-width: 950px) {
  .contacted{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .contacted .tented .william{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .contacted{
    margin: 40px 0;
    height: 100%;
  }
  .contacted .tented{
    flex-direction: column-reverse;
  }
 .contacted .tented .smith{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-tented: center;
   flex-wrap: wrap;
 }
 .contacted .tented .smith::before{
   display: none;
 }
 .contacted .tented .william{
   width: 100%;
   margin-left: 0;
 }
}
  .contacter_header{
	text-align:center;
	margin-left:40%;
  }
  
  /* #wallpapered{
            background: linear-gradient(rgba(0, 0, 0, 0.5), #009688);
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100wh;
        } */

   .con_width {
            text-align: center;
            padding-bottom: 70px;
			
        }
        
        .con_width p {
            margin: auto;
            font-size: 20px;
			align-items:center;
			justify-content:center;
            color: #009688;
            font-weight: bold;
            padding: 10px;
            position: relative;
            z-index: 1;
            display: inline-block;
            margin-left:40%;
			

        }
        
        .con_width p::after {
            content: '';
            width: 50px;
            height: 35px;
            background: linear-gradient(#019587, #fff);
            position: absolute;
            top: -20px;
            left: 10px;
            z-index: -1;
            transform: rotate(10deg);
            border-top-left-radius: 35px;
            border-bottom-right-radius: 35px;
            margin-left:4 0%;
        }
        
        .con_width h1 {
            font-size: 50px;
			
        }    
        .para_input{
           margin-left:40%;

        }  
        .header_input{
           margin-left:4  0%;
           
        } 
</style>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
					<!-------------corousel-------------->
					<section id="wallpapered">
           
<div class="mainer">
	<h1 class="heads">welcome to milestone carts .</h1>
	<p class="paras"> 
	Here we assist we all the elcetronic products and we accept and sell electronics and electroni gadjets like mobiles and laptops and systems based upon the users requirements.
	have any queries feel free to ask us!
	</p>
	<p class="paras"> 
	MILESTONE CARTS is one of the best platform to levelup and purchase your desired products in one place.It is a platform where users can buy desired gadjets which reasonable prices.MILESTONE offers several offers on recent products
	</p>
	
</div>
<div class="buttoner">
<div class="middlest">
        <a href="" class="btnd btnd1">KNOW MORE</a>
        <a href="" class="btnd btnd2">SHOPPING</a>
       

    </div>
</div>
					</section>

 <!-------------Features--------------->
 <section id="feature">
        <div class="title-text">
            <p >ABOUT US </p>
            <h1>What Our Speciality</h1>
        </div>
        <div class="feature-box">
			
            <div class="features">
                <h1>Experienced staff</h1>
                <div class="features-description">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="feature-text">
                        <p>here u can have the more number of requested staff with all facilities</p>
                    </div>
                </div>

                <h1>Pre online booking </h1>
                <div class="features-description">
                    <div class="feature-icon">
                        <i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="feature-text">
                        <p>here u can have the more number of requested staff with all facilities</p>
                    </div>
                </div>

                <h1>Affordable cost</h1>
                <div class="features-description">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="feature-text">
                        <p>here u can have the more number of requested staff with all facilities</p>
                    </div>
                </div>
            </div>
            <div class="features-img">
                <img src="images.jpeg" class="imger" alt="" >
            </div>
        </div>
    </section>
	<section id="con_basis">

  <div class="con_width">
            <p class="para_input ">CONTACT US</p>
            <h1 class="header_input">We are here </h1>
        </div>
	<!-- <h1 class="contacter_header">CONTACT US</h1> -->
	<div class="contacted">
	
    <div class="tented">
      <div class="smith">
        <div class="adrs bios">
          <i class="fas fa-map-marker-alt"></i>
          <div class="mayor">Address</div>
          <div class="txt1">Surkhet, NP12</div>
          <div class="txt2">Birendranagar 06</div>
        </div>
        <div class="phone bios">
          <i class="fas fa-phone-alt"></i>
          <div class="mayor">Phone</div>
          <div class="txt1">+0098 9893 5647</div>
          <div class="txt2">+0096 3434 5678</div>
        </div>
        <div class="email bios">
          <i class="fas fa-envelope"></i>
          <div class="mayor">Email</div>
          <div class="txt1">codinglab@gmail.com</div>
          <div class="txt2">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="william">
        <div class="mayor-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form action="#">
        <div class="inptbox">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="inptbox">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="inptbox message-box">
          <input type="textarea" placeholder="message">
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
  </section>
	<!--------contact us----------->

<section id="con">
	
<div class="milestone">

</div>


		       		<?php
		       			$month = date('m');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>&#36; ".number_format($row['price'], 2)."</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 


	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>