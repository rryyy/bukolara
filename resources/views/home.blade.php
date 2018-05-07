@extends('layouts.app')

@section('content')
    <!-- profile 
    ================================================== -->
    <div class="container-fluid" style="padding-right: 15%; padding-left: 15%">
        <div class="row">
            <div class="col-sm-3 well">
                <div class="text-center" style="margin-top: 5%">
                    <div class="well">
                        <img src="images/avatars/user-01.jpg" class="img-circle" height="65" width="65">
                        <br><br>
                        <h6><strong>John Ray Q. Guerra</strong></h6>
                    </div>

                    <div class="well">
                        <h6><strong>Your Commuting Experience About</strong></h6>
                        <br>
                        <p>
                          <span class="label label-primary">Bus</span>
                          <span class="label label-primary">Jeepney</span>
                          <span class="label label-primary">Taxi</span>
                          <span class="label label-primary">Tricycle</span>
                          <span class="label label-primary">Train</span>
                          <span class="label label-primary">TNCs</span>
                        </p>
                    </div>

                    <h6><strong>Recently Liked</strong></h6><br>
                    <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <h6><strong>Jolyn Pingal</strong></h6>
                    <h6>Post Preview...</h6>
                    </div>

                    <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <h6><strong>Ron Angelo Batac</strong></h6>
                    <h6>Post Preview...</h6>
                    </div>

                </div>
            </div>

    <!-- posts
    ================================================== -->
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="well">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-02.jpg" class="img-circle" height="25" width="25"></li>
                                <li><h6><strong>Jolyn Pingal</strong></h6></li>
                                <li style="float: right"><li style="float: right"><img src="images/puvs/jeepney.png" height="25" width="25"></li></li>
                            
                                <div style="margin-top: 5%; margin-bottom: 5%">
                                    <!-- image -->
                                    <a href="images/wheel-500.jpg"><p><img src="images/wheel-500.jpg" class="img-responsive" sizes="(max-width: 1000px) 100vw, 1000px" alt="" style="margin-bottom: 5%"></p></a>      

                                    <h6 style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</h6>
                                </div>
                            
                                <div class="list-inline">
                                    <li><span class="fa fa-heart-o"></span></li>
                                    <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="fa fa-comment-o" style="color: #333;"></span></a></li>
                                    <li><span class="fa fa-paper-plane-o" style=""></span></li>
                                </div>
                            </div>
                        </div>

                        <div class="well">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-03.jpg" class="img-circle" height="25" width="25"></li>
                                <li><h6><strong>Ron Angelo Batac</strong></h6></li>
                                <li style="float: right"><li style="float: right"><img src="images/puvs/jeepney.png" height="25" width="25"></li></li>
                            
                                <div style="margin-top: 5%; margin-bottom: 5%">
                                    <!-- image -->
                                    <a href="images/portfolio/gallery/g-beetle.jpg"><p><img src="images/portfolio/gallery/g-beetle.jpg" class="img-responsive" sizes="(max-width: 1000px) 100vw, 1000px" alt="" style="margin-bottom: 5%"></p></a>    
                                
                                    <h6 style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</h6>
                                </div>
                            
                                <div class="list-inline">
                                    <li><span class="fa fa-heart-o"></span></li>
                                    <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="fa fa-comment-o" style="color: #333;"></span></a></li>
                                    <li><span class="fa fa-paper-plane-o"></span></li>
                                </div>
                            </div>
                        </div>

                        <div class="well">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-04.jpg" class="img-circle" height="25" width="25"></li>
                                <li><h6><strong>Joshua Pasol</strong></h6></li>
                                <li style="float: right"><li style="float: right"><img src="images/puvs/jeepney.png" height="25" width="25"></li></li>
                            
                                <div style="margin-top: 5%; margin-bottom: 5%">
                                    <h6 style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</h6>
                                </div>
                            
                                <div class="list-inline">
                                    <li><span class="fa fa-heart-o"></span></li>
                                    <li><span class="fa fa-comment-o"></span></li>
                                    <li><span class="fa fa-paper-plane-o"></span></li>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    <!-- others
    ================================================== -->
            <div class="text-center">
                <div class="col-sm-3 well">
                    <div class="alert alert-danger fade in" style="margin-top: 5%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <h6><strong>Mood Meter Here</strong></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- comments
    ===================================================-->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Comments</h4>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-sm-6 well">
                    <a href="images/portfolio/gallery/g-beetle.jpg"><p style="margin-top: 5%"><img src="images/portfolio/gallery/g-beetle.jpg" class="img-responsive" sizes="(max-width: 1000px) 100vw, 1000px" alt="" style="margin-bottom: 5%"></p></a>
                </div>

                <div class="col-sm-1"></div>

                <div class="col-sm-5 well">
                    <div class="list-inline" style="margin-top: 5%">
                        <li><img src="images/avatars/user-01.jpg" class="img-circle" height="25" width="25"></li>
                                    
                        <li><h6><strong>John Ray Q. Guerra</strong></h6></li>


                        <li style="float: right"><span class="bookmark-negative"><span class="fa fa-bookmark"></span></span></li>

                        <div style="margin-top: 5%; margin-bottom: 5%">
                            <h6 style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</h6>
                        </div>

                        <div class="list-inline" style="margin-bottom: 5%">
                            <li><span class="fa fa-heart-o"></span></li>
                            <li><span class="fa fa-paper-plane-o"></span></li>
                            <hr> 
                        </div>

                        <div style="margin-bottom: 5%">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-02.jpg" class="img-circle" height="25" width="25"></li>
                                    
                                <li style="margin-bottom: 5%"><h6><strong>Jolyn Pingal</strong></h6></li>

                                <h6 style="text-align: justify"> Commment Here... </h6>
                            </div>
                        </div>

                        <div style="margin-bottom: 5%">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-03.jpg" class="img-circle" height="25" width="25"></li>
                                    
                                <li style="margin-bottom: 5%"><h6><strong>Ron Angelo Batac</strong></h6></li>

                                <h6 style="text-align: justify"> Commment Here...</h6>
                            </div>
                        </div>

                        <div style="margin-bottom: 5%">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-04.jpg" class="img-circle" height="25" width="25"></li>
                                    
                                <li style="margin-bottom: 5%"><h6><strong>Joshua Pasol</strong></h6></li>

                                <h6 style="text-align: justify"> Comment Here...</h6>
                            </div>
                        </div>
                        
                        <hr>

                        <div style="margin-bottom: 5%">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-01.jpg" class="img-circle" height="25" width="25"></li>
                                    
                                <li style="margin-bottom: 5%"><h6><strong>John Ray Q. Guerra</strong></h6></li>

                                <textarea class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                        <button style="float: right; margin-bottom: 5%" type="button" class="btn btn-primary btn-xs"><span class="fa fa-comment"></span> Comment</button>

                    </div>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    
    <!-- preloader
    ================================================== -->
    <!-- <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div> -->

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
@endsection
