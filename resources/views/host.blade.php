<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .pagination{
    display: flex;
    justify-content: flex-end;
  }
  .pagination li{
    list-style: none;
  }
  svg.w-5.h-5 {  /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 20px;
    height: 20px;
    }
</style>
<body>
  <!-- @section('content') !-->
  <div class="container">
    <h1>管理システム</h1>
    @if(count($errors)>0)
      <ul>
        @foreach($errors->all() as $error)
        <li>
          {{$error}}
        </li>
        @endforeach
      </ul>
    @endif
    <table>
      <form method="post" action="host">
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

   
    <!--ページ変遷!-->
    <div class="pagination">
      {{$items->links()}}
    </div>
    <!--顧客情報表示!-->

    <table>
      <tr>
        <th>ID</th>
        <th>お名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>ご意見</th>
      </tr>

      <tr>
        @foreach($items as $item)
      <form method="post" action="{{ route('host')}}">
        @csrf
        <!--ID取得!-->
        <td>
          {{$item->id}}
        </td>
        <!--お名前!-->
        <td>
          {{$item->fullname}}{{$item->middlename}}
        </td>
        <!--性別!-->
        <td>
          {{$item->gender}}
        </td>
          <!--メールアドレス!-->
        <td>
          {{$item->email}}
        </td>
        <!--ご意見!-->
        <td>
          {{$item->opinion}}
        </td>
        <td>
      </form>
      <form action="{{route('delete',['id' => $item->id])}}" method="post">
        @csrf
        <button>削除</button>
      </form>
        </td>
      </tr>
      @endforeach
    </table>

</body>
</html>