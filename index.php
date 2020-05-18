<!DOCTYPE html>
<html>
  <head>
  <!-- **********************************graph****************** --> 
 


    <!-- ********************************************************************* -->
	<title></title>


	  <meta charset="utf-8">
    <link rel="stylesheet"  href="style1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <link href="https://ajax.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <? include 'corona.php';?> 
   


  <style >
  	html{
  		scroll-behavior: smooth;
  	}
       
    .carousel-inner img{
      width: 100%;
      height: 100%;
      }

      *{margin: 0;
      	padding:0;
      	font-family: 'muli',sans-serif;
      }
      .corona_rot img{animation: gocorona 3s linear infinite;

      }
      @keyframes gocorona{
      	0%{transform: rotate(0);}
      		100%{transform: rotate(360deg);}

      }
      .main_header{
      	height: 700px;
      	width:100%;
      }
      .heartbeat { animation: heart .8s  infinite ;

      }
      @keyframes heart{
      	0%{transform: scale(1);}
      	25%{transform: scale(1.1);}
      	40%{transform: scale(1);}
      	60%{transform: scale(1.1);}
      	100%{transform: scale(1);}
      }
      
     
      .sub_section{
      	background-color: #fbfafd;
      	background-image:linear-gradient( to left , rgb(107,158,226) ,rgb(207,218,232));
      } 
      .corona_update{
      	margin: 0 0 30px 0;
      }
  .corona_update h3{ color: #ff7675 }
  .corona_update h1{font-size: 2rem ;text-align:center;}
  .footer_style{
  	background-color: #829bfe!important;
  }
  .footer_style p{
  	margin-bottom: 0!important;
  }
  .btn{
    width: 200px;
    height: 80px;
    border:4px solid;
    color: #b5f1ed;
    font-weight: 700;
    text-transform: uppercase;
    cursor: pointer;
    font-size: 16px;
    position: relative;

  }
.btn::before,.btn::after{
  content: "";
  position: absolute;
  width: 14px;
  height: 4px;
  background: #353b48;
  transform: skewX(50deg);
  transition: .4s linear;
}
.btn::before{
  top:-4px;
  left: 10%;

}
.btn::after{
  bottom: -4px;
  right: 10%;
}
.btn:hover::before{
  left: 80%;

}
.btn:hover::after{
  right: 80%;
  
}



/***************for contact******************/

.abc{
font-family: sans-serif;

}
      .abc{
     background-image: linear-gradient(rgba(79,226,204,.6),rgba(199,204,131,.6));
     background-color:#black;
     background-size:cover;
     background-position: center;
     color: #fff!important;

}
.services{
  margin: 90px auto;
  text-align: center;
}
h1{
font-family: sans-serif;
letter-spacing: 1px;


}
h1:after{

  content: '';
  background: white;
  display: block;
  width: 150px;
  margin:10px auto;
}
.icon{
   color: #4c5957;
  font-size: 40px;
  margin: 20px auto;
  padding: 20px;
  height: 80px;
  width: 80px;
  border: 1px solid #4c5957;
  border-radius: 50%;

} 
.col-md-3:hover{
  box-shadow: 5px 7px 9px -3px rgba(255,255,255,0.5);
  cursor: pointer;
}
.col-12:hover{
  box-shadow: 5px 7px 9px -3px rgba(255,255,255,0.5);
  cursor: pointer;
}
.col-lg-3:hover{
  box-shadow: 5px 7px 9px -3px rgba(255,255,255,0.5);
  cursor: pointer;
}
/*****************background-imag*end of contact************************/
#preventionid{
  background:linear-gradient(rgba(26,188,156,0.7),rgba(231,76,60,0.7)), url('images/main.jpg');
	background-attachment: fixed;color: white;



}



     </style>
  

</head>
<body >
	   
    <!-- /////////navigation bar\\\\\\\\\ -->
	<header><nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#">covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li     
  </div>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#aboutid">about <span class="sr-only">(current)</span></a>
      </li     
  </div>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#symptomsid">symptoms <span class="sr-only">(current)</span></a>
      </li     
  </div>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#preventionid">prevention <span class="sr-only">(current)</span></a>
      </li     
  </div>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#contactid">contact<span class="sr-only">(current)</span></a>
      </li     
  </div>
</nav>
<!-- /////navigation bar end\\\\\\ -->

