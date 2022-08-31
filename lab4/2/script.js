let check = true;
function change() {
    let all = document.getElementById("all")
    let sub = document.getElementById("sub")
    if (check) {
        english(all, sub);
        check = false;
    } else {
        thai(all, sub);
        check = true;
    }
}
function thai() {
    all.removeChild(sub);
    let newSub = document.createElement("div");
    all.appendChild(newSub);
    let subAtt = document.createAttribute("id");
    subAtt.value = "sub";
    newSub.setAttributeNode(subAtt);
    let newName = document.createElement("p");
    let nameText = document.createTextNode("ชื่อ:");
    newName.appendChild(nameText);
    let nameInput = document.createElement("input");
    let inputAtt = document.createAttribute("type");
    inputAtt.value = "text";
    nameInput.setAttributeNode(inputAtt);
    newName.appendChild(nameInput);
    newSub.appendChild(newName);
    let newLName = document.createElement("p");
    let lNameText = document.createTextNode("นามสกุล:");
    newLName.appendChild(lNameText);
    let lNameInput = document.createElement("input");
    let inputAtt2 = document.createAttribute("type");
    lNameInput.setAttributeNode(inputAtt2);
    newLName.appendChild(lNameInput);
    newSub.appendChild(newLName);
    let country = document.createElement("p");
    let countryText = document.createTextNode("ประเทศ:");
    country.appendChild(countryText);
    let select = document.createElement("select");
    let i = 0;
    for (i; i < 10; i++) {
        let country1 = document.createElement("option");
        if (i == 0) { let country1Text = document.createTextNode("เลือกประเทศ"); country1.appendChild(country1Text); }
        else if (i == 1) { let country1Text = document.createTextNode("ไทย"); country1.appendChild(country1Text); }
        else if (i == 2) { let country1Text = document.createTextNode("เวียดนาม"); country1.appendChild(country1Text); }
        else if (i == 3) { let country1Text = document.createTextNode("ลาว"); country1.appendChild(country1Text); }
        else if (i == 4) { let country1Text = document.createTextNode("มาเลย์เซีย"); country1.appendChild(country1Text); }
        else if (i == 5) { let country1Text = document.createTextNode("สิงคโปร์"); country1.appendChild(country1Text); }
        else if (i == 6) { let country1Text = document.createTextNode("ฟิลิปปินส์"); country1.appendChild(country1Text); }
        else if (i == 7) { let country1Text = document.createTextNode("เมียนมาร์"); country1.appendChild(country1Text); }
        else if (i == 8) { let country1Text = document.createTextNode("กัมพูชา"); country1.appendChild(country1Text); }
        else if (i == 9) { let country1Text = document.createTextNode("บรูไน"); country1.appendChild(country1Text); }
        select.appendChild(country1);
    }
    country.appendChild(select);
    newSub.appendChild(country);
    let button = document.createElement("button");
    let buttonType = document.createAttribute("type");
    buttonType.value = "type";
    button.setAttributeNode(buttonType);
    let buttonOnclick = document.createAttribute("onclick");
    buttonOnclick.value = "change()";
    button.setAttributeNode(buttonOnclick);
    let buttonText = document.createTextNode("เปลี่ยนเป็นภาษาอังกฤษ")
    button.appendChild(buttonText);
    newSub.appendChild(button);
}

function english(all, sub) {
    all.removeChild(sub);
    let newSub = document.createElement("div");
    all.appendChild(newSub);
    let subAtt = document.createAttribute("id");
    subAtt.value = "sub";
    newSub.setAttributeNode(subAtt);
    let newName = document.createElement("p");
    let nameText = document.createTextNode("First Name:");
    newName.appendChild(nameText);
    let nameInput = document.createElement("input");
    let inputAtt = document.createAttribute("type");
    inputAtt.value = "text";
    nameInput.setAttributeNode(inputAtt);
    newName.appendChild(nameInput);
    newSub.appendChild(newName);
    let newLName = document.createElement("p");
    let lNameText = document.createTextNode("Last Name:");
    newLName.appendChild(lNameText);
    let lNameInput = document.createElement("input");
    let inputAtt2 = document.createAttribute("type");
    lNameInput.setAttributeNode(inputAtt2);
    newLName.appendChild(lNameInput);
    newSub.appendChild(newLName);
    let country = document.createElement("p");
    let countryText = document.createTextNode("Country:");
    country.appendChild(countryText);
    let select = document.createElement("select");
    let i = 0;
    for (i; i < 10; i++) {
        let country1 = document.createElement("option");
        if (i == 0) { let country1Text = document.createTextNode("Select a country"); country1.appendChild(country1Text); }
        else if (i == 1) { let country1Text = document.createTextNode("Thailand"); country1.appendChild(country1Text); }
        else if (i == 2) { let country1Text = document.createTextNode("Vietnam"); country1.appendChild(country1Text); }
        else if (i == 3) { let country1Text = document.createTextNode("Laos"); country1.appendChild(country1Text); }
        else if (i == 4) { let country1Text = document.createTextNode("Malaysia"); country1.appendChild(country1Text); }
        else if (i == 5) { let country1Text = document.createTextNode("Singapore"); country1.appendChild(country1Text); }
        else if (i == 6) { let country1Text = document.createTextNode("Philippines"); country1.appendChild(country1Text); }
        else if (i == 7) { let country1Text = document.createTextNode("Myanmar"); country1.appendChild(country1Text); }
        else if (i == 8) { let country1Text = document.createTextNode("Cambodia"); country1.appendChild(country1Text); }
        else if (i == 9) { let country1Text = document.createTextNode("Brunei"); country1.appendChild(country1Text); }
        select.appendChild(country1);
    }
    country.appendChild(select);
    newSub.appendChild(country);
    let button = document.createElement("button");
    let buttonType = document.createAttribute("type");
    buttonType.value = "type";
    button.setAttributeNode(buttonType);
    let buttonOnclick = document.createAttribute("onclick");
    buttonOnclick.value = "change()";
    button.setAttributeNode(buttonOnclick);
    let buttonText = document.createTextNode("Change to Thai")
    button.appendChild(buttonText);
    newSub.appendChild(button);
}