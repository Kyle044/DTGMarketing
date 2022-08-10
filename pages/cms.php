<!DOCTYPE html>
<?php
session_start();
require_once("../php/config.php");
require_once("../php/functions.php");
if (!isset($_SESSION["usersId"])) {

    header("location: ./login.php");
}
?>





<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap.min.css">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/cmsko.css">


    <!--                                   EKSENA KO                            -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- DATATABLES -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://ianrmedia.unl.edu/documents/dcf-responsive-table-5.css">

    <title>Admin CMS</title>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-img">
                <img src="../img/dtgLogo.png" alt="Datagen Logo">
            </div>

            <ul class="list-unstyled CTAs">

                <li id="dashBtn" class="sideBtn">

                    <div>
                        <p>Dashboard&nbsp;<span><i class='fa fa-dashboard'></i><span></p>

                    </div>
                </li>
                <li id="dashBtn" class="sideBtn">

                    <div>


                    </div>
                </li>

                <li id="serviceBtn" class="sideBtn">
                    <div>
                        <p>Services&nbsp;<span><i class='fa fa-briefcase'></i></span></p>
                    </div>

                </li>
                <li id="careerBtn" class="sideBtn">
                    <div>
                        <p>Career&nbsp;<span><i class='fa fa-book'></i></span></p>
                    </div>
                </li>
                <li id="BaBtn" class="sideBtn">
                    <div>
                        <p>Article&nbsp;<span><i class='fa fa-pencil-square'></span></i></p>
                    </div>
                </li>
                <li id="galleryBtn" class="sideBtn">
                    <div>
                        <p>Gallery&nbsp;<span><i class='fa fa-image'></i></span></p>
                    </div>
                </li>
                <li class="sideBtn">
                    <div>
                        <p>Logout&nbsp;<span><i class='fa fa-sign-out'></i><span></p>
                    </div>
                </li>

            </ul>
        </nav>
        <div id="content">
            <div class="contentDiv" id="regCard">
                <div class="table-responsive">
                    <h3>List of Registered User</h3>
                    <table id="userTbl" class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="autoUser">

                        </tbody>
                    </table>
                    <button class="button button1" data-toggle="modal" data-target="#ModalLoginForm"><span><i class="glyphicon glyphicon-user"></i> Add User</button>
                </div>
            </div>
            <div class="contentDiv" id="serviceCard">
                <div class="table-responsive">
                    <h3>List of Services</h3>
                    <table id="serviceTbl" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>In Depth Description</th>
                                <th>Approach</th>
                                <th>Benefits</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="autoService">

                        </tbody>
                    </table>
                    <button class="button button1" data-toggle="modal" data-target="#serviceForm"><i class="glyphicon glyphicon-cog"></i> Add Service</button>
                </div>
            </div>
            <div class="contentDiv" id="careerCard">
                <div class="table-responsive">
                    <h3>List of Career's</h3>
                    <table id="careerTbl" class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Position</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="autoCareer">
                        </tbody>
                    </table>
                    <button class="button button1" data-toggle="modal" data-target="#careerForm"><i class="glyphicon glyphicon-folder-open"></i> Add Career</button>
                </div>
            </div>
            <div class="contentDiv" id="blogCard">
                <div class="table-responsive">
                    <h3>List of Articles</h3>
                    <table id="articleTbl" class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Author</th>
                                <th>Date Published</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="autoArticle">
                        </tbody>
                    </table>
                    <button class="button button1" data-toggle="modal" data-target="#articleForm"><i class="fa fa-pencil-square"></i> Add Article</button>
                </div>
            </div>
            <div class="contentDiv" id="galleryCard">
                <div class="table-responsive">
                    <h3>List Post's</h3>
                    <table id="userTbl" class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="autoGallery">
                        </tbody>
                    </table>
                    <button class="button button1" data-toggle="modal" data-target="#galleryForm"><i class="fa fa-image"></i> Add Gallery</button>
                </div>
            </div>
        </div>
    </div>
</body>
<!--- MODALS -->
<!-- Modal User Registration  -->
<div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="userFormTitle">User Registration</h1>
            </div>
            <div class="modal-body">

                <form role="form" id="userForm" name="insert" method="POST" action="">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">Fullname</label>
                        <div>
                            <input type="text" class="form-control input-sm" name="fullname" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Position</label>
                        <div>
                            <input type="text" class="form-control input-sm" name="position" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Office</label>
                        <div>
                            <input type="text" class="form-control input-sm" name="office" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">E-Mail Address</label>
                        <div>
                            <input type="email" class="form-control input-sm" name="email" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="password" class="form-control input-sm" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Confirm Password</label>
                        <div>
                            <input type="password" class="form-control input-sm" name="cpassword">
                            <input type="hidden" name="id">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-success">
                                Submit
                            </button>
                            <button type="button" id="insertUserBtn" class="btn btn-success">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Service Addition  -->
