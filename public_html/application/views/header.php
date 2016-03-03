

<!DOCTYPE html>
<html ng-app="Fusion" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Fusion</title>
  

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>

    
      <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
    
      <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.4/themes/ui-lightness/jquery-ui.css">
    
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

      <link rel="stylesheet" type="text/css" href='http://myfusionstore.com//css/animate.css'>

      <link rel='stylesheet' type="text/css" href='http://myfusionstore.com//css/theme.css'>

      <script type="text/javascript" src="http://myfusionstore.com/js/flowtype.js"></script>


   
    
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      
      

      <script type="text/javascript"  src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    
  
    
      <script type="text/javascript" data-pace-options='{"target":"#pace-loader", "startOnPageLoad":false}' src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    
      <link type="text/css" rel="stylesheet" href="data:text/css,.pace%20%7B%0A%20%20-webkit-pointer-events%3A%20none%3B%0A%20%20pointer-events%3A%20none%3B%0A%0A%20%20-webkit-user-select%3A%20none%3B%0A%20%20-moz-user-select%3A%20none%3B%0A%20%20user-select%3A%20none%3B%0A%0A%20%20z-index%3A%202000%3B%0A%20%20position%3A%20fixed%3B%0A%20%20margin%3A%20auto%3B%0A%20%20top%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20right%3A%200%3B%0A%20%20bottom%3A%200%3B%0A%20%20height%3A%205px%3B%0A%20%20width%3A%20200px%3B%0A%20%20background%3A%20%23fff%3B%0A%20%20border%3A%201px%20solid%20%2329d%3B%0A%0A%20%20overflow%3A%20hidden%3B%0A%7D%0A%0A.pace%20.pace-progress%20%7B%0A%20%20-webkit-box-sizing%3A%20border-box%3B%0A%20%20-moz-box-sizing%3A%20border-box%3B%0A%20%20-ms-box-sizing%3A%20border-box%3B%0A%20%20-o-box-sizing%3A%20border-box%3B%0A%20%20box-sizing%3A%20border-box%3B%0A%0A%20%20-webkit-transform%3A%20translate3d(0%2C%200%2C%200)%3B%0A%20%20-moz-transform%3A%20translate3d(0%2C%200%2C%200)%3B%0A%20%20-ms-transform%3A%20translate3d(0%2C%200%2C%200)%3B%0A%20%20-o-transform%3A%20translate3d(0%2C%200%2C%200)%3B%0A%20%20transform%3A%20translate3d(0%2C%200%2C%200)%3B%0A%0A%20%20max-width%3A%20200px%3B%0A%20%20position%3A%20fixed%3B%0A%20%20z-index%3A%202000%3B%0A%20%20display%3A%20block%3B%0A%20%20position%3A%20absolute%3B%0A%20%20top%3A%200%3B%0A%20%20right%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20width%3A%20100%25%3B%0A%20%20background%3A%20%2329d%3B%0A%7D%0A%0A.pace.pace-inactive%20%7B%0A%20%20display%3A%20none%3B%0A%7D">



  
  
  

  <!-- Start Angular.js -->

  <script type="text/javascript" src="http://myfusionstore.com/js/angular.min.js"></script>
 

  <script type="text/javascript">
  var Fusion = angular.module('Fusion', []);
 
  </script>

  <!-- End Angular.js -->



  

  
    
</head>
  

  


  
    




<script type='text/javascript'>

    //Show search form when search icon is clicked
    $(document).ready(function () {
        var search = $('#search-overlay');
        var q = $('#q')
        $('#main-nav').on('click', '#search', function (e) {
            search.fadeIn();
            q.focus();
        })

        //hide search form when close button is clicked
        search.on('click', '.close', function (e) {
            
            e.preventDefault();
            search.fadeOut();
        });
          $('body').flowtype({
   minimum : 500,
   maximum : 1200
 });
    });

    


</script>

<script type='text/javascript'>

//when Pace is done checking wether the page and its elements are fully loaded, fade out #loadind-overlay
 Pace.on('done', function(){
 $('#loading-overlay') .fadeOut('slow');
});


/* @description We do not want Pace to start before the logo in the #loading-overlay, assuming there is one, before it is loaded,
 * so we check to make sure it is then start Pace
 *
 *
 *
 */
imagesLoaded('#loading-overlay .loading-section .img', function(){
      
      Pace.start();
      

})


</script>

  <style type="text/css">
 

#q {
  margin: 10px 0;
  font-size: 72px;
  font-weight: 200;
  line-height: 72px;
  height: auto;
  border: none;
  outline: none;
  background: transparent;
  padding-left: 0;
  box-shadow: none;
}

#loading-overlay {
  height: 100%;
  background-color: white;
  z-index: 1001;
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
}

#pace-loader .pace{
   
    position: relative;
    display:block;
    border:none;
}

#pace-loader .pace .pace-progress{
  background: black;
}

#loading-overlay .container-fluid, #loading-overlay .container-fluid .row{
  height:100%;
}


#loading-overlay .loading-container {
  position: relative;
  top: 45%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}




  </style>
</head>

<body>


  <nav id='main-nav' class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/" style='    background-image: url("http://fontzone.net/preview/?id=15675&text=Fusion");
    width: 119px;
    background-position: 0 -11px;'></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="">About<span class="sr-only">(current)</span></a></li>
        <li class="dropdown" style='cursor:pointer;'>
          <a href='/shop'  class="dropdown-toggle" type="button" id="dropdownMenu1"  aria-haspopup="true" aria-expanded="true">
      Shop
    
  </a>
          <ul class="dropdown-menu hide" aria-labelledby="dropdownMenu1">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown hide" style='cursor:pointer;'>
          <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
      Decor
    <span class="caret"></span>
  </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown hide" style='cursor:pointer;'>
          <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
      Drapery
    <span class="caret"></span>
  </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li id='search'>
          <a href="#"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
          </a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

 <div id='search-overlay'>
     <span class="glyphicon glyphicon-remove-circle close"></span>
  <form>
    <div class="form-group">
      <label for="q" class='text-uppercase'>search fusion</label>
      <input type="text" class="form-control" id="q" placeholder="">
    </div>
  </form>
</div>

  <div id="loading-overlay">
  <div class='container-fluid'>
    <div class='row'>
      <div class='loading-container col-xs-6 col-xs-offset-3'>
      <div class='loading-section' style="width: 202px;
    margin: 0 auto;">
        <div class='img' >
          <h1  style="font-family:Jeffriana; color:black; font-size:145px; left: -91px; position: relative;">Fusion</h1>
          <img style="display:none" src='http://fontzone.net/preview/?id=15675&text=Fusion' />
        </div>
        <div id="pace-loader">
        </div>
      </div>
      </div>
    </div>
  </div>
</div>     

