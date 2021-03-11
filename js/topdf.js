const secT = document.getElementById("secT");
const aT = document.getElementById("aT");

aT.addEventListener("click",()=>{
    html2pdf(secT,{
        margin: 10,
        filename: "Ticket.pdf",
        jsPDF: {
            unit: 'mm',
            format: "a4",
            orientation: 'portrait'
        }
    });
})