<div id="ServiceForm" class="modal fade ">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="userFormTitle">Add Service</h1>
            </div>
            <div class="modal-body">
                <form role="form" action="" id="serviceForm" method="POST" enctype="multipart/form-data" name="insert">
                    <div class="form-group">
                        <label class="control-label" for="">Title</label>
                        <input type="text" class="form-control input-lg" name="title">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Description</label>
                        <input type="text" class="form-control input-lg" name="description">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">In Depth Description</label>

                        <textarea class="form-control" name="detail_desc" id="" cols="30" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Approach</label>
                        <input type="text" class="form-control input-lg" name="approach">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Benefits</label>
                        <input type="text" class="form-control input-lg" name="benefits">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Upload Image</label>
                        <input type="file" class="form-control input-xl" name="file" id="servicePic">
                        <input type="hidden" name="id">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" id="insertServiceBtn">Add Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal Career Addition -->
<div id="careerForm" class="modal fade ">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="careerFormTitle">Add Career</h3>
            </div>
            <div class="modal-body">
                <form role="form" action="" id="careerForm" method="POST" enctype="multipart/form-data" name="insert">
                    <div class=form-group>
                        <label class="control-label" for="">Title</label>
                        <input class="form-control input-lg" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Position</label>
                        <input class="form-control input-lg" type="text" name="position">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Description</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="6">
                                </textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Qualification</label>

                        <textarea class="form-control" name="qualification" id="career" cols="30" rows="6">
                                </textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="">Responsibility</label>
                        <textarea class="form-control" name="responsibility" id="career" cols="30" rows="6">

     </textarea>

                    </div>

                    <label class="control-label" for="">Upload Image</label>
                    <div class="form-group">
                        <input class="form-control input-xl" type="file" name="file" id="careerPic">
                        <input type="hidden" name="id">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" id="insertCareerBtn">Add</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Blog Addition -->
<div id="blogForm" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="blogFormTitle">Add Blog</h3>
            </div>
            <div class="modal-body">
                <form action="" id="blogForm" method="POST" name="insert">
                    <div class="form-group">
                        <label class="control-label" for="">Title</label>
                        <input class="form-control input-lg" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Description</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Author</label>
                        <input class="form-control input-lg" type="text" name="author">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Date Published</label>
                        <input class="form-control input-lg" type="date" name="date">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Picture Upload</label>
                        <input class="form-control input-lg" type="file" name="file" id="blogPic">
                        <input type="hidden" name="id">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" id="insertBlogBtn">Add Blog</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Article Addition -->
<div id="articleForm" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="articleFormTitle">Add Article</h3>
            </div>
            <div class="modal-body">
                <form action="" id="articleForm" name="insert" method="POST">
                    <div class="form-group">
                        <label class="control-label" for="">Title</label>
                        <input class="form-control input-lg" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Description</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Author</label>
                        <input class="form-control input-lg" type="text" name="author">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Date Published</label>
                        <input class="form-control input-lg" type="date" name="date">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Picture Upload</label>
                        <input class="form-control input-lg" type="file" name="file" id="articlePic">
                        <input type="hidden" name="id">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" id="insertArticleBtn">Add Article</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Gallery Addition -->
<div id="galleryForm" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="galleryFormTitle">Add Gallery</h3>
            </div>
            <div class="modal-body">
                <form action="" id="galleryForm" name="insert" method="POST">
                    <div class="form-group">
                        <label class="control-label" for="">Title</label>
                        <input class="form-control input-lg" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Description</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Date Published</label>
                        <input class="form-control input-lg" type="date" name="date">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="">Upload Picture</label>
                        <input class="form-control input=lg" type="file" name="file" id="galleryPic" multiple="multiple">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" id="insertGalleryBtn">Add Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>
    $(document).ready(function() {
        tinymce.init({
            selector: 'textarea', // change this value according to your HTML
            plugins: [
                'advlist autolink lists '
            ],
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            menu: {
                edit: {
                    title: 'Edit',
                    items: 'undo, redo, selectall'
                }
            }
        });
        $('#userTbl').DataTable({
            // scrollY: '50vh',
            // scrollX: '80vw',
            // scrollCollapse: true,
            // paging: false,

        });
        $('#serviceTbl').DataTable({
            // scrollY: '50vh',
            // scrollX: '80vw',
            // scrollCollapse: true,
            // paging: false,
        });
        $('#careerTbl').DataTable({
            // scrollY: '50vh',
            // scrollX: '80vw',
            // scrollCollapse: true,
            // paging: false,
        });
        $('#blogTbl').DataTable({
            // scrollY: '50vh',
            // scrollX: '80vw',
            // scrollCollapse: true,
            // paging: false,
        });
        $('#articleTbl').DataTable({
            // scrollY: '50vh',
            // scrollX: '80vw',
            // scrollCollapse: true,
            // paging: false,
        });

    });
</script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/jquery.tinymce.min.js" referrerpolicy="origin"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> -->
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="../js/cms.js"></script>
<script src="../js/cmsJquery.js"></script>
<script>
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
</script>

</html>