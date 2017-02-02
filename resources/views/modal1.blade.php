@extends('layout.project')
@section('modal1')
     <div id="Modal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <h2>Join Our Squad</h2>
    </div>
    <div class="modal-body">
      <div class="divform">
        <form action="{{ url('joinmail')}}" method="POST">
         @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
              @endif
         <label for="email" style="margin-left: 5%"> Email</label>&nbsp;&nbsp;&nbsp;
        <br>
          <input type="email" id="fEmail" name="email" placeholder="Email" value="{{old('email')}}">
          <br>
          <label for="bidang" style="margin-left:5%">Bidang</label>
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
          <label for="file" style="margin-left: 5%">Upload</label>
          <input type="file" name="upload" id="file" value="{{old('upload')}}" />
          <div class="setsummer">
          <div class="row">
          <div class="container">
          <div class="col-lg-12">
          <label>cover letter </label>
          <textarea name="letter" id="letter"  rows="10" class="form-control">{{old('letter')}}</textarea>
          </div>
          </div>
          </div>
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

</div>
<script src="/js/all.js"></script>
    </div>
  </div>
  </div>