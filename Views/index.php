<html>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1">

<?php include_once "includecss.php" ?>
    <style>
    .recentposts li{
    float:left;
    }
    </style>
</head>
<body>
<?php
include_once "../vendor/autoload.php";
use App\indexmodel;
$conn=new indexmodel();
?>
<div class="container">
    <div class="row">
   <div class="col-md-12 col-sm-3 col-xs-12 menu-bar">
       <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12" id="top-bar">

      </div>
      </div>
       <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12" id="banner">

          </div>
       </div>
       <div class="container">
       <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12 menu">
               <div id="navigation">
                   <ul>
                       <li><a href="#">Home</a></li>
                       <li><a href="#">About</a></li>
                       <li><a href="#">Service</a> </li>
                       <li><a href="#">Contact</a></li>
                       <li><a href="#">Home</a></li>
                       <li><a href="#">About</a></li>
                       <li><a href="#">Service</a> </li>
                       <li><a href="#">Contact</a></li>
                       <li><a href="#">Home</a></li>
                       <li><a href="#">About</a></li>
                       <li><a href="#">Service</a>
                           <ul>
                               <li><a href="#">Home</a></li>
                               <li><a href="#">About</a></li>
                               <li><a href="#">Service</a>
                                   <ul>
                                       <li><a href="#">Home</a></li>
                                       <li><a href="#">About</a></li>
                                       <li><a href="#">Service</a>
                                           <ul>
                                               <li><a href="#">Home</a></li>
                                               <li><a href="#">About</a></li>
                                               <li><a href="#">Service</a> </li>
                                               <li><a href="#">Contact</a></li>
                                           </ul>
                                       </li>
                                       <li><a href="#">Contact</a></li>
                                   </ul>
                               </li>
                               <li><a href="#">Contact</a></li>
                           </ul>

                       </li>
                       <li><a href="#">Contact</a></li>
                       <li><a href="#">Home</a></li>
                       <li><a href="#">About</a></li>
                       <li><a href="#">Service</a> </li>
                       <li><a href="#">Contact</a></li>
                       <li><a href="#">Home</a></li>
                       <li><a href="#">About</a></li>
                       <li><a href="#">Service</a> </li>
                       <li><a href="#">Contact</a></li>
                   </ul>
               </div>
           </div>
       </div>
       </div>
   </div>
    </div>
</div>

<!-- content -->

<div class="container maincontent">
    <div class="row">
        <div class="col-lg-8 col-sm-8 col-xs-8" id="content">
        <div class="row">
          
 <div class="col-md-12">
              <div><h5>Recent Addition</h5>
