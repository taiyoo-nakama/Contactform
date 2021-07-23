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
            <td><input type="text" name="fullname" value="{{old('fullname')}}" />
            <input type="text" name="middlename" value="{{old('middlename')}}" /></td>
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
            <td><input type="text" name="email" value="{{old('email')}}" /></td>
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
            <td>〒<input type="text" name="postcode" value="{{old('postcode')}}" /></td>
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
            <td><input type="text" name="address" value="{{old('address')}}" /></td>
            <tr>
              <th></th>
              <td><label>例）東京都渋谷区千駄ヶ谷1−２−３</label></td>
            </tr>
          </tr>
          <tr>
            <th>建物名</th>
            <td><input type="text" name="billding_name" value="{{old('billding_name')}}" /></td>
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
            <td><textarea type="text" name="opinion" value="{{old('opinion')}}"></textarea></td>
          </tr>
        </table>
        
        <button type="submit">
          入力内容確認
        </button>
      </form>
      
      
    </div>
  </div>

</body>
</html>