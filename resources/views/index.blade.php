<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
</head>

<body>
  <div class="container">
    <h1>お問い合わせ</h1>
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

  <div class="contact">
    <form method="post" action="{{ route('contact.confirm')}}">
      @csrf
      <table>
        @csrf
        @if($errors->has('fullname'))
          <tr>
            <th>Error</th>
            <td>
              {{$errors->first('fullname')}}
            </td>
          </tr>
          @endif
        <tr>
          <th>お名前<span class="null">※</span></th>
            <td><input type="text" name="fullname" value="{{old('fullname')}}" /></td>
            <!--<td><input type="text" name="fullname" value="{{old('fullname')}}" /></td>!-->
          <tr>
            <th></th>
            <td><label>例）山田</label></td>
            <td><label>例）太郎</label></td>
          </tr>
        </tr>
        <tr>
            <th>性別<span class="null">※</span></th>
            <td><input type="radio" name="" value="{{old('')}}" />男性
            <input type="radio" name="" value="{{old('')}}" />女性</td>
        </tr>
        <tr>
            <th>メールアドレス<span class="null">※</span></th>
            <td><input type="text" name="" value="{{old('')}}" /></td>
            <tr>
              <th></th>
              <td><label>例）test@example.com</label></td>
            </tr>
        </tr>
        <tr>
            <th>郵便番号<span class="null">※</span></th>
            <td>〒<input type="text" name="" value="{{old('')}}" /></td>
            <tr>
              <th></th>
              <td><label>例）123-4567</label></td>
            </tr>
        </tr>
        <tr>
            <th>住所<span class="null">※</span></th>
            <td><input type="text" name="" value="{{old('')}}" /></td>
            <tr>
              <th></th>
            <td><label>例）東京都渋谷区千駄ヶ谷1−２−３</label></td>
            </tr>
        </tr>
        <tr>
            <th>建物名</th>
            <td><input type="text" name="" value="{{old('')}}" /></td>
            <tr>
              <th></th>
            <td><label>例）千駄ヶ谷マンション101</label></td>
            </tr>
        </tr>
            <th>ご意見<span class="null">※</span></th>
            <td><textarea type="text" name="" value="{{old('')}}"></textarea></td>
      </table>
        
        <button type="submit">
          入力内容確認
        </button>
    </form>
      
      
  </div>

</body>
</html>