/** 
 * Place your JS-code here. 
 */ 
$(document).ready(function(){ 
'use strict';
  var listStr, e1, i, 
  	tableHead = '',
    tableRows = '',
    text = document.getElementById('text'),
    literals = [42, 4.2, "G\'day", 'G\'day', true, false, null, undefined, 
      /javascript/, {x:1,y:2}, ['array-item', 'array-item'], function(){}];

  console.log('Starting');
  text.className = 'black';
  text.innerHTML = '<b class="red">Literals and identifiers</b>';
  e1 = document.createElement('table');
  tableHead = '<tr><th>Literal</th><th>Type</th></tr>';

  for (i = 0; i < literals.length; i++) {
    listStr = typeof literals[i] === 'string' ? '"' + literals[i] + '"' : literals[i];
    tableRows += '<tr><td>' + listStr + '</td><td>' + typeof(literals[i]) + '</td></tr>';
  }
  
  e1.innerHTML = tableHead + tableRows;
  text.parentElement.appendChild(e1);
  
  console.log('Ready');
});