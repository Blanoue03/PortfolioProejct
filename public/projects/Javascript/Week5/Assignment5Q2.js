const paragraph = "I think Ruth's dog is cuter than your dog!";

const regex = "dog"
const replacement = "cat"

let paragraphArr = paragraph.split(" ")

if(paragraphArr.indexOf(regex) != -1)
{
    
    
    paragraphArr.splice(paragraphArr.indexOf(regex),1, replacement)
    console.log(paragraphArr.join(" "))
}