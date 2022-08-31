function calculate(){
    let val1 = document.getElementById("value1").value;
    let val2 = document.getElementById("value2").value;
    let result = document.getElementById("result");
    result.innerHTML = "Result :"+(parseInt(val1)+parseInt(val2));
    let pElement = document.createElement("p");
    let text = document.createTextNode(val1+" + "+val2+" = "+(parseInt(val1)+parseInt(val2)));
    pElement.appendChild(text);
    document.body.appendChild(pElement)
}