<div class="container">
    @foreach ($movies as $elemento)
        <div class="film-container">
            <div> <h4>TITOLO:</h4>{{ $elemento['title'] }}</p></div>
            <div> <h4>TITOLO-ORIGINALE:</h4>{{ $elemento['original_title'] }}</p></div>
            <div> <h4>NAZIONALITÁ:</h4>{{ $elemento['nationality'] }}</p></div>
            <div> <h4>DATA D'USCITA:</h4>{{ $elemento['date'] }}</p></div>
            <div> <h4>VOTE:</h4>{{ $elemento['vote'] }}</p></div>
        </div>
    @endforeach 
</div>