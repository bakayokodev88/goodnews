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

