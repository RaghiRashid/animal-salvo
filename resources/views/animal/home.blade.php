<x-layout>

   <nav class="navbar">
      <div class="logo">Animal Salvo</div>
      <div><a class="home-link" href="/animal">Home</a></div>
   </nav>

   <div class="content">
      <img src={{asset("/img/animal.png")}} alt="Imagem" class="image">
      <div class="buttons">
         <button class='btn1'>Lista de animais</button>
         <button class='btn2'>Cadastrar animal </button>
      </div>
   </div>

   <div class="cadastro">
      <div class="text">
         Cadastre o Animal Resgatado
      </div>
      <form action="{{route('animal.store')}}" method="POST">
         @csrf
         <div class="form-row">
            <div class="input-data">
               <input name="animal_specie" id="animal_specie" type="text" required>
               <div class="underline"></div>
               <label for="animal_specie">Espécie</label>
            </div>
            <div class="input-data">
               <input id="animal_breed" name="animal_breed" type="text" required>
               <div class="underline"></div>
               <label for="animal_breed">Raça</label>
            </div>
            <div class="input-data">
               <input id="gender" name="gender" type="text" required>
               <div class="underline"></div>
               <label for="gender">Gênero</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input id="animal_size" name="animal_size" type="text" required>
               <div class="underline"></div>
               <label for="animal_size">Porte</label>
            </div>
            <div class="input-data">
               <input id="animal_color" name="animal_color" type="text" required>
               <div class="underline"></div>
               <label for="animal_color">Cor</label>
            </div>

         </div>
         <div class="text2">
            Localização
         </div>
         <div class="form-row">
            <div class="input-data">
               <input id="zip_code" name="zip_code" type="text" required>
               <div class="underline"></div>
               <label for="zip_code">Cep</label>
            </div>
            <div class="input-data">
               <input id="street" name="street" type="text" required>
               <div class="underline"></div>
               <label for="street">Rua</label>
            </div>
            <div class="input-data">
               <input id="district" name="district" type="text" required>
               <div class="underline"></div>
               <label for="district">Bairro</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input id="city" name="city" type="text" required>
               <div class="underline"></div>
               <label for="city">Cidade</label>
            </div>
            <div class="input-data">
               <input id="state" name="state" type="text" required>
               <div class="underline"></div>
               <label for="state">Estado</label>
            </div>
            <div class="input-data">
               <input id="number" name="number" type="text" required>
               <div class="underline"></div>
               <label for="number">Número</label>
            </div>
         </div>

         <div class="text2">
            Resgatador
         </div>
         <div class="form-row">
            <div class="input-data">
               <input id="name" name="name" type="text">
               <div class="underline"></div>
               <label for="name">Nome</label>
            </div>
            <div class="input-data">
               <input id="email" name="email" type="text">
               <div class="underline"></div>
               <label for="email">Email</label>
            </div>
            <div class="input-data">
               <input id="phone_number" name="phone_number" type="text">
               <div class="underline"></div>
               <label for="phone_number">WhatsApp</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <div class="form-row submit-btn">
                  <div class="input-data">
                     <div class="inner">
                     </div>
                     <input type="submit" value="Cadastrar">
                  </div>
               </div>
            </div>
         </div>
      </form>



</x-layout>