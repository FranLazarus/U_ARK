@extends('layouts/main')
@push('links')
    <style>

    </style>
@endpush

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
  <div class="align-self-center steps-border">
    <h1>Wellcome to U-ARK！</h1>
    <form method="post">
      {{csrf_field()}}
      <div class="">
        <input class="form-control" name="uid" type="text" value="{{old('uid')}}" placeholder="帳號" title="帳號">
      </div>
      <div class="">
        <input class="form-control" name="password" type="password" value="" placeholder="密碼" autocomplete="current-password"  title="密碼" />
      </div>
      <div class="d-flex justify-content-center">
        <button class="btn btn-success" type="submit" title="登入">登入</button>
        <a class="btn btn-primary ml-2" href="{{route('user.register')}}" title="建立帳號">建立帳號</a>
      </div>
    </form>
  </div>
</div>
@endsection

{{-- Script --}}
@push('scripts')
@endpush