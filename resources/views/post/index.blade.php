
@extends('layout.master')

@section('content')
      <h1>หมวดหมู่ข่าว</h1>
      <a href="/post/create">+ เพิ่มหมวดหมู่ใหม่</a>
      <table>
          <thead>
          <th>
              <tr>
                  <td>ลำดับ</td>
                  <td>ชื่อหมวดหมู่</td>
                  <td>สร้างเมื่อ</td>
                  <td>จัดการ</td>
              </tr>
          </th>
        </thead>
      <tbody>
          @foreach($post as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->created_at}}</td>
                <td> <a href="/post/edit/{{$item->id}}">แก้ไข</a> | <a href="/post/delete/{{$item->id}}">ลบ</a></td>
            </tr>
          @endforeach
    </tbody>
</table>

@endsection