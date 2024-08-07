<x-layout>
  <nav class="navbar">
    <div class="logo">Animal Salvo</div>
    <div><a class="home-link" href="/animal"><i class="fas fa-home fa-2x"></i>
</a></div>
  </nav>
<div class='container'>
<form class='form-filter'>
    <i class="fas fa-filter fa-2x" style="color: #486650;"></i>
    <select class='space' name="especie" id="especie_id">
        <option value="">-- Espécie --</option>
        @foreach ($species as $specie)
            <option {{ isset($_GET['especie']) && $_GET['especie'] == $specie->id ? 'selected' : '' }} value="{{$specie->id}}">{{$specie->specie_name}}</option>
        @endforeach
    </select>

    <select class='space'  name="raca" id="breed_id">
        <option value="">-- Selecione uma espécie --</option>
    </select>

    <select class='space' name="size" id="size">
      <option value="">-- Tamanho --</option>
      <option {{ isset($_GET['size']) && $_GET['size'] == 'P' ? 'selected' : '' }} value="P">Pequeno</option>
      <option {{ isset($_GET['size']) && $_GET['size'] == 'M' ? 'selected' : '' }} value="M">Médio</option>
      <option {{ isset($_GET['size']) && $_GET['size'] == 'G' ? 'selected' : '' }} value="G">Grande</option>
    </select>

    <select class='space' name="gender" id="gender">
      <option value="">-- Gênero --</option>
      <option {{ isset($_GET['gender']) && $_GET['gender'] == 'M' ? 'selected' : '' }} value="M">Macho</option>
      <option {{ isset($_GET['gender']) && $_GET['gender'] == 'F' ? 'selected' : '' }} value="F">fêmea</option>
      <option {{ isset($_GET['gender']) && $_GET['gender'] == 'I' ? 'selected' : '' }} value="I">Indefinido</option>
    </select>

    <select class='space' name="Cor" id="Cor">
      <option value="">-- Cor --</option>
      <option  {{ isset($_GET['Cor']) && $_GET['Cor'] == 'Preta' ? 'selected' : '' }} value="Preta"> Preta </option>
      <option  {{ isset($_GET['Cor']) && $_GET['Cor'] == 'Branca' ? 'selected' : '' }} value="Branca"> Branca </option>
      <option  {{ isset($_GET['Cor']) && $_GET['Cor'] == 'Cinza' ? 'selected' : '' }} value="Cinza"> Cinza </option>
      <option  {{ isset($_GET['Cor']) && $_GET['Cor'] == 'Caramelo' ? 'selected' : '' }} value="Caramelo"> Dourada/Caramelo </option>
      <option  {{ isset($_GET['Cor']) && $_GET['Cor'] == 'Marrom' ? 'selected' : '' }} value="Marrom"> Marrom </option>
      <option  {{ isset($_GET['Cor']) && $_GET['Cor'] == 'Vermelha' ? 'selected' : '' }} value="Vermelha"> Vermelha </option>
      <option  {{ isset($_GET['Cor']) && $_GET['Cor'] == 'Outra' ? 'selected' : '' }} value="Outra"> Outra </option>
    </select>

    <select class='space' name="Status" id="Status">
      <option value="">-- Status --</option>
      <option {{ isset($_GET['Status']) && $_GET['Status'] == '1' ? 'selected' : '' }} value="1">Animal procurando o tutor</option>
      <option {{ isset($_GET['Status']) && $_GET['Status'] == '2' ? 'selected' : '' }} value="2">Tutor procurando o animal</option>
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
          <span class="tag tag-teal">
              Animal buscando tutor
            </span>
          @endif
          @if($animal->status == 2)
            <span class="tag tag-pink">
              Tutor buscando animal
            </span>
          @endif
          <h4>
            {{"$animal->specie_name - $animal->breed_name  - Porte $animal->animal_size - $animal->animal_color " }}
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

<div style='margin: 50px auto; text-align: center;'>

  <button {{ !$previusPage ? 'hidden' : '' }}  class="paginate left">
    <a class="page-link"  href="{{ $previusPage }}" tabindex="-1" aria-disabled="true">
      <i class="fas fa-caret-left"></i>
    </a>
  </button>

  <button {{ !$nextPage ? 'hidden' : '' }} class="paginate right"> 
    <a class="page-link" href="{{ $nextPage }}">
      <i class="fas fa-caret-right"></i>
    </a>
  </button>

</div> 

</x-layout>