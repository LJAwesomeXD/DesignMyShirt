<style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Lato:400,700);
body
{
    font-family: 'Lato', 'sans-serif';
    }
.profile 
{
    min-height: 355px;
    display: inline-block;
    }
figcaption.ratings
{
    margin-top:20px;
    }
figcaption.ratings a
{
    color:#f1c40f;
    font-size:11px;
    }
figcaption.ratings a:hover
{
    color:#f39c12;
    text-decoration:none;
    }
.divider 
{
    border-top:1px solid rgba(0,0,0,0.1);
    }
.emphasis 
{
    border-top: 4px solid transparent;
    }
.emphasis:hover 
{
    border-top: 4px solid #1abc9c;
    }
.emphasis h2
{
    margin-bottom:0;
    }
span.tags 
{
    background: #1abc9c;
    border-radius: 2px;
    color: #f5f5f5;
    font-weight: bold;
    padding: 2px 4px;
    }
.dropdown-menu 
{
    background-color: #34495e;    
    box-shadow: none;
    -webkit-box-shadow: none;
    width: 250px;
    margin-left: -125px;
    left: 50%;
    }
.dropdown-menu .divider 
{
    background:none;    
    }
.dropdown-menu>li>a
{
    color:#f5f5f5;
    }
.dropup .dropdown-menu 
{
    margin-bottom:10px;
    }
.dropup .dropdown-menu:before 
{
    content: "";
    border-top: 10px solid #34495e;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
    position: absolute;
    bottom: -10px;
    left: 50%;
    margin-left: -10px;
    z-index: 10;

    }

    .

</style>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
         <div class="well profile">
            <div class="col-sm-12">
             <div>
                    <img src="<?php echo base_url('images/profpic.png'); ?>" id="profpic"  width="200pt" height="auto" align="middle" alt="Logo"/>
                    </div> 
                <div class="col-xs-12 col-sm-8">
                    <h2>LJ Sta Ana</h2>
                    <p><strong>About: </strong> Shirt Designer </p>
                    <p><strong>Motto : </strong> "Good Luck for trying to be Good"</p>
                    <p><strong>Designs: </strong>
                        <span class="tags">geek</span> 
                        <span class="tags">3D</span>
                        <span class="tags">realistic</span>
                    </p>

                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <figcaption class="ratings">
                            <p>Ratings
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                 <span class="fa fa-star-o"></span>
                            </a> 
                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong> 50 </strong></h2>                    
                    <h4>Entries</h4>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>23</strong></h2>                   
                   <h4> Contest Wins </h4>
                </div>
                 <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>3</strong></h2>                   
                   <h4> Contest Created </h4>
                </div>
               
            </div>
         </div>                 
        </div>
    </div>
</div>
<div class="Gallery">
    <h1> Submitted Designs </h1>

    <div class="container">
  <div class="row">
    <div class="col-sm-4">
       <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4><a href="#">first submission</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class=""></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                </p>
                            </div>
                        </div>
                         <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4><a href="#">Second submission</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class=""></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                </p>
                            </div>
                        </div>
    </div>
    <div class="col-sm-4">
     <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4><a href="#">Third submission</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class=""></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                </p>
                            </div>
                        </div>
                         <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4><a href="#">Fourth submission</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class=""></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                </p>
                            </div>
                        </div>
      
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4><a href="#">Fifth submission</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class=""></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                </p>
                            </div>
                        </div>
                         <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4><a href="#">Sixth submission</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class=""></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                </p>
                            </div>
                        </div>
    </div>
  </div>
</div>
</div>