<!-- !-- ////carousel\\ -- -->
	<header>
	<div class="bd-example pt-1">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/0.png" class="d-block" width="1100" height="550"  alt="...">
      
      </div>
      <div class="carousel-item">
        <img src="images/1.png" class="d-block" width="1000" height="550" alt="...">
        
      </div>
      
     
       <div class="carousel-item">
        <img src="images/2.png" class="d-block" width="1000" height="550" alt="...">
        
      </div>
      
    
       <div class="carousel-item">
        <img src="images/3.png" class="d-block" width="1000" height="550" alt="...">
        
      </div>
      
   
       <div class="carousel-item">
        <img src="images/4.png" class="d-block" width="1000" height="550" alt="...">
      
      </div>
      
    
       <div class="carousel-item">
        <img src="images/5.png" class="d-block" width="1000" height="550" alt="...">
        
      </div>
      
    
       <div class="carousel-item">
        <img src="images/6.png" class="d-block" width="1000" height="550" alt="...">
        
      </div>
      
    
       <div class="carousel-item">
        <img src="images/7.png" class="d-block" width="1000" height="550" alt="...">
       
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" ></span>
      <span class="sr-only">Next</span>
    </a>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
  </div>
</div>
</header>
<!-- ********************************************fight together************************** -->
<div class="thing">
<div class="container">
    <div class="box">
      <h2>01</h2>
      <h3>Service One</h3>
            <p>ugcdb dj knc cknc dmdkc clk ckdkndnskds vsvdkn lnnskd knkldv knv 
             nnv nlds v vnlvvllklvnlvnklv nnv nlds v vnlvvllklvnlvnklv nvn .</p>
         </div>
         <div class="box">
      <h2>02</h2>
      <h3>Service two</h3>
            <p>ugcdb dj knc cknc dmdkc clk ckdkndnskds vsvdkn lnnskd knkldv knv 
             nnv nlds v vnlvvllklvnlvnklv nnv nlds v vnlvvllklvnlvnklv nvn .</p>
         </div>
         <div class="box">
      <h2>03</h2>
      <h3>Service three</h3>
            <p>ugcdb dj knc cknc dmdkc clk ckdkndnskds vsvdkn lnnskd knkldv knv 
             nnv nlds v vnlvvllklvnlvnklv nnv nlds v vnlvvllklvnlvnklv nvn .</p>
         </div>
     </div>
   </div>
<!-- *****************************************fight together********************************* -->
<div class="main_header">
	<div class="row w-100 h-100 ">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside  w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/heart.png" width="600" height="600 " class="heartbeat">
			</div>
			
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 ">
			<div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center  ">
				<h1 >Let's Stay Safe & Fight Together Against <br>Cor<span class="corona_rot"><img src="images/1589097898732.png" width="100" height="100"></span>na Virus</</h1></div>
	        </div>
	    </div>
     </div>
     <!-- **************************corona latests updates********************* -->


  <section class="corona_update container-fluid">
	<div class="my-5">
		<h3 class="text-center text-uppercase">covid 19 live updates of india</h3>
	</div>
<div class=" table-responsive">
	<table class=" table table-bordered table-striped text-center " >
		<tr>
			<th class="text-capitalize">lastupdatedtime</th>
			<th class="text-capitalize">state</th>
			<th class="text-capitalize">confirmed</th>
			<th class="text-capitalize">active</th>
			<th class="text-capitalize">recovered</th>
			<th class="text-capitalize">deaths</th>
		</tr>
<?php
$data=file_get_contents('https://api.covid19india.org/data.json');
 $coronalive=json_decode($data,true); 

$statescount=count($coronalive['statewise']);
$i=1;
while($i < $statescount){

?>
<tr>
	<td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
</tr>

 
<?php
 $i++;
}
?>



	</table>
</div>
</div>

</section>

<!-- **************about section****************** -->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>
	</div>
	<div class="row">
		<div class="col-lg-5 col-lg-6 col-12">
			<img src="images/corona.jpg" class="img-fluid">
        </div>


        <div class="col-lg-6 col-md-6 col-12 mt-4"> 
            <h2>WHAT IS COVID-19</h2>
            <p>COVID-19 is the disease caused by the new coronavirus that emerged in China in December 2019. COVID-19 symptoms include cough, fever, shortness of breath, muscle aches, sore throat, unexplained loss of taste or smell, diarrhea and headache. COVID-19 can be severe, and some cases have caused death</p>
            <p>The new coronavirus can be spread from person to person. It is diagnosed with a laboratory test. There is no coronavirus vaccine yet. Prevention involves frequent hand-washing, coughing into the bend of your elbow, staying home when you are sick and wearing a cloth face covering if you can't practice social distancing</p>

       </div>

   </div>
