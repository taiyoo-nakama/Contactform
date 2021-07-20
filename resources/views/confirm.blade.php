<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ　-確認-</title>
</head>

<body>
  <form method="post" action="{{ route('contact.confirm')}}"></form>
    @csrf

    <label>お名前<span class="null">※</span></label>
    {{ $inputs->fullname}}
      <input type="hidden" name="fullname" value="{{$inputs->fullname}}">

      <label>性別<span class="null">※</span></label>
      {{ $items['gender']}}
      <input type="hidden" name="gender" value="{{$items('gender')}}" >

      <label>メールアドレス<span class="null">※</span></label>
      {{ $items['email']}}
      <input type="hidden" name="email" value="{{$items('email')}}" />

      <label>郵便番号<span class="null">※</span></label>
      {{ $items['postcode']}}
      <input type="hidden" name="postcode" value="{{$items('postcode')}}" />

      <label>住所<span class="null">※</span></label>
      {{ $items['address']}}
      <input type="hidden" name="address" value="{{$items('address')}}" />

      <label>建物名</label>
      {{ $items['billding_name']}}
      <input type="hidden" name="billding_name" value="{{$items('billding_name')}}" />

      <label>ご意見<span class="null">※</span></label>
      {{ $items['opinion']}}
      <input type="hidden" name="opinion" value="{{$items('opinion')}}" />

      <button type="submit">
        送信
      </button>
      <a href="/">修正する</a>
  </body>
</html>