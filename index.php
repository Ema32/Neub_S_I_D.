<?php  include('../include/general_user/header.php');  ?>
<!--/This is slideShow-->
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-7">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../images/system/bikti.jpg" alt="First">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/system/lab.jpg" alt="Second">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/system/tech.jpg" alt="Third">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>  
            </div>
            <!--This is Chatboat -->
            <div class="col-md-5">
                <h1 class="text-center">Chatboat</h1>
            </div>      
        </div>
    </div>
    <!--End SlideShow and Chatboat-->
    <!--This is News And Events-->
    <div class="w3-container-fluid">
        <div class="w3-row">
            <div class="">
                <h2 class="text-left text-center bg-danger  mt-2 p-2 text-white">University News and Events</h2>
            </div>
            <div class="w3-row p-5">
                <div class="w3-third">
                    <div class="w3-center">
                        <div><h3 class="text-left text-center bg-danger btn mr-5 text-white">Latest News</h3></div>
                    </div>
                    <div class="w3-row"  style="margin-left: 40px;margin-right: 20px;padding-right: 300px;">
                        <a href="" style="padding-right: 10%;padding-left: 100%;">NeublatestNews</a>
                    </div>
                    <div class="w3-row" style="margin-left: 40px;margin-right: 20px; padding-right: 300px;">
                        <a href="" style="padding-right: 10%;padding-left: 100%;">NeublatestNews</a>
                    </div>
                </div>
                <div class="w3-third">
                    <div class="w3-center">
                        <div><h3 class="text-left text-center bg-danger  btn mr-5 text-white">Current Events</h3></div>
                    </div>
                    <div class="w3-row w3-container" style="margin-left: 40px;margin-right: 20px; padding-right: 300px;">
                        <a href="" class="" style="padding-right: 10%;padding-left: 100%;">NeubCurrentEvents</a>
                    </div>
                    <div class="w3-row w3-container"  style="margin-left: 40px;margin-right: 20px;padding-right: 300px;">
                        <a href=""style="padding-right: 10%;padding-left: 100%;">NeubCurrentEvents</a>
                    </div>
                </div>
                <div class="w3-third">
                    <div class="w3-center">
                        <div><h3 class="text-left text-center bg-danger  btn mr-5 text-white">Upcoming Events</h3></div>
                    </div>
                    <div class="w3-row w3-container" style="margin-left: 40px;margin-right: 20px;padding-right: 300px;">
                        <a href=""style="padding-right: 10%;padding-left: 100%;">NeubUpcomingEvents</a>
                    </div>
                    <div class="w3-row w3-container" style="margin-left: 40px;margin-right: 20px;padding-right: 300px;">
                        <a href=""style="padding-right: 10%;padding-left: 100%;">NeubUpcomingEvents</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End News And Events-->

<?php  include('../include/general_user/footer.php');  ?>