<ul>
    
    @php
    $nom="ismail";
    $date="23-06-91";
    $num="1";
    @endphp

    <!-- communiqué avec name (recommander) -->
    {{-- <li><a href="{{route('home.acceuil',$nom)}}">Acceuil</a></li>
    <li><a href="{{route('order.contact')}}">Contact</a></li> --}}
    <!-- communiqué avec l uri -->
    <li><a href="{{url('/'.$nom)}}">Acceuil</a></li>
    <li><a href="{{url('/about')}}">Presentation</a></li>
    <li><a href="{{url('/produits')}}">Produits</a></li>
    <li><a href="{{url('/formcontact')}}">Contact</a></li>
    <li><a href="{{url('/'.$date.'/'.$num)}}">show</a></li>
</ul>