
var name = window.prompt("enter your name");
var role = window.prompt("enter your role");
getUserRole(name,role);
function getUserRole(name,role){

   switch (role) {
       case "admin":
           alert("with all access");
           break;

        case "subadmin":
            alert("with access to create/delete courses");
            break;

        case "testprep":
            alert("with access to create/delete tests");
            break;

            default:
                alert("trial user");
                break;
   
        
   }
}


