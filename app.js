
const form = document.getElementById("calc-form");
const numberA = document.getElementById("numberA");
const numberB = document.getElementById("numberB");
const operation = document.getElementById("operation");

const errorMsg = document.getElementById("error-msg");
const resultArea = document.getElementById("result");
const historyList = document.getElementById("history-list");


let history = [];

form.addEventListener("submit", function(event) {
    event.preventDefault(); 

    
    const a = numberA.value;
    const b = numberB.value;
    const op = operation.value;

    
    errorMsg.textContent = "";
    resultArea.textContent = "";

   
    if (a === "" || b === "" || op === "") {
        errorMsg.textContent = "Veuillez remplir tous les champs.";
        return;
    }

   
    const numA = parseFloat(a);
    const numB = parseFloat(b);

    
    if (op === "/" && numB === 0) {
        errorMsg.textContent = "La division par zéro est impossible.";
        return;
    }

    
    let result;
    switch (op) {
        case "+": result = numA + numB; break;
        case "-": result = numA - numB; break;
        case "*": result = numA * numB; break;
        case "/": result = numA / numB; break;
    }

    
    resultArea.textContent = "Résultat : " + result;

    
    const operationText = `${numA} ${op} ${numB} = ${result}`;
    history.push(operationText);

    
    updateHistory();
});


function updateHistory() {
    historyList.innerHTML = ""; 

    history.forEach(item => {
        const li = document.createElement("li");
        li.textContent = item;
        historyList.appendChild(li);
    });
}
