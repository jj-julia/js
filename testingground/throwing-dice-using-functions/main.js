/** 
 * Place your JS-code here. 
 */ 
$(document).ready(function(){ 
'use strict'; 
var str, output,
text = document.getElementById('text');

  console.log('Starting');
  text.className = 'black';
  text.innerHTML = '<p><b>Dice - Functions in JavaScript</b></p>';

  function random(min, max){
  	return Math.floor(Math.random() * (max - min + 1)) + min;
  }

  function rollDice(times) {
    var i, roll, rolls = '', total = 0;
    times = times || 1;
    
    for(i = 0; i < times; i++) {
      roll = random(1, 6);
      rolls += roll + ', ';
      total += roll;
    }
    return 'Results of Rolls: ' + rolls + '<br>Average of Rolls (using math.round): ' + Math.round(total/times); 
  }

  function output (e, s) {
    e.innerHTML += '<p>' + s;
  };
  
  str = '<strong>Results when Rolling 2 dice</strong><br/>' + rollDice(2);
  output(text, str);

  str = '<strong>Results when Rolling 10 dice</strong><br/>' + rollDice(10);
  output(text, str);

  str = '<strong>Results when Rolling 20 dice</strong><br/>' + rollDice(20);
  output(text, str);

  console.log('Ready');
});