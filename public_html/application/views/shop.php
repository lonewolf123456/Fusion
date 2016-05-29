 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
  <style type="text/css">

  .grid-item {
    width: 236px;
    -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.22);
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.22);
    overflow: hidden;
    margin-bottom: 10px;
    position:relative;
    cursor: pointer;
  }

  .grid-item .img-wrapper {
    width: 100%;
    position: relative;
  }

  .grid-item .img-wrapper img {
    width: 100%;
  }

  .grid-item .img-wrapper .grid-options {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    z-index: 1;
  }

  .grid-item .grid-metadata {
    background-color: white;
    padding: 10px;
  }

  .grid-item .grid-metadata h1,
  h2,
  h3,
  h4,
  h5 {
    margin: 0;
    margin-bottom: 10px;
  }

  .grid-item .img-wrapper .grid-options .quick-shop {
    background-color: black;
    color: white;
    padding: 5px;
    display:none;
  }


  #quick-shop {
  height: 100%;
  padding-top: 35px;
  background-color: white;
  z-index: 1001;
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  display:none;
}

#quick-shop .img img {
  max-width: 690px;
  width: 100%;
  max-width: 690px;
  width: 100%;
  margin: 0 auto;
  display: block;
}


    </style>


    
      




  <script type='text/javascript'>      //<![CDATA[

      window.onload = function () {
          var shopGrid = $('#shop-grid')


          shopGrid.on('mouseenter', '.img-wrapper', function (e) {

              var qs = $(this).find('.quick-shop');
              qs.show();
          })

          shopGrid.on('mouseleave', '.img-wrapper', function (e) {

              var qs = $(this).find('.quick-shop');
              qs.hide();
          })



      }



      //Show search form when search icon is clicked
      $(document).ready(function () {
          var q = $('#quick-shop');

          //hide search form when close button is clicked
          q.on('click', '#quick-shop-close', function (e) {
              
              console.log('clicked')
              e.preventDefault();
              q.fadeOut();
          })

          imagesLoaded('#shop-grid img', function () {
              window.$grid = $('#shop-grid').masonry({
                  itemSelector: ".grid-item",
                  columnWidth: 236,
                  gutter: 10,
                  isFitWidth:true

              });
          });
      });





      //]]> 

  </script>


  <div id='container-fluid' class="container-fluid" style='min-height:100%; position:relative; top:52px;  padding-top:20px;' ng-controller="productController">
    <div  id='shop-grid' class='grid js-masonry row-container'  style='max-width:1000px; margin-bottom: 50px;'>
      <div class='grid-item' ng-repeat='product in products'>
        <div class='img-wrapper' ng-click="showQuickShop($index, showqs)">
          <img ng-src='{{ product.skus.data[0].image }}' />
          <div class='grid-options'>

            <div class='quick-shop'>
              <div class='row'>
                <div class='col-xs-6 col-xs-offset-3'>
                  <p>
                    Quick Shop
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='grid-metadata'>
          <h3>
           {{ product.name }}
         </h3>
         <p>
           {{ product.description }}
         </p>
       </div>
     </div>
   </div>
   <!--Start Quick Shop -->
   <div id="quick-shop" class="container-fluid" style="">
       <span id="quick-shop-close" class="glyphicon glyphicon-remove-circle close"></span>
    <div class="row" style="max-width:1200px; margin: 0 auto">
      <div class="col-md-6">
        <div class='img'>
          <img ng-src="{{  quickShop.product.skus.data[0].image }}" />
        </div>
      </div>
      <div class="col-md-6">
        <div id='itemName-itemId'>
          <h1 id='itemName' style='display:inline-block;'>{{ quickShop.product.name }}</h1>
          <p style='vertical-align:middle; display:inline-block; margin-left:50px'>item number: {{ quickShop.product.id }} <span id='itemId'></span></p>
        </div>
        <div>
          <h3>
            Starting at <span class='price'>{{ quickShop.product.skus.data[0].price | currency }}</span>
          </h3>
        </div>
          <select class="form-control skuAttribute" ng-repeat='attribute in quickShop.product.attrs' style="width:initial;">
  <option  ng-repeat="sku in attribute track by $index">{{ sku }}</option>
</select>
          <button class="btn btn-default" ng-click="addToCart()">Add To Cart</button>
        <div class="page-header" style='border-color: black'>
          <h3 style='color:black'>Product Details</h3>
        </div>
        <p class='description'>
          {{ quickShop.product.description }}
        </p>
      </div>
    </div>
  </div>
  <!-- End Quick Shop -->
<script type="text/javascript" src="/js/controllers/productController.js"></script>
</div>	