<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
   
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        display: grid;
        justify-content: end;
        align-content: end;
        min-height: 100vh;
        width: 100%;
        background: #e8e8e8;
        padding: 50px;

    }
    footer{
        display: grid;
        position: relative;
        width: 100%;
       
        padding: 50px 100px ;
        background: #fff;

    }
    footer .container{
 

        width: 90%;
        display:flex;
        grid-template-columns: 2fr 1fr 1fr 1fr;
        grid-gap: 20px;

    }
    footer .container .sec p{
        color: #555;
    }
    footer .container .sec h2{
        position: relative;
        color:#333;
        font-weight: 600;
        margin-bottom: 30px;

    }
    footer .container .mk{
        margin-top: 20px;
        display: grid;
        grid-template-columns: repeat(4,50px);

    }
footer .container .mk li{
    list-style: none;
}
footer .container .mk li a{
    display: inline-block;
    width: 36px;
    height: 36px;
    background-color: #333;
    display: grid;
    justify-content: center;
    align-content: center;
    text-decoration: none;


}
footer .container .mk li a i{
    color: #ffff;
    
    font-size:20px;
    
     
}

footer .container .links{
    position: relative;

}
footer .container .links ul li {
    list-style:none;

    
}
footer .container .links ul li a{
    color: #555;
    text-decoration: none;
     margin-bottom: 10px;
     display: inline-block;
     margin-bottom: 15px;
}
footer .container .contact .info {
    position: relative;
}
footer .container .contact .info li{
    display: grid;
    grid-template-columns: 30px 1fr;
    margin-top: 16ox  ;
}
footer .container .contact .info li span{
    
    color: #555;
    font-size: 20px;
    margin-bottom: 20px;
   
}
footer .container .contact .info li a{
    color: #555;
    text-decoration: none;

}
.copyrights{
     width: 100%;
     background: #fff;
     padding:20px 100px 30px; 
     text-align: center;
     color: #555;
     border: 1px solid rgba(0, 0, 0,0.15) ;

}
@media (max-width:991px)
{
    footer{
        padding: 40px;
    }
    footer .container{
        width: 100%;
        display: grid;
        grid-template-columns: repeat(2,1fr);
        grid-gap: 20px;

    }
    .copyrights{
        padding: 20px 40px 30px;
    }
}
@media (max-width:768px)
{
    footer .container{
        width: 100%;
        display: grid;
        grid-template-columns: repeat(1,1fr);
        grid-gap: 20px;

    }
}

.abt{
    margin-bottom: 30px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.para{
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

  
</style>


<footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
       
      </div>
    </div>
    
            <div class="container">
                <div class="about">
                    <div class="explain">
                    <h2 class="abt">ABOUT US</h2>
                    <p class="para">MILESTONE CARTS leads our users to have best Experience and usable time spending on purchasing our products, we enhance and support your life easier with the latest tchnologies and gadjets.      </p>
                </div>
                    <ul class="mk">
                        <li><a href=""><i class='bx bxs-phone-call'></i></a></li>
                        <li><a href=""><i class='bx bxl-gmail'></i></a></li>
                        <li><a href=""><i class='bx bxs-map' ></i></a></li>
                        <li><a href=""><i class='bx bxs-directions'></i></a></li>
                   </ul>
                </div>
                <div class="sec links">
                    <h2 class="abt">SUPPORT</h2>
                    <ul class="para">
                        <li> <a href="">FAQ</a> </li>
                        <li> <a href="">POLICIES</a> </li>
                        <li> <a href="">HELP</a></li>
                        <li> <a href="">CONTACT US</a> </li>
                    </ul>
                </div>
                <div class="sec links">
                    <h2 class="abt">REDIRECTS</h2>
                    <ul class="para">
                        <li> <a href="">HOME</a> </li>
                        <li> <a href="">SPORTS</a> </li>
                        <li> <a href="">ACADEMICS</a></li>
                        <li> <a href="">EVENTS</a> </li>
                    </ul>
                </div>
                <div class="sec contact">
                    <h2 class="abt">CONTACT US</h2>
                    <ul class="info">
                        <li>
                            <span><i class="bx bxs-phone-call"></i></span><p><a href="tel:+9153334000000">+915333400000</a></p>
                        </li>
                        <li>
                            <span><i class="bx bxl-gmail"></i></span><p><a href="mailto:rguktong.ac.in">support@milestonecarts.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
       
        <div class="copyrights">
            <p>copyrighted © 2024- MILESTONE CARTS</p>
        </div>
</footer>