function createcard(){
    let ifullname = document.forms.myForm.fullname.value
    document.getElementById("insertfullname").innerHTML = ifullname;
    let iphone = document.forms.myForm.phone.value
    document.getElementById("insertphone").innerHTML = iphone;
    let iemail = document.forms.myForm.email.value
    document.getElementById("insertemail").innerHTML = iemail;
    let icompany = document.forms.myForm.company.value
    document.getElementById("insertcompany").innerHTML = icompany;
}