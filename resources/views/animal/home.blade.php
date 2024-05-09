<x-layout>

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
      <form action="#">
         <div class="form-row">
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Espécie</label>
            </div>
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Raça</label>
            </div>
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Gênero</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Porte</label>
            </div>
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Cor</label>
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
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Cep</label>
            </div>
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Rua</label>
            </div>
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Bairro</label>
            </div>          
        </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Cidade</label>
            </div>
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Estado</label>
            </div>
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Número</label>
            </div>          
         </div>
        
        <div class="text2">
            Resgatador
        </div>
        <div class="form-row">
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Nome</label>
            </div>
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">Email</label>
            </div>
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">WhatsApp</label>
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