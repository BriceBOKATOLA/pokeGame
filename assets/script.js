//   Récupération du fichier
fetch('assets/data/poke.json')
.then(response => response.json())
.then((jsonPokes) => {
  jsonPokes.results.map((poke) => {

    let titre = poke.name;
    let imagef = poke.front_image;
    let imageb = poke.back_image;
    let ani = poke.type;
    let zero = poke.faiblesse;
    let power = poke.force;

    
    let pokeElToInject = `
    <div class='col-12 col-sm-6 col-xl-4 mb-3'>
      <div class='row no-gutters'>
        <div class='col-md-5'>
          <img class='img-fluid' src='${imageb}' />
          <img class='img-fluid' src='${imagef}' />
        </div>
        <div class='col-md-7 pl-2'>
          <h5 class="pt-3 pt-md-0">${titre}</h5>
          <p class='text'>${zero}</p>
          <p class='text'>${ani}</p>
          <p>${power}</p>
        </div>
      </div>
    </div>`;
    document.getElementById('pokeTable').innerHTML += pokeElToInject;
      
  })
})