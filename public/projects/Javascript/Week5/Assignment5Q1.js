

function isValidURL(url)
{
    const regEx = new RegExp("^(https?://)([a-z0-9]+\\.)([a-z0-9]+)?.[a-z0-9]+$") 
    console.log(regEx);
    
    return regEx.test(url)
}
console.log(isValidURL("https://example.www"))
console.log(isValidURL("ftp://example.com"))
console.log(isValidURL("http://example"))