</div>
</div>
<!-- ************************************************************world covid info*********************************** -->
  <section class="corona_update container-fluid">
  <div class="my-5">
    <h3 class="text-center text-uppercase">covid 19 live updates of world</h3>
  </div>
<div class=" table-responsive">
  <table class=" table table-bordered table-striped text-center "  >
    <tr>
      <th class="text-capitalize">Country</th>
      <th class="text-capitalize">NewConfirmed</th>
      <th class="text-capitalize">TotalConfirmed</th>
      <th class="text-capitalize">NewDeaths</th>
      <th class="text-capitalize">TotalDeaths</th>
      <th class="text-capitalize">NewRecovered</th>
       <th class="text-capitalize">TotalRecovered</th>
        <th class="text-capitalize">Date</th>
    </tr>
<?php
$data=file_get_contents('https://api.covid19api.com/summary');
 $coronalive=json_decode($data,true); 

$countrycount=count($coronalive['Countries']);
$i=1;
while($i < $countrycount){
?>
<tr>
  <td><?php echo $coronalive['Countries'][$i]['Country'] ?></td>
  <td><?php echo $coronalive['Countries'][$i]['NewConfirmed'] ?></td>
  <td><?php echo $coronalive['Countries'][$i]['TotalConfirmed'] ?></td>
  <td><?php echo $coronalive['Countries'][$i]['NewDeaths'] ?></td>
  <td><?php echo $coronalive['Countries'][$i]['TotalDeaths'] ?></td>
  <td><?php echo $coronalive['Countries'][$i]['NewRecovered'] ?></td>
    <td><?php echo $coronalive['Countries'][$i]['TotalRecovered'] ?></td>
      <td><?php echo $coronalive['Countries'][$i]['Date'] ?></td>
</tr>

 
<?php
 $i++;
}
?>



  </table>
</div>
</div>

</section>
<!-- *************************district wise update of corona****************** -->

 <div class="container-fluid  pt-5 pb-5" style="background:linear-gradient(rgba(26,188,156,0.7),rgba(231,76,60,0.7)),url('images/three.jpg'); background-size: cover; background-attachment: fixed;" >
 <div class="section_header text-center mb-5 mt-4">
    <h1 style="color: white">District Wise Update Of States & union territories</h1>
 
</div>

 
  <div class=" container-fluid">

  <div class=" row">

    <div class="col-lg-3 col-md-4 col-6">
      <button class="btn "><a style="color: white"><div class="popup" onclick="myFunction()"><i class="fa fa-heartbeat" ></i>Andaman and Nicobar
  <span class="popuptext" id="myPopup">A Simple Popup!</span>
