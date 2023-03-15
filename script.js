let a;
knopka.onclick = function () {
    a = new Date ( birthDay.value );
    let formatter = new Intl.DateTimeFormat("ru", {
        weekday: "long",
    });
    answer.innerHTML = formatter.format(a);
}

//------------------------------------//


