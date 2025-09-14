
function checkPi() {
    const input = document.getElementById('pi_digits').value;
    const result = document.getElementById('result');
    if(input === "314") {
        result.textContent = "Correct! ✅";
    } else {
        result.textContent = "Incorrect. Try again!";
    }
}


/*setTimeout(() => {
    const p = document.createElement("p");
    p.innerText = "Trying javascript as well!";
    document.body.appendChild(p);
  }, 2000);*/

setTimeout(() => {
    const result = document.getElementById("result");
    result.innerText = "Yay pi!";
}, 2000);


  