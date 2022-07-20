$(document).ready(()=>{





// USER INSERT JAVASCRIPT 
$("#userForm").on("submit",(e)=>{
    e.preventDefault();
    var formData = new FormData(e.target);
if(!formData.get("fullname")||!formData.get("position")||!formData.get("office")||!formData.get("email")||!formData.get("password")||!formData.get("cpassword"))
{
    alert("There is some missing fields");
}
else{

    if(formData.get("cpassword")!=formData.get("password")){
        alert("The Password Does not Match");
    }
    else{
        $.ajax({
            type: "POST",
            url: "../php/signup.php",
            data: {
                "fullname" : formData.get("fullname"),
                "position" : formData.get("position"),
                "office" : formData.get("office"),
                "email":formData.get("email"),
                "password" :formData.get("password")
            },
            cache: false,
          
            success: function(res)
                {
                    alert(res);
                }
            });
    }
}







    
});


 






})