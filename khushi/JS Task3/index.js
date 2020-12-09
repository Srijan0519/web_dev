var array=[1,2,3]

var num=document.getElementById('#num');

addNum(num);

function addNum(numm)
{
array.push(numm);
console.log(array);
    
    }

    
function popNum()
{
array.pop();
console.log(array);

}


