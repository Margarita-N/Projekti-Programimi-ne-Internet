// API key
const key = '$2a$10$OPN2odqvrzej8248sp0Gz.ybGddlJesY5FF3HGKoNGeX86fQ7QbCS';

// create the list where we will place our characters in
const div1 = document.getElementById('name');
const div2 = document.getElementById('role');
const div3 = document.getElementById('house');
const div4 = document.getElementById('school');
const div5 = document.getElementById('bloodstatus');
const div6 = document.getElementById('species');

var houses=['Gryffindor','Ravenclaw','Slytherin','Hufflepuff'];

// create URL to get all Harry Potter characters
const url = new URL('https://www.potterapi.com/v1/characters/'), params = {key: key, house: houses[Math.floor(Math.random()*4)]}
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
  
  var p1 = createNode('h2');
  p1.innerHTML = characters[random].name;
  append(div1, p1);
  var p2 = createNode('h2');
  p2.innerHTML = characters[random].role;
  append(div2, p2);
  var p3 = createNode('h2');
  p3.innerHTML = characters[random].house;
  append(div3, p3);
  var p4 = createNode('h2');
  p4.innerHTML = characters[random].school;
  append(div4, p4);
  var p5 = createNode('h2');
  p5.innerHTML = characters[random].bloodStatus;
  append(div5, p5);
  var p6 = createNode('h2');
  p6.innerHTML = characters[random].species;
  append(div6, p6);

  
})
.catch(function(error) {
  // Error handling
  var p = createNode('p');
  p.innerHTML="There's an error with the API.";
  append(div1, p);
});

