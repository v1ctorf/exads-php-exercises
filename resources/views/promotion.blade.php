<x-exercise>
    <h2>A/B Testing - {{ $promotion }}</h2>
    <p>{{ $design['designName'] }}</p>
    @if ($design['designName'] == 'Test Green Square')
        <div style="width: 100px;height: 100px;background: green;"></div>
    @elseif ($design['designName'] == 'Test Dark Round')
        <div style="width: 100px;height: 100px;background: black;border-radius:50%"></div>
    @elseif ($design['designName'] == 'Test Red Square')
        <div style="width: 100px;height: 100px;background: red;"></div>
    @elseif ($design['designName'] == 'Test Red Round')
        <div style="width: 100px;height: 100px;background: red;border-radius:50%"></div>
    @elseif ($design['designName'] == 'Control Group')
    @endif
    <small>{{ $design['splitPercent'] }}% chance to be displayed</small>
    <hr>
    <a href="{{ route('ab-testing') }}" style="margin-top:20px">Back to A/B Testing Page</a>
</x-exercise>
