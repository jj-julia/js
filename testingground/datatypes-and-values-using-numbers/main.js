/** 
 * Place your JS-code here. 
 */ 
$(document).ready(function(){ 
'use strict';
  var e1, i, 
  	tableHead = '',
    tableRows = '',
    text = document.getElementById('text'),
    numbers = [42, 4.2, 1.21e4, 1.12e-2, 0xff00ff];
  console.log('Starting');
  text.className = 'black';
  text.innerHTML = '<b class="blue">Numbers: Data Types and Values</b>';
  e1 = document.createElement('table');
  tableHead = '<tr><th></th><th>Exponent</th><th>FixedForm (three decimals)</th><th>Rounded</th><th>SquareRoot</th><th>Value for Sin</th></tr>';

  for (i = 0; i < numbers.length; i++) {
    tableRows += '<tr><th>' + numbers[i] + '</th><td>' + numbers[i].toExponential() + 
    '</td><td>' +  numbers[i].toFixed(3) + '</td><td>' + Math.round(numbers[i]) + '</td><td>' +
    Math.sqrt(numbers[i]).toPrecision(5)  + '</td><td>' + Math.sin(numbers[i]).toPrecision(5) + '</td></tr>';
  }
  
  e1.innerHTML = tableHead + tableRows;
  text.parentElement.appendChild(e1);
  
  
  text.parentElement.appendChild(e1);
  
  text.innerHTML += '<br/><br/><strong>Eulers Constant E</strong> = ' + Math.E;
  text.innerHTML += '<br/><strong>PI</strong> = ' + Math.PI;
  text.innerHTML += '<br/><strong>Largest Possible Value</strong> = ' + Number.MAX_VALUE;
  text.innerHTML += '<br/><strong>Positive Infinity</strong> = ' + Number.POSITIVE_INFINITY;
  
  
  console.log('Ready');
});