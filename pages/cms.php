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
    <title>Admin CMS</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/cmsko.css">
    <!--                                   EKSENA KO                            -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- DATATABLES -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://ianrmedia.unl.edu/documents/dcf-responsive-table-5.css">
</head>

<body>
    <nav>
        <div class="sidebar-top">
            <span class="shrink-btn">
                <i class='bx bx-chevron-left'></i>
            </span>
            <img src="../img/datagen2.png" class="logo" alt="">
            <h3 class="hide">Datagen Facilities</h3>
        </div>

        <!-- <div class="search">
            <i class='bx bx-search'></i>
            <input type="text" class="hide" placeholder="Quick Search ...">
        </div> -->

        <div class="sidebar-links">
            <ul>
                <div class="active-tab"></div>
                <li id="dashBtn" class="tooltip-element" data-tooltip="0">
                    <a href="#" class="active" data-active="0">
                        <div class="icon">
                            <i class='bx bx-tachometer'></i>
                            <i class='bx bxs-tachometer'></i>
                        </div>
                        <span class="link hide">Dashboard</span>
                    </a>
                </li>
                <!-- <li id="serviceBtn" class="tooltip-element" data-tooltip="1" style="display:none;">
                    <a href="#" data-active="1">
                        <div class="icon">
                            <i class='bx bx-briefcase'></i>
                            <i class='bx bxs-briefcase'></i>
                        </div>
                        <span class="link hide">Services</span>
                    </a>
                </li> -->
                <li id="careerBtn" class="tooltip-element" data-tooltip="1">
                    <a href="#" data-active="1">
                        <div class="icon">
                            <i class='bx bx-folder-open'></i>
                            <i class='bx bxs-folder-open'></i>
                        </div>
                        <span class="link hide">Career</span>
                    </a>
                </li>
                <li id="BaBtn" class="tooltip-element" data-tooltip="2">
                    <a href="#" data-active="2">
                        <div class="icon">
                            <i class='bx bx-pencil'></i>
                            <i class='bx bxs-pencil'></i>
                        </div>
                        <span class="link hide">Articles</span>
                    </a>
                </li>
                <li id="galleryBtn" class="tooltip-element" data-tooltip="3">
                    <a href="#" data-active="3">
                        <div class="icon">
                            <i class='bx bx-images'></i>
                            <i class='bx bx-images'></i>
                        </div>
                        <span class="link hide">Gallery</span>
                    </a>
                </li>
                <div class="tooltip">
                    <span>Dashboard</span>                    
                    <span>Career</span>
                    <span>Articles</span>
                    <span>Gallery</span>
                </div>
            </ul>

            <!-- <h4 class="hide">Shortcuts</h4>
            <ul>
            <li class="tooltip-element" data-tooltip="0">
                <a href="#" data-active="4">
                <div class="icon">
                    <i class='bx bx-notepad'></i>
                    <i class='bx bxs-notepad'></i>
                </div>
                <span class="link hide">Tasks</span>
                </a>
            </li>
            <li class="tooltip-element" data-tooltip="1">
                <a href="#" data-active="5">
                <div class="icon">
                    <i class='bx bx-help-circle'></i>
                    <i class='bx bxs-help-circle'></i>
                </div>
                <span class="link hide">Help</span>
                </a>
            </li>
            <li class="tooltip-element" data-tooltip="2">
                <a href="#" data-active="6">
                <div class="icon">
                    <i class='bx bx-cog'></i>
                    <i class='bx bxs-cog'></i>
                </div>
                <span class="link hide">Settings</span>
                </a>
            </li>
            <div class="tooltip">
                <span class="show">Tasks</span>
                <span>Help</span>
                <span>Settings</span>
            </div>
            </ul> -->
        </div>

        <div class="sidebar-footer">
            <!-- <a href="#" class="account tooltip-element" data-tooltip="0">
            <i class='bx bx-user'></i>
            </a> -->
            <div class="admin-user tooltip-element" data-tooltip="0">
                <!-- <div class="admin-profile hide">
                <img src="./img/face-1.png" alt="">
                <div class="admin-info">
                <h3>John Doe</h3>
                <h5>Admin</h5>
                </div>
            </div> -->
                <a href="../php/logout.php" class="log-out">
                    <i class='bx bx-log-out'></i>
                </a>
            </div>
            <div class="tooltip">
                <!-- <span class="show">John Doe</span> -->
                <span>Logout</span>
            </div>
        </div>
    </nav>
    <main>
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
                <a href="#openModal-reg"><button class="cmsAddbutton"><span><i class="glyphicon glyphicon-user"></i> Add User</button></a>
            </div>
        </div>
        <!-- <div class="contentDiv" id="serviceCard">
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
                <a href="#openModal-serv"><button class="cmsAddbutton"><i class="glyphicon glyphicon-cog"></i> Add Service</button></a>
            </div>
        </div> -->
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
                <a href="#openModal-career"><button class="cmsAddbutton"><i class="glyphicon glyphicon-folder-open"></i> Add Career</button></a>
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
                <a href="#openModal-blog"><button class="cmsAddbutton"><i class="fa fa-pencil-square"></i> Add Article</button></a>
            </div>
        </div>
        <div class="contentDiv" id="galleryCard">
            <div class="table-responsive">
                <h3>List Post's</h3>
                <table id="galleryTbl" class="table">
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
                <a href="#openModal-gallery"><button class="cmsAddbutton"><i class="fa fa-image"></i> Add Gallery</button></a>    
            </div>
        </div>
        
        <!-- <div class="contentDiv" id="galleryCard">
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
                <a href="#openModal-gallery"><button class="cmsAddbutton"><i class="fa fa-image"></i> Add Gallery</button></a>
            </div>
        </div> -->

        <p class="copyright">
            &copy; 2022 - <span>DatagenFacilities</span> All Rights Reserved.
        </p>
    </main>


    <!-- <h1>My Dashboard</h1>
        <p class="text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur animi voluptatibus cum maxime distinctio
        iste quod deleniti eius, autem voluptates cumque suscipit iure quasi eligendi ullam. Sapiente eligendi porro
        reprehenderit corrupti error facilis quo, fugiat fugit? Maiores aliquam ad, molestiae iste nihil, commodi
        doloremque tempore excepturi aut id ducimus unde?
        </p> -->

    <script>
        $(document).ready(function() {
            $('#userTbl').DataTable({
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
        tinymce.init({
            selector: 'textarea.tinymce', // change this value according to your HTML
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
    </script>
</body>
<!--- MODALS -->
<!-- Modal User Registration  -->
<!-- <div id="ModalLoginForm" class="modal fade" style="display:none;">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title"id="userFormTitle">User Registration</h1>
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
                                    <input type="text"class="form-control input-sm" name="position" value="">
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
                                        Register
                                    </button>
                                    <button type="button" id="insertUserBtn" >Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
    </div> -->
<!-- Modal User Registration  -->
<div id="openModal-reg" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <div class="modalContent">
            <div>
                <h1 id="userFormTitle">User Registration</h1>
            </div>
            <div>

                <form role="form" id="userForm" name="insert" method="POST" action="">
                    <input type="hidden" name="_token" value="">
                    <div class="modalLabelContainer">
                        <label class="control-label">Fullname</label>
                        <div>
                            <input type="text" name="fullname" value="">
                        </div>
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label">Position</label>
                        <div>
                            <input type="text" name="position" value="">
                        </div>
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label">Office</label>
                        <div>
                            <input type="text" name="office" value="">
                        </div>
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label">E-Mail Address</label>
                        <div>
                            <input type="email" name="email" value="">
                        </div>
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="password" name="password">
                        </div>
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label">Confirm Password</label>
                        <div>
                            <input type="password" name="cpassword">
                            <input type="hidden" name="id">
                        </div>
                    </div>
                    <div class="modalLabelContainer">

                        <button type="submit" class="cmsmodalbutton">Register</button>
                        <button type="button" class="cmsmodalbutton" id="insertUserBtn">Add</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Service Addition  -->
<div id="openModal-serv" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <div class="modalContent">
            <div>
                <h1 id="userFormTitle">Add Service</h1>
            </div>
            <div>
                <form role="form" action="" id="serviceForm" method="POST" enctype="multipart/form-data" name="insert">
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Title</label>
                        <input type="text" name="title">
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Description</label>
                        <input type="text" name="description">
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">In Depth Description</label>

                        <textarea name="detail_desc" id="" cols="30" rows="6" style="resize: none;"></textarea>
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Approach</label>
                        <input type="text" name="approach">
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Benefits</label>
                        <input type="text" name="benefits">
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Upload Image</label>
                        <input type="file" name="file" id="servicePic">
                        <input type="hidden" name="id">
                    </div>
                    <div class="modalLabelContainer">
                        <button type="submit" class="cmsmodalbutton">Submit</button>
                        <button type="button" class="cmsmodalbutton" id="insertServiceBtn">Add Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Career Addition -->
<div id="openModal-career" class="modalDialog">
    <div>

        <a href="#close" title="Close" class="close">X</a>
        <div class="modalContent">
            <div>
                <h3 id="careerFormTitle">Add Career</h3>
            </div>
            <div>
                <form role="form" action="" id="careerForm" method="POST" enctype="multipart/form-data" name="insert">
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Title</label>
                        <input type="text" name="title">
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Position</label>
                        <input type="text" name="position">
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="6" style="resize: none;">
                                    </textarea>
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Qualification</label>
                        <textarea type="text" name="qualification" class="tinymce">

                        </textarea>
                    </div>

                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Responsibility</label>
                        <textarea type="text" name="responsibility" class="tinymce">

                        </textarea>
                    </div>

                    <label class="control-label" for="">Upload Image</label>
                    <div class="modalLabelContainer">
                        <input type="file" name="file" id="careerPic">
                        <input type="hidden" name="id">
                    </div>
                    <div class="modalLabelContainer">
                        <button type="submit" class="cmsmodalbutton">Submit</button>
                        <button type="button" class="cmsmodalbutton" id="insertCareerBtn">Add</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<!-- Modal Blog Addition -->
<!-- <div id="openModal-blog" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <div class="modalContent">
            <div>
                <h3 id="blogFormTitle">Add Blog</h3>
            </div>
            <div>
                <form action="" id="blogForm" method="POST" name="insert">
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Title</label>
                        <input type="text" name="title">
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="6" style="resize: none;"></textarea>
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Author</label>
                        <input type="text" name="author">
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Date Published</label>
                        <input type="date" name="date">
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Picture Upload</label>
                        <input type="file" name="file" id="blogPic">
                        <input type="hidden" name="id">
                    </div>
                    <div class="modalLabelContainer">
                        <button type="submit" class="cmsmodalbutton">Submit</button>
                        <button type="button" id="insertBlogBtn">Add Blog</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div> -->
<!-- Modal Article Addition -->
<div id="openModal-blog" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <div class="modalContent">
            <div>
                <h3 id="articleFormTitle">Add Blog</h3>
            </div>
            <div>
                <form action="" id="articleForm" name="insert" method="POST">
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Title</label>
                        <input type="text" name="title">
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="6"></textarea>
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Author</label>
                        <input type="text" name="author">
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Date Published</label>
                        <input type="date" name="date">
                    </div>
                    <div class="modalLabelContainer">
                        <label class="control-label" for="">Picture Upload</label>
                        <input type="file" name="file" id="articlePic">
                        <input type="hidden" name="id">
                    </div>
                    <div class="modalLabelContainer">
                        <button type="submit" class="cmsmodalbutton">Submit</button>
                        <button type="button" class="cmsmodalbutton" id="insertArticleBtn">Add Article</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Gallery Addition -->
<div id="openModal-gallery" class="modalDialog">
    <div>

        <a href="#close" title="Close" class="close">X</a>
        <div class="modalContent"></div>
        <div>
            <h3 id="galleryFormTitle">Add Gallery</h3>
        </div>
        <div>
            <form action="" id="galleryForm" name="insert" method="POST">
                <div class="modalLabelContainer">
                    <label class="control-label" for="">Title</label>
                    <input type="text" name="title">
                </div>
                <div class="modalLabelContainer">
                    <label class="control-label" for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="6" style="resize: none;"></textarea>
                </div>
                <div class="modalLabelContainer">
                    <label class="control-label" for="">Date Published</label>
                    <input type="date" name="date">
                </div>
                <div class="modalLabelContainer">
                    <label class="control-label" for="">Upload Picture</label>
                    <input type="file" name="file" id="galleryPic" multiple="multiple">
                </div>
                <div class="modalLabelContainer">
                    <button type="submit" class="cmsmodalbutton">Submit</button>
                    <button type="button" class="cmsmodalbutton" id="insertGalleryBtn">Add Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

</html>