@extends('layout.project')
@section('modal2')
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
          <div class="row">
          <div class="container">
          <div class="col-lg-12">
          <label for="Overview1">Overview</label>
          <br>
          <textarea id="Overview1" name="overview"></textarea></div>
          </div></div></div>
          
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