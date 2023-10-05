@include("menu")
{{-- <h2>Bienvenue Mr/Ms : {{$nom}} {{$prenom}}</h2>
<h3>Votre email est : {{$email}}</h3>
<h3>Votre telephone est : {{$tel}}</h3> --}}

@foreach ($request as $ind=>$val)
    @if ($ind!="_token")
    Votre {{$ind}} est : {{$val}} <br>
    @endif
@endforeach