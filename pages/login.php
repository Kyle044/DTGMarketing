<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin CMS</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/master.css">
</head>
  <body class="loginBody">
    <div class="container loginContainer">
    <form action="" id="loginForm">
    <label for="" style=" 
    text-align: center;
    font-size: 3rem;
">
    <i class="fa-solid fa-user"></i>
    </label>
    <label for="">Email</label>
    <input type="text" name="email">
    <label for="password">Password</label>
    <input type="password" name="password">
    <button type="submit">Submit</button>
    </form>
    </div>













<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>







  <script>


    $(document).ready(()=>{
        $("#loginForm").on("submit",(e)=>{
        e.preventDefault();
        var formData = new FormData(e.target);
        var data =  {
          "email": formData.get("email"),
          "password" : formData.get("password")
        }

        if(!formData.get("email")||!formData.get("password")){
          alert("Please Input in the fields")
        }
        else{
          $.ajax({
            type: "POST",
            url: "../php/login.php",
            data:data,
            cache: false,
          
            success: function(res)
                {alert(res);
                    if(res=="Login Succesfully"){
                      window.location.href="cms.php";
                    }else{

                    }
                }
            });
        }




        
        })










    });



  </script>
</html>