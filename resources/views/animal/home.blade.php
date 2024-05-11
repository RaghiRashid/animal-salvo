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
               <select required class="form-select custom-select rounded-3" name="animal_specie" id="especie_id">
                  <option value="">-- Espécie --</option>
                  @foreach ($species as $specie)
                     <option value="{{$specie->id}}">{{$specie->specie_name}}</option>
                  @endforeach
               </select>
            </div>
            <div class="input-data">
               <select class="form-select custom-select rounded-3" name="animal_breed" id="breed_id" required>
                  <option value="">Selecione uma Raça</option>
               </select>
            </div>
            <div class="input-data">
               <select class="form-select custom-select rounded-3" name="gender" id="gender" required>
                  <option value="">-- Gênero --</option>
                  <option value="M">Macho</option>
                  <option value="F">Femea</option>
                  <option value="N">Não identificado</option>
               </select>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <select class="form-select custom-select rounded-3" name="animal_size" id="animal_size" required>
                  <option value="">-- Porte --</option>
                  <option value="pequeno">Pequeno</option>
                  <option value="medio">Médio</option>
                  <option value="grande">Grande</option>
               </select>
            </div>
            <div class="input-data">
               <select class="form-select custom-select rounded-3" name="animal_color" id="animal_color" required>
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
               <select class="form-select custom-select rounded-3" name="status" id="status" required>
                  <option value="">-- Status --</option>
                  <option value="1">Animal buscando tutor</option>
                  <option value="2">Tutor buscando animal</option>
               </select>
            </div>
         </div>
      
         <div class="text2">
            Localização
         </div>
         <div class="form-row">
            <div class="input-data">
               <input placeholder='CEP' id="zip_code" name="zip_code" type="text" maxlength="8" required>
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
               <input placeholder='Nome' id="name" name="name" type="text" required>
            </div>
            <div class="input-data">
               <input placeholder='E-mail' id="email" name="email" type="text" required>
            </div>
            <div class="input-data">
               <input placeholder='WhatsApp' id="phone_number" name="phone_number" maxlength='11' type="text" required>
            </div>
         </div>
         <div class="text2">
            Envie uma foto do PET
         </div>
         <div class="form-row">
            <input required name="animal_image" type="file" name="animal_image accept='image/gif, image/jpeg, image/png'">
         </div>

         <div class=" form-row">
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