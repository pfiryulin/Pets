let a;
knopka.onclick = function () {
    a = new Date ( birthDay.value );
    let formatter = new Intl.DateTimeFormat("ru", {
        weekday: "long",
    });
    answer.innerHTML = formatter.format(a);
}

//------------------------------------//

let card = document.getElementsByClassName("card");
for (i=0; i<card.length; i++){
    let b = i % 2;
    bValue.innerHTML += b;
    if (b != 0){
        cardText.innerHTML += i;
        let cardLeft = card[i];
        cardLeft.classList.add("left");
    }


}

