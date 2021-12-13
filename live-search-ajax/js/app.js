const keyword = document.getElementById('keyword');
const btnSearch = document.getElementById('btnSearch');
const container = document.getElementById('container');

keyword.addEventListener('keyup', function() {

  // konfig ajax 
  let ajax = new XMLHttpRequest();

  // check ready ajax
  ajax.onreadystatechange = function() {
    if(ajax.readyState === 4 && ajax.status === 200 ) {
      // replace content container 
      container.innerHTML = ajax.responseText;
    }
  }

  // Send Data with ajax while send keyword value
  ajax.open('GET', 'ajax/persons.php?keyword=' + keyword.value, true);
  ajax.send();
});