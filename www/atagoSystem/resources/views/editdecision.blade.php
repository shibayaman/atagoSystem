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

           .common-header {
               
               position:relative;
               background-color:black;
               width:100%;
               height:10em;

           }
           
           .editdecision-title {

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
           
           .required, .any {
               position:absolute;
               border-style:solid;
               left:16%;
               width:5em;
               text-align:center;
           }

           .required {
                background-color:red;
           }

           .input-component {
               position:relative;
               right:-20%;
           }
           .account-sub {

               background-color:yellow;
               font-weight:bold;
               color:black;
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
          <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
          
    </head>
    <body>
        
        <div id = "editdecision-example"></div>

        <script>
            
            
            var auth_name = @json($user->username);
            var auth_kana = @json($user->kana_name);
            var auth_email = @json($user->email);
            var auth_email2 = @json($user->email2);
            var auth_zip = @json($user->address_number);
            var auth_pref = @json($user->address1);
            var auth_city = @json($user->address2);
            var auth_other = @json($user->address3);
            var auth_phone = @json($user->phone_number);
            var auth_urgent_phone = @json($user->urgent_phone_number);


            var name = @json($errors->first('username'));
            var kana = @json($errors->first('kana_name'));
            var mail = @json($errors->first('email'));
            var mail2 = @json($errors->first('email2'));
            var zip = @json($errors->first('address_number'));
            var phone = @json($errors->first('phone_number'));
            var phone2 = @json($errors->first('urgent_phone_number'));
            var pass = @json($errors->first('password'));
            var pass2 = @json($errors->first('password2'));
            var kiyaku = @json($errors->first('kiyaku'));


           var oldname = @json(old('username'));
           var oldkana = @json(old('kana_name'));
           var oldmail = @json(old('email'));
           var oldmail2 = @json(old('email2'));
           var oldzip = @json(old('address_number'));
           var oldpref = @json(old('address1'));
           var oldcity = @json(old('address2'));
           var oldother = @json(old('address3'));
           var oldphone = @json(old('phone_number'));
           var oldphone2 = @json(old('urgent_phone_number'));



            $(function(){
                $('.auto-search').click(function(){
                    AjaxZip3.zip2addr('address_number','','address1','address2');
                });
            });
       </script>

        <script src="{{asset('/js/accountapp.js')}}"></script>

       <footer class="common-footer">
        <a href="/emplogin" className="emp" id="emp">企業の方はこちら</a>
                
    <footer>

    </body>
</html>