@extends('layouts.app')
@section('title')
Account
@endsection

<script src="{{ asset('js/box.js') }}" defer></script>

<!----------vasen laatikko, napit ---------------------->
@section('content')
<div class="left2">
<div class="link" target=0>Oletusnäkymänlinkki</div>
<div class="link" target=1>Change avatar</div>
<div class="link" target=2>Alert preferences</div>
<div class="link" target=3>Payment details</div>
<div class="link" target=4>Personal information</div>
</div>


@endsection

<!-------------oikea laatikon alku, johon sisältö aukeaa----->
@section('content2')
<div class="linkbox" id=0 style="display:block">
    Oletusnäkymä
</div>
<!--------------ID 1------------------------------------>
<div class="linkbox" id=1>
    <img src="{{ URL::to('/images/user128') }}" alt="image">
    <input type="text" id="sijainti">
    <button>Lataa kuva</button>
    <!--@yield('') --->
</div>
<!---------------ID 2----------------------------------->
<div class="linkbox" id=2> 
    Sisältö
</div>
<!----------------ID 3---------------------------------->
<div class="linkbox" id=3> 
    hfdslkjfhdskjhfkjfds
</div>
<!-----------------ID 4--------------------------------->
<div class="linkbox" id=4>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis vehicula lacus. Duis rutrum efficitur ipsum. Suspendisse non tincidunt ipsum. Vestibulum mi nisi, tristique sit amet tristique in, tristique id sem. Donec quis tellus vel ligula sagittis dictum cursus a eros. Mauris gravida porttitor ultrices. Vestibulum sollicitudin lacus eget est commodo, quis dapibus nulla ultrices. Quisque bibendum, leo sit amet lobortis vehicula, tortor risus convallis lacus, ut rhoncus tortor odio vitae ex. Ut vel viverra justo, sed cursus mi. Proin erat metus, mollis ut turpis sit amet, placerat viverra eros. Morbi semper placerat metus at dapibus. Vestibulum consequat consequat sem nec facilisis.
</div>




@endsection