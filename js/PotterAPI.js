// API key
const key = '$2a$10$OPN2odqvrzej8248sp0Gz.ybGddlJesY5FF3HGKoNGeX86fQ7QbCS';

// create the list where we will place our characters in
const ul = document.getElementById('house');

var houses=['Gryffindor','Ravenclaw','Slytherin','Hufflepuff'];

// create URL to get all Harry Potter characters
const url = new URL('https://www.potterapi.com/v1/characters/'), params = {key: key, house: houses[Math.floor((Math.random() * 4) + 1)]}
console.log(url);


Object.keys(params).forEach(key => url.searchParams.append(key, params[key]))

// create the type of element on page as passed in the parameters
function createNode(element) {
  return document.createElement(element);
}

// Append the second parameter(element) to the first one
function append(parent, el) {
  return parent.appendChild(el);
}

fetch(url, {key: key})
  .then((resp) => resp.json()) // Transform the data into json
  .then(function(data) {
  // Get the results
  var characters = data;
  console.log(characters);
  var random=Math.floor((Math.random() * 10) + 1);
