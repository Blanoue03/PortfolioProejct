for (let x =1; x <= 100; x++)
{
    if ( x % 3 == 0 && x % 5 == 0 )
    {
        console.log("Fizz Buzz")
    }
    else if (x % 5 == 0 )
    {
        console.log("Buzz")
    }
    else if ( x % 3 == 0)
    {
        console.log("Fizz")
    }
    else 
    {
        console.log(x)
    }
}


//
function displayMessage()
{
    console.log("Welcome to javascript")
}

let display = function()
{
    console.log("Welcome to javascript")
}

let msgDispaly = () =>{
    console.log("Welcome to javascript")
}



// 3 DISPLAY SQUARE
function displaySquare()
{
    let x = prompt("Enter a number")
    console.log( x * x)
}

let squareDisplay = function()
{
    let x = prompt("Enter a number")
    console.log( x * x)
}

let sqrDisplay = ()=>{
        let x = prompt("Enter a number")
        console.log( x * x)
    }



function descisionMaking1()
{
    let x = prompt("Enter a number in the range 1 through 7")
    console.log(x == 5);
    switch(x)
    {
        
        case "1":
            console.log("Monday")
            break;
        case "2":
            console.log("Tuesday")
            break;
        case "3":
            console.log("Wednesday")
            break;
        case "4":
            console.log("Thursday")
            break;
        case "5":
            console.log("Friday")
        break;
        case "6":
            console.log("Saturday")
            break;
        case "7":
            console.log("Sunday")
            break;
        default:
            console.log("You have not entered a number in the range 1 through 7")
            break;
    }
}
function descisionMaking2()
{
    let length1 = prompt("Please enter the length of rectangle 1")
    let width1 = prompt("Please enter the width of rectangle 1")

    let length2 = prompt("Please enter the length of rectangle 2")
    let width2 = prompt("Please enter the width of rectangle 2")
    if ((length1 * width1) > (length2 * width2))
    {
        console.log('Rectangle 1 has area of ${length1 * width1}')
    }
}
function descisionMaking3()
{
    
}
function descisionMaking4()
{
    
}
function descisionMaking5()
{
    
}
let currentNum;
let oldNum;
let oldAction;

function calc(value , action)
{
    

    if (action == "num")
    {
        if (currentNum != undefined)
        {
  
            currentNum += value
        }
        else
        {
            currentNum = value
        }
        
    }
    else
    {
        if (oldNum == undefined)
        {
            oldNum = currentNum
            currentNum = undefined
            
        }
        if (oldAction != undefined)
        {
            switch(action)
            {
                case "mult":
                    currentNum = oldNum * currentNum
                    break;
            }
        }
        oldAction = action
        
    }

    if (currentNum != undefined)
    {
        document.getElementById("result").innerText = currentNum
    }
    else
    {
        document.getElementById("result").innerText = 0
    }
    
}