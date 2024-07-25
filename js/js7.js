console.log("ok to be run")
let name1="gfgg"
let name2="gfgdfs"
let name3="gfgsas"
let name4="gfdfg"
// console.log(name1+"is add")
// console.log(name4+"is add")
// console.log(name3+"is add")
function greet(name,greettext="greeting from heaven"){

    console.log(greettext+" "+name)
    console.log(name+"is added to hell")
}
function sum(a,b,c){
    return a+b+c
    // this line will never execute
}
greettext="go to hell"
greet(name1,greettext)
greet(name2,greettext)
greet(name3,greettext)
greet(name4,greettext)
let returnval=greet("shrish")
let returnval1=sum(1,2,3)
console.log(returnval)
console.log(returnval1)
