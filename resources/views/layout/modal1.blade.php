@extends('layout.project')

@section('modal1')
 <!-- Trigger/Open The Modal -->
<button  id="Btn1" class="button">Join Our Squad</button>
  <!-- The Modal -->
<div id="Modal1" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close">&times;</button>
      <h3>Join Our Squad</h3>
    </div>
    <div class="modal-body">
      <div class="divform">
        <form action="{{ url('joinmail')}}" method="POST"> 
         <label for="email" class="straight"> Email</label>&nbsp;&nbsp;&nbsp;
        <br>
          <input type="email" id="fEmail" name="email" placeholder="Email" value="{{old('email')}}">
          <br>
          <label for="bidang" class="straight">Bidang</label>
          <br>
          <select id="fbidang" name="bidang">
          <option value="{{old('bidang')}}">{{old('bidang')}}</option>
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
          <label for="file" class="straight">Upload</label>
          <input type="file" name="upload" id="file" value="{{old('upload')}}" />
          <div class="setsummer">
              <label>cover letter </label>
              <textarea name="letter" id="letter"  rows="10" class="form-control">{{old('letter')}}</textarea>
          </div>
        </div>
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
<script src="/js/all.js"></script>
</div>
</div>
@endsection

@section('modal2')
<span class="kolom-xs-12">
<button id="myBtn" class="button" >Request A Demo</button></span>
  <div id="myModal" class="modal">
  <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close">&times;</button>
        <h3>Request Our Demo</h3>
      </div>
      <div class="modal-body">
        <div class="divform">
          <form action="{{ url('sendmail') }}" method="POST">
            <label for="email" class="straight">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" value="{{old('email')}}">
            <br>
            <label for="Bisnis" class="straight">Bisnis</label>
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
                <textarea id="Overview1" name="overview"></textarea>
            </div>
          </div>
        </div>
    <div class="modal-footer">
      <div class="btn">
        <button class="closebtn" type="button">Close</button>
        <button class="submitbtn" type="Submit">Submit</button>
        
        <script>
          
          </script>
        {{ csrf_field() }}
          </form>
      </div>
    </div>
  </div>

</div>
<script src="/js/all.js"></script>
@endsection

@section('modal3')
<span class="kolom-xs-12">
<button id="Btn3" class="button">Propose A Service</button></span>
  <div id="Modal3" class="modal">
  <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close">&times;</button>
        <h3>Propose A Service</h3>
      </div>
    <div class="modal-body">
      <div class="divform">
        <form action="{{url('proposemail')}}" method="POST">
          <label for="Email" class="straight">Email</label>
          <input type="email" id="Email" name="email" placeholder="Email">
          <br>
          <label for="Bisnis" class="straight">Bisnis</label>
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
                <textarea id="Overview2" name="overview"></textarea>
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
        </form>
      </div>
    </div>
  </div>

</div>
<script src="/js/all.js"></script>
@endsection

@section('alert')
  @if (count($errors) > 0)
    <div class="alert" id="alert">
      <div class="alert-content">
      <div class="alert-header">
          <h1>Your data is not valid</h1>            
          </div>
        <div class="alert-body">

            <ol>
            @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ol>
  
        </div>
        <div class="alert-footer">
          <div class="alert-btn">
            <button id="Okey" class="submitbtn" type="button">Okey</button>
          </div>
        </div>
      </div>
    </div>
<script>
  var Okey=document.getElementById('Okey');
  var alert1=document.getElementById('alert');
  Okey.onclick=function(){
          alert1.style.display="none";
  }
  </script>
  @endif

@endsection
