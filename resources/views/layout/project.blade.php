<!DOCTYPE html>
<html>
<head>
	<title>ThunderLab</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top navbar-cp">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-12">
            <ul class="nav navbar-nav">
                <li class="li1" ><a href="#">LABORATORY</a></li>
                <li  class="li2"><a href="#"></a><span class="sprite ielogo"></span></li>
                <li class="li3"><a href="#">PORTOFOLIO</a></li>
            </ul>

        </div>
    </div>

</nav>
<section class="content-section text-center">
  <div class="container-fluid">
    <img class="image" src="image/hero.jpg">
  </div>
</section>
<section class="content-section text-center">
	   <div id="isi1" class="row">
      
	     <h1> <span class="sprite ieTicon"></span> TECH SOLUTION ARTISAN <span class="sprite ieTicon"></span></h1>
	     <p class="tech" ="tech"><br>In the thunderweb,we crafted thousands line of beautiful codes
	     <br>into valuable system
	     <br>we kept squad focus on their best</p>
	   </div>
	<section class="content-section text-center">
  <div class="container-fluid">
  <div id="isi2" class="row">
      <div class="col-sm-4"><h1>WEB DESIGN</h1><p class="menu"><br>Interface Design
            <br>Responsive Design <br>UX Srategy</p></div>
      <div class="col-sm-4"><h1>WEB DEVELOPMENT</h1><p class="menu" ="><br>System Analyst
            <br>Bussines Flow & Policy<br>Softwere Architecture</p></div>
      <div class="col-sm-4"><h1>IMPLIMENTATION</h1><P class="menu"><br>System Performance
            <br>Technical Help<br>QA & User Testing</P></div>
  </div>
  <div class="row">
    <div class="text-center">
    <!-- Trigger/Open The Modal -->
      <button  id="Btn1" class="button">Join Our Squad</button>
    <!-- The Modal -->
    <div id="Modal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Join our squad</h2>
    </div>
    <div class="modal-body">
      <div class="divform">
        <form>
          <label for="fEmail">Email</label>
          <input type="email" id="fEmail" name="email" placeholder="mail address">
          <br>
          <label for="fbidang">Bidang</label>
          <select id="fbidang" name="bidang">
          <optgroup label="Web Designer">
            <option value="Interface Design">Interface Design</option>
            <option value="Responsive Design">Responsive Design</option>
            <option value="UX Strategy">UX Strategy</option>
          </optgroup>
          <optgroup label="Web Development">
            <option value="System Analyst">System Analyst</option>
            <option value="Business flows & policies">Business flows & policies</option>
            <option value="Software Architecture">Software Architecture</option>
          </optgroup>  
          <optgroup label="Implementation">
            <option value="System Performance">System Performance</option>
            <option value="Technical Help"> Techical Help</option>
            <option value="QA & User Testing">QA & User Testing</option>
          </optgroup> 
          </select>
          <br>
          <label for="file">Upload</label>
          <input type="file" name="upload" id="file"/>
          <label for="letter">Cover Letter</label>
          <br>
          <textarea id="letter" name="letter" cols="50" rows="5"></textarea>
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <div class="btn">
        <button class="closebtn" type="button">Close</button>
        <button class="submitbtn" type="button">Submit</button>
      </div>
    </div>
  </div>

</div>
<script src="/js/all.js"></script>
    </div>
  </div>
  </div>
</section>
<section class="content-section text-center">
  <div id="isi1">
    <h1><span class="sprite ieTicon"></span> YOUR TIME TOO PRECIOUS <span class="sprite ieTicon"></span></h1>
    <p class="tech" ><br>We are focusing in helping small business to run like a
    <br>big cooperate,so that they can focus on their growth.We<br>are archieving that by offering
    tech solution with many<br>service like accounting tech solution,data analysis<br>solution,HR
    tech solution,costumer relation management,<br>management tech solution, and much more.
  </div>
  <div class="row">
      <div class="col-md-4"><span class="textright"><h1 >HOTEL</h1><a class="text-right" href="http://hotelriverstone.com/">http://hotelriverstone.com/</a></span></div>
      <div class="col-md-8"><img src="image/hotel.jpg"></div>
      </div>
<div class="row">
      <div class="col-md-8"><img src="image/edukasi.jpg"></div>
      <div class="col-md-4"><span class="textleft"><h1 >EDUKASI</h1><a href="https://bloom.id/" >https://bloom.id/</a></span></div>
