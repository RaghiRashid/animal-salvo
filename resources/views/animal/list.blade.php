<x-layout>
  <nav class="navbar">
    <div class="logo">Animal Salvo</div>
    <div><a class="home-link" href="/animal">Home</a></div>
  </nav>
<div class='container'>
<form class='form-filter'>
    <select class='space' name="especie" id="especie_id">
        <option value="">-- Espécie --</option>
        @foreach ($species as $specie)
            <option value="{{$specie->id}}">{{$specie->specie_name}}</option>
        @endforeach
    </select>

    <select class='space'  name="raca" id="breed_id">
        <option value="">-- Raça --</option>

    </select>

    <select class='space' name="size" id="size">
      <option value="">-- Tamanho --</option>
      <option value="P">Pequeno</option>
      <option value="M">Médio</option>
      <option value="G">Grande</option>
    </select>

    <select class='space' name="gender" id="gender">
      <option value="">-- Gênero --</option>
      <option value="M">Macho</option>
      <option value="F">fêmea</option>
      <option value="I">Indefinido</option>
    </select>

    <select class='space' name="Cor" id="Cor">
      <option value="Branco">-- Cor --</option>
      <option value="">-- Cor --</option>
      <option value="Preta"> Preta </option>
      <option value="Branca"> Branca </option>
      <option value="Cinza"> Cinza </option>
      <option value="Caramelo"> Dourada/Caramelo </option>
      <option value="Marrom"> Marrom </option>
      <option value="Vermelha"> Vermelha </option>
      <option value="Outra"> Outra </option>
    </select>

    <select class='space' name="Status" id="Status">
      <option value="">-- Status --</option>
      <option value="A">Animal procurando o tutor</option>
      <option value="T">Tutor procurando o animal</option>
    </select>

    <button type="submit">Filtrar</button>
</form>
</div>

<div class="container">
  @if($animals)
    @foreach ( $animals as $animal )
    <div class="card">
      <div class="card-header">
        <img src="{{asset('storage/' . $animal->animal_image)}}" alt="rover" />
      </div>
      <div class="card-body">
        @if($animal->status == 1)
         <span class="tag tag-teal" style='margin-bottom:5px;'>
            Animal buscando tutor
          </span>
        @endif
        @if($animal->status == 2)
          <span class="tag tag-pink">
             Tutor buscando animal
          </span>
        @endif
        <h4>
          {{"$animal->specie_name - $animal->breed_name  - Porte $animal->animal_size " }}
        </h4>
        
        <p style='margin:30px 0'>
          {{"$animal->street, $animal->number - $animal->district - $animal->city/$animal->state    "}}
        </p>
        <div >
          <div class="user-info">
            <h5>{{"$animal->name "}} </h5>
            <h5><i class='fab fa-whatsapp'></i> {{"$animal->phone_number"}} </h5>
            <small>{{$animal->email}}</small>
          </div>
        </div> 
      </div>
    </div>
  @endforeach

  @endif
</div>
</x-layout>