let j = 1;
function register(){
    let sid = document.getElementById("sid").value;
    let fname = document.getElementById("fname").value;
    let lname = document.getElementById("lname").value;
    let table = document.getElementById("table");
    let tr = document.createElement("tr");
    let td = document.createElement("td");
    let tdText = document.createTextNode(""+j++);
    td.appendChild(tdText);
    tr.appendChild(td)
    for (let i = 0; i < 3; i++) {
        let td = document.createElement("td");
        if(i==0){
            let tdText = document.createTextNode(sid);td.appendChild(tdText);
        }
        else if(i==1){
            let tdText = document.createTextNode(fname);td.appendChild(tdText);
        }
        else if(i==2){
            let tdText = document.createTextNode(lname);td.appendChild(tdText);
        }
        tr.appendChild(td);
    }
    table.appendChild(tr);
}