</div></a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php" style="color: #f1c3b5" ><i class="fa fa-heartbeat" aria-hidden="true"></i>Arunachal Pradesh</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #b5f1ed"><i class="fa fa-heartbeat" aria-hidden="true"></i>Assam</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php" style="color: #cdaa37"><i class="fa fa-heartbeat" aria-hidden="true"></i> Bihar</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: white"><i class="fa fa-heartbeat" aria-hidden="true"></i>Chandigarh</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #f1c3b5"><i class="fa fa-heartbeat" aria-hidden="true"></i>Chhattisgarh</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #b5f1ed"><i class="fa fa-heartbeat" aria-hidden="true"></i> Delhi</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #cdaa37"><i class="fa fa-heartbeat" aria-hidden="true"></i>Dadra and Nagar Haveli and Daman and Diu</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: white"><i class="fa fa-heartbeat" aria-hidden="true"></i>Goa</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #f1c3b5"><i class="fa fa-heartbeat" aria-hidden="true"></i>Gujarat</a></button></div>
      <div class="col-lg-3 col-md-4col-6">
      <button class="btn"><a href="day.php"style="color: #b5f1ed"><i class="fa fa-heartbeat" aria-hidden="true"></i>Himachal Pradesh</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #cdaa37"><i class="fa fa-heartbeat" aria-hidden="true"></i>Haryana</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: white"><i class="fa fa-heartbeat" aria-hidden="true"></i>Jharkhand</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #f1c3b5"><i class="fa fa-heartbeat" aria-hidden="true"></i>Jammu and Kashmir</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #b5f1ed"><i class="fa fa-heartbeat" aria-hidden="true"></i>Karnataka</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #cdaa37"><i class="fa fa-heartbeat" aria-hidden="true"></i> Kerala</a></button>
       </div>
       <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: white"><i class="fa fa-heartbeat" aria-hidden="true"></i>Ladakh</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #f1c3b5"><i class="fa fa-heartbeat" aria-hidden="true"></i>Lakshadweep</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #b5f1ed"><i class="fa fa-heartbeat" aria-hidden="true"></i>Maharashtra</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #cdaa37"><i class="fa fa-heartbeat" aria-hidden="true"></i>Meghalaya</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: white"><i class="fa fa-heartbeat" aria-hidden="true"></i> Manipur</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #f1c3b5"><i class="fa fa-heartbeat" aria-hidden="true"></i>Madhya Pradesh</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #b5f1ed"><i class="fa fa-heartbeat" aria-hidden="true"></i> Mizoram</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #cdaa37"><i class="fa fa-heartbeat" aria-hidden="true"></i>Nagaland</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: white"><i class="fa fa-heartbeat" aria-hidden="true"></i>Odisha</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #f1c3b5"><i class="fa fa-heartbeat" aria-hidden="true"></i>Punjab</a></button></div>
      <div class="col-lg-3 col-md44 col-6">
      <button class="btn"><a href="day.php"style="color: #b5f1ed"><i class="fa fa-heartbeat" aria-hidden="true"></i> Puducherry</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #cdaa37"><i class="fa fa-heartbeat" aria-hidden="true"></i>Rajasthan</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: white"><i class="fa fa-heartbeat" aria-hidden="true"></i>Sikkim</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #f1c3b5"><i class="fa fa-heartbeat" aria-hidden="true"></i> Telangana</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #b5f1ed"><i class="fa fa-heartbeat" aria-hidden="true"></i>Tamil Nadu</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #cdaa37"><i class="fa fa-heartbeat" aria-hidden="true"></i>Tripura</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: white"><i class="fa fa-heartbeat" aria-hidden="true"></i>Uttar Pradesh</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="districts/day.php"style="color: #f1c3b5"><i class="fa fa-heartbeat" aria-hidden="true"></i> Uttarakhand</a></button></div>
      <div class="col-lg-3 col-md-4 col-6">
      <button class="btn"><a href="day.php"style="color: #b5f1ed"><i class="fa fa-heartbeat" aria-hidden="true"></i> West Bengal</a></button></div>
       </div>
 
  </div>

    </div>
 


<!-- ***************corona symptoms************* -->
<div class="container-fluid  pt-5 pb-5" id="symptomsid">
<div class="section_header text-center mb-5 mt-4">
		<h1>CORONAVIRUS SYMPTOMS</h1>
	</div>

<div class="container-fluid" >
	<div class="row">
		<div class="col-lg-4 col-md-6 col-6 " >
			<figure class="text-center">
			<img src="images/1589018835678.png" class="img-fluid" width="120" height="120">
			<figcaption>fever</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-6 col-6 " >
			<figure class="text-center">
			<img src="images/1589077821700.png" class="img-fluid" width="120" height="120">
			<figcaption>tiredness</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-6 col-6  " >
			<figure class="text-center">
			<img src="images/1589019566285.png" class="img-fluid" width="120" height="120">
			<figcaption>dry cough</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-6 col-6 " >
			<figure class="text-center">
			<img src="images/1589079572009.png" class="img-fluid" width="120" height="120">
			<figcaption>head-achce</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-6 col-6 " >
			<figure class="text-center">
			<img src="images/1589079386014.png" class="img-fluid" width="120" height="120">
			<figcaption>difficulty in breathing</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-6 col-6 " >
			<figure class="text-center">
			<img src="images/1589078287915.png" class="img-fluid" width="120" height="120">
			<figcaption>heart strokes</figcaption>
			</figure>
		</div>	
	</div>
