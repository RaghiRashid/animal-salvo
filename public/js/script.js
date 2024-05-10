
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

document.getElementById('scrollButton').addEventListener('click', function() {
  scrollToSection();
});

function scrollToSection() {
  const section = document.getElementById('cadastro');
  section.scrollIntoView({ behavior: 'smooth' });
}


document.getElementById('zip_code').addEventListener('blur', function() {
  let cep = this.value.replace(/\D/g, '');
  if (cep.length === 8) {
      console.log('teste')
      buscarEndereco(cep); 
  }
});