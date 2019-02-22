<div class="container-fluid mainNavbar sticky-top">
    <nav class="navbar">
        <!--Apps name + Marquee news-->
        <ul class="nav nav-1 justify-content-center">
                <span>
                    <img src="../assets/system/icon/goodnews.png" width="32" height="32">
                </span>
            <p>Goodnews</p>
        </ul>

        <!--Apps name + Marquee news End-->

        <ul class=" nav justify-content-center testmarquee">
            <marquee behavior="scroll" direction="left" onmouseover="this.stop();"
                     onmouseout="this.start();">
                <p>A scrolling text created with HTML Marquee element.</p>
            </marquee>
        </ul>

        <!--User Account option-->
        <ul class="nav nav-2 justify-content-end">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle AuthorName" href="#" id="dropdownMenuButton" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <img src="../assets/people/michael_pustovit.jpg" width="36" height="36"
                         class="d-inline-block align-top rounded-circle " alt="">
                    &nbsp;&nbsp;BAKAYOKO YAYA &nbsp;
                </a>
                <div class="dropdown-menu Dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="login">Log out</a>
                    <a class="dropdown-item" href="register">My accountt</a>
                </div>
            </li>
        </ul>
        <!--User Account option End-->
    </nav>
</div>