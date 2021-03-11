const btnadd = document.getElementById("btnadd");
const btnDel = document.getElementById("btnDel");
const btnMod = document.getElementById("btnMod");
const btnFClose2 = document.getElementById("btnFClose2");
const btnFClose3 = document.getElementById("btnFClose3");
const btnFClose4 = document.getElementById("btnFClose4");
const divF1 = document.getElementById("divF1");
const divF2 = document.getElementById("divF2");
const divF3 = document.getElementById("divF3");

btnadd.addEventListener("click",()=>{
    divF1.style.display = "inline-block";
})
btnFClose2.addEventListener("click",()=>{
    divF1.style.display = "none";
})

btnDel.addEventListener("click",()=>{
    divF2.style.display = "inline-block";
})
btnFClose3.addEventListener("click",()=>{
    divF2.style.display = "none";
})

btnMod.addEventListener("click",()=>{
    divF3.style.display = "inline-block";
})
btnFClose4.addEventListener("click",()=>{
    divF3.style.display = "none";
})
