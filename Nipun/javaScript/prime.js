 // Function to check prime number 
 function p() { 
              
    var n, i, flag = true; 
      
    // Getting the value form text 
    // field using DOM 
    n = document.myform.n.value; 
    n = parseInt(n) 
    for(i = 2; i <= n - 1; i++) 
        if (n % i == 0) { 
            flag = false; 
            break; 
        } 
          
        // Check and display alert message 
    if (flag == true) 
        window.alert(n + " is prime"); 
    else
        window.alert(n + " is not prime"); 
} 