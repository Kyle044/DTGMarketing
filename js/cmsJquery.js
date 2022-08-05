$(document).ready(() => {
  // hide insert Btn
  $("#insertUserBtn").hide();
  $("#insertServiceBtn").hide();
  $("#insertCareerBtn").hide();
  $("#insertBlogBtn").hide();
  $("#insertArticleBtn").hide();
  // USER INSERT JAVASCRIPT AND UPDATE
  $("#userForm").on("submit", (e) => {
    e.preventDefault();
    if (e.target.name == "insert") {
      var formData = new FormData(e.target);
      if (
        !formData.get("fullname") ||
        !formData.get("position") ||
        !formData.get("office") ||
        !formData.get("email") ||
        !formData.get("password") ||
        !formData.get("cpassword")
      ) {
        alert("There is some missing fields");
      } else {
        if (formData.get("cpassword") != formData.get("password")) {
          alert("The Password Does not Match");
        } else {
          $.ajax({
            type: "POST",
            url: "../php/signup.php",
            data: {
              fullname: formData.get("fullname"),
              position: formData.get("position"),
              office: formData.get("office"),
              email: formData.get("email"),
              password: formData.get("password")
            },
            cache: false,
            success: function (res) {
              $("#userForm")
                .find("input[type=text], textarea,input[type=password]")
                .val("");
              alert(res);
            }
          });
        }
      }
    } else {
      var formData = new FormData(e.target);
      if (
        !formData.get("fullname") ||
        !formData.get("position") ||
        !formData.get("office") ||
        !formData.get("email") ||
        !formData.get("password") ||
        !formData.get("cpassword")
      ) {
        alert("There is some missing fields");
      } else {
        if (formData.get("cpassword") != formData.get("password")) {
          alert("The Password Does not Match");
        } else {
          $.ajax({
            type: "POST",
            url: "../php/updateUser.php",
            data: {
              id: formData.get("id"),
              fullname: formData.get("fullname"),
              position: formData.get("position"),
              office: formData.get("office"),
              email: formData.get("email"),
              password: formData.get("password")
            },
            cache: false,
            success: function (res) {
              $("#userForm")
                .find("input[type=text], textarea,input[type=password]")
                .val("");
              alert(res);
            }
          });
        }
      }
    }
  });

  // Update User
  $(document).on("click", ".upUser", (e) => {
    var form = document.getElementById("userForm");
    var tblRow = e.target.parentNode.parentNode.parentNode;
    var id = e.target.name;
    var name = tblRow.querySelectorAll("td")[0].innerText;
    var position = tblRow.querySelectorAll("td")[1].innerText;
    var office = tblRow.querySelectorAll("td")[2].innerText;
    var email = tblRow.querySelectorAll("td")[3].innerText;
    $("#userForm").find("input[name=fullname]").val(name);
    $("#userForm").find("input[name=position]").val(position);
    $("#userForm").find("input[name=office]").val(office);
    $("#userForm").find("input[name=email]").val(email);
    $("#userForm").find("input[name=id]").val(id);
    $("#userFormTitle").text("Update User");
    form.setAttribute("name", "update");
    $("#insertUserBtn").show();
    $("#insertUserBtn").on("click", () => {
      $("#userFormTitle").text("Add User");
      form.setAttribute("name", "insert");
      $("#insertUserBtn").hide();
    });
  });
  //Delete User
  $(document).on("click", ".delUser", (e) => {
    var answer = window.confirm("Delete User?");
    if (answer) {
      $.ajax({
        type: "POST",
        url: "../php/deleteUser.php",
        data: {
          id: e.target.name
        },
        cache: false,
        success: function (res) {
          alert(res.msg);
        }
      });
    } else {
    }
  });

  //Service JQUERY Functions

  //Insert Service & Update Service
  $("#serviceForm").on("submit", (e) => {
    e.preventDefault();

    var file_data = $("#servicePic").prop("files")[0];
    var formData = new FormData(e.target);
    formData.append("file", file_data);
    if (
      !formData.get("title") ||
      !formData.get("description") ||
      !formData.get("detail_desc") ||
      !formData.get("approach") ||
      !formData.get("benefits") ||
      !file_data
    ) {
      alert("There is some missing fields");
    } else {
      if (e.target.name == "insert") {
        $.ajax({
          type: "POST",
          url: "../php/addService.php",
          processData: false,
          contentType: false,
          data: formData,
          cache: false,
          success: function (res) {
            alert(res);
            $("#serviceForm")
              .find("input[type=text], textarea,input[type=file]")
              .val("");
          }
        });
      } else {
        $.ajax({
          type: "POST",
          url: "../php/updateService.php",
          processData: false,
          contentType: false,
          data: formData,
          cache: false,
          success: function (res) {
            alert(res);
            $("#serviceForm")
              .find("input[type=text], textarea,input[type=file]")
              .val("");
          }
        });
      }
    }
  });
  //Delete Service
  $(document).on("click", ".delService", (e) => {
    var answer = window.confirm("Delete Service?");
    if (answer) {
      $.ajax({
        type: "POST",
        url: "../php/deleteService.php",
        data: {
          id: e.target.name
        },
        cache: false,
        success: function (res) {
          alert(res);
        }
      });
    } else {
    }
  });

  // Update Service
  $(document).on("click", ".upService", (e) => {
    var form = document.getElementById("serviceForm");
    var tblRow = e.target.parentNode.parentNode.parentNode;
    var id = tblRow.querySelectorAll("td")[0].innerText;
    var title = tblRow.querySelectorAll("td")[1].innerText;
    var description = tblRow.querySelectorAll("td")[2].innerText;
    var detail_desc = tblRow.querySelectorAll("td")[3].innerText;
    var benefits = tblRow.querySelectorAll("td")[4].innerText;
    var approach = tblRow.querySelectorAll("td")[5].innerText;
    $("#serviceForm").find("input[name=id]").val(id);
    $("#serviceForm").find("input[name=title]").val(title);
    $("#serviceForm").find("textarea[name=description]").val(description);
    $("#serviceForm").find("input[name=detail_desc]").val(detail_desc);
    $("#serviceForm").find("input[name=benefits]").val(benefits);
    $("#serviceForm").find("input[name=approach]").val(approach);
    $("#serviceFormTitle").text("Update Service");
    form.setAttribute("name", "update");
    $("#insertServiceBtn").show();
    $("#insertServiceBtn").on("click", () => {
      $("#serviceFormTitle").text("Add User");
      form.setAttribute("name", "insert");
    });
  });

  //Insert Career
  $("#careerForm").on("submit", (e) => {
    e.preventDefault();
    var file_data = $("#careerPic").prop("files")[0];
    var formData = new FormData(e.target);
    formData.append("file", file_data);

    console.log(formData.get("title"));
    console.log(formData.get("position"));
    console.log(formData.get("description"));
    console.log(formData.get("qualification"));
    console.log(formData.get("responsibility"));
    console.log(file_data);
    
    if (
      !formData.get("title") ||
      !formData.get("position") ||
      !formData.get("description") ||      
      !formData.get("qualification") ||
      !formData.get("responsibility") ||
      !file_data
      
    ) 
    {
      alert("There is some missing fields");
    } else {
      if (e.target.name == "insert") {
        $.ajax({
          type: "POST",
          url: "../php/addCareer.php",
          processData: false,
          contentType: false,
          data: formData,
          cache: false,
          success: function (res) {
            console.log(res);
            $("#careerForm")
              .find("input[type=text], textarea,input[type=file]")
              .val("");
          }
        });
      } else {
        if (!formData.get("id")) {
          alert("There is no id");
        } else {
          $.ajax({
            type: "POST",
            url: "../php/updateCareer.php",
            processData: false,
            contentType: false,
            data: formData,
            cache: false,
            success: function (res) {
              alert(res);
              $("#serviceForm")
                .find("input[type=text], textarea,input[type=file]")
                .val("");
            }
          });
        }
      }
    }
  });

  // Update Career
  $(document).on("click", ".upCareer", (e) => {
    var form = document.getElementById("careerForm");
    var tblRow = e.target.parentNode.parentNode.parentNode;
    var id = e.target.name;
    var title = tblRow.querySelectorAll("td")[0].innerText;
    var position = tblRow.querySelectorAll("td")[1].innerText;
    var description = tblRow.querySelectorAll("td")[2].innerText;

    $("#careerForm").find("input[name=id]").val(id);
    $("#careerForm").find("input[name=title]").val(title);
    $("#careerForm").find("input[name=position]").val(position);
    $("#careerForm").find("textarea[name=description]").val(description);

    $("#careerFormTitle").text("Update Career");
    form.setAttribute("name", "update");
    $("#insertCareerBtn").show();
    $("#insertCareerBtn").on("click", () => {
      $("#careerFormTitle").text("Add Career");
      form.setAttribute("name", "insert");

      $("#insertCareerBtn").hide();
    });
  });

  //Delete Service
  $(document).on("click", ".delCareer", (e) => {
    var answer = window.confirm("Delete Career?");
    if (answer) {
      $.ajax({
        type: "POST",
        url: "../php/deleteCareer.php",
        data: {
          id: e.target.name
        },
        cache: false,
        success: function (res) {
          alert(res);
        }
      });
    } else {
    }
  });

  //Blogs

  //Insert Blogs & Update Blogs
  $("#blogForm").on("submit", (e) => {
    e.preventDefault();
    var file_data = $("#blogPic").prop("files")[0];
    var formData = new FormData(e.target);
    formData.append("file", file_data);
    if (
      !formData.get("title") ||
      !formData.get("description") ||
      !formData.get("author") ||
      !formData.get("date") ||
      !file_data
    ) {
      alert("There is some missing fields");
    } else {
      if (e.target.name == "insert") {
        $.ajax({
          type: "POST",
          url: "../php/addBlog.php",
          processData: false,
          contentType: false,
          data: formData,
          cache: false,
          success: function (res) {
            alert(res);
            $("#blogForm")
              .find(
                "input[type=date],input[type=text], textarea,input[type=file]"
              )
              .val("");
          }
        });
      } else {
        $.ajax({
          type: "POST",
          url: "../php/updateBlog.php",
          processData: false,
          contentType: false,
          data: formData,
          cache: false,
          success: function (res) {
            alert(res);
            $("#blogForm")
              .find(
                "input[type=date],input[type=text], textarea,input[type=file]"
              )
              .val("");
          }
        });
      }
    }
  });

  //Delete Blog
  $(document).on("click", ".delBlog", (e) => {
    var answer = window.confirm("Delete Blog?");
    if (answer) {
      $.ajax({
        type: "POST",
        url: "../php/deleteBlog.php",
        data: {
          id: e.target.name
        },
        cache: false,
        success: function (res) {
          alert(res);
        }
      });
    } else {
    }
  });

  //Update Blog
  $(document).on("click", ".upBlog", (e) => {
    var form = document.getElementById("blogForm");
    var tblRow = e.target.parentNode.parentNode.parentNode;
    var id = e.target.name;
    var title = tblRow.querySelectorAll("td")[0].innerText;
    var description = tblRow.querySelectorAll("td")[1].innerText;
    var author = tblRow.querySelectorAll("td")[2].innerText;
    var date_publish = tblRow.querySelectorAll("td")[3].innerText;
    $("#blogForm").find("input[name=id]").val(id);
    $("#blogForm").find("input[name=title]").val(title);
    $("#blogForm").find("textarea[name=description]").val(description);
    $("#blogForm").find("input[name=author]").val(author);
    $("#blogForm").find("input[name=date]").val(date_publish);
    $("#blogFormTitle").text("Update Blog");
    form.setAttribute("name", "update");
    $("#insertBlogBtn").show();
    $("#insertBlogBtn").on("click", () => {
      $("#blogFormTitle").text("Add Blog");
      $("#insertBlogBtn").hide();
      console.log("shet");
      form.setAttribute("name", "insert");
    });
  });

  //Article

  //Insert Article & Update Article
  $("#articleForm").on("submit", (e) => {
    e.preventDefault();
    var file_data = $("#articlePic").prop("files")[0];
    var formData = new FormData(e.target);
    formData.append("file", file_data);
    if (
      !formData.get("title") ||
      !formData.get("description") ||
      !formData.get("author") ||
      !formData.get("date") ||
      !file_data
    ) {
      alert("There is some missing fields");
    } else {
      if (e.target.name == "insert") {
        $.ajax({
          type: "POST",
          url: "../php/addArticle.php",
          processData: false,
          contentType: false,
          data: formData,
          cache: false,
          success: function (res) {
            alert(res);
            $("#blogForm")
              .find(
                "input[type=date],input[type=text], textarea,input[type=file]"
              )
              .val("");
          }
        });
      } else {
        $.ajax({
          type: "POST",
          url: "../php/updateArticle.php",
          processData: false,
          contentType: false,
          data: formData,
          cache: false,
          success: function (res) {
            alert(res);
            $("#blogForm")
              .find(
                "input[type=date],input[type=text], textarea,input[type=file]"
              )
              .val("");
          }
        });
      }
    }
  });

  //Update Article
  $(document).on("click", ".upArticle", (e) => {
    var form = document.getElementById("articleForm");
    var tblRow = e.target.parentNode.parentNode.parentNode;
    var id = e.target.name;
    var title = tblRow.querySelectorAll("td")[0].innerText;
    var description = tblRow.querySelectorAll("td")[1].innerText;
    var author = tblRow.querySelectorAll("td")[2].innerText;
    var date_publish = tblRow.querySelectorAll("td")[3].innerText;
    $("#articleForm").find("input[name=id]").val(id);
    $("#articleForm").find("input[name=title]").val(title);
    $("#articleForm").find("textarea[name=description]").val(description);
    $("#articleForm").find("input[name=author]").val(author);
    $("#articleForm").find("input[name=date]").val(date_publish);
    $("#articleFormTitle").text("Update Article");
    form.setAttribute("name", "update");
    $("#insertArticleBtn").show();
    $("#insertArticleBtn").on("click", () => {
      $("#insertArticleBtn").hide();
      $("#articleFormTitle").text("Add Article");
      form.setAttribute("name", "insert");
    });
  });

  //Delete Article
  $(document).on("click", ".delArticle", (e) => {
    var answer = window.confirm("Delete Article?");
    if (answer) {
      $.ajax({
        type: "POST",
        url: "../php/deleteArticle.php",
        data: {
          id: e.target.name
        },
        cache: false,
        success: function (res) {
          alert(res);
        }
      });
    } else {
    }
  });
  //gallery

  //Insert Gallery & Update Gallery
  $("#galleryForm").on("submit", (e) => {
    e.preventDefault();
    var formData = new FormData(e.target);

    var file_data = $("#galleryPic").prop("files");
    for (var i = 0; i < file_data.length; ++i) {
      formData.append("galleryfiles[]", file_data[i]);
    }
    if (
      (!formData.get("title") ||
        !formData.get("description") ||
        !formData.get("date") ||
        !file_data,
      file_data.length == 0)
    ) {
      alert("There is some missing fields");
    } else {
      if (e.target.name == "insert") {
        $.ajax({
          type: "POST",
          url: "../php/addGallery.php",
          processData: false,
          contentType: false,
          data: formData,
          cache: false,
          success: function (res) {
            alert(res);
            $("#galleryForm")
              .find(
                "input[type=date],input[type=text], textarea,input[type=file]"
              )
              .val("");
          }
        });
      } else {
        $.ajax({
          type: "POST",
          url: "../php/updateArticle.php",
          processData: false,
          contentType: false,
          data: formData,
          cache: false,
          success: function (res) {
            alert(res);
            $("#blogForm")
              .find(
                "input[type=date],input[type=text], textarea,input[type=file]"
              )
              .val("");
          }
        });
      }
    }
  });

  //Delete Gallery
  $(document).on("click", ".delGallery", (e) => {
    var answer = window.confirm("Delete Gallery?");
    if (answer) {
      $.ajax({
        type: "POST",
        url: "../php/deleteGallery.php",
        data: {
          id: e.target.name
        },
        cache: false,
        success: function (res) {
          alert(res);
        }
      });
    } else {
    }
  });

  //Dynamic Auto Refresh Table
  setInterval(() => {
    $("#autoBlog").load("../php/autoRefreshBlog.php");
    $("#autoCareer").load("../php/autoRefreshCareer.php");
    $("#autoUser").load("../php/autoRefreshUser.php");
    $("#autoService").load("../php/autoRefreshService.php");
    $("#autoArticle").load("../php/autoRefreshArticle.php");
    $("#autoGallery").load("../php/autoRefreshGallery.php");
    console.log("fetching ....");
  }, 2000);
});
