<form action="{{route('contact.postcontact')}}" method="post">
    {{-- pour cree token --}}
    @csrf 
    <label for="nom">nom : </label>
        <input type="text" name="nom" id="nom" required>
    
    <label for="prenom">Prenom : </label>
        <input type="text" name="prenom" id="prenom" required>

        <label for="email">Email : </label>
        <input type="email" name="email" id="email" required>

        <label for="tel">Telephone : </label>
        <input type="number" name="tel" id="tel" required>

        <button type="submit">Envoyer</button>
    
</form>