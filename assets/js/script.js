
// close icon
document.addEventListener("click", function() {
    document.getElementById("closeMsg").style.display = "none";
})


// error msg timeout
function showTime() {
    setTimeout(() => {
        document.getElementById("closeMsg").style.display = "none";
    }, 15000);
}
showTime();


// show password
function showPass() {
    var password = document.getElementById("pass");
    var icon = document.querySelector('.pass')

    if (password.type === "password") {
        password.type = "text";
        icon.style.color = '#FF7716';
        icon.classList.add("fa-eye-slash")
    } else {
        password.type = "password";
        icon.style.color = 'gray';
        icon.classList.remove("fa-eye-slash")

    }
}


//show confirm password
function showCPass() {
    var password = document.getElementById("cpass");
    var icon = document.querySelector('.cpass')

    if (password.type === "password") {
        password.type = "text";
        icon.style.color = '#FF7716';
        icon.classList.add("fa-eye-slash")
    } else {
        password.type = "password";
        icon.style.color = 'gray';
        icon.classList.remove("fa-eye-slash")
    }
}