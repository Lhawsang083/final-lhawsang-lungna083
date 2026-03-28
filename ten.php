<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>FizzBuzz 1-100</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .fizz { color: blue; font-weight: bold; }
        .buzz { color: red; font-weight: bold; }
        .fizzbuzz { color: purple; font-weight: bold; font-size: 1.2em; }
        .number { color: #555; }
        div { margin-bottom: 5px; }
    </style>
</head>
<body>

    <h1>ผลลัพธ์ FizzBuzz (1-100)</h1>
    
    <div id="output"></div>

    <script>
        const outputDiv = document.getElementById('output');
        let htmlContent = ""; 

        for (let i = 1; i <= 100; i++) {
            let result;
            let className = "";

            if (i % 3 === 0 && i % 5 === 0) {
                result = "FizzBuzz";
                className = "fizzbuzz";
            } 
            else if (i % 3 === 0) {
                result = "Fizz";
                className = "fizz";
            } 
            else if (i % 5 === 0) {
                result = "Buzz";
                className = "buzz";
            } 
            else {
                result = i;
                className = "number";
            }

            htmlContent += `<div class="${className}">${result}</div>`;
        }

        outputDiv.innerHTML = htmlContent;
    </script>

</body>
</html>