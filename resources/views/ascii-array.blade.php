<x-exercise>
    <h2>ASCII Array</h2>
    <p>Write a PHP script to generate a random array containing all the ASCII characters from comma (,) to pipe (|). Then randomly remove and discard an arbitrary element from this newly generated array. Write the code to efficiently determine the missing character.</p>
    <h3>ASCII Characters Random Array (Incomplete)</h3>
    <p>{{ $arrayChars->getString() }}</p>
    <h3>Missing Character</h3>
    <p>{{ $missingCharacter }}</p>
    <small>(found in {{$runtime}} second)</small>
    <h3>Note</h3>
    <p>This exercise can also be solved <a href="{{route('ascii-array-w-diff')}}">using array_diff</a>.</p>
</x-exercise>
