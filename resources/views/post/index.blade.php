
@extends('layout.master')

@section('content')
      <h1>หมวดหมู่ข่าว</h1>
      <a href="/post/create">+ เพิ่มข่าวใหม่</a>
      <table>
          <thead>
          <th>
              <tr>
                  <td>ลำดับ</td>
                  <td>หัวข้อข่าว</td>
                  <td>รูปประจำข่าว</td>
                  <td>หมวดหมู่ข่าว</td>
                  <td>ผู้แต่งข่าว</td>
                  <td>สร้างเมื่อ</td>
              </tr>
          </th>
        </thead>
      <tbody>
          @foreach($posts as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->thumbnail}}</td>
                <td>{{$item->category->name}}</td>
                <td>{{$item->user->name}}</td>
                <td>{{$item->created_at}}</td>
                <td> <a href="/post/edit/{{$item->id}}">แก้ไข</a> | <a href="/post/delete/{{$item->id}}">ลบ</a></td>
            </tr>
          @endforeach
    </tbody>
</table>

@endsection
