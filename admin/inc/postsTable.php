<div class="container">
    <div class="row RowControl">
        <div class="col-sm-6">

        </div>
        <div class="col-sm-6">
            <div class="row  justify-content-end">
                <div class="nav OptionControl">
                    <button type="button" class="btn btn-light">
                        <i class="fas fa-file-alt"></i>&nbsp;
                        New article
                    </button>
                    <button type="button" class="btn btn-light">
                        <i class="far fa-file"></i>&nbsp;
                        New article
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row rowTable">
        <table class="table ArticleTable">
            <thead>
            <tr>
                <th scope="col">Status</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Operation</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <span class="badge badge-success">Active</span>
                </td>
                <td>Otto</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
                <td class="Table-control">
                    <div class="dropdown">
                        <a class="btn btn-default " href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="view-post">
                                <i class="far fa-folder-open"></i>
                                &nbsp; View
                            </a>
                            <a class="dropdown-item" href="edit-post">
                                <i class="far fa-edit"></i>
                                &nbsp; Edit
                            </a>
                            <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#ModalDeletePost">
                                <i class="far fa-trash-alt"></i>
                                &nbsp; Delete
                            </a>
                        </div>
                    </div>

                </td>
            </tr>
            <tr>
                <td>
                    <span class="badge badge-primary">Draft</span>
                </td>
                <td>Otto</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
                <td class="Table-control">
                    <div class="dropdown">
                        <a class="btn btn-default " href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="view-post">
                                <i class="far fa-folder-open"></i>
                                &nbsp; View
                            </a>
                            <a class="dropdown-item" href="edit-post">
                                <i class="far fa-edit"></i>
                                &nbsp; Edit
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="far fa-trash-alt"></i>
                                &nbsp; Delete
                            </a>
                        </div>
                    </div>

                </td>
            </tr>
            <tr>
                <td>
                    <span class="badge badge-secondary">Disabled</span>
                </td>
                <td>Otto</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
                <td class="Table-control">
                    <div class="dropdown">
                        <a class="btn btn-default " href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="view-post">
                                <i class="far fa-folder-open"></i>
                                &nbsp; View
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="far fa-edit"></i>
                                &nbsp; Edit
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="far fa-trash-alt"></i>
                                &nbsp; Delete
                            </a>
                        </div>
                    </div>

                </td>
            </tr>

            </tbody>
        </table>
    </div>

</div>