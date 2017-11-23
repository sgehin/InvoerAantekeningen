// link back button
function home(){
                document.location ='index.php';
}


function inlog(){
                document.location ='login.php';
}
function validate(form){
                fail = validateUname(form.Uname.value)
                fail += validatepassword(form.password.value)
                fail += validatefname(form.fname.value)
                fail += validatelname(form.lname.value)
                fail += validateusremail(form.usremail.value)
                if (fail == "")
                    return true   
                else {
                    alert(fail)
                    return false       
                }
            }
            function validateUname(field){
                return(field == "") ? "No username was entered.\n" : ""
            }
            function validatepassword(field){
                return(field == "") ? "No password was entered.\n" : ""
            }
            function validatefname(field){
                return(field == "") ? "No firstname was entered.\n" : ""
            }
            function validatelname(field){
                return(field == "") ? "No lasttname was entered.\n" : ""
            }
            function validateusremail(field){
                return(field == "") ? "No e-mail was entered.\n" : ""
            }