<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
  <title>お問い合わせフォーム</title>
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
.null{
  color:red;
}
label{
  color:#aaa;
}
.btn_check{
  display: inline-block;
      text-align:center;
      background-color:black;
      color:white;
      width:100px;
      padding:10px 20px;
      border-radius:5px;
}
.opinion{
  width:100%;
  height:80px;
}
.name{
  width: 300px;
}
.input{
  width:100%;
}

</style>

<body>
  <div class="container">
    <h1>お問い合わせ</h1>
    @if(count($errors)>0)
    <p>入力に問題があります</p>
    @endif
    
    <div class="contact">
      <form method="post" action="{{ route('contact.confirm')}}">
        @csrf
        <table>
          @csrf
          @error('fullname')
          <tr>
            <th></th>
            <td>{{$message}}</td>
          </tr>
          @enderror
          @error('middlename')
          <tr>
            <th></th>
            <td>{{$message}}</td>
          </tr>
          @enderror
          <tr>
            <th>お名前<span class="null">※</span></th>
            <td><input class="name" type="text" name="fullname" value="{{old('fullname')}}" />
            <input class="name" type="text" name="middlename" value="{{old('middlename')}}" /></td>
            <tr>
              <th></th>
              <td><label>例）山田</label>
              <label> 例）太郎</label></td>
            </tr>
          </tr>
          @error('gender')
          <tr>
            <th></th>
            <td>{{$message}}</td>
          </tr>
          @enderror
          <tr>
            <th>性別<span class="null">※</span></th>
            <td><input type="radio" name="gender" value="男性" />男性
            <input type="radio" name="gender" value="女性" />女性</td>
          </tr>
          @error('email')
          <tr>
            <th></th>
            <td>{{$message}}</td>
          </tr>
          @enderror
          <tr>
            <th>メールアドレス<span class="null">※</span></th>
            <td><input class="email" type="text" name="email" value="{{old('email')}}" /></td>
            <tr>
              <th></th>
              <td><label>例）test@example.com</label></td>
            </tr>
          </tr>
          @error('postcode')
          <tr>
            <th></th>
            <td>{{$message}}</td>
          </tr>
          @enderror
          <tr>
            <th>郵便番号<span class="null">※</span></th>
            <td>〒<input class="input" type="text" name="postcode" value="{{old('postcode')}}" /></td>
            <tr>
              <th></th>
              <td><label>例）123-4567</label></td>
            </tr>
          </tr>
          @error('address')
          <tr>
            <th></th>
            <td>{{$message}}</td>
          </tr>
          @enderror
          <tr>
            <th>住所<span class="null">※</span></th>
            <td><input class="input" type="text" name="address" value="{{old('address')}}" /></td>
            <tr>
              <th></th>
              <td><label>例）東京都渋谷区千駄ヶ谷1−２−３</label></td>
            </tr>
          </tr>
          <tr>
            <th>建物名</th>
            <td><input class="input" type="text" name="billding_name" value="{{old('billding_name')}}" /></td>
            <tr>
              <th></th>
              <td><label>例）千駄ヶ谷マンション101</label></td>
            </tr>
          </tr>
          @error('opinion')
          <tr>
            <th></th>
            <td>{{$message}}</td>
          </tr>
          @enderror
          <tr>
            <th>ご意見<span class="null">※</span></th>
            <td><textarea type="text" name="opinion" value="{{old('opinion')}}" class="opinion"></textarea></td>
          </tr>
        </table>
        
        <button type="submit" class="bnt btn_check">
          確認
        </button>
      </form>
      
      
    </div>
  </div>

</body>
</html>