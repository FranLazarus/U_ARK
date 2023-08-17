@extends('layouts/main')
@push('links')
    <style>
      .form-control{
        margin-bottom: 5px;
      }
    </style>
@endpush

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
  <div class="align-self-center">
    <h1>Wellcome to U-ARK！</h1>
    <form method="post">
      {{csrf_field()}}
      <div>
        <input class="form-control" name="account" type="text" value="{{old('account')}}" placeholder="帳號" title="帳號">
      </div>
      <div>
        <input class="form-control" name="password" type="password" value="" placeholder="密碼"  autocomplete="current-password"  title="密碼" />
      </div>
      <div class="d-flex justify-content-center">
        <button class="btn btn-success mt-3 me-1" type="submit" title="登入">登入</button>
        <a class="btn btn-primary mt-3" href="{{route('user.register')}}" title="建立帳號">建立帳號</a>
      </div>
    </form>
  </div>
</div>
@endsection

{{-- Script --}}
@push('scripts')
@endpush