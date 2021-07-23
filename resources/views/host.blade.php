<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- @section('content') !-->
  <div class="container">
    <h1>管理システム</h1>
    <table>
      <form method="post" >
      <tr>
        <th>お名前</th>
        <td><input type="text" name="fullname" value="{{request('search')}}"></td>
        
        <th>性別</th>
        <td>
          <input type="radio" name="gender" value="全て{{request('search')}}" />全て
          <input type="radio" name="gender" value="男性{{request('search')}}" />男性
          <input type="radio" name="gender" value="女性{{request('search')}}" />女性
        </td>
      </tr>
      <tr>
        <th>登録日</th>
        <td><input type="text" name="date" value="{{request('search')}}"></td>
        <td>-</td>
        <td><input type="text" name="date" value="{{request('search')}}"></td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td><input type="text" name="email" value="{{request('search')}}"></td>
      </tr>
    </table>
    <button>検索</button>
    <a href="/host">リセット</a>
  </form>
    
    <div class="count">全件中　-件</div>
    <!--ページ変遷!-->
    <div></div>
    <!--顧客情報表示!-->
    
    <table>
      <tr>
        <th>ID</th>
        <th>お名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>ご意見</th>
      </tr>

      @if($items->count())
      <tr>
        @foreach($items as $item)
      <form method="post" action="{{ route('host')}}">
        @csrf
        <!--ID取得!-->
        <td>
          {{$tems->id}}
        </td>
        <!--お名前!-->
        <td>
          {{$items->fullname}}{{$items->middlename}}
        </td>
        <!--性別!-->
        <td>
          {{$items->gender}}
        </td>
          <!--メールアドレス!-->
        <td>
          {{$items->email}}
        </td>
        <!--ご意見!-->
        <td>
          {{$items->opinion}}
        </td>
      </tr>
      @endforeach
    </table>
    @else
    <p>見つかりませんでした。</p>
    @endif
  </form>
</body>
</html>