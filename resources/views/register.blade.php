@extends('layout.main-footer')

@section('add-class-main', 'd-flex')

@section('content')
<div class="m-auto">
  @if (session('errors'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Sepertinya ada yang salah: </strong>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ Session::get('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ Session::get('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <form action="{{ route('register') }}" method="post">
    @csrf
    <div class="border p-5 rounded" style="width: 50vh">
      <h2 class="border-bottom pb-3"><a href="{{Route('home')}}">BLOG</a> | Daftar</h2>
      <div class="form-group my-2 mt-3">
        <label class="label" id="name">Nama</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Jhonathan"/>
      </div>
      <div class="form-group my-2 mt-3">
        <label class="label" id="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="jhonathan"/>
      </div>
      <div class="form-group my-2">
        <label class="label" id="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="nathan@example.com"/>
      </div>
      <div class="form-group my-2">
        <label class="label" id="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="*****"/>
      </div>
      <div class="form-group my-2">
        <label class="label" id="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="*****"/>
      </div>
      <div class="form-group my-3 d-flex flex-column align-items-end">
        <span class="">Sudah punya akun? <a href="{{Route('login')}}">Login disini</a></span>
      </div>
      <div class="form-group d-flex flex-column">
        <button class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>
@endsection