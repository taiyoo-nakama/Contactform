<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
</head>
<style>

    html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

body {
    line-height:1;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {
    display:block;
}

nav ul {
    list-style:none;
}

blockquote, q {
    quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}

a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

/* change colours to suit your needs */
ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}

/* change colours to suit your needs */
mark {
    background-color:#ff9;
    color:#000;
    font-style:italic;
    font-weight:bold;
}

del {
    text-decoration: line-through;
}

abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}

table {
    border-collapse:collapse;
    border-spacing:0;
}

/* change border colour to suit your needs */
  hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #cccccc;
    margin: 1em 0;
    padding: 0;
  }
  h1{
    font-weight: bold;
    font-size: 24px;
    text-align:center;
    margin: 30px
  }

    input,
    select {
      vertical-align: middle;
    }

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
    .container{
      background-color:#fff;
      height:100vh;
      width:100vw;
      position:relative;
    }
    .search_result{
      width: 100vw;
      }
    tr {
      height: 50px;
    }
    .card {
      background-color: #fff;
      margin-left:auto;
      margin-right:auto;
      width: 100%;
      padding: 30px;
      border: 1px　solid;
    }
    .btn-search{
      display:inline-block;
      background-color:black;
      color:white;
      width:100px;
      padding:10px 20px;
      border-radius:5px;
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
    <!--<form method="post" action="host">!-->
      <div class="card">
    <table>
      <form method="post" action="{{ route('host.search')}}">
        @csrf
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
        <td><input type="date" name="date" value="{{request('search')}}"></td>
        <td>-</td>
        <td><input type="date" name="date" value="{{request('search')}}"></td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td><input type="text" name="email" value="{{request('search')}}"></td>
      </tr>
    </table>
    <button class="btn-search">検索</button>
  　</form>
    <a href="/host">リセット</a>
  </div>

    <!--ページ変遷!-->
    <div class="pagination">
      {{ $item->links() }}
    </div>
    <!--顧客情報表示!-->
    <div class="serch_result">
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
          {{Str::limit($item->opinion,25,'...')}}
        </td>
        <td>
      </form>
      <form action="{{route('delete',['id' => $item->id])}}" method="post">
        @csrf
        <button class="btn btn-dark">削除</button>
      </form>
        </td>
      </tr>
      @endforeach
    </table>
    </div>
  </div>
</body>
</html>
