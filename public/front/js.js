document.getElementById('downloadbtn').addEventListener('click',()=>{
    setTimeout(() => {
        document.getElementById('form_div').style.display="none";
        document.getElementById('thank-div').classList.remove('nonedisplay')
    }, 6000);

})
