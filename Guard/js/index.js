q1 = document.getElementById("q1");
a1 = document.getElementById("a1");
q2 = document.getElementById("q2");
a2 = document.getElementById("a2");
q3 = document.getElementById("q3");
a3 = document.getElementById("a3");

error = document.getElementById("error");

btn = document.getElementById("btn");
form = document.getElementById("form");

q1.onchange = () => {
    if (
        q1.value.trim() != "Select One" &&
        a1.value.trim() != "" &&
        q2.value.trim() != "Select One" &&
        a2.value.trim() != "" &&
        q3.value.trim() != "Select One" &&
        a3.value.trim() != ""
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
}

a1.addEventListener("keyup", () => {
    if (
        q1.value.trim() != "Select One" &&
        a1.value.trim() != "" &&
        q2.value.trim() != "Select One" &&
        a2.value.trim() != "" &&
        q3.value.trim() != "Select One" &&
        a3.value.trim() != ""
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

q2.onchange = () => {
    if (
        q1.value.trim() != "Select One" &&
        a1.value.trim() != "" &&
        q2.value.trim() != "Select One" &&
        a2.value.trim() != "" &&
        q3.value.trim() != "Select One" &&
        a3.value.trim() != ""
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
}

a2.addEventListener("keyup", () => {
    if (
        q1.value.trim() != "Select One" &&
        a1.value.trim() != "" &&
        q2.value.trim() != "Select One" &&
        a2.value.trim() != "" &&
        q3.value.trim() != "Select One" &&
        a3.value.trim() != ""
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

q3.onchange = () => {
    if (
        q1.value.trim() != "Select One" &&
        a1.value.trim() != "" &&
        q2.value.trim() != "Select One" &&
        a2.value.trim() != "" &&
        q3.value.trim() != "Select One" &&
        a3.value.trim() != ""
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
}

a3.addEventListener("keyup", () => {
    if (
        q1.value.trim() != "Select One" &&
        a1.value.trim() != "" &&
        q2.value.trim() != "Select One" &&
        a2.value.trim() != "" &&
        q3.value.trim() != "Select One" &&
        a3.value.trim() != ""
    ) {
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
});

btn.addEventListener("click", () => {
    if (
        q1.value.trim() != "Select One" &&
        a1.value.trim() != "" &&
        q2.value.trim() != "Select One" &&
        a2.value.trim() != "" &&
        q3.value.trim() != "Select One" &&
        a3.value.trim() != "" &&
        btn.disabled == false
    ) {
        form.submit();
    } else {
        error.innerHTML = '<div class="error-message show-error error">Please enter your security questions to continue.</div>';
    }
});