<div class="stripe-line"></div>
              </div>
              <div class="recentposts" style="border:1px solid green;height:230px;background-color:white">
              <?php

                   for($i=0;$i<4;$i++)
                   {
                    ?>

                <div class="row">
                    <div class="col-md-4" style="background-color: red;height: 120px">

                    </div>
                    <div class="col-md-4" style="background-color: yellow;height: 120px">

                    </div>
                    <div class="col-md-4" style="background-color: purple;height: 120px">

                    </div>

                </div>
                <div style="margin-top:10px;"></div>
                <?php
                   }
              ?>

                 <!--<ul class="" style="padding:20px;list-style:none;float:left">
                <li>
                    <div style="height: 20px;width:20px;background-color: red">

                    </div>
                </li>
                <li>India</li>
                <li>Srilanka</li>
                <li>England</li>
                <li>America</li>
              </ul>-->
              </div>
             
            </div>
        </div>
           
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-4" id="rightbar">
            <div class="row">
                <div class="col-md-10 col-sm-8 col-xs-10 rightbar-content">
                       <div class="row">
                           <div class="col-md-12">
                                   <div class="input-group" id="searchbox">
                                       <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
                                   </div><!-- /input-group -->

                           </div>
                       </div>

                    <div class="row social-media" style="height: 100px">
                        <div class="col-md-4 col-sm-4 col-xs-4 youtube" style="border: 2px solid grey;background-color: white;height:100%">
                            <a href="#"><img src="images/fb1.png" class="img-responsive" style="height:100%;width:100%"></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 youtube" style="border: 2px solid grey;background-color: white;height:100%">
                            <a href="#"><img src="images/twitter.png" class="img-responsive" style="height:100%;width:100%"></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 twitter" style="border: 2px solid grey;background-color: white;height:100%">
                            <a href="#"><img src="images/youtube1.png" class="img-responsive" style="height:100%;width:100%"></a>
                        </div>

                    </div>

                    <div class="cotainer1 fullcontent">
                        <div class="row">
                          <div class="col-md-12">
                              <!-- <div id="tabwidget" class="widget tab-container">
                                  <ul id="tabnav" class="clearfix">

                                      <li><h3><a href="#tab1" class="selected"><img src="images/view-white-bg.png" alt="Popular">জনপ্রিয়</a></h3></li>
                                      <li><h3><a href="#tab2"><img src="images/time-white.png" alt="Recent">সাম্প্রতিক</a></h3></li>
                                      <li><h3><a href="#tab3"><img src="images/komen-putih.png" alt="Comments">মন্তব্য</a></h3></li>
                                      <li><h3><a href="#tab3"><img src="images/komen-putih.png" alt="Comments">ট্যাগ</a></h3></li>
                                  </ul>

                                  <div id="tab-content">

                                      <div id="tab1" style="display: block; ">
                                          <ul id="itemContainer" class="recent-tab">
                                              <?php
                                            /*  $postmiddle=new home_model();
                                              $rows=$postmiddle->get_recent_post();
                                              foreach($rows as $row)
                                              {
                                                  $image=$row['img_thmb'];
                                                  echo '<li>
						<a href="#"><img width="225" height="136" src="post/'.$image. '" class="thumb" alt="shutterstock_134257640" /></a>
						<h4 class="post-title"><a href="#">'.$row['caption'].'</a></h4>
						<p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dig...</p>
						<div class="clearfix"></div>
					</li>';

                                              }*/

                                              ?>

                                              <script type="text/javascript">
                                                  jQuery(document).ready(function($){

                                                      /* initiate the plugin */
                                                      $("div.holder").jPages({
                                                          containerID  : "itemContainer",
                                                          perPage      : 3,
                                                          startPage    : 1,
                                                          startRange   : 1,
                                                          links		   : "blank"
                                                      });
                                                  });
                                              </script>

                                          </ul>

                                          <div class="holder clearfix"></div>
                                          <div class="clear"></div>

                                          <!-- End most viewed post -->

                                      </div><!-- /#tab1 -->

                                      <div id="tab2" style="display: none;">
                                          <ul id="itemContainer2" class="recent-tab">

                                              <?php
                                             /* $postmiddle=new home_model();
                                              $rows=$postmiddle->get_recent_post();
                                              foreach($rows as $row)
                                              {
                                                  $image=$row['img_thmb'];
                                                  echo '<li>
						<a href="#"><img width="225" height="136" src="post/'.$image. '" class="thumb" alt="shutterstock_134257640" /></a>
						<h4 class="post-title"><a href="#">'.$row['caption'].'</a></h4>
						<p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dig...</p>
						<div class="clearfix"></div>
					</li>';

                                              }*/

                                              ?>

                                              <li>
                                                  <a href="#"><img width="225" height="136" src="images/dummy/shutterstock_134257640-225x136.jpg" class="thumb" alt="shutterstock_134257640" /></a>
                                                  <h4 class="post-title"><a href="http://magazine.themedesigner.in/lectus-non-rutrum-pulvinar-urna-leo-dignissim-lorem-8/">Lectus non rutrum pulvinar urna...</a></h4>
                                                  <p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dig...</p>
                                                  <div class="clearfix"></div>
                                              </li>
                                              <li>
                                                  <a href="#"><img width="225" height="136" src="images/dummy/shutterstock_70184773-225x136.jpg" class="thumb" alt="shutterstock_70184773" /></a>
                                                  <h4 class="post-title"><a href="#">Suspen disse auctor dapibus neq...</a></h4>
                                                  <p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing...</p>
                                                  <div class="clearfix"></div>
                                              </li>
                                              <li>
                                                  <a href="#"><img width="225" height="136" src="images/dummy/shutterstock_70787161-225x136.jpg" class="thumb" alt="shutterstock_70787161" /></a>
                                                  <h4 class="post-title"><a href="#">Porta lorem ipsum dolor sit ame...</a></h4>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer place...</p>
                                                  <div class="clearfix"></div>
                                              </li>
                                          </ul>
                                      </div><!-- /#tab2 -->

                                      <div id="tab3" style="display: none; ">
                                          <ul>
                                              <?php
                                         /*     $tag = new home_model();
                                              $tags=$tag->get_resources_tags();
                                              foreach($tags as $item) {

                                                  echo '<a href="#">'.$item['caption'].'</a>';

                                              }*/
                                              ?>
                                          </ul>
                                      </div><!-- /#tab2 -->

                                  </div><!-- /#tab-content -->

                              </div> /#tab-widget -->
                          </div>
                        </div>
                    </div>

                        <!--end of tabbed widget-->

                        <div class="container1 fullcontent">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="videowrapper">
                                    <iframe class="hs-responsive-embed-youtube" src="https://www.youtube.com/embed/1DxLXL-_cL8" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                                </div>


                    <div class="container1 fullcontent">
                        <div class="row">
                            <div class="col-md-12 topics">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="sel1">Select list (select one):</label>
                                        <select class="form-control" id="sel1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        </div>
                           </div>
                    </div>

                            </div>

                    <div class="container1 fullcontent">
                        <div class="row">
                            <div class="col-md-12 topics">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="sel1">Select list (select one):</label>
                                        <select class="form-control" id="sel1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                            </div>
                        </div>

                    </div>

                     <div class="container1 fullcontent">
                        <div class="row">
                            <div class="col-md-12 topics">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="sel1">Select list (select one):</label>
                                        <select class="form-control" id="sel1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                            </div>
                        </div>

                    </div>

                        </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->

