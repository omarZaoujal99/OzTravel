// submit button
const btnSU = document.getElementById("btnSU");

// matching passwords
btnSU.addEventListener("click",(e)=>{
    let pa1 = document.getElementById("pa1");
    let pa2 = document.getElementById("pa2");
    let cc = document.getElementById("cc");

    if(pa1.value != pa2.value){
        e.preventDefault();
        cc.innerHTML = "Your confirmation password doesn't match your first password!"
        return 0;
    }
    cc.innerHTML = "";
    return 1;
})

// birthday validation
btnSU.addEventListener("click",(e)=>{
    let bd = document.getElementById("bd");
    let newbd = bd.value;
    let splitIt = newbd.split("-");
    let getNewbd = splitIt[0];
    let d = new Date();
    let gy = d.getFullYear();
    let age = gy - getNewbd;
    console.log(gy);

    if(age < 18){
        alert("Sorry! you must be +18yo to sign up in here.")
        e.preventDefault();
        return 0;
    }
    return 1;
})