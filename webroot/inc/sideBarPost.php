<!-- Search form -->
<div class="container">
    <div class="row">
        <form action="#" method="#">
            <div class="form-row">
                <div class="col-md-9 mb-3">
                    <input type="text" class="form-control" id="search" placeholder="Search here">
                </div>
                <div class="col-md-2 mb-3">
                    <button type="submit" class="btn btn-primary mb-2">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Search form End-->

<!--Category -->
<h5>CATEGORY</h5>
<hr>
<div class="container">
    <div class="row">
        <ul class="nav flex-column">
            <!--We call load the list of the category-->
            <?php $dataCategory = loadCategoryPost(); foreach ($dataCategory as $data): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><?php echo $data['name'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<!--Category End-->
<br>
<!--Recent Post-->
<h5>RECENT POST</h5>
<hr>
<div class="container">
    <div class="row">


        <?php $dataPostBaseCategory = loadPostByCategoryId($dataPost[0]['idCategory']); for ($i = 0; $i <= 2; $i++): ?>
            <div class="card CardRecentPost mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="assets/authors/posts/<?php echo $dataPostBaseCategory[$i]['cover'];?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="post?article=<?php echo $dataPostBaseCategory[$i]['idPost']; ?>" class="text-decoration-none" style="color: black">
                                    <?php echo $dataPostBaseCategory[$i]['title']; ?>
                                </a>
                            </h5>
                            <p class="card-text" style="margin-top: -10px">
                                <small class="text-muted">Post on <?php echo $var = date('F j, Y', strtotime($dataPostBaseCategory[$i]['datePost'])); ?></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>


    </div>
</div>
<!--Recent Post End-->
            
