$(document).ready(function () {
    $('#login').click(function () { 
        var username=$('#username').val();
        var password=$('#password').val();
        if ($.trim(username).length > 0 && $.trim(password).length > 0) {
            $.ajax({
                url: base_url+"proseslogin",
                method:"POST",
                data: {username:username, password:password},
                cache:false,
                   beforeSend:function(){
                       $('#login').html("Loading..");
                   },
                success: function (hasil) 
                {
                    if (hasil==1) {
                        swal({
                            title: "Maaf!",
                            text: "Username Tidak terdata di server",
                            icon: "error",
                            button: "Tutup!",
                          });  
                          $('#login').html("LOGIN");
                          $('#username').focus();
                    }else if(hasil==0){
                        swal({
                            title: "Maaf!",
                            text: "Password Tidak sesuai dengan di server",
                            icon: "error",
                            button: "Tutup!",
                          });  
                          $('#login').html("LOGIN");
                          $('#password').focus();
                    }else{
                        swal({
                            title: "Selanat datang!",
                            text: "Gunakan aplikasi ini dengan akhlak yang baik",
                            icon: "success",
                            button: "ya",
                          });  
                          window.location=base_url+"serveradmin";
                          $('#login').html("LOGIN");
                    }
                }
            });
        } else {
            swal({
                title: "Maaf!",
                text: "Username dan Password kosong",
                icon: "error",
                button: "Tutup!",
              });
         
        }
         
     });
});