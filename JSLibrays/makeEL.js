function makeEls(array, url, pizza) {

    const newDiv = document.createElement("div");
    let count = array.length;

    test = [];
    test.push("Pizza");
    test.push(pizza);
    for (i = 0; i < count; i++) {

        let outP = document.createElement("p");
        outP.innerHTML = array[i];

        let inputEL = document.createElement("input");
        inputEL.type = "number";
        inputEL.defaultValue = 1;
        inputEL.id = array[i];
        test.push(array[i]);
        test.push(inputEL.defaultValue);

        let NEGbutton = document.createElement("button");
        NEGbutton.innerHTML = "-";
        NEGbutton.id = array[i] + "NEG";
        NEGbutton.addEventListener("click", function () {
            update(inputEL.id, -1);
        });

        let POSbutton = document.createElement("button");
        POSbutton.innerHTML = "+";
        POSbutton.id = array[i] + "POS";
        POSbutton.addEventListener("click", function () {
            update(inputEL.id, 1);
        });

        newDiv.appendChild(outP);
        newDiv.appendChild(inputEL);
        newDiv.appendChild(NEGbutton);
        newDiv.appendChild(POSbutton);


        const currentDiv = document.getElementById("div1");
        document.body.insertBefore(newDiv, currentDiv);

    }
    let form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", url);
    let button = document.createElement("button");
    button.innerHTML = "Add to cart";
    form.appendChild(button);
    let arrayP = document.createElement("p");
    arrayP.id = "updateArray";
    arrayP.setAttribute("name", "updateArray");
    let inputText = document.createElement("input");
    inputText.setAttribute("type", "text");
    inputText.id = "inputText"
    inputText.setAttribute("name", "inputText");

    inputText.style.display = "none";
    form.appendChild(arrayP);
    form.appendChild(inputText);
    newDiv.appendChild(form);

    var a = test;
    var obj_a = {};
    a.forEach(function (val, i) {
        if (i % 2 === 1) return;
        obj_a[val] = a[i + 1];
    });

    arrayP.innerText = JSON.stringify(obj_a);
    inputText.defaultValue = JSON.stringify(obj_a);
}