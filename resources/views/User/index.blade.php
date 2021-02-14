
@extends('layout.master')

@section('content')
      <h1>ผู้ใช้งาน</h1>
      <a href="/user/create">+ เพิ่มผู้ใช้ใหม่</a>
      <table>
          <thead>
          <th>
              <tr>
                  <td>ลำดับ</td>
                  <td>ชื่อ</td>
                  <td>username</td>
                  <td>email</td>
                  <td>สร้างเมื่อ</td>
                  <td>จัดการ</td>
              </tr>
          </th>
        </thead>
      <tbody>
          @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td> <a href="/user/edit/{{$user->id}}">แก้ไข</a> | <a href="/user/delete/{{$user->id}}">ลบ</a></td>
            </tr>
          @endforeach
    </tbody>
</table>

@endsection