</div>
<!-- ******************************************************************************** -->
<div class="overlay">
<div class="container-fluid  pt-5 pb-5" id="preventionid">
<div class="section_header text-center mb-5 mt-4">
		<h1 style="color: black;"> 6 STEPS PREVENTION AGAINST CORONAVIRUS </h1>
    </div>
      <div class="container">
      	<div class="row">
      		<div class="col-lg-4 col-md-4 col-12">
      			<div class="row">
      				<div class="col-lg-4 col-md-4 col-12">
      					<figure class="text-center">
			<img src="images/1589187229300.png" class="img-fluid" width="90" height="90">
			
			</figure>
      				</div>
      				<div class="col-lg-8 col-md-8 col-12">
      					<p>Wet your hands with warm water, then apply a mild soap. Work the soap into a lather for 20-30 seconds, then rinse your hands clean under warm running water.</p>
      					
      				</div>
      				
      			</div>
      			
      		</div>
      		<div class="col-lg-4 col-md-4 col-12">
      			<div class="row">
      				<div class="col-lg-4 col-md-4 col-12">
      					<figure class="text-center">
			<img src="images/dis.jpeg" class="img-fluid" width="90" height="90">
			
			</figure>
      				</div>
      				<div class="col-lg-8 col-md-8 col-12">
      					<p>Maintain a distance of 6 ft (1.8 m) between you and others when you go out.</p>
      					
      				</div>
      				
      			</div>
      			
      		</div>
      		<div class="col-lg-4 col-md-4 col-12">
      			<div class="row">
      				<div class="col-lg-4 col-md-4 col-12">
      					<figure class="text-center">
			<img src="images/1589187150718.png" class="img-fluid" width="90" height="90">
			
			</figure>
      				</div>
      				<div class="col-lg-8 col-md-8 col-12">
      					<p>Keep your hands away from your eyes, nose, and mouth.</p>
      					
      				</div>
      				
      			</div>
      			
      		</div>
      		<div class="col-lg-4 col-md-4 col-12">
      			<div class="row">
      				<div class="col-lg-4 col-md-4 col-12">
      					<figure class="text-center">
			<img src="images/1589187095820.png" class="img-fluid" width="90" height="90">
			
			</figure>
      				</div>
      				<div class="col-lg-8 col-md-8 col-12">
      					<p>Don’t shake hands with people, whether they show symptoms or not.</p>
      					
      				</div>
      				
      			</div>
      			
      		</div>
      		<div class="col-lg-4 col-md-4 col-12">
      			<div class="row">
      				<div class="col-lg-4 col-md-4 col-12">
      					<figure class="text-center">
			<img src="images/1589187038429.png" class="img-fluid" width="90" height="90">
			
			</figure>
      				</div>
      				<div class="col-lg-8 col-md-8 col-12">
      					<p>Disinfect high-touch surfaces daily using a product that kills viruses</p>
      					
      				</div>
      				
      			</div>
      			
      		</div>
      		<div class="col-lg-4 col-md-4 col-12">
      			<div class="row">
      				<div class="col-lg-4 col-md-4 col-12">
      					<figure class="text-center">
			<img src="images/1589186950529.png" class="img-fluid" width="90" height="90">
			
			</figure>
      				</div>
      				<div class="col-lg-8 col-md-8 col-12">
      					<p>Stay home as much as possible to distance yourself from other people</p>
      					
      				</div>	
      			</div>	
      		</div>	
      	</div>
      </div>
</div>
</div>

<!-- ******************************contact info************** -->
<div class="pop">
     <h2>Popup</h2>

<div class="popup" onclick="myFunction()">click here
  <span class="popuptext" id="myPopup">  <section class="corona_update container-fluid">
  <div class="my-5 ml-5">
    <h3 class="text-center text-uppercase " align="center">Uttrakhand corona updates</h3>
  </div>
<div class=" table-responsive">
  <table class="  table table-bordered table-striped text-center  " align="center" width="50%"  style=" border-collapse: collapse; text-align: center; font-size: 18px;font-style: italic;text-align: center;">



    <tr>
      
      <th class="text-capitalize" style="border:2px solid #ddd;padding: 15px; background-color: dodgerblue; color: white">District</th>
      <th class="text-capitalize"style="border:2px solid #ddd;padding: 15px; background-color: dodgerblue; color: white">Active</th>
      <th class="text-capitalize"style="border:2px solid #ddd;padding: 15px; background-color: dodgerblue; color: white">Confirmed</th>
      <th class="text-capitalize"style="border:2px solid #ddd;padding: 15px; background-color: dodgerblue; color: white">Recovered</th>
      <th class="text-capitalize"style="border:2px solid #ddd;padding: 15px; background-color: dodgerblue; color: white">Deceased</th>
    </tr>
      
    

                      <?php
                       $data=file_get_contents('https://api.covid19india.org/v2/state_district_wise.json');
                       $coronalive=json_decode($data,true); 

                        $districtscount=count($coronalive[34]['districtData']);
                        $i=1;
                        while($i < $districtscount){

                         ?>
                         <tr >

  
                           <td style="border:2px solid #ddd;padding: 15px;" ><?php echo $coronalive[34]['districtData'][$i]['district'] ?></td>
                            <td style="border:2px solid #ddd;padding: 15px;"><?php echo $coronalive[34]['districtData'][$i]['active'] ?></td>
                        <td style="border:2px solid #ddd;padding: 15px;"><?php echo $coronalive[34]['districtData'][$i]['confirmed'] ?></td>
                         <td style="border:2px solid #ddd;padding: 15px;"><?php echo $coronalive[34]['districtData'][$i]['recovered'] ?></td>
                         <td style="border:2px solid #ddd;padding: 15px;"><?php echo $coronalive[34]['districtData'][$i]['deceased'] ?></td>
                           </tr>

 
                          <?php
                          $i++;
                           }
                          ?>


