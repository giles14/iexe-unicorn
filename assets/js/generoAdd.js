//add the new atribute to all forms in page
window.onload = function() {
  const input = document.createElement('input');
  input.type = 'hidden';
  input.name = 'genero';

   // we get all the Forms in the page
  const forms = document.querySelectorAll('form');

// we append the new element (input)  as a child of the elemment
  forms.forEach(form => {
    form.appendChild(input);
  });
}