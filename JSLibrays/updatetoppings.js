let update = function (item, change) {

    let inputEL = document.getElementById(item);
    let value = inputEL.value;
    let updateArray = JSON.parse(document.getElementById("updateArray").innerText);

    let smallText = document.getElementById("update");
    if (value == 0 && change == -1) {
        smallText.innerHTML = "There is a max of 3 per topping and a min of 0";
        return;
    }
    if (item == "Cheader Cheese" && value == 2 && change == 1) {
        smallText.innerHTML = "YOU DON'T NEED THAT MUCH CHEESE GET HELP";
        return;

    }
    if (item == "Mozzarella Cheese" && value == 2 && change == 1) {
        smallText.innerHTML = "YOU DON'T NEED THAT MUCH CHEESE GET HELP";
        return;

    }
    if (value == 3 && change == 1) {
        smallText.innerHTML = "There is a max of 3 per topping and a min of 0";
        return;
    }
    smallText.innerHTML = ":)";
    value = Number(value);
    value = value + change;

    inputEL.setAttribute('value', value);

    updateArray[item] = value;
    
    document.getElementById("updateArray").innerText = JSON.stringify(updateArray);
    document.getElementById("inputText").value = JSON.stringify(updateArray)
    
}
