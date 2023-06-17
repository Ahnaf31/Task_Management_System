function onlyalphabets(e) {
    var name = e.which || e.keycode;
    if ((name >= 65 && name <= 90) || (name == 95) || (name >= 97 && name <= 122) || name == 8) {
        return true;
    } else {
        return false;
    }
}

function Lcheck() {
    var email = document.getElementById('email').value;
    var pass = document.getElementById('password').value;

    if (email == "") {
        alert('PLEASE FILL THE EMAIL to proceed');
        return false;
    }
    if (!validateEmail(email)) {
        alert('Invalid email format');
        return false;
    }

    if (pass == "") {
        alert('PLEASE FILL THE PASSWORD area to proceed');
        return false;
    }
    if (pass.length < 6) {
        alert('PASSWORD must contain at least 6 characters to be valid in this field');
        return false;
    }
    if (pass.length > 10) {
        alert('10 characters are STRONG enough to make PASSWORD valid in this field');
        return false;
    } else {
        location.href = "../views/adminDashboard.php";
    }
}

function validateEmail(email) {
    var format = /\S+@\S+\.\S+/;
    return format.test(email);
}
