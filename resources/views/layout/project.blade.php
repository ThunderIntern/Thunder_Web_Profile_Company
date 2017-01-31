<!DOCTYPE html>
<html>
<head>
	<title>ThunderLab.Id</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
  <link href="{{asset('css/summernote.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
  <script src="{{asset('js/all.js')}}" type="text/javascript"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  <link rel="shortcut icon" href="/image/favicon.ico">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.min.js"></script>
</head>
</head>
<body>
<nav id="navbar" class="navbar navbar-default navbar-fixed-top navbar-cp">
    <div class="container-fluid">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#idnav" aria-expanded="false">
      <div class="sr-only">toggle navigation</div>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
      <span><a class="navbar-brand" href="#section1"  id="span"><span class="sprite ieminilogo"></span></a></span>
      <div class="collapse navbar-collapse" id="idnav">
            <ul class="nav navbar-nav">
                <li class="li1" ><a href="#section2">LABORATORY</a></li>
                <li class="hidden-xs"><a href="#section1"><span class="sprite ielogo"></span></a></li>
                <li class="li3"><a href="#section3">PORTOFOLIO</a></li>
            </ul>
        </div>
        </div>
    </div>

</nav>
<section id="section1" class="content-section">
  <div class="container-fluid col-lg-12">
  <div class="row">
    <img class="img-responsive" src="image/hero.jpg">
    </div>
  </div>
</section>
<section id="section2" class="content-section text-center">
	   <div id="isi1" class="row">
      
	     <h1 class="title"> <span class="sprite ieTicon"></span> TECH SOLUTION ARTISAN <span class="sprite ieTicon"></span></h1>
	     <p class="tech"><br>In the thunderweb,we crafted thousands line of beautiful codes
	     <br>into valuable system
	     <br>we kept squad focus on their best</p>
	   </div>
</section>
	<section class="content-section text-center">

  <div class="container-fluid">
  <div id="isi2" class="row">
      <div class="col-sm-4"><h1 class="title">WEB DESIGN</h1><p class="menu"><br>Interface Design
            <br>Responsive Design <br>UX Srategy</p></div>
      <div class="col-sm-4"><h1 class="title">WEB DEVELOPMENT</h1><p class="menu" ="><br>System Analyst
            <br>Bussines Flow & Policy<br>Softwere Architecture</p></div>
      <div class="col-sm-4"><h1 class="title">IMPLEMENTATION</h1><P class="menu"><br>System Performance
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
      <h2>Join Our Squad</h2>
    </div>
    <div class="modal-body">
      <div class="divform">
        <form action="{{ url('joinmail')}}" method="POST">
         <label for="email" style="margin-left: 5%"> Email</label>&nbsp;&nbsp;&nbsp;
        <br>
          <input type="email" id="fEmail" name="email" placeholder="Email">
          <br>
          <label for="bidang" style="margin-left:5%">Bidang</label>
          <br>
          <select id="fbidang" name="bidang">
          <optgroup label="--Bidang--">
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
          </optgroup> 
          </select>
          <br>
          <label for="file" style="margin-left: 5%">Upload</label>
          <input type="file" name="upload" id="file"/>
          <div class="setsummer">
          <div class="row">
          <div class="container">
          <div class="col-lg-6">

          <form action="">
          <div class="form-group">
          <label>cover letter </label>
          <textarea name="" id="letter"  rows="5" class="form-control"></textarea>
          </div>
          </form>
          </div>
          </div>
          </div>
          </div>
          <script>
          
          </script>
      </div>
    </div>
    <div class="modal-footer">
      <div class="btn">
        <button class="closebtn" type="button">Close</button>
        <button class="submitbtn" type="Submit">Submit</button>
        {{ csrf_field() }}
      </div>
      </form>
    </div>
  </div>

</div>
<script src="/js/all.js"></script>
    </div>
  </div>
  </div>