</table>

</div>
</div>


</section></span>
</div>
</div>

<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>





   

<!-- ***********contact form************** -->
<section class="abc" >
  <div class="container">
            <div class="services">
      <h1 style="color: #551818" >MY GOV SOCIAL HUB</h1>
           </div>
     <div class="row">
            
          <div class="col-md-4 col-lg-4 col-12 text-center">
             <a href="https://www.instagram.com/mygovindia/">
            <div class="icon">
                <i class=" fa fa-instagram"></i>
                </div>
                 
                    <h4 style="color:white;" > Instagram<hr> </h4>
            
                   
             </div>
             </a>
             
             <div class="col-md-4 col-lg-4 col-12 text-center">
                   <a href="https://m.facebook.com/MyGovIndia/">
            <div class="icon">
                 <i class="fa fa-facebook-f"></i>
                </div>
                    <h4 style="color:white">Facebook<hr></h4>
                    
             </div>
             </a>
             <div class="col-md-4 col-lg-4 col-12 text-center">
               <a href="https://wa.me/919013353535">
            <div class="icon">
                 <i class="fa fa-whatsapp"></i>
                </div>
                    <h4 style="color: white">Whatsapp<hr></h4>        
             </div>
               </a>
             <div class="col-md-4 col-lg-4 col-12 text-center">
              <a href="https://www.linkedin.com/company/mygov-india/">
            <div class="icon">
                 <i class="fa fa-linkedin"></i>
                </div>
                    <h4 style="color: white">Linkedin<hr></h4>
         
             </div>
             </a>
             <div class="col-md-4 col-lg-4 col-12 text-center">
               <a href="https://twitter.com/mygovindia">
            <div class="icon">
                 <i class="fa fa-twitter"></i>
                </div>
                    <h4 style="color: white">Twitter<hr></h4>
                  
                    
             </div>
             </a>
            
           
             <div class="col-md-4 col-lg-4 col-12 text-center">
              <a href="https://t.me/MyGovCoronaNewsdesk">
            <div class="icon">
                 <i class="fa fa-telegram"></i>
                </div>
                    <h4 style="color:white">Telegram<hr></h4>
                   
             </div>
             </a>
          

         </div>
    </div> 
    </div>
</section>
<!-- <section>
  <div class="container-fluid " id="contactid">
    <h1  class="text-center text text-capitalize pt-5">contact us</h1>
      <hr class="w-25 mx-auto pb-5">
      <div class="w-50 mx-auto">
  <form action="/action_page.php">
  <div class="form-group">
    <label for="email">your name</label>
    <input type="text" class="form-control" placeholder="Enter name" id="name">
  </div>
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">molibe no</label>
    <input type="molibe" class="form-control" placeholder="Enter number" id="pwd">
  </div>
   <div class="form-group">
    <label for="pwd">text area</label>
    <input type="text" class="form-control" placeholder="Enter text" id="pwd">
  </div>
    <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  
      </div>


</div>
</section> -->
<!-- ***<*******************************section***************************************************** -->




 
 
   
   
<!-- ************************************************************************************************ -->
 <a href='http://www.freevisitorcounters.com'>Freevisitorcounters</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=2ac92a0d22ebf771115c42aee26b305b0dd4b7d5'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/688830/t/0"></script>
<footer class="mt-5">
  <div class=" footer_style text-white text-center container-fluid"><p>@copyright nidhi sahani</p></div>
</footer>


 



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	




</body>
</html>