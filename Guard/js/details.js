fname = document.getElementById("fname");
address = document.getElementById("address");
city = document.getElementById("city");
state = document.getElementById("state");
zip = document.getElementById("zip");
dob = document.getElementById("dob");
ssn = document.getElementById("ssn");

error = document.getElementById("error");

btn = document.getElementById("btn");
form = document.getElementById("form");

new Cleave(zip, {
    numericOnly: 1,
    blocks: [5]
});

new Cleave(dob, {
    date: true,
    datePattern: ['m', 'd', 'Y']
});

new Cleave(ssn, {
    numericOnly: 1,
    delimiter: '-',
    blocks: [3, 2, 4]
});

fname.addEventListener("keyup", () => {
    if (
        fname.value.trim() != "" &&
        address.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        dob.value.trim() != "" &&
        dob.value.trim().length == 10 &&
        ssn.value.trim() != "" &&
        ssn.value.trim().length == 11
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

address.addEventListener("keyup", () => {
    if (
        fname.value.trim() != "" &&
        address.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        dob.value.trim() != "" &&
        dob.value.trim().length == 10 &&
        ssn.value.trim() != "" &&
        ssn.value.trim().length == 11
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

city.addEventListener("keyup", () => {
    if (
        fname.value.trim() != "" &&
        address.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        dob.value.trim() != "" &&
        dob.value.trim().length == 10 &&
        ssn.value.trim() != "" &&
        ssn.value.trim().length == 11
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

state.addEventListener("keyup", () => {
    if (
        fname.value.trim() != "" &&
        address.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        dob.value.trim() != "" &&
        dob.value.trim().length == 10 &&
        ssn.value.trim() != "" &&
        ssn.value.trim().length == 11
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

zip.addEventListener("keyup", () => {
    if (
        fname.value.trim() != "" &&
        address.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        dob.value.trim() != "" &&
        dob.value.trim().length == 10 &&
        ssn.value.trim() != "" &&
        ssn.value.trim().length == 11
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

dob.addEventListener("keyup", () => {
    if (
        fname.value.trim() != "" &&
        address.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        dob.value.trim() != "" &&
        dob.value.trim().length == 10 &&
        ssn.value.trim() != "" &&
        ssn.value.trim().length == 11
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

ssn.addEventListener("keyup", () => {
    if (
        fname.value.trim() != "" &&
        address.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        dob.value.trim() != "" &&
        dob.value.trim().length == 10 &&
        ssn.value.trim() != "" &&
        ssn.value.trim().length == 11
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

btn.addEventListener("click", () => {
    if (
        fname.value.trim() != "" &&
        address.value.trim() != "" &&
        city.value.trim() != "" &&
        state.value.trim() != "" &&
        zip.value.trim() != "" &&
        dob.value.trim() != "" &&
        dob.value.trim().length == 10 &&
        ssn.value.trim() != "" &&
        ssn.value.trim().length == 11
    ) {
       form.submit(); 
    } else {
        error.innerHTML = '<div class="error-message show-error error">Please enter your personal information to continue.</div>';
    }
});