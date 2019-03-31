<?php $dataPosts = loadPosts(); for ($i = 0; $i <= 7; $i++): ?>
    <ul class="list-group list-group-flush">
        <a  href="post?article=<?php echo $dataPosts[$i]['idPost'] ?>" class="list-group-item list-group-item-action Table-hover rounded" style="padding:5px;">
            <div class="row">
                <div class="col-sm-10">
                    <p class="ArticleTitle text-truncate" style="margin-bottom: 0"><?php echo $dataPosts[$i]['title'] ?></p>
                </div>
                <div class="col-sm-2 d-flex align-items-center">
                    <?php
                    if ($dataPosts[$i]['status'] == 1){
                        echo '<span class="badge badge-pill badge-primary">Publish</span>';
                    }elseif ($dataPosts[$i]['status'] == 2){
                        echo '<span class="badge badge-pill badge-secondary">Draft</span>';
                    }else{
                        echo '<span class="badge badge-pill badge-dark">Disable</span>';
                    }
                    ?>
                </div>
            </div>
        </a>
    </ul>
<?php endfor;?>