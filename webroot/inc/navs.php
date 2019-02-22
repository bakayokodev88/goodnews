<div class="container-fluid Nav1">
    <div class="container">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        </ul>

    </div>
</div>

<div class="container-fluid Nav2 sticky-top">
    <div class="container">
        <!-- Image and text -->
        <nav class="navbar">
            <a class="navbar-brand" href="http://localhost/goodnews/">
                <img src="assets/system/icon/goodnews.png" width="30" height="30" class="d-inline-block align-top" alt="">
                &nbsp;GoodNews
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="localhost/goodnews/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Identification
                    </a>
                    <div class="dropdown-menu Dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="login">Login</a>
                        <a class="dropdown-item" href="register">Create an account</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>

<script type="text/javascript">
    $(document).on('click','ul li', function () {
        $(this).addClass('.active').siblings().removeClass('.active')
    })
</script>