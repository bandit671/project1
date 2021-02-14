
@extends('layout.master')

@section('content')
      <h1>กรุณากรอกข้อมูล</h1>
      <form action="/user/update/{{$user->id}}" method="post">
         @csrf
         <input type="text" name="name" value="{{$user->name}}" required>
         <input type="text" name="username" value="{{$user->username}}" required>
         <input type="text" name="email" value="{{$user->email}}" required>
         <input type="passwort" name="passwort" value="{{$user->passwort}}" required>
         <button type="submit">บันทึก</button>
      </form>
@endsection
