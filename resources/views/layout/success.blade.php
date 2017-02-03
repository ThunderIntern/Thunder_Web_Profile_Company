@extends('layout.modal1')
@section('succees')
@if(count($errors) < 1)
<div class="alert" id="alert">
      <div class="alert-content">
        <div class="alert-body">
          <h1 id="header-success">Your data is successfully sent</h1>
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