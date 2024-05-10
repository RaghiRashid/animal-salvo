
function buscarEndereco(cep) {
  fetch(`/via-cep/${cep}`)
    .then(response => response.json())
    .then(data => {
      document.getElementById('street').value = data.logradouro;
      document.getElementById('district').value = data.bairro;
      document.getElementById('city').value = data.localidade;
      document.getElementById('state').value = data.uf;
    })
    .catch(error => console.error('Erro:', error));
}

document.getElementById('scrollButton').addEventListener('click', function () {
  scrollToSection();
});

function scrollToSection() {
  const section = document.getElementById('cadastro');
  section.scrollIntoView({ behavior: 'smooth' });
}


document.getElementById('zip_code').addEventListener('blur', function () {
  let cep = this.value.replace(/\D/g, '');
  if (cep.length === 8) {
    console.log('teste')
    buscarEndereco(cep);
  }
});

document.getElementById('especie_id').addEventListener('change', function () {
  let specie = this.value;

  if (specie) {
    fetch(`breeds-by-specie/${specie}`)
      .then(response => response.json())
      .then(data => {
        let breedsSelect = document.getElementById('breed_id');
        breedsSelect.innerHTML = '';
        data.forEach(breed => {
          var option = document.createElement('option');
          option.value = breed.id;
          option.text = breed.breed_name;
          breedsSelect.appendChild(option);
        });
      })
  }
})