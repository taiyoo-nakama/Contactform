<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  @section('content')
  <p>Contact</p>
  <table>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>GENDER</th>
      <th>EMAIL</th>
    </tr>
    <tr>
      <td> {{$item->id}} </td>
      <td> {{$item->name}} </td>
      <td> {{$item->gender}} </td>
      <td> {{$item->email}} </td>
    </tr>
  </table>
  @endsection
  
</body>
</html>