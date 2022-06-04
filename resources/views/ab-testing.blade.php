<x-exercise>
    <h2>A/B Testing</h2>
    <p>Exads would like to A/B test some promotional designs to see which provides the best conversion rate. Write a snippet of PHP code that redirects end users to the different designs based on the data provided by <a href="https://packagist.org/packages/exads/ab-test-data">this library</a>. The data will be structured as follows:</p>
    <textarea rows="9">
    “promotion” => [
        “id” => 1,
        “name” => “main”,
        “designs” => [
            [ “designId” => 1, “designName” => “Design 1”, “splitPercent” => 50 ],
            [ “designId” => 2, “designName” => “Design 2”, “splitPercent” => 25 ],
            [ “designId” => 3, “designName” => “Design 3”, “splitPercent” => 25 ],
        ]
    ]
    </textarea>
    <p>The code needs to be object-oriented and scalable. The number of designs per promotion may vary.</p>
    
    <h3>Promotions</h3>
    <ul>
        <li><a href="{{route('promotion',['promoId'=>1])}}">Promotion 1</a></li>
        <li><a href="{{route('promotion',['promoId'=>2])}}">Promotion 2</a></li>
        <li><a href="{{route('promotion',['promoId'=>3])}}">Promotion 3</a></li>
    </ul>
</x-exercise>
