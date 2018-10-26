This is the whiskers on kittens file.

@foreach ($kittens as $kitten)
    <p><img src="{{ $kitten }}" alt="Kitten!"></p>
@endforeach



<?php

var_dump($kittens);

    foreach ($kittens as $kitten) {
        echo '<p><img src="'. $kitten . '" alt="Kitten!"></p>';
    }
?>
