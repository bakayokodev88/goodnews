



<div class="row">
    <div class="col-sm-5">
        <img src="../assets/authors/posts/<?php echo $dataPost[0]['cover']?>" class="img-fluid rounded shadow">
    </div>
    <div class="col-sm-7">
        <!--Text lenght should be specified to maintain the display-->
        <p class="PostTitle text-justify font-weight-bold">
            <?php echo $dataPost[0]['title']?>
        </p>
        <small class="text-muted">Post on <?php echo $var = date('F j, Y', strtotime($dataPost[0]['datePost'])); ?></small>
        <br>
        <div class="d-flex justify-content-between">
            <p><i class="fas fa-inbox"></i>&nbsp;Category :
                <span>
                    <?php
                        $category = loadCategoryById($dataPost[0]['idCategory']);
                        echo $category[0]['name'];
                    ?>
                </span>
            </p>
            <p><i class="fas fa-tag"></i>&nbsp;Status :
                <?php
                    $status = $dataPost[0]['status'];
                    if ($status==1){
                        echo "<span class=\"badge badge-success\">Active</span>";
                    }elseif ($status==2){
                        echo "<span class=\"badge badge-secondary\">Draft</span>";
                    }else{
                        echo "<span class=\"badge badge-dark\">Disable</span>";
                    }
                ?>
            </p>
            <p><i class="fas fa-comment-alt text-secondary"></i>&nbsp;Comments : <span
                    class="">1369</span></p>
            <p><i class="fas fa-heart text-danger"></i>&nbsp;Like : <span class="">1369</span></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="ContentOverflow">
            <?php echo $dataPost[0]['content']?>
        </div>
        <br>
    </div>
</div>
<div class="btn-group dropright OptionControl float-right">
    <a class="btn singleActionBtn" href="new-post" role="button">
        <i class="fas fa-file-alt"></i>&nbsp;
        New
    </a>&nbsp;&nbsp;
    <a class="btn singleActionBtn"  href="#" data-toggle="modal" data-target="#ModalEditPost" role="button">
        <i class="fas fa-edit"></i>&nbsp;
        Edit
    </a>&nbsp;&nbsp;
    <a class="btn singleActionBtn" href="#" data-toggle="modal" data-target="#ModalDeletePost" role="button">
        <i class="fas fa-trash"></i>&nbsp;
        Delete
    </a>&nbsp;&nbsp;
</div>