</section>
<section id="section3" class="content-section text-center">
<div class="container-fluid">
  <div id="isi1">
    <h1 class="title"><span class="sprite ieTicon"></span> YOUR TIME TOO PRECIOUS <span class="sprite ieTicon"></span></h1>
    <p class="tech" ><br>We are focusing in helping small business to run like a
    <br>big cooperate,so that they can focus on their growth.We<br>are archieving that by offering
    tech solution with many<br>service like accounting tech solution,data analysis<br>solution,HR
    tech solution,costumer relation management,<br>management tech solution, and much more.
  </div>
  <div class="row">
      <div class="col-sm-4 hidden-xs "><span class="textright"><h1 >HOTEL</h1><a id="link" href="http://hotelriverstone.com/" target="_blank">http://hotelriverstone.com/</a></span></div>
      <div class="col-sm-8 col-xs-12"><div class="visible-xs-inline-block"><p><h1>HOTEL</h1><a id="link" href="http://hotelriverstone.com/" target="_blank">http://hotelriverstone.com</a></p></div>

      <img class="img-responsive" id="doremi" onmouseover="playclip();" src="image/hotel.jpg">
      <audio class="audio" src="/audio/sound_doremi/do.mp3"></audio>
       </div>
      </div>
<div class="row">
      <div class="col-sm-8 col-xs-12"><div class="visible-xs-inline-block"><p><h1>EDUKASI</h1><a id="link" href="https://bloom.id" target="_blank">https://bloom.id</a></p></div>
      <img class="img-responsive" id="doremi" onmouseover="playclip1();" src="image/edukasi.jpg">
      <audio class="audio" src="/audio/sound_doremi/re.mp3"></audio>
       </div>
      <div class="col-sm-4 hidden-xs"><span class="textleft"><h1 >EDUKASI</h1><a id="link" href="https://bloom.id/" target="_blank" >https://bloom.id/</a></span></div>
</div>
<div class="row">
  <div class="col-sm-4 hidden-xs"><span class="textright"><h1>AKUNTANSI</h1></span></div>
  <div class="col-sm-8 col-xs-12"><div class="visible-xs-inline-block"><p><h1>AKUNTANSI</h1></p></div>
  <img class="img-responsive" id="doremi" onmouseover="playclip2();" src="image/akuntansi.jpg">
  <audio class="audio" src="/audio/sound_doremi/mi.mp3"></audio>
   </div>
</div>
<div class="row">
  <div class="col-sm-8 col-xs-12"><div class="visible-xs-inline-block"><p><h1>TRAVEL</h1><a id="link" href="http://www.tamasyahati.com" target="_blank">http://www.tamasyahati.com</a><br><a id="link" href="http://capcus.id" target="_blank">http://capcus.id</a></p></div>
  <img class="img-responsive" id="doremi" onmouseover="playclip3();" src="image/travel.jpg">
  <audio class="audio" src="/audio/sound_doremi/fa.mp3"></audio>
   </div>
  <div class="col-sm-4 hidden-xs"><span class="textleft"><h1>TRAVEL</h1><a id="link" href="http://www.tamasyahati.com/" target="_blank">http://www.tamasyahati.com/</a><br><a id="link" href="http://capcus.id" target="_blank">http://capcus.id</a></span></div>
</div>
<div class="row">
  <div class="col-sm-4 hidden-xs"><span class="textright"><h1>PORTAL</h1><a class="link"  href="http://halomalang.com/" target="_blank">http://halomalang/.com<br><a id="link" href="http://gopego.com" target="_blank">http://gopego.com/</a></a></div>
  <div class="col-sm-8 col-xs-12"><div class="visible-xs-inline-block"><p><h1>PORTAL</h1><a id="link" href="http://halomalang.com/" target="_blank">http://halomalang.com/</a><br><a id="link" href="http://gopego.com" target="_blank">http://gopego.com/</a></p></div>
  <img class="img-responsive" id="doremi" onmouseover="playclip4();" src="image/portal.jpg">
  <audio class="audio" src="/audio/sound_doremi/sol.mp3"></audio>
   </div>
