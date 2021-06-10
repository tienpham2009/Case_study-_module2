function total() {
    let timeCheckIn = document.getElementById("timeCheckIn").value;
    let timeCheckOut = document.getElementById("timeCheckOut").value;
    let unitPrice = document.getElementById("unitPrice").value;

    let timeIn = new Date(timeCheckIn);
    let timeOut = new Date(timeCheckOut);
    let time = Math.ceil((timeOut.getTime() - timeIn.getTime()) / 3600000);
    document.getElementById("price").value = time * unitPrice;
}

document.getElementById("category").onchange = function (){
    let category = document.getElementById("category").value;

    switch (category) {
        case "1":
            document.getElementById("unitPrice").value = 200000;
            break;
        case "2":
            document.getElementById("unitPrice").value = 150000;
            break;
        case "3":
            document.getElementById("unitPrice").value = 100000;
            break;
    }
}

