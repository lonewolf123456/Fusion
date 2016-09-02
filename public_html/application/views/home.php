<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js" ></script>
<link rel="stylesheet" type="text/css" href="https://unpkg.com/flickity@1.1.2/dist/flickity.css">  
<script type="text/javascript" src="https://unpkg.com/flickity@1.1.2/dist/flickity.pkgd.min.js" ></script>
<script type='text/javascript'>
    $(document).ready(function () {
        var $gallery = $('#slider').flickity({ "autoPlay": 5000, "wrapAround": "true", "pauseAutoPlayOnHover": false });
        $gallery.trigger('settle');
        var flkty = $gallery.data('flickity');
        $('.gallery-cell').each(function (i) {
            var e = $(this)
            e.data('hidden-elements', e.find('.hide'))
        });
        var previous = null;
        $gallery.on('settle', function () {
            if (previous !== null) $(flkty.cells[previous].element).data('hidden-elements').addClass('hide');
            $(flkty.selectedElement).data('hidden-elements').removeClass('hide')
            previous = flkty.selectedIndex
        });

       

 

    });



</script>
<style type="text/css">


#main-nav {
  margin-bottom: 0;
  position: fixed;
  width: 100%;
  border-radius: 0;
  z-index: 100;
}

.row-container {
  max-width: 960px;
  margin: 0 auto;
}



#slide-show {
  position: relative;
}

#slider {
  height: 100% !important;
}
    
    #slider .flickity-viewport{
        height: 100% !important;
    }

#slider .slide {
  width: 100%;
  height: 100%;
}
    
#slider .slide h1{
        font-size: 2em;
    }
    
    #slider .slide h2{
        font-size: 1.5em;
    }

.slidesjs-pagination {
  position: absolute;
  z-index: 100;
  margin: 6px 0 0;
  float: right;
  list-style: none;
  bottom: 0px;
}

.slidesjs-pagination li {
  float: left;
  margin: 0 1px;
}

#slides a:link,
#slides a:visited {
  color: #333;
}

.slidesjs-pagination li a.active,
.slidesjs-pagination li a:hover.active {
  background-position: 0 -13px;
}

.slidesjs-pagination li a {
  display: block;
  width: 13px;
  height: 0;
  padding-top: 13px;
  background-image: url(http://slidesjs.com/img/pagination.png);
  background-position: 0 0;
  float: left;
  overflow: hidden;
}

a:link,
a:visited {
  color: #d22929;
  text-decoration: none;
}

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.section {
  padding: 90px 0 90px 0;
}

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
}

.mk-box-icon .icon {
  display: inline-block;
  margin: 0 auto;
  line-height: 96px;
  height: 100px;
  width: 100px;
  font-size: 48px;
  color: #333333;
}

.mk-box-icon {
  text-align: center;
}

.overlay {
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

.background-layer {
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.flickity-page-dots {
  bottom: 20px;
}

.flickity-page-dots .dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 0 8px;
  background: white;
  border-radius: 50%;
  filter: alpha(opacity=25);
  opacity: 0.25;
  cursor: pointer;
}

.grid-item {
  color: white;
  width: 430px;
  height: 430px;
  position:relative;
  border-radius: 6px;
  margin: 25px 0 25px 0;
  overflow: hidden;
  -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.22);
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.22);
}

.grid-item-large {
  width: 100%;
  margin: 0px;
}

.img-wrapper {
  height: 100%;
}

.img-holder {
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.img-holder {
  width: 100%;
  height: 100%;
  background-position: center;
  background-size: cover;
}

.img-wrapper .img-wrapper-options {
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: 1;
}

.img-wrapper .img-wrapper-options .footer {
  background-color: rgba(0, 0, 0, .5);
  background: -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(0, 0, 0, 0.3)));
  background: -webkit-linear-gradient(transparent, rgba(0, 0, 0, 0.3));
  background: linear-gradient(transparent, rgb(0, 0, 0));
  padding: 10px;
  position: absolute;
  bottom: 0px;
  width: 100%;
}

#prelims .glyphicon{
 color: #565050;
}

  </style>







