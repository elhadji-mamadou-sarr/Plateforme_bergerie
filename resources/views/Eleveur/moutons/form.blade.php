@extends('Eleveur.base')

@section('title', $mouton->exists ? "Modifier un mouton" : "Ajouter un mouton")

@section('content')

    <div class="containerr form position-absolute top-50 start-50 translate-middle" style="margin-top: 3%;">
        <div class="title">@yield('title')</div>
        <div class="contentt">
            <form action="{{ route($mouton->exists ? 'eleveur.mouton.update' : 'eleveur.mouton.store', $mouton) }}"
                method="post" class="vstack gap-3 row g-3"  enctype="multipart/form-data">
                @csrf
                @method($mouton->exists ? 'put' : 'post')

                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nom du mouton</span>
                        <input type="text" placeholder="Entrer le du mouton" name="nom_mouton" value="{{$mouton->nom_mouton}}">
                    </div>
                    <div class="input-box">
                        <span class="details">Race</span>
                        <input type="text" placeholder="Entrer la race du mouton" name="race" value="{{$mouton->race}}">
                    </div>
                    <div class="input-box">
                        <span class="details">Généalogie</span>
                        <input type="text" placeholder="Entrer la généalogie du mouton" name="généalogie" value="{{$mouton->généalogie	}}">
                    </div>
                    <div class="input-box">
                        <span class="details">Prix</span>
                        <input type="text" placeholder="Entrer le prix du mouton" name="prix" value="{{$mouton->prix}}">
                    </div>
                    <div class="input-box">
                        <span class="details">Photo</span>
                        <input class="form-control form-control-lg" name="image" id="formFileLg" type="file">
                      </div>
                    <div class="input-box">
                        <span class="details">Eleveur</span>
                        <select id="personne_id" name="personne_id" class="form-select">
                            @if ($mouton->exists)
                                <option value="{{ $mouton->personne_id }}"></option>
                            @else
                            @foreach ($eleveurs as $item)
                                <option value="{{$item->id_personne}}"> {{$item->nom}}</option>
                            @endforeach

                            @endif
                        </select>
                    </div>

                </div>

                <div class="button">
                    @if ($mouton->exists)
                    <input type="submit" value="Modifier">
                    @else
                    <input type="submit" value="Ajouter">
                    @endif
                </div>
            </form>

        </div>
    </div>


@endsection

<style>


    .button{
        font-weight: bold;
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
    }

    .containerr{
    max-width: 700px;
    width: 100%;
    background-color: #fff;
    padding: 25px 30px;
    border-radius: 20px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.15);
    }
    .containerr .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
    }
    .containerr .title::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    border-radius: 5px;
    /*background: linear-gradient(135deg, #71b7e6, #9b59b6);*/
    background: linear-gradient( 135deg, #49fde5     10%, #f12af1 100%);
    }
    .contentt form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
    }
    form .user-details .input-box{
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px);
    }
    form .input-box span.details{
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
    }
    .user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    padding-left: 15px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
    }
    .user-details .input-box input:focus,
    .user-details .input-box input:valid{
        border-color: #9b59b6;
    }

    form .gender-details .gender-title{
    font-size: 20px;
    font-weight: 500;
    }

    form .gender-details{
        margin-top: 2px;
    }

    form .category{
    display: flex;
    width: 80%;
    margin: 14px 0 ;
    justify-content: space-between;
    }
    form .category label{
    display: flex;
    align-items: center;
    cursor: pointer;
    }
    form .category label .dot{
    height: 18px;
    width: 18px;
    border-radius: 50%;
    margin-right: 10px;
    background: #d9d9d9;
    border: 5px solid transparent;
    transition: all 0.3s ease;
    }
    #dot-1:checked ~ .category label .one,
    #dot-2:checked ~ .category label .two,
    #dot-3:checked ~ .category label .three{
    background: #9b59b6;
    border-color: #d9d9d9;
    }
    form input[type="radio"]{
    display: none;
    }
    form .button{
    height: 45px;
    margin: 15px 0
    }
    form .button input{
    height: 100%;
    width: 100%;
    border-radius: 5px;
    border: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
    form .button input:hover{
    /* transform: scale(0.99); */
    background: linear-gradient(-135deg, #71b7e6, #9b59b6);
    }
    @media(max-width: 584px){
    .containerr{
    max-width: 100%;
    }
    form .user-details .input-box{
        margin-bottom: 15px;
        width: 100%;
    }
    form .category{
        width: 100%;
    }
    .contentt form .user-details{
        max-height: 300px;
        overflow-y: scroll;
    }
    .user-details::-webkit-scrollbar{
        width: 5px;
    }
    }
    @media(max-width: 459px){
    .containerr .contentt .category{
        flex-direction: column;
    }
    }


</style>



<script>

</script>

