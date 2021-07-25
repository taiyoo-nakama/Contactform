<html lang="en">
  <!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
  <title>お問い合わせ　-確認-</title>
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
    display:block;
    height:1px;
    border:0;  
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}

input, select {
    vertical-align:middle;
}
h1{
    font-weight: bold;
    font-size: 24px;
    text-align:center;
    margin: 30px
  }
  tr {
      height: 50px;
    }
td{
  margin:50px;
}
.btn{
  display: inline-block;
      text-align:center;
      background-color:black;
      color:white;
      width:100px;
      padding:10px 20px;
      border-radius:5px;
}

</style>

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
  <form method="post" action="/host/create">
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
      
      <button type="submit" class="btn">
        送信
      </button>
      <a href="/">修正する</a>
    </form>
    </form>
  </div>
  </body>
</html>