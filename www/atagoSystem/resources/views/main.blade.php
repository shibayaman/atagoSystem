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

           .search-header {
               
               position:relative;
               background-color:black;
               max-width:100%;
               height:10em;

           }
           
           #logo {
               position:relative;
               top:15px;
               left:30px;
           }

           .search-form  {

               position:absolute;
               background-color:rgb(254,189,105);
               top:15px;
               height:40px;
               width:60%;
               left:190px;
               
           }

           #siborikomi {

               position:relative;
               height:100%;
               width:20%;
           }

           #search-text {
               position:absolute;
               height:85%;
               width:60%;
               
               
           }

           #sub {
               position:absolute;
               background-color:rgb(254,189,105);
               right:0px;
               height:100%;
               width:20%;
           }

           .account {
               position:absolute;
               list-style:none;
               left:75%;
               top:0px;
               text-align:center;
               
           }

           .account ul#account-list li:nth-child(3){
                position: relative;
            }

           .account>#account-list li {
               display:inline-block;
               flex:auto;
               -webkit-flex:auto;
           }
           
           .ul-style {
                color:white;
                font-weight:bold;
           }
           .account ul#account-list ul.sub-list {

               background-color:white;
               border-width:2px;
               border-style:solid;
               border-color:black;
               margin:0px;
               padding:0px;
               display:none;
               position:absolute;
               left:-30%;
               top:50px;
           }

           .account ul#account-list ul.sub-list li {
               width:250px;
               height:35px;
               border-width:0px 0px 1px 0px;
               border-style:dotted;
               display:block;
           }

           .account ul#account-list ul.sub-list li:last-child {
               border-style:none;
           }

           .account ul#account-list ul.sub-list li a {

               line-height:35px;

           }

           .triangle:before {

               position:absolute;
               top:-26px;
               left:50%;
               content:"";
               width:0;
               height:10px;
               border-style:solid;
               border-width:0 15px 26px 15px;
               border-color:transparent transparent white transparent;
               line-height:0px;
               _border-color: #000000 #000000 #73b44a #000000;
               _filter:progid:DXImageTransform.Microsoft.Chroma(color='#000000');
           }
           
           .loginName {

               position:absolute;
               top:90px;
               left:30px;
               font-weight:bold;
               font-size:30px;
           }
        </style>

          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
          
    </head>
    <body>
        

        <div id = "main"></div>
       
        <script type="text/javascript">
            
            var name = @json($user);
            var login = @json($ifLogin);
            var linktext = @json($link);


            $(function(){
                $("#account-list li").hover(function(){
                    $("ul",this).show();
                },
                function(){
                    $("ul",this).hide();
                });
            });


        </script>


        <script src="{{asset('/js/accountapp.js')}}"></script>

                
        
        

    </body>
</html>
