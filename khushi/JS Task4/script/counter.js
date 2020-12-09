let counter= document.querySelector("#counter");
let myText= document.querySelector("#myText");


let temp=0;
let val= 100;
console.log(val);
setInterval(() => { 
    if(temp<val)
    {temp++;
        counter.innerHTML=temp;
        console.log("test");
    }
}, 1000);

setTimeout(() => {
    myText.innerHTML="Hello everyone this is an invasion";
}, 4000);