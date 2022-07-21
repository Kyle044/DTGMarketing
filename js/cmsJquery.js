$(document).ready(() => {
  // hide insert Btn
  $("#insertUserBtn").hide();
  $("#insertServiceBtn").hide();
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
      !formData.get("supervisor") ||
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
    var answer = window.confirm("Delete User?");
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
    var supervisor = tblRow.querySelectorAll("td")[3].innerText;
    $("#serviceForm").find("input[name=id]").val(id);
    $("#serviceForm").find("input[name=title]").val(title);
    $("#serviceForm").find("textarea[name=description]").val(description);
    $("#serviceForm").find("input[name=supervisor]").val(supervisor);
    $("#serviceFormTitle").text("Update Service");
    form.setAttribute("name", "update");
    $("#insertServiceBtn").show();
    $("#insertServiceBtn").on("click", () => {
      $("#serviceFormTitle").text("Add User");
      form.setAttribute("name", "insert");
    });
  });

  //Dynamic Auto Refresh Table
  setInterval(() => {
    $("#autoUser").load("../php/autoRefreshUser.php");
    $("#autoService").load("../php/autoRefreshService.php");
    console.log("fetching ....");
  }, 2000);
});
