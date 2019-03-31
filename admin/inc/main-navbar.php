<div class="container-fluid mainNavbar sticky-top">
    <nav class="navbar">

        <div class="col-sm-3" style="padding-left: 0;">
            <!--Apps name + Marquee news-->
            <ul class="nav nav-1">
                <span>
                    <img src="../assets/system/icon/goodnews.png" width="32" height="32">
                </span>
                <p>Goodnews</p>
            </ul>

            <!--Apps name + Marquee news End-->
        </div>
        <div class="col-sm-6">
            <ul class=" nav justify-content-center testmarquee">
                <?php
                    include_once ('config/functions-posts.php');
                    $titles = load5LastPosts();
                    $n=0;
                ?>
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();"
                         onmouseout="this.start();" scrolldelay="100" >
                    <?php foreach ($titles as $title): ?>
                        <?php$n=$n+1; ?>
                        <span>&nbsp;&nbsp; <?php echo $n = $n+1?> | <?=  $title['title']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php endforeach; ?>

                </marquee>
            </ul>
        </div>
        <div class="col-sm-3">
            <!--User Account option-->
            <ul class="nav nav-2 justify-content-end align-middle">
                <li class="nav-item NavNotification " style="width: 30px">
                    <a href="#">
                        <span style="padding-right: 0">
                            <i class="fas fa-bell"></i>
                        </span>
                        <span class="badge badge-warning" style="background-color: #e8f0fe">9</span>
                    </a>
                </li>
                <li class="nav-item dropdown" data-display="static">
                    <a class="nav-link AuthorName" href="#" id="dropdownMenuButton" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <?php
                        if (isset($dataAuthor[0]['photo']) AND !empty($dataAuthor[0]['photo'])){
                            $photo = "../assets/authors/profiles/".$dataAuthor[0]['photo']."";
                        }else{
                            $photo  =" ../assets/system/icon/avatar.png";
                        }
                        ?>

                        <img src="<?php echo $photo?>" width="36" height="36"
                             class="d-inline-block align-top rounded-circle " alt="">
                        &nbsp;&nbsp;<i class="fas fa-bars"></i> &nbsp;
                    </a>

                    <div class="dropdown-menu dropdown-menu-sm-right" aria-labelledby="dropdownMenuButton" style="margin-right: 15%">
                        <a class="dropdown-item" href="config/logout.php">
                            <i class="fas fa-sign-out-alt"></i>&nbsp;
                            Sign out
                        </a>
                        <a class="dropdown-item" href="account">
                            <i class="fas fa-user-cog"></i>&nbsp;
                            My account
                        </a>
                    </div>

                </li>


            </ul>
            <!--User Account option End-->
        </div>



    </nav>
</div>