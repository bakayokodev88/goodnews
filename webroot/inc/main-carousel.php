


<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php for ($i = 0; $i <= 2; $i++): ?>
                <div class="carousel-item Carousel-item <?php if ($i == 0) {
                    echo "active";
                } ?> ">
                    <div class="Overlay">
                        <img src="assets/authors/posts/<?php echo $dataPost[$i]['cover'] ?>"
                             class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption Carousel-caption d-none d-md-block text-truncate">
                            <h2><?php echo $dataPost[$i]['title'] ?></h2>
                            <p class="text-truncate">
                                <?php
                                    //We remove all the tags (html, css, js or php) from the input
                                    $var = strip_tags($dataPost[$i]['content']);
                                    //We convert the input into lowercase string
                                    $var = strtolower($var);
                                    echo $var;
                                ?>
                            </p>
                            <br>
                            <a class="btn btn-primary justify-content-center"
                               href="post?article=<?php echo $dataPost[$i]['idPost'] ?>" role="button">READ MORE</a>

                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>