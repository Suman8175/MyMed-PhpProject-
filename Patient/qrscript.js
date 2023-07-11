const qrText = document.getElementById('qr-text');
const downloadBtn = document.getElementById('downloadBtn');
const qrContainer = document.querySelector('.qr-body');
let size = 500;
document.addEventListener('DOMContentLoaded', () => {
    generateQRCode(); 
});
downloadBtn.addEventListener('click', ()=>{
    let img = document.querySelector('.qr-body img');

    if(img !== null){
        let imgAtrr = img.getAttribute('src');
        downloadBtn.setAttribute("href", imgAtrr);
    }
    else{
        generateQRCode(); // Generate the QR code if it doesn't exist yet
        setTimeout(() => {
            let img = document.querySelector('.qr-body img');
            let imgAttr = img.getAttribute('src');
            downloadBtn.setAttribute('href', imgAttr);
        }, 500);
    }
});

function isEmptyInput(){
    qrText.value.length > 0 ? generateQRCode() : alert("Enter the text or URL to generate your QR code");;
}
function generateQRCode(){
    qrContainer.innerHTML = "";
    new QRCode(qrContainer, {
        text:qrText.value,
        height:size,
        width:size,
        colorLight:"#fff",
        colorDark:"#000",
        background: "#fff" 
    });
}