<x-layout>

   <div class="content">
      <img src={{asset("/img/animal.png")}} alt="Imagem" class="image">
      <div class="buttons">
         <button class='btn1'><a href="/animal/show">Lista de animais</a></button>
         <button id="scrollButton" class='btn2'>Cadastrar animal </button>
      </div>
   </div>

   <div id='cadastro' class="cadastro">
      <div class="text">
         Cadastre o Animal Resgatado
      </div>
      <form action="{{route('animal.store')}}" method="post" enctype="multipart/form-data">
         @csrf
         <div class="form-row">
            <div class="input-data">
               <select class="form-select custom-select rounded-3" name="especie" id="especie">
                  <option value="">-- Espécie --</option>
               </select>
            </div>
            <div class="input-data">
               <select class="form-select custom-select rounded-3" name="raca" id="raca">
                  <option value="">-- Raça --</option>
               </select>
            </div>
            <div class="input-data">
               <select class="form-select custom-select rounded-3" name="gender" id="gender">
                  <option value="">-- Gênero --</option>
               </select>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <select class="form-select custom-select rounded-3" name="porte" id="porte">
                  <option value="">-- Porte --</option>
                  <option value="pequeno">Pequeno</option>
                  <option value="medio">Médio</option>
                  <option value="grande">Grande</option>
               </select>
            </div>
            <div class="input-data">
               <select class="form-select custom-select rounded-3" name="cor" id="cor">
                  <option value="">-- Cor --</option>
                  <option value="Preta"> Preta </option>
                  <option value="Branca"> Branca </option>
                  <option value="Cinza"> Cinza </option>
                  <option value="Caramelo"> Dourada/Caramelo </option>
                  <option value="Marrom"> Marrom </option>
                  <option value="Vermelha"> Vermelha </option>
                  <option value="Outra"> Outra </option>
               </select>
            </div>
            <div class="input-data">
               <select class="form-select custom-select rounded-3" name="Status" id="Status">
                  <option value="">-- Status --</option>
               </select>
            </div>
         </div>

         <div class="text2">
            Localização
         </div>
         <div class="form-row">
            <div class="input-data">
               <input placeholder='CEP' id="zip_code" name="zip_code" type="text" required>
               <div class="underline"></div>
            </div>
            <div class="input-data">
               <input placeholder='Rua' id="street" name="street" type="text" required>
            </div>
            <div class="input-data">
               <input placeholder='Bairro' id="district" name="district" type="text" required>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input placeholder='Cidade' id="city" name="city" type="text" required>
            </div>
            <div class="input-data">
               <input placeholder='Estado' id="state" name="state" type="text" required>
            </div>
            <div class="input-data">
               <input placeholder='Número' id="number" name="number" type="text" required>
            </div>
         </div>

         <div class="text2">
            Resgatador
         </div>
         <div class="form-row">
            <div class="input-data">
               <input placeholder='Nome' id="name" name="name" type="text">
            </div>
            <div class="input-data">
               <input placeholder='E-mail' id="email" name="email" type="text">
            </div>
            <div class="input-data">
               <input placeholder='WhatsApp' id="phone_number" name="phone_number" type="text">
            </div>
         </div>
         <div class="text2">
            Envie uma foto do PET
         </div>
         <div class="form-row">
            <input type="file" name="fileUpload">
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

   </div>


</x-layout>