
@extends('layout.master')

@section('content')
      <h1>กรุณากรอกข้อมูล</h1>
      <form action="/post/update/{{$post->id}}" method="post">
         @csrf
         <input type="text" name="title" value="{{$post->title}}" required>
         <input type="text" name="thumbnail" value="{{$post->thumbnail}}" required>
         <input type="text" name="user_id" value="{{$post->user_id}}" required>
         <input type="text" name="category_id" value="{{$post->category_id}}" required>
         <input type="text" name="details" value="{{$post->details}}" required>
         <button type="submit">บันทึก</button>
      </form>
@endsection