</div>
<div class="row">
  <div class="col-sm-8 col-xs-12"><div class="visible-xs-inline-block"><p><h1>E-COMMERCE</h1><a id="link" href="http://balin.id/" target="">http://balin.id/</a></p></div><img class="img-responsive" id="doremi" onmouseover="playclip5();" src="image/e-commerce.jpg">
  <audio class="audio" src="/audio/sound_doremi/la.mp3"></audio>
  </div>
  <div class="col-xs-4 hidden-xs"><span class="textleft"><h1>E-COMMERCE</h1><a id="link" href="http://balin.id/" target="_blank">http://balin.id/</a></span></div>
</div>
<div class="row">
  <div class="col-sm-4 hidden-xs"><span class="textright"><h1>HR</h1><a id="link" href="http://www.reliance-insurance.com/" target="_blank">http://www.reliance-insurance.com/</a></span></div>
  <div class="col-sm-8 col-xs-12"><div class="visible-xs-inline-block"><p><h1>HR</h1><a id="link" href="http://www.reliance-insurance.com/" target="_blank">http://www.reliance-insurance.com/</a></p></div><img class="img-responsive" id="doremi" onmouseover="playclip6();" src="image/hr.jpg">
  <audio class="audio" src="/audio/sound_doremi/si.mp3"></audio>
   </div>
</div>
<div class="row">
  <div class="col-sm-8 col-xs-12"><div class="visible-xs-inline-block"><p><h1>NOTARIS</h1></p></div><img class="img-responsive" id="doremi" onmouseover="playclip7();" src="image/notaris.jpg">
  <audio class="audio" src="/audio/sound_doremi/do(octave).mp3"></audio>
  </div>
  <div class="col-sm-4 hidden-xs"><span class="textleft"><h1>NOTARIS</h1></span></div>
</div>
</div>
</section>
<section>
   <div class="row">
    <div class="text-center "><button id="myBtn" class="button" >Request A Demo</button>
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <h2>Request Our Demo</h2>
    </div>
    <div class="modal-body">
      <div class="divform">
        <form action="{{ url('sendmail') }}" method="POST">
              @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
              @endif
        <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Email" value="{{old('email')}}">
          @if($errors->has('email'))
          <p>{{$errors->first('email')}} </p>
          @endif
          <br>
          <label for="Bisnis">Bisnis</label>
          <select id="Bisnis" name="bisnis">
            <option value="{{old('bisnis')}}">{{old('bisnis')}}</option>
            <option value="hotel">Hotel</option>
            <option value="sekolah">Sekolah</option>
            <option value="koperasi">Koperasi</option>
            <option value="notaris">Notaris</option>
            <option value="akutansi">Akutansi</option>
            <option value="ecommerce">Ecommerce</option>
          </select>
          <br>
          <div class="setsummer">
          <label for="Overview1">Overview</label>
          <br>
          <textarea id="Overview1" name="overview">{{old('overview')}}</textarea></div>
          
          <script>
          
          </script>
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
      <h2>Propose A Service</h2>
    </div>
    <div class="modal-body">
      <div class="divform">
        <form action="{{url('proposemail')}}" method="POST">
        <label for="Email">Email</label>
          <input type="email" id="Email" name="email" placeholder="Email">
          <br>
          <label for="Bisnis">Bisnis</label>
          <select id="Bisnis" name="bisnis">
            <option value="hotel">Hotel</option>
            <option value="sekolah">Sekolah</option>
            <option value="koperasi">Koperasi</option>
            <option value="notaris">Notaris</option>
            <option value="akutansi">Akutansi</option>
            <option value="ecommerce">Ecommerce</option>
          </select>
          <br>
          <div class="setsummer">
          <label for="Overview2">Overview</label>
          <br>
          <textarea id="Overview2" name="overview"></textarea></div>
          
          <script>
          
          </script>
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
</div><a href="#section1"><span class="sprite ieGoto" ></span></a></div>
</section>
<footer class="footer">
<hr>
<div class="footleft">
  &copy;2017 Thunderlab.id
</div>
<div class="footright">
  Stay Update<span class="sprite iefb"><a href="http://www.facebook.com"></a></span><span class="sprite ieTwi"><a href="http://www.twitter.com"></a></span>
</div>
</footer> 
</body>
</html>