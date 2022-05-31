<x-exercise>
    <h2>Prime Numbers</h2>
    <p>Write a PHP script that prints all integer values from 1 to 100. Beside each number, print the numbers it is a multiple of (inside brackets and comma-separated). If only multiple of itself then print [PRIME].</p>
    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Multiple Of</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($numbers as $number => $multipleOf)
                <tr>
                    <td>{{$number + 1}}</td>
                    @if (count($multipleOf))
                        <td>[{{join(',',$multipleOf)}}]</td>
                    @else
                        <td>[PRIME]</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</x-exercise>
