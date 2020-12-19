var name= window.prompt("enter name");
var roll= window.prompt("enter role");

getUserRole(name,roll)

function getUserRole(namee, role)
{

    switch(role){
                    case "admin":
                        alert("your name is "+namee+"and you have all access");
                        break;
                    case "subadmin":
                        alert("your name is "+namee+"and you have access to create/delete courses");
                        break;
                    case "testprep":
                        alert("your name is "+namee+"and you have access to create/delete tests");
                        break;
                    case "user":
                        alert("your name is "+namee+"and you have access to all courses");
                        break;
                    case "other":
                        alert("your name is "+namee+"and you have access to trial version");
                    default:
                        alert("your name is "+namee+"and you have access to trial version");
                        break;


    }




}
