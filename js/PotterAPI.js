// API key
const key = '$2a$10$OPN2odqvrzej8248sp0Gz.ybGddlJesY5FF3HGKoNGeX86fQ7QbCS';

// create the list where we will place our characters in
const ul = document.getElementById('house');

var houses=['Gryffindor','Ravenclaw','Slytherin','Hufflepuff'];

// create URL to get all Harry Potter characters
const url = new URL('https://www.potterapi.com/v1/characters/'), params = {key: key, house: houses[Math.floor((Math.random() * 4) + 1)]}
console.log(url);


Object.keys(params).forEach(key => url.searchParams.append(key, params[key]))
