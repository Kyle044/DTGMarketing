<?php
session_start();
require_once("../php/config.php");
require_once("../php/functions.php");
if(!isset($_SESSION["usersId"])){

header("location: ./login.php");

}
?>

<script></script>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap.min.css">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../css/cms.css">
    <title>Portfolio</title>
</head>

<body>
    <div class="portContainer">
        <div class="navs">
            <i class='bx bx-menu'></i>
            <a href="../php/logout.php"><i class='bx bx-log-out'></i></a>
        </div>
        <div class="sides">
            <div class="logo">
                <img src="../img/dtgLogo.png" alt="Datagen Logo">
            </div>
            <ul>
                <li id="dashBtn">
                    <div><i class='bx bxs-dashboard'></i></i>Dashboard</div>
                </li>
                <li id="serviceBtn">
                    <div><i class='bx bxs-briefcase'></i>Services</div>
                </li>
                <li id="careerBtn">
                    <div>
                        <i class='bx bx-book-open'></i>Career
                    </div>
                </li>
                <li id="BaBtn">
                    <div>
                        <i class='bx bxl-blogger'></i> Blogs & Article
                    </div>
                </li>
                <li id="galleryBtn">
                    <div>
                        <i class='bx bx-image-alt'></i>Gallery
                    </div>
                </li>
            </ul>
        </div>
        <!-- USER TABLE -->
        <div class="dashboard">
            <div class="dashSide" id="dashSide">
                <div class="dashTableContainer">
                    <h3>List of Registered User</h3>
                    <table id="userTbl" class="table table-striped table-bordered" style="width:100%" id="userTbl">
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
                </div>

                <div class="dashLoginContainer">
                    <h3 id="userFormTitle">Add User</h3>
                    <form action="" id="userForm" name="insert">
                        <label for="">Full Name</label>
                        <input type="text" name="fullname">
                        <label for="">Position</label>
                        <input type="text" name="position">
                        <label for="">Office</label>
                        <input type="text" name="office">
                        <label for="">Email</label>
                        <input type="text" name="email">
                        <label for="">Password</label>
                        <input type="password" name="password">
                        <label for="">Confirm Password</label>
                        <input type="password" name="cpassword">
                        <input type="hidden" name="id">
                        <button type="submit">Submit</button>
                        <button type="button" id="insertUserBtn" >Add</button>
                    </form>
                </div>


            </div>
            <div class="serviceSide" id="serviceSide">
                    <!-- SERVICE TABLE -->
                <div class="dashTableContainer">
                    <h3>List of Services</h3>
                    <table id="serviceTbl" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Super Visor</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="autoService">

                        </tbody>
                    </table>
                </div>
                <div class="dashLoginContainer" style="height:auto;" >
                    <h3 id="serviceFormTitle">Add Services</h3>
                    <form action="" id="serviceForm" enctype="multipart/form-data" name="insert">
                        <label for="">Title</label>
                        <input type="text" name="title">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="6"></textarea>
                        <label for="">Supervisor</label>
                        <input type="text" name="supervisor">
                        <label for="">Upload Image</label>
                        <input type="file" name="file" id="servicePic">
                        <input type="hidden" name="id" >
                        <button type="submit">Submit</button>
                        <button type="button" id="insertServiceBtn">Add Service</button>
                    </form>
                </div>
            </div>
            <div class="careerSide" id="careerSide">
            <!-- CAREER TABLE -->
                <div class="dashTableContainer">
                    <h3>List of Career's</h3>

                    <table id="userTbl" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Supervisor</th>
                                <th>Department</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sample Title</td>
                                <td>Description Text...</td>
                                <td>Super visor name</td>
                                <td>
                                    Department of The Title
                                </td>
                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dashLoginContainer">
                    <h3>Add Career</h3>
                    <form action="" id="careerForm">
                        <label for="">Title</label>
                        <input type="text">
                        <label for="">Position</label>
                        <textarea name="description" id="" cols="30" rows="6"></textarea>
                        <label for="">Supervisor</label>
                        <input type="text">
                        <label for="">Department</label>
                        <input type="text">
                         <input type="hidden" name="id">
                        <button type="submit">Submit</button>
                        <button type="button" id="insertCareerBtn" >Add</button>
                    </form>
                </div>
            </div>

            <div class="BlogsArticleSide" id="BlogsArticleSide">
<!-- BLOG TABLE -->
                <div class="dashTableContainer">
                    <h3>List of Blogs</h3>

                    <table id="userTbl" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Author</th>
                                <th>Date Published</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bogart Dela Cruz</td>
                                <td>Dev</td>
                                <td>Department of Something</td>
                                <td>borgerkasaken69@gmail.com</td>
                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>borgerkasaken69@gmail.com</td>
                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>borgerkasaken69@gmail.com</td>
                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>borgerkasaken69@gmail.com</td>
                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>borgerkasaken69@gmail.com</td>
                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dashLoginContainer">
                    <h3>Add Blog</h3>
                    <form action="">
                        <label for="">Title</label>
                        <input type="text">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="6"></textarea>
                        <label for="">Author</label>
                        <input type="text">
                        <label for="">Date Published</label>
                        <input type="date">
                        <button type="submit">Submit</button>

                    </form>
                </div>
                <!-- ARTICLE TABLE -->
                <div class="dashTableContainer">
                    <h3>List of Articles</h3>

                    <table id="userTbl" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Author</th>
                                <th>Date Published</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bogart Dela Cruz</td>
                                <td>Dev</td>
                                <td>Department of Something</td>
                                <td>borgerkasaken69@gmail.com</td>
                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>borgerkasaken69@gmail.com</td>
                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>borgerkasaken69@gmail.com</td>
                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>borgerkasaken69@gmail.com</td>
                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>borgerkasaken69@gmail.com</td>
                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dashLoginContainer">
                    <h3>Add Article</h3>
                    <form action="">
                        <label for="">Title</label>
                        <input type="text">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="6"></textarea>
                        <label for="">Author</label>
                        <input type="text">
                        <label for="">Date Published</label>
                        <input type="date">
                        <button type="submit">Submit</button>

                    </form>
                </div>
            </div>
            <!-- GALLERY TABLE -->
            <div class="GallerySide" id="GallerySide">
                <div class="dashTableContainer" style="height: auto;">
                    <h3>List Post's</h3>
                    <table id="userTbl" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sample Title</td>
                                <td>Sample Description</td>
                                <td>06-14</td>

                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sample Title</td>
                                <td>Sample Description</td>
                                <td>06-14</td>

                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sample Title</td>
                                <td>Sample Description</td>
                                <td>06-14</td>

                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sample Title</td>
                                <td>Sample Description</td>
                                <td>06-14</td>

                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sample Title</td>
                                <td>Sample Description</td>
                                <td>06-14</td>

                                <td>
                                    <div class="btnGrp">
                                        <a href="" class="up">Update</a><a href="" class="del">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dashLoginContainer">
                    <h3>Add Post</h3>
                    <form action="">
                        <label for="">Title</label>
                        <input type="text">
                        <label for="">Description</label>
                        <textarea name="" id="" cols="30" rows="6"></textarea>
                        <label for="">Date Published</label>
                        <input type="date">
                        <label for="">Upload Picture</label>
                        <input type="file">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $(document).ready(function () {
        $('#userTbl').DataTable();
        $('#serviceTbl').DataTable();

    });
</script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap.min.js"></script>
<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
<script src="../js/cms.js"></script>
<script src="../js/cmsJquery.js"></script>

</html>