@extends('layout.mainlayout')
@section('title','AKUN')

@section('content')
<style>
 .cont{
    
    width: 400px;
    height: 800px;
 }
</style>
<div class="container cont">
   <div class=" text-center">
    <h1>Register<h1>
   
    </div>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit"  class="btn btn-primary">Submit</button>
  <div id="emailHelp" class="form-text">Tidak memiliki akun?</div>
  <a type="text" href="/register" class="btn btn-primary">Register  </a>
  
</form>

</div>
    </div>
</div>

@endsection