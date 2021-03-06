@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('container')
<div class="row justify-content-center">
  <h1 class="title mb-5">GERCEPNET</h1>
  <div class="col-lg-5 registrasi">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
      <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="input form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="username" class=" input form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}">
          <label for="name">Username</label>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="input form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
          <label for="floatingInput">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="input form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
          @enderror
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Foto Profile</label>
          <img class= "img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
          @enderror
        </div>

        <div class="form-group mt-4 mb-4">
          <div class="captcha">
            <img src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+Math.random()" id="captchaCode" alt="" class="captcha">
            <a rel="nofollow" href="javascript:;" onclick="document.getElementById('captchaCode').src='captcha/flat?'+Math.random()" class="refresh">             
              <button type="button" class="btn btn-danger btn-refresh" class="reload" id="reload"><i class="fas fa-sync-alt">
              &#x21bb;
              </i></button>
            </a>
          </div>
        </div>
        <div class="form-group mb-4">
            <input id="captcha" type="text" class="input form-control @error('captcha') is-invalid @enderror" placeholder="Enter Captcha" name="captcha">
            @error('captcha')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
            @enderror
        </div>
        
        <button class="w-100 btn btn-lg btn-register mt-3" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
    </main>
  </div>
</div>
<script>
  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection