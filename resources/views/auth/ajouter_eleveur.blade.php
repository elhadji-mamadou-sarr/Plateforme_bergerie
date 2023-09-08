
        <form action="{{ route('eleveur.inscription') }}"
            method="post" enctype="multipart/form-data">
            @csrf
            @method('post')

                <div class="input-field">
                    <input type="text"   name="nom">
                    <label class="details">Nom</label>
                </div>
                <div class="input-field">
                    <input type="text"   name="prenom">
                    <label class="details">Prenom</label>
                </div>
                <div class="input-field">
                    <input type="text" name="email">
                    <label class="details">Email</label>
                </div>
                <div class="input-field">
                    <input type="number" name="telephone">
                    <label class="details">Telephone</label>
                </div>
                <div class="input-field">
                    <input type="text" name="ville">
                    <label class="details">Ville </label>
                </div>
                <div class="input-field">
                    <input type="text"  name="adresse" >
                    <label class="details">Adresse</label>
                </div>

                <input type="hidden" name="profil" value="{{ $profil->id }}">

                <div class="input-field">
                    <input class="form-control form-control-lg" name="photo" id="formFileLg" type="file">
                </div>

            <button>S'inscrire</button>

        </form>

