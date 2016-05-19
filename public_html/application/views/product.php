<style type="text/css">
    .product-tab h1{
       text-align: center;
    }
    
    body{
        background-image: none;
        background-color: #f5f8fa;
    }
    
    .product-tab form label{
        font-size: 16px;
        font-weight: 500;
    }
</style>

<div id='container-fluid' class="container-fluid" style='height:100%; position:relative; top:52px;  padding-top:20px;'>
<div class='row' style='height:100%'>
    <div class="col-md-6 product-tab" style="height: 100%">
        <h1>Products</h1>
    </div>
    <div class="col-md-6 product-tab" style="height: 100%">
        <h1>Create Product</h1>

        <form class="form-horizontal">
  <div class="form-group">
    <label for="exampleInputEmail1" class="col-sm-2">Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="col-sm-2">Caption</label>
      <div class="col-sm-10">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
          </div>
  </div>
            <div class="form-group">
                <label for="productDescription" class="col-sm-2">Description</label>
                <div class="col-sm-10">
                 <textarea class="form-control" id="productDescription" placeholder="" style="margin: 0px -0.421875px 0px 0px; height: 221px; width: 630px;"></textarea>
                  </div>
            </div>

            <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> This item is avaliable for purchase
        </label>
      </div>
    </div>
  </div>

<div id="productAttributes" style="background-color: white; padding: 10px; border-radius:5px; ms-box-shadow: inset 0 0 0 1px rgba(0,0,0,.1),inset 0 1px 2px rgba(0,0,0,.21),0 1px 0 #fff;
    -o-box-shadow: inset 0 0 0 1px rgba(0,0,0,.1),inset 0 1px 2px rgba(0,0,0,.21),0 1px 0 #fff;
    box-shadow: inset 0 0 0 1px rgba(0,0,0,.1),inset 0 1px 2px rgba(0,0,0,.21),0 1px 0 #fff;">
            <div class="input-group">
                 <label for="productDescription" class="col-sm-2">Attributes</label>
                <div class="col-sm-5"></div>
                <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="" style="width: 200px;">
                    
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Add</button>
      </span>
                    </div>
    </div>

    </div>
 
  <button type="submit" class="btn btn-default">Create</button>
</form>

    </div>
</div>