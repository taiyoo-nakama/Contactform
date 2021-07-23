<html lang="en">
  <!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ　-確認-</title>
</head>

<body>
  <div class="container">
    <h1>内容確認</h1>
    @if(count($errors)>0)
    <ul>
      @foreach($errors->all() as $error)
      <li>
        {{$error}}
      </li>
      @endforeach
    </ul>
    @endif
  </div>
  <form method="post" action="{{ route('contact.thanks')}}">
    @csrf
    
    <table>
      <tr>
        <th>
          お名前
        </th>
        <td>
          {{ $items["fullname"]}}
          <input type="hidden" name="firstname" value="{{$items['fullname']}}" />
          {{ $items["middlename"]}}
          <input type="hidden" name="middlename" value="{{$items['middlename']}}" />
        </td>
      </tr>
      <tr>
        <th>
          性別
          <td>
            {{ $items["gender"]}}
            <input type="hidden" name="gender" value="{{$items['gender']}}" >
          </td>
        </tr>
        <tr>
          <th>
            メールアドレス
          </th>
          <td>
            {{ $items["email"]}}
            <input type="hidden" name="email" value="{{$items['email']}}" />
          </td>
        </tr>
        
        <tr>
          <th>
            郵便番号
          </th>
          <td>
            {{ $items["postcode"]}}
            <input type="hidden" name="postcode" value="{{$items['postcode']}}" />
          </td>
        </tr>
        
        <tr>
          <th>住所</th>
          <td>
            {{$items["address"]}}
            <input type="hidden" name="address" value="{{$items['address']}}" />
          </td>
        </tr>
        
        <tr>
          <th>
            建物名
          </th>
          <td>
            {{ $items["billding_name"]}}
            <input type="hidden" name="billding_name" value="{{$items['billding_name']}}" />
          </td>
        </tr>
        <tr>
          <th>
            ご意見
          </th>
          <td>
            {{$items["opinion"]}}
            <input type="hidden" name="opinion" value="{{$items['opinion']}}" />
          </td>
        </tr>
      </table>
      
      <button type="submit">
        送信
      </button>
      <a href="/">修正する</a>
    </form>
  </body>
</html>