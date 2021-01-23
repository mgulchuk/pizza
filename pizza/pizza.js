document.getElementById("pizzaform").onsubmit = validate;

function validate(){
    let valid = true;

    let errors = document.getElementsByClassName("err");
    for(let i =0; i<errors.length; i++){
        errors[i].style.visibility = "hidden";
    }

    let first = document.getElementById("firstName").value;
    let last = document.getElementById("firstLast").value;
    let address = document.getElementById("address").value;
    let delivery = document.getElementById("delivery").checked;
    let size = document.getElementById("size").value;
    let toppings = document.getElementsByName("toppings[]");

    //check first name
    if(first == ""){
        let errFirst = document.getElementById("errFname");
        errFirst.style.visibility = "visible";
        valid = false;
    }
    //check last name
    if(last == ""){
        let errLast = document.getElementById("errLname");
        errLast.style.visibility = "visible";
        valid = false;
    }
    // check for address
    if(delivery) {
        if (address == "") {
            let errAddress = document.getElementById("errAddress");
            errAddress.style.visibility = "visible";
            valid = false;
        }
    }
    //check for size
    if(size == "none"){
        let errSize = document.getElementById("errSize");
        errSize.style.visibility = "visible";
        valid = false;
    }
    //check for toppings
    let toppingCount = 0;
    for(let i =0; i<toppings.length; i++){
        if(toppings[i].checked)
            toppingCount++;
    }
    if(toppings.length == 0){
        let errToppings = document.getElementById("errToppings");
        errToppings.style.visibility = "visible";
        valid = false;
    }

    return valid;
}