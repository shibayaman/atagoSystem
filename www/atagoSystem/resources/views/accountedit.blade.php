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
           
           .account-edit-title {

                position:absolute;
                top:30px;
                font-size:50px;
                color:white;
                left:40%;

            }

           .account-bread ul {

            display:flex;
            list-style-type:none;

           }

           .account-bread li a {
               padding:5px;
               color:blue;
               font-size:16px;
           }

           .account-bread li:after {
               content:'>';
               margin-left:10px;
               margin-right:10px;
               color:black;
               font-weight:bold;
           }

           .account-bread li:last-child:after {
               content:"";
           }

           .account {
               position:relative;
               text-align:center;
               border-style:solid;
               width:1000px;
               align:center;
               margin:0 auto;
           }

           #logo {
               position:relative;
               top:15px;
           }
           
           .account-view {
               position:absolute;
               left:10%;
               
               text-align:center;
           }


           .edit {
               position:relative;
               right:-30%;
           }
           .account-sub {

               background-color:yellow;
               font-weight:bold;
               color:black;
               max-width:100px;
               height:50px;
               font-size:2em;
           }
           .vali {
               position:relative;
               right:-300px;
           }

           .common-footer {
               position:relative;
               bottom:0;
               width:100%;
               height:5em;
               background-color:black;
           }
        </style>

          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
          <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    </head>
    <body>
        
        <div id = "accountedit-example"></div>

        <script>
            
            
            var id = @json($user->id);
            var name = @json($user->username);
            var kana = @json($user->kana_name);
            var mail = @json($user->email);
            var mail2 = @json($user->email2);
            var zip = @json($user->address_number);
            var pref = @json($user->address1);
            var city = @json($user->address2);
            var other = @json($user->address3);
            var phone = @json($user->phone_number);
            var phone2 = @json($user->urgent_phone_number);
            var atagon = @json($user->atagon_flg);


           var fullAddress = $pref . $city . $other;

            @if(!isset($mail2))
                var mail2 = "設定されていません";
            @endif

            
            @if(!isset($phone2))
                var phone2 = "設定されていません";
            @endif
            
       </script>

        <script src="{{asset('/js/accountapp.js')}}"></script>

    <footer class="common-footer">
        <a href="/emplogin" className="emp" id="emp">企業の方はこちら</a>
                
    <footer>

       
    </body>
</html>