</div>
<div class="row">
  <div class="col-md-4"><span class="textright"><h1>AKUNTANSI</h1></span></div>
  <div class="col-md-8"><img src="image/akuntansi.jpg"></div>
</div>
<div class="row">
  <div class="col-md-8"><img src="image/travel.jpg"></div>
  <div class="col-md-4"><span class="textleft"><h1>TRAVEL</h1><a href="http://www.tamasyahati.com/">http://www.tamasyahati.com/</a><br><a href="http:/capcus.id" >http:/capcus.id</a></span></div>
</div>
<div class="row">
  <div class="col-md-4"><span class="textright"><h1>PORTAL</h1><a href="http://halomalang.com" >http://halomalang.com<br><a href="http://gopego.com" >http://gopego.com/</a></a></div>
  <div class="col-md-8"><img src="image/portal.jpg"></div>
</div>
<div class="row">
  <div class="col-md-8"><img src="image/e-commerce.jpg"></div>
  <div class="col-md-4"><span class="textleft"><h1>E-COMMERCE</h1><a href="http://balin.id/" >http://balin.id/</a></span></div>
</div>
<div class="row">
  <div class="col-md-4"><span class="textright"><h1>HR</h1><a href="http://www.reliance-insurance.com/" >http://www.reliance-insurance.com/</a></span></div>
  <div class="col-md-8"><img src="image/hr.jpg"></div>
</div>
<div class="row">
  <div class="col-md-8"><img src="image/notaris.jpg"></div>
  <div class="col-md-4"><span class="textleft"><h1>NOTARIS</h1></span></div>
</div>
</section>
<section>
   <div class="row">
    <div class="text-center"><button id="myBtn" class="button" >Request A Demo</button>
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Request our demo</h2>
    </div>
    <div class="modal-body">
      <div class="divform">
        <form action="{{ url('sendmail') }}" method="POST">
          <label for="fEmail">Email</label>
          <input type="email" id="fEmail" name="email" placeholder="mail address">
          <br>
          <label for="fBisnis">Bisnis</label>
          <select id="fBisnis" name="bisnis">
            <option value="hotel">Hotel</option>
            <option value="sekolah">Sekolah</option>
            <option value="koperasi">Koperasi</option>
            <option value="notaris">Notaris</option>
            <option value="akutansi">Akutansi</option>
            <option value="ecommerce">Ecommerce</option>
          </select>
          <br>
          <label for="overview">Overview</label>
          <br>
          <textarea id="overview" name="overview"></textarea>
      </div>
    </div>
    <div class="modal-footer">
      <div class="btn">
        <button class="closebtn" type="button">Close</button>
        <button class="submitbtn" type="Submit">Submit</button>
        {{ csrf_field() }}
          </form>
      </div>
    </div>
  </div>

</div>
<script src="/js/all.js"></script>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="Btn3" class="button">Propose A Service</button>
    <div id="Modal3" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Propose a service</h2>
    </div>
    <div class="modal-body">
      <div class="divform">
        <form>
          <label for="fEmail">Email</label>
          <input type="email" id="fEmail" name="email" placeholder="mail address">
          <br>
          <label for="fBisnis">Bisnis</label>
          <select id="fBisnis" name="Bisnis">
            <option value="hotel">Hotel</option>
            <option value="sekolah">Sekolah</option>
            <option value="koperasi">Koperasi</option>
            <option value="notaris">Notaris</option>
            <option value="akutansi">Akutansi</option>
            <option value="ecommerce">Ecommerce</option>
          </select>
          <br>
          <label for="overview">Overview</label>
          <br>
          <textarea id="overview" name="overview" cols="45" rows="5"></textarea>
        
      </div>
    </div>
    <div class="modal-footer">
      <div class="btn">
        <button class="closebtn" type="button">Close</button>
        <button class="submitbtn" type="button">Submit</button>
      </div>
      </form>
    </div>
  </div>

</div>
<script src="/js/all.js"></script>
</div><span class="sprite ieGoto" ><a href="#"></a></span></div>
</section>
<footer class="footer">
<hr>
<div class="footleft">
  &copy;2017 Thunderlab.id
</div>
<div class="footright">
  Stay Update<span class="sprite iefb"></span><span class="sprite ieTwi"></span>
</div>
</footer> 
</body>
</html>