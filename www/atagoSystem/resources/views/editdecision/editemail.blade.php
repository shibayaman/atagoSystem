<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .common-header {
               
               position:relative;
               background-color:black;
               width:100%;
               height:10em;

           }

           #logo {
               position:relative;
               top:15px;
           }

            .login-title {

                position:absolute;
                top:30px;
                font-size:50px;
                color:white;
                left:40%;

            }

            .accountlogin-bread ul {

                display:flex;
                list-style-type:none;
        
            }

            .accountlogin-bread li a {
                padding:5px;
                color:blue;
                font-size:16px;
            }

            .accountlogin-bread li:after {
                content:'>';
                margin-left:10px;
                margin-right:10px;
                color:black;
                font-weight:bold;
            }

            .accountlogin-bread li:last-child:after {
               content:"";
            }
           .common-footer {
               position:absolute;
               bottom:0;
               width:100%;
               height:5em;
               background-color:black;
           }
        </style>

          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
          <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
          
    </head>
    <body>
        
    <div>

        <header class="common-header">

            <a href="/" id="logo"><img src="../images/atagonlogo.png" height="30px"></img></a>
            
            <div class="login-title">アカウント情報変更</div>

        </header>

    </div>

    <div class="accountlogin-bread">
        <ul itemScope itemType="http://data-vocabulary.org/Breadcrumb">

        <li><a href="/" itemProps="url"><span itemProps="title">トップ</span></a></li>
            <li><a href="/accountedit" itemProps="url"><span itemProps="title">マイページ</span></a></li>
            <li><span itemProps="title">アカウントj情報変更</span></li>

        </ul>
    </div>

<div class="container" vertical-align="middle">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">メールアドレスを変更してください</div>
                
                <div class="card-body">
                    <form method="POST" action="/editcontroll">
                        @csrf
                     
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email2" class="col-md-4 col-form-label text-md-right">緊急時のメールアドレス</label>

                                <div class="col-md-6">
                                    <input id="email2" type="email" class="form-control @error('email2') is-invalid @enderror" name="email2" value="{{ old('email2') }}" autocomplete="email2">

                                    @error('email2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                    

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                                <button class="btn" onclick="history.back()">戻る</button>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('変更を保存する') }}
                                </button>

                            </div>
                        </div>
                    </form>

                </div>

                
            </div>
        </div>

    </div>
</div>


    <footer class="common-footer">
        <a href="/emplogin" className="emp" id="emp">企業の方はこちら</a>
                
    <footer>

    </body>
</html>


