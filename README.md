EXADS - PHP Exercises 
========

1 - Prime Numbers
-------
Write a PHP script that prints all integer values from 1 to 100. Beside each number, print the numbers it is a multiple of (inside brackets and comma-separated). If only multiple of itself then print `[PRIME]`.

2 - ASCII Array
------
Write a PHP script to generate a random array containing all the ASCII characters from comma (`,`) to pipe (`|`). Then randomly remove and discard an arbitrary element from this newly generated array. Write the code to efficiently determine the missing character.

3 - TV Series
---------
Populate a MySQL (InnoDB) database with data from at least 3 TV Series using the following structure: 
`tv_series -> (id, title, channel, gender); tv_series_intervals -> (id_tv_series, week_day, show_time);`. 
Provide the SQL scripts that create and populate the DB.

4 - A/B Testing
----
Exads would like to A/B test some promotional designs to see which provides the best conversion rate.
Write a snippet of PHP code that redirects end users to the different designs based on the data provided by [this library](https://packagist.org/exads/ab-test-data).
The data will be structured as follows:
```
“promotion” => [
    “id” => 1,
    “name” => “main”,
    “designs” => [
        [ “designId” => 1, “designName” => “Design 1”, “splitPercent” => 50 ],
        [ “designId” => 2, “designName” => “Design 2”, “splitPercent” => 25 ],
        [ “designId” => 3, “designName” => “Design 3”, “splitPercent” => 25 ],
    ]
]
```
The code needs to be object-oriented and scalable. The number of designs per promotion may vary.
