@extends('layouts.base')
@section('title', 'Mangcoding Store - Login')

@section('content')

<div class="flex items-center justify-center border-2 border-red-600" style="height: 100vh;">
  <div class="min-w-[450px] mt-26 border border-slate-500">
    <h1 class="text-4xl text-center mt-4">Login</h1>


    <form method="post" action="{{ route('login.perform') }}" class="space-y-5 p-8">
      @include('partials.messages')

      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <fieldset>
        <label for="email" class="block mb-2 text-sm font-medium">Email</label>
        <input name="email" class="form-control" placeholder="Enter email" type='email'>
        @if ($errors->has('email'))
        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
        @endif
      </fieldset>
      <fieldset>
        <label for="Password" class="block mb-2 text-sm font-medium">Password</label>
        <input name="password" type="password" class="form-control" placeholder="Enter Password">
        @if ($errors->has('password'))
        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
        @endif
      </fieldset>
      <button type="submit" class="btn btn-primary btn-md w-full">Login</button>
    </form>
  </div>
</div>

@endsection