<div class="container">
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-9">

            <!-- Blog Post -->
            <?php while ($row = mysqli_fetch_array($details)) {
                # code...
               ?>
               <!-- Title -->
               <h1><?php echo $row['title']; ?></h1>

               <!-- Author -->
               <p class="lead">
                by <a href="#">Some one just I know</a>
            </p>

            <!-- Preview Image -->
            <img class="img-responsive" style="width: 900px;height: 300px;" src="http://placehold.it/900x300" alt="">

            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo date('l, d - m - Y',strtotime($row['created'])); ?></p>
            <hr>

            <!-- Post Content -->
            <p class="lead"><?php echo $row['description']; ?></p>
            <p><?php echo $row['content']; ?></p>
            
            <hr>
        <?php } ?>
        <!-- Blog Comments -->
        <?php if ($checkLike == 0 && $userId==0) { ?>
            <a href="index.php?action=<?php echo isset($_SESSION['login'])?'like':'login' ?>&id=<?php echo $id; ?>">LIKE </a>
        <?php }else{ echo "Bạn đã thích bài này!";} ?>
        <p> Tổng like: <?php echo $countLike; ?> </p> 
        
        <!-- Comments Form -->
        <?php if (isset($_SESSION['login'])){ ?>
            <div class="well">
                <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                <form role="form" action="index.php?action=add_cmt&id=<?php echo $id; ?>" method="POST">
                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="comment"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div>
        <?php }else {echo "Vui lòng <a href='index.php?action=login&id=$id' style='color:blue'>đăng nhập</a> để thực hiện bình luận";} ?>
        

        <hr>

        <!-- Posted Comments -->

        <!-- Comment -->
        <?php while ($row = mysqli_fetch_array($listcmt)) {
            # code...
         ?>
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" style="width: 40px;height: 40px;" src="images/users/<?php echo $row['avatar']; ?>" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading"><?php echo $row['name']; ?>
                    <small> <?php  echo date('l, d - m - Y',strtotime($row['created']));?></small>
                </h4>
                <?php echo $row['content']; ?>
            </div>
        </div>
        <?php } ?>
    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-3">

        <div class="panel panel-default">
            <div class="panel-heading"><b>Tin liên quan</b></div>
            <div class="panel-body">

                <!-- item -->
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-5">
                        <a href="detail.html">
                            <img class="img-responsive" src="image/320x150.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <a href="#"><b>Project Five</b></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="break"></div>
                </div>
                <!-- end item -->

                <!-- item -->
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-5">
                        <a href="detail.html">
                            <img class="img-responsive" src="image/320x150.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <a href="#"><b>Project Five</b></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="break"></div>
                </div>
                <!-- end item -->

                <!-- item -->
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-5">
                        <a href="detail.html">
                            <img class="img-responsive" src="image/320x150.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <a href="#"><b>Project Five</b></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="break"></div>
                </div>
                <!-- end item -->

                <!-- item -->
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-5">
                        <a href="detail.html">
                            <img class="img-responsive" src="image/320x150.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <a href="#"><b>Project Five</b></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="break"></div>
                </div>
                <!-- end item -->
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><b>Tin nổi bật</b></div>
            <div class="panel-body">

                <!-- item -->
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-5">
                        <a href="detail.html">
                            <img class="img-responsive" src="image/320x150.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <a href="#"><b>Project Five</b></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="break"></div>
                </div>
                <!-- end item -->

                <!-- item -->
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-5">
                        <a href="detail.html">
                            <img class="img-responsive" src="image/320x150.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <a href="#"><b>Project Five</b></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="break"></div>
                </div>
                <!-- end item -->

                <!-- item -->
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-5">
                        <a href="detail.html">
                            <img class="img-responsive" src="image/320x150.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <a href="#"><b>Project Five</b></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="break"></div>
                </div>
                <!-- end item -->

                <!-- item -->
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-5">
                        <a href="detail.html">
                            <img class="img-responsive" src="image/320x150.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <a href="#"><b>Project Five</b></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="break"></div>
                </div>
                <!-- end item -->
        </div>
    </div>

</div>

</div>
<!-- /.row -->
</div>