<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Browse Games</title>
        <link rel="stylesheet" type="text/css" href="/assets/stylesheets/main.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!-- <div class="menucheckout">
            <a href="home"><h2 class="logo" >Game  <span class="glyphicon glyphicon-cloud"></span></h2></a>
            <ui class="checkoutmenu"><a href="#about">Shopping Chart (0)</a>
        </div>
        <div class="box">

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    </body>
</html> -->
<!--
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Checkout</title>
        <link rel="stylesheet" type="text/css" href="/assets/stylesheets/main.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>  -->

        <div>
            <div class="menucheckout">
                <a href="home"><h2 class="logo" >Game  <span class="glyphicon glyphicon-cloud"></span></h2></a>
                <ui class="checkoutmenu"><a href="#about">Shopping Chart (0)</a>
            </div>
            <table class="checkouttable border">
                <tr>
                    <th class="checkouthead border">Item</th>
                    <th class="checkouthead border">Produce</th>
                    <th class="checkouthead border">Genere</th>
                    <th class="checkouthead border">Price</th>
                    <tbody class = "tbody">
                      <tr>
                      <td></td>
                      </tr>
                    </tbody>

                    <script type="text/javascript">
                    $(document).ready(function(){
                      $.get("/users/get_all",function(res){
                        console.log(res);
                        var num_of_pages = Math.ceil(res.length/4);
                        console.log(num_of_pages);
                        var page = 1;
                        while(page<=num_of_pages){
                          $('.pages').append("<a href='#'>"+page+"</a>");
                          page++;
                        }
                        console.log(res);
                        for(var i =0;i<4;i++){
                          $('.tbody').append("<tr><td>"+res[i].name+"</td></tr>")
                        }
                        $('a').click(function(){
                          var page_num = $(this).text();
                          console.log(page_num);
                          $.get("/product/get_page/"+page_num, function(res){
                        $('.tbody').html("");
                          for(var i=0; i<res.length;i++){
                          $('.tbody').append("<tr><td>"+res[i].producer+"</td></tr>");
                            }
                          })
                        })
                      })
                    })

                  </script>
                </tr>
                </table>

            <div id="moveright">
                <h4>Total: $$.$$</h4>
                <button class="btn btn-success" type="button" name="continue">Continue Shopping </button>
                        <div class="pages"></div>
            </div>
        </div>


    </body>
</html>
