// Anonymous function for retrieving and displaying a random beer
const grabRandomBeer = () => {
    fetch("https://api.punkapi.com/v2/beers/random")
         .then(response => response.json())
         .then(beers => {

             const beer = beers[0];

            const nameElement = document.createElement("h2");
            nameElement.textContent = beer.name;
             const descriptionElement = document.createElement("p");
            descriptionElement.textContent = beer.description;
             const beerElement = document.getElementById("beer");
             beerElement.innerHTML = "";

             beerElement.appendChild(nameElement);
             beerElement.appendChild(descriptionElement);
         })
         .catch(err => {
            console.error(err.message);
         });
 };

// Grab a new beer when clicking the button
document.getElementById("grabButton").addEventListener("click", grabRandomBeer);