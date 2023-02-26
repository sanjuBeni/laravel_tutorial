<table border="1">
    <tr>
      <th>Name</th>
      <th>Email</th>
    </tr>
    @foreach ($users as $data)
        
    <tr>
        <td>{{$data['name']}}</td>
        <td>{{$data['email']}}</td>
    </tr>
    @endforeach
  </table>
  {{$users->links()}}

  <style>
    .w-5{
        display: none;
    }
  </style>