<div class="container-fluid footer">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="container footer-content">
             <div class="row">
                 <div class="col-md-4 col-sm-8 col-xs-12" style="background-color:green;height:100%;padding:5px;margin-left:25px">
                    <ul>
                    <h3 style="">Recent News</h3>
                    <li>
                    <div style="border-bottom:1px solid black;margin-top:2px">
                        <a href="#">Bangladesh Is In Crisis</a>
                        <p>The current situation of bangladesh is very bad.</p>
                    </div>
                    </li>
                    <li>
                    <div style="border-bottom:1px solid black;margin-top:2px">
                        <a href="#">Bangladesh Is In Crisis</a>
                        <p>The current situation of bangladesh is very bad.</p>
                    </div>
                    </li>
                    <li>
                    <div style="border-bottom:1px solid black;margin-top:2px">
                        <a href="#">Bangladesh Is In Crisis</a>
                        <p>The current situation of bangladesh is very bad.</p>
                    </div>
                    </li>
                
                    </ul>
                 </div>
                  <div class="col-md-4 col-sm-8 col-xs-12" style="background-color:yellow;height:100%;padding:20px;margin-left:25px">
              <ul>
                    <li>Bangladesh</li>
                    <li>Bangladesh</li>
                    <li>Bangladesh</li>
                    <li>Bangladesh</li>
                    </ul>
                 </div>
                  <div class="col-md-3 col-sm-8 col-xs-12" style="background-color:blue;height:100%;padding:20px;margin-left:25px">
              <ul>
                    <li>Bangladesh</li>
                    <li>Bangladesh</li>
                    <li>Bangladesh</li>
                    <li>Bangladesh</li>
                    </ul>
                 </div>
             </div>
         </div>
    </div>
</div>
</div>

<!--footer below copyright area-->
<div class="container-fluid footer-below">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

        </div>
    </div>
</div>

<?php include_once "includejs.php" ?>
</body>
</html>