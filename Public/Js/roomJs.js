function total(){
    let timeCheckIn = document.getElementById("timeCheckIn").value;
    let timeCheckOut = document.getElementById("timeCheckOut").value;
    let unitPrice = document.getElementById("unitPrice").value;

    let timeIn = new Date(timeCheckIn);
    let timeOut = new Date(timeCheckOut);
    let time = Math.ceil((timeOut.getTime() - timeIn.getTime()) / 3600000);
    let price = time * unitPrice;
    document.getElementById("price").value = price ;
}

