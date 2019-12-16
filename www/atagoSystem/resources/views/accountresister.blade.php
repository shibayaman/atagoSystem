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
               max-width:100%;
               height:10em;

           }
           
           .account-resister-title {

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
               left:25%;
               width:5em;
               text-align:center;
           }

           .required {
                background-color:red;
           }

           .input-component {
               position:relative;
               right:-200px;
           }
           .account-sub {

               background-color:yellow;
               font-weight:bold;
               color:black;
               width:100px;
               height:50px;
               font-size:2em;
           }

           .common-footer {
               position:relative;
               background-color:black;
               max-width:100%;
               height:5em;
           }
        </style>

          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
          <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    </head>
    <body>
           
        <div id = "accountresister-example"></div>
        <script src="{{asset('/js/accountapp.js')}}"></script>

       <script>

            $(function(){
                $('.auto-search').click(function(){
                    AjaxZip3.zip2addr('address_number','','address1','address2');
                });
            });
       </script>
    </body>
</html>