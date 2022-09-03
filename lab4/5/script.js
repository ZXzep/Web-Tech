function addList(clicked_id) {
    let list = document.getElementById("list");
    let addOrder = document.createElement("li");
    let orderAtt = document.createAttribute("class");
    orderAtt.value = "list-group-item";
    addOrder.setAttributeNode(orderAtt);
    if (clicked_id == "food1") {
        let orderText = document.createTextNode("Chocolate Cake");
        addOrder.appendChild(orderText);
    } else if (clicked_id == "food2") {
        let orderText = document.createTextNode("Green Tea");
        addOrder.appendChild(orderText);
    } else if (clicked_id == "food3") {
        let orderText = document.createTextNode("Croissant");
        addOrder.appendChild(orderText);
    }
    let addOne = document.createElement("div");
    let oneAtt = document.createAttribute("class");
    oneAtt.value = "float-right";
    addOne.setAttributeNode(oneAtt);
    addOne.innerHTML = "x1";
    addOrder.appendChild(addOne);
    list.appendChild(addOrder);
}