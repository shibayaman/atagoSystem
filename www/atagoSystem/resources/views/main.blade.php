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
               height:12em;

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
               height:100%;
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
               top:15px;
               text-align:center;
               
           }

           .account ul#account-list li:nth-child(4){
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
               left:-50%;
               top:40px;
           }

           .account ul#account-list ul.sub-list li {
               width:250px;
               height:30px;
               border-width:0px 0px 1px 0px;
               border-style:dotted;
               display:block;
           }

           .account ul#account-list ul.sub-list li:last-child {
               border-style:none;
           }

           .account ul#account-list ul.sub-list li a {

               line-height:25px;

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
               top:85px;
               left:30px;
               font-weight:bold;
               font-size:30px;
           }
           
           .aotodoke {

                position:relative;
                top:85px;
                left:30px;
                font-weight:bold;
                font-size:15px;
            }

           .toiawase {
               position:absolute;
               font-weight:bold;
               right:100px;
               top:15px;
           }

           .toiawase>a {
                text-decoration: none ;
                color:white;

           }
           
           .box {
               position:relative;
                padding: 0.5em 1em;
                margin: 2em 0;
                font-weight: bold;
                color: #6091d3;/*文字色*/
                background: #FFF;
                border: solid 3px #6091d3;/*線*/
                border-radius: 10px;/*角の丸み*/

                width:10%;
            }

            .context {
                position:relative;
                text-align:center;
                font-weight:bold;
            }

            .box>catego {
                margin: 0; 
                padding: 0;
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
          <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
          
    </head>
    <body>
        

        <div id = "main"></div>
       
        <script type="text/javascript">
            
            var name = @json($user);
            var login = @json($ifLogin);
            var linktext = @json($link);
            var aotodoke = @json($otodoke);
            var category = @json($item_category);

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
        
        
            
        <div class="box">

            <p class="context">カテゴリ一覧</p>
            @foreach($item_category as $categories)
                <p class="catego" name="category"><a href="/?category={{$categories->category_name}}" name="category">{{$categories->category_name}}</a></p>
            @endforeach
        </div>
    
            
            <p class="container">  

                <div class="row justify-content-center">
                    
                    <table border="1">     

                        <tr>

                        <?php $i = 0; ?>
                        @foreach($item_list as $items)

                            <?php $i += 1; ?>
                            <td width="200px"><img src="{{{ $items->item_url }}}"><br><a href="#">{{{ $items->item_name }}}</a></td>
                                
                            @if($i % 4 == 0)
                                </tr><tr>
                            @endif

                        @endforeach
                    </table>
                
                    
                </div>

                
                    
            </p>
        
            <div class="row justify-content-center">{{ $item_list->appends(request()->input())->links() }}</div>
               
            <footer class="common-footer">
                <a href="/emplogin" className="emp" id="emp">企業の方はこちら</a>
                
            <footer>

    </body>
</html>
