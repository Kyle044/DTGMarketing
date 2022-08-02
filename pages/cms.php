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
    <meta name="viewport" content="width=device-width, 

initial-scale=1.0">

    <link rel="stylesheet" 

href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/boot

strap.min.css">
    <link rel="stylesheet" 

href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstr

ap.min.css">

    <link 

href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' 

rel='stylesheet'>
    <link rel="stylesheet" href="../css/cmsko.css">


    <!--                                   EKSENA KO           

                     -->
    <link rel="stylesheet" 

href="https://cdnjs.cloudflare.com/ajax/libs/font-

awesome/4.7.0/css/font-awesome.min.css">
    
    
  <script 

src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery

.min.js"></script>
  <script 

src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootst

rap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-

scale=1">
  <link rel="stylesheet" 

href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bo

otstrap.min.css">
  <script 

src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.sli

m.min.js"></script>
  <script 

src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/po

pper.min.js"></script>
  <script 

src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/boot

strap.bundle.min.js"></script>
  <link rel="stylesheet" 

href="https://cdnjs.cloudflare.com/ajax/libs/font-

awesome/4.7.0/css/font-awesome.min.css">

  

    <title>Admin CMS</title>
</head>

<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-img">
            <img src="../img/dtgLogo.png" alt="Datagen Logo">
            </div>

            <ul class="list-unstyled CTAs">
                <!-- <li>
                    <a href="" class="download">Dashboard</a>
                </li>
                <li>
                    <a href="" class="article">Services</a>
                </li>
                <li>
                    <a href="" class="article">Career</a>
                </li>
                <li>
                    <a href="" class="article">Article</a>
                </li>
                <li>
                    <a href="" class="article">Gallery</a>
                </li>
                <li> -->
                <li id="dashBtn">
                <div class="">
                <a href="" class="article">Dashboard&nbsp;<i class='fa fa-dashboard'></i></a>
                
                </div>
                
                
                </li>
                <li id="serviceBtn">
                    <div>
                    <a href="" class="article">Services&nbsp;<i class='fa fa-briefcase'></i></a>
                    </div>
                </li>
                <li id="careerBtn">
                    <div>
                    <a href="" class="article">Career&nbsp;<i class='fa fa-book'></i></a>
                    </div>
                </li>
                <li id="BaBtn">
                    <div>
                    <a href="" class="article">Article&nbsp;<i class='fa fa-pencil-square'></i></a>
                    </div>
                </li>
                <li id="galleryBtn">
                    <div>
                    <a href="" class="article">Gallery&nbsp;<i class='fa fa-image'></i></a>
                    </div>
                </li>
                <div>
                <a href="" class="article">Logout&nbsp;<i class='fa fa-sign-out'></i></a>
                </div>
                </li>
             
            </ul>
        </nav>

        <!-- DASHBOARD -->
         <div id="content" >

             <!-- <nav class="navbar navbar-expand-lg navbar-dark 

bg-dark">
                <div class="container-fluid">
                    <img src="../img/dtoken.png" 

