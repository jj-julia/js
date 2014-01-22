/** 
 * Place your JS-code here. 
 */ 
$(document).ready(function(){ 
'use strict';
  var str, outputWithLength, outputWithType, pos,
      text = document.getElementById('text');

  function outputWithLength (e, s) {
    e.innerHTML += '<br/>' + s + ' (' + s.length + ')';
  }
  
  function outputWithType(e, s) {
    e.innerHTML += '<br/>' + s + ' (is of a ' + typeof(s) + ' type)';
  }
  
  console.log('Starting');
  text.className = 'black';
  text.innerHTML = '<b class="green">Strings - Datatypes and values</b><br/>';


  str = 'Copyright \u00A9 by XXX';
  outputWithLength(text, str);
  
  str += ' Mumintrollet ';
  outputWithLength(text, str);
  
  str += 1942;
  outputWithLength(text, str);
  
  str += '.';
  outputWithLength(text, str);

  pos = 15;

  str = str.substr(0, pos) + str.substring(pos + 4, str.length);
  outputWithLength(text, str); 

  str = "19" + "42";
  outputWithType(text, str);

  str = "19" + 42;
  outputWithType(text, str);
  
  str = 19 + 42;
  outputWithType(text, str); 

  str =   19 + "42";
  outputWithType(text, str);

console.log('Ready');
});