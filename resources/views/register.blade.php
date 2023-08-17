@extends('layouts/main')
@push('links')
    <style>
      b,#birth{
        display: inline-block;
        width: 3rem;
        text-align: right;
      }
      b{
        color: red;
      }
      .form-control{
        display: inline-block;
        margin-left: 5px;
        width: calc(100% - 5px - 3rem - 7px);
      }
      form>div{
        margin-bottom: 4px;
      }
    </style>
@endpush

@section('content')
<div class="row mb-3">
  <div class="col-12">
    <a href="{{route('login')}}">返回</a>
  </div>
</div>

<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
  <div class="align-self-center">
    <h1>建立帳號</h1>
    <form method="post" class="mt-3">
      {{csrf_field()}}
      <div>
        <b>※&nbsp;</b>
        <input class="form-control" name="account" type="text" value="{{old('account')}}" placeholder="帳號" title="帳號" required />
      </div>
      <div>
        <b>※&nbsp;</b>
        <input class="form-control" name="password" type="password" value="{{old('password')}}" placeholder="密碼" title="密碼" required/>
      </div>
      <hr>
      <div>
        <b>※&nbsp;</b>
        <input class="form-control" name="org_no" type="text" value="{{old('org_no')}}" placeholder="單位代碼" title="單位代碼" required/>
      </div>
      <div>
        <b>※&nbsp;</b>
        <input class="form-control" name="name" type="text" value="{{old('name')}}" placeholder="姓名" title="姓名" required/>
      </div>
      <div>
        <span id="birth">生日</span>
        <input class="form-control" name="birthday" type="date" value="{{old('birthday')}}" placeholder="生日" title="生日" />
      </div>
      <div>
        <b>※&nbsp;</b>
        <input class="form-control" name="email" type="email" value="{{old('email')}}" placeholder="Email" title="Email" required/>
      </div>
      <div>
        <b>※&nbsp;</b>
        <input class="form-control" name="file" type="file" value="{{old('file')}}" placeholder="申請資格附檔" title="申請資格附檔" required/>
      </div>
      <div class="d-flex justify-content-center mt-5">
        <button class="btn btn-success" type="submit" title="提交申請">提交申請</button>
      </div>
    </form>
  </div>
</div>
@endsection

{{-- Script --}}
@push('scripts')
@endpush