id="sidebarCollapse" alt="DatagenToken">
                </div> 
            </nav> -->

            
            <div class="contentDiv">
            <h3>List of Registered User</h3>
                <div class="tablewrap"id="dashSide">
                
                <table  id="userTbl" class="table table-bordered">
                
                <thead >
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
                <button class="button button1"data-toggle="modal" data-target="#ModalLoginForm"><span><i class="glyphicon glyphicon-user"></i> Add User</button>
                
                 <!-- Modal User Registration  -->
                <div id="ModalLoginForm" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title"id="userFormTitle">User Registration</h1>
                            </div>
                            <div class="modal-body">                              
                                
                                <form role="form" method="POST" action="">
                                    <input type="hidden" name="_token" value="">
                                    <div class="form-group">
                                        <label class="control-label">Fullname</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Position</label>
                                        <div>
                                            <input type="text"class="form-control input-lg" name="position" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Office</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="office" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">E-Mail Address</label>
                                        <div>
                                            <input type="email" class="form-control input-lg" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <div>
                                            <input type="password" class="form-control input-lg" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Confirm Password</label>
                                        <div>
                                            <input type="password" class="form-control input-lg" name="cpassword">                                          
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
                </div>
                
                        
        </div>



        <div id="content">
            <div class="contentDiv" >          

            <h3>List of Services</h3>
                <div class="tablewrap" id="serviceSide">
                    
                        <table id="serviceTbl" class="table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>In Depth Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="autoService">

                            </tbody>
                    </table>
                </div>
                <div class="dashLoginContainer"style="width:auto;">
                        <h3 id="serviceFormTitle">Add Services</h3>
                            <form action="" id="serviceForm" enctype="multipart/form-data" name="insert">
                                <label for="">Title</label>
                                <input type="text" name="title">
                                <label for="">Description</label>
                                <textarea name="description"id="" cols="30" rows="6"></textarea>
                                <label for="">In Depth Description</label>
                                <input type="text" name="supervisor">
                                <label for="">Upload Image</label>
                                <input type="file" name="file" id="servicePic">
                                <input type="hidden" name="id" >
                                <button type="submit">Submit</button>
                                <button type="button"id="insertServiceBtn">Add Service</button>
                            </form>
                </div>
            </div>
        </div> 
       

         
        <div id="content">
            <div class="contentDiv" >
            <h3>List of Career's</h3>
                    <div class="tablewrap" id="careerSide">
                        
                        <table id="careerSide" class="table table-bordered" style="width:100%" >
                            <thead class="thead-dark">
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
                    </div>
                    <div class="dashLoginContainer" style="width:auto;">
                        <h3 id="careerFormTitle">Add Career</h3>
                        <form action="" id="careerForm" name="insert">
                            <label for="">Title</label>
                            <input type="text" name="title">
                            <label for="">Position</label>
                            <input type="text" name="position"> 
                    
                            <label for="">Description</label>
                            <textarea name="description" id="" cols="30" rows="6">
                            </textarea>
                            <label for="">Qualification 1</label>
                                <input type="text" name="Q1">
                            <label for="">Qualification 2</label>
                                <input type="text" name="Q2">
                            <label for="">Qualification 3</label>
                                <input type="text" name="Q3">
                            <label for="">Qualification 4</label>
                                <input type="text" name="Q4">
                            <label for="">Qualification 5</label>
                                <input type="text" name="Q5">

                                    <label for="">Responsibility 1</label>
                                <input type="text" name="R1">
                            <label for="">Responsibility 2</label>
                                <input type="text" name="R2">
                            <label for="">Responsibility 3</label>
                                <input type="text" name="R3">
                            <label for="">Responsibility 4</label>
                                <input type="text" name="R4">
                            <label for="">Responsibility 5</label>
                                <input type="text" name="R5">
                            <label for="">Upload Image</label>
                            <input type="file" name="file" id="careerPic">
                            <input type="hidden" name="id">
                            <button type="submit">Submit</button>
                            <button type="button" id="insertCareerBtn" >Add</button>
                        </form>
                    </div>
                </div>
        </div>
      
        <div id="content">
        <div class="contentDiv" >
            <h3>List of Blogs</h3>
                    <div class="tablewrap"id="BlogsArticleSide">
                        

                        <table id="blogTbl" class="table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Author</th>
                                    <th>Date Published</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody id="autoBlog">
                            
                            </tbody>
                        </table>
                    </div>
                    <div class="dashLoginContainer">
                        <h3 id="blogFormTitle">Add Blog</h3>
                        <form action="" id ="blogForm" name="insert">
                            <label for="">Title</label>
                            <input type="text" name="title">
                            <label for="">Description</label>
                            <textarea name="description" id="" cols="30" rows="6"></textarea>
                            <label for="">Author</label>
                            <input type="text" name="author">
                            <label for="">Date Published</label>
                            <input type="date" name="date">
                            <label for="">Picture Upload</label>
                            <input type="file" name="file" id="blogPic">
                            <input type="hidden" name="id">
                            <button type="submit">Submit</button>
                            <button type="button" id="insertBlogBtn">Add Blog</button>
                        </form>
                    </div> 
                    ARTICLE TABLE 
                    <div class="dashTableContainer">
                        <h3>List of Articles</h3>
                        <table id="articleTbl" class="table table-striped table-bordered" style="width:100%">
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
                    </div>
                    <div class="dashLoginContainer">
                        <h3 id="articleFormTitle">Add Article</h3>
                        <form action="" id="articleForm" name="insert">
                            <label for="">Title</label>
                            <input type="text" name="title">
                            <label for="">Description</label>
                            <textarea name="description" id="" cols="30" rows="6"></textarea>
                            <label for="">Author</label>
                            <input type="text" name="author">
                            <label for="">Date Published</label>
                            <input type="date" name="date">
                            <label for="">Picture Upload</label>
                            <input type="file" name="file" id="articlePic">
                            <input type="hidden" name="id">
                            <button type="submit">Submit</button>
                            <button type="button" id="insertArticleBtn">Add Article</button>
                        </form>
                    </div>
            </div>
            </div>


            <div id="content">
            <div class="contentDiv" >
                <div class="tablewrap"id="GallerySide" style="height: auto;">
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
                        <tbody id="autoGallery">
                           
                            
                        </tbody>
                    </table>
                </div>
                <div class="dashLoginContainer">
                    <h3 id="galleryFormTitle">Add Post</h3>
                    <form action="" id="galleryForm" name="insert">
                        <label for="">Title</label>
                        <input type="text" name="title">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="6"></textarea>
                        <label for="">Date Published</label>
                        <input type="date" name="date">
                        <label for="">Upload Picture</label>
                        <input type="file" name="file" id="galleryPic" multiple="multiple">
                        <button type="submit">Submit</button>
                        <button type="button" name="insertGalleryBtn">Add Post</button>
                    </form>
                </div>
            </div>
            </div>

        
    </div>

    <!--             <div class="serviceSide" id="serviceSide">
                    SERVICE TABLE 
                <div class="dashTableContainer">
                    <h3>List of Services</h3>
                    <table id="serviceTbl" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>In Depth Description</th>
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
                        <label for="">In Depth Description</label>
                        <input type="text" name="supervisor">
                        <label for="">Upload Image</label>
                        <input type="file" name="file"id="servicePic">
                        <input type="hidden" name="id" >
                        <button type="submit">Submit</button>
                        <button type="button" id="insertServiceBtn">Add Service</button>
                    </form>
                </div>
            </div>
            <div class="careerSide" id="careerSide">
            CAREER TABLE
                <div class="dashTableContainer">
                    <h3>List of Career's</h3>
                    <table  class="table table-striped table-bordered" style="width:100%" id="careerTbl">
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
                </div>
                <div class="dashLoginContainer">
                    <h3 id="careerFormTitle">Add Career</h3>
                    <form action="" id="careerForm" name="insert">
                        <label for="">Title</label>
                        <input type="text" name="title">
                        <label for="">Position</label>
                        <input type="text" name="position"> 
                  
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="6">
                        </textarea>
                        <label for="">Qualification 1</label>
                            <input type="text" name="Q1">
                        <label for="">Qualification 2</label>
                            <input type="text" name="Q2">
                        <label for="">Qualification 3</label>
                            <input type="text" name="Q3">
                        <label for="">Qualification 4</label>
                            <input type="text" name="Q4">
                        <label for="">Qualification 5</label>
                            <input type="text" name="Q5">

                                 <label for="">Responsibility 1</label>
                            <input type="text" name="R1">
                        <label for="">Responsibility 2</label>
                            <input type="text" name="R2">
                        <label for="">Responsibility 3</label>
                            <input type="text" name="R3">
                        <label for="">Responsibility 4</label>
                            <input type="text" name="R4">
                        <label for="">Responsibility 5</label>
                            <input type="text" name="R5">
                        <label for="">Upload Image</label>
                        <input type="file" name="file" id="careerPic">
                         <input type="hidden" name="id">
                        <button type="submit">Submit</button>
                        <button type="button" id="insertCareerBtn" >Add</button>
                    </form>
                </div>
            </div>

            <div class="BlogsArticleSide" id="BlogsArticleSide">
            
                <div class="dashTableContainer">
                    <h3>List of Blogs</h3>

                    <table id="blogTbl" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Author</th>
                                <th>Date Published</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody id="autoBlog">
                           
                        </tbody>
                    </table>
                </div>
                <div class="dashLoginContainer">
                    <h3 id="blogFormTitle">Add Blog</h3>
                    <form action="" id ="blogForm" name="insert">
                        <label for="">Title</label>
                        <input type="text" name="title">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="6"></textarea>
                        <label for="">Author</label>
                        <input type="text" name="author">
                        <label for="">Date Published</label>
                        <input type="date" name="date">
                        <label for="">Picture Upload</label>
                        <input type="file" name="file" id="blogPic">
                         <input type="hidden" name="id">
                        <button type="submit">Submit</button>
                        <button type="button" id="insertBlogBtn">Add Blog</button>
                    </form>
                </div> 
                 ARTICLE TABLE 
                <div class="dashTableContainer">
                    <h3>List of Articles</h3>
                    <table id="articleTbl" class="table table-striped table-bordered" style="width:100%">
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
                </div>
                <div class="dashLoginContainer">
                    <h3 id="articleFormTitle">Add Article</h3>
                    <form action="" id="articleForm" name="insert">
                        <label for="">Title</label>
                        <input type="text" name="title">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="6"></textarea>
                        <label for="">Author</label>
                        <input type="text" name="author">
                        <label for="">Date Published</label>
                        <input type="date" name="date">
                        <label for="">Picture Upload</label>
                        <input type="file" name="file" id="articlePic">
                        <input type="hidden" name="id">
                        <button type="submit">Submit</button>
                        <button type="button" id="insertArticleBtn">Add Article</button>
                    </form>
                </div>
            </div>
             GALLERY TABLE 
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
                        <tbody id="autoGallery">
                           
                            
                        </tbody>
                    </table>
                </div>
                <div class="dashLoginContainer">
                    <h3 id="galleryFormTitle">Add Post</h3>
                    <form action="" id="galleryForm" name="insert">
                        <label for="">Title</label>
                        <input type="text" name="title">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="6"></textarea>
                        <label for="">Date Published</label>
                        <input type="date" name="date">
                        <label for="">Upload Picture</label>
                        <input type="file" name="file" id="galleryPic" multiple="multiple">
                        <button type="submit">Submit</button>
                        <button type="button" name="insertGalleryBtn">Add Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>-->

</body>
<script src="https://code.jquery.com/jquery-

3.5.1.js"></script>
<script>
    $(document).ready(function () {
        $('#userTbl').DataTable();
        $('#serviceTbl').DataTable();
        $('#careerTbl').DataTable();
        $('#blogTbl').DataTable();
        $('#articleTbl').DataTable();

    });
</script>

<script 

src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.mi

n.js"></script>
<script 

src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap

.min.js"></script>

<script src="../js/cms.js"></script>
<script src="../js/cmsJquery.js"></script>
<script>
    $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>
</html>