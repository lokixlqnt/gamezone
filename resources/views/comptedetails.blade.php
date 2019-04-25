<form method ="POST" action="{{ route('comptedetails') }}">  @csrf
    <h2 class="formtitre">MODIFICATION</h2>
    <label for="pseudo">Modifier votre pseudo puis valider : {{ Auth::user()->nickname }}</label>
    <input type="text" name="pseudo" />
    <input type="submit" name="submit" class="submit" value="Modifier" />