<div id='container-fluid' class='container-fluid' style='position:relative; height:100%'>
  <div class='row' style='height:100%' id='slide-show'>
    <div id='slider' class='gallery ' >
      <div id='test' class='gallery-cell slide' style="background-image:url('http://demandware.edgesuite.net/sits_pod21/dw/image/v2/AAKH_PRD/on/demandware.static/-/Sites-main/default/dwa31cce4a/images/alt/FEB2015_ABINGTON_LR_073_flip.jpg');background-size: cover;background-position: center center;">
        <div class='row' style='height:100%;'>
          <div class="col-md-6 col-md-offset-2 fadeInLeft animated" style="background-color:rgba(0,0,0,.5); text-align: left;color: white; top:150px">
            <h1 style="color:white;text-align: left;" class="">
              Clean, Modern, Simple
              </h1>

<h2 style="
  
">Your search for timeless styles ends here</h2>

          </div>
        </div>

      </div>
      <div id='test' class='gallery-cell slide' style="background-image:url('http://www.kotrik.com/wp-content/uploads/2016/01/ethan-allen-living-room-furniture-ethan-allen-furniture-living-room-best-furniture-design-ideas.jpg');background-size: cover;background-position: center center;">
        <div class='row' style='height:100%;'>
          <div class="col-md-6 col-md-offset-2 fadeInLeft animated hide" style="background-color:rgba(0,0,0,.5); text-align: left;color: white; top:150px">
            <h1 style="color:white;text-align: left;" class="">
              Clean, Modern, Simple
              </h1>

<h2 style="
    
">Your search for timeless styles ends here</h2>

          </div>
        </div>

      </div>
    </div>
  </div>
 
  <div class='row section' style='color:white; padding:90px 0 90px 0;background-color: #91A8D0; text-align: center;'>
    <div class='row row-container'>
      
       
        <h1  style="font-family: Jeffriana;
    font-size: 6em;
    border: 1px solid white;
    border-radius: 100%;
    width: 1.5em;
    margin: 0 auto;
    height: 1.5em;
    padding-top: .19em;
    padding-right: .19em;
    margin-bottom: 40px;">F</h1>
  
    

      
        <p style="color: white; font-size: 1.2em; font-weight: 500;">Fusion is a family owned business that was established in 2001. We are a total home décor service center providing custom window treatments, design consulting, custom upholstery and much more …anything that adds to the beauty and comfort of your home. Fusions main concern will always and forever be customer satisfaction.</p>
    
    </div>
  </div>
  <div class='row' style='color:#565050; background-color:#f7cac9;'>
  <div id='prelims' class='row-container row section' style='max-width:1200px'>
    <div class='col-md-3'>
      <div class='mk-box-icon'>
       
        <h1 style="font-family: Jeffriana;">
        Furniture
        </h1>
        <p>
           At Fusion we believe in quality furniture at reasonable prices and breath taking design. All the pieces at fusion have certain appealing qualities of all their own that makes them unique.
        </p>
      </div>
    </div>
    <div class='col-md-3'>
      <div class='mk-box-icon'>
        
        <h1 style="font-family: Jeffriana;">
        Decor
        </h1>
        <p>
         All of our décor is born from a love of design. These beautiful pieces are created and chosen from the skills and love of our diligent designers. Our efforts are all to provide our clients with the best quality of décor.
        </p>
      </div>
    </div>
    <div class='col-md-3'>
      <div class='mk-box-icon'>
       
        <h1 style="font-family: Jeffriana;">
        Window Treatment
        </h1>
        <p>
           Our window treatments are custom made to provide our clients with a timeless style that is all their own. When custom made they stand out in your home, this world and your life.
        </p>
      </div>
    </div>
    <div class='col-md-3'>
      <div class='mk-box-icon'>
        
        <h1 style="font-family: Jeffriana;">
        Accessories
        </h1>
        <p>
          Think color, texture and personality when choosing your accessories. This is exactly what Fusion provides with its vibrant pieces. You can have any emotion in a room be it passion or peace or any quality under the sun. Any of these feelings can be turned on when you choose an accessory from Fusion.
        </p>
      </div>
    </div>
  </div>
    </div>
    
      

