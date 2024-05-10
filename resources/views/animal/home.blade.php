<x-layout>

   <div class="content">
      <img src={{asset("/img/animal.png")}} alt="Imagem" class="image">
      <div class="buttons">
         <button class='btn1'><a href="/animal/show">Lista de animais</a></button>
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
               </select>
            </div>
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Foto</label>
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

   </div>


</x-layout>