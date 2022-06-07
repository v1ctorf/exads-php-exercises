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
Write a snippet of PHP code that redirects end users to the different designs based on the data provided by [this library](https://packagist.org/packages/exads/ab-test-data).
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

Notes and Comments
-----
- I opted for Laravel as I should perform some minimum presentation, although I kept it as simple as possible since these exercises are more focused on back-end development.
- The answers for all exercises can be mostly found at file `ExerciseController.php` ([direct link here](https://github.com/v1ctorf/exads-php-exercises/blob/main/app/Http/Controllers/ExerciseController.php))
- Exercise #1 answers can be seen at method `solvePrimeNumbers` at `ExerciseController.php`, and it's presented at `prime-numbers.blade.php` ([link here](https://github.com/v1ctorf/exads-php-exercises/blob/main/resources/views/prime-numbers.blade.php))
- Exercise #2 solution can be seen at methods `solveAsciiArray` and `solveAsciiArrayWithArrayDiff` at `ExerciseController.php`, and it uses a `AsciiArray` class at `AsciiArray.php` ([link here](https://github.com/v1ctorf/exads-php-exercises/blob/main/app/Models/AsciiArray.php)) and it's presented at `ascii-array.blade.php` and `ascii-array-diff.blade.php` (both [files here](https://github.com/v1ctorf/exads-php-exercises/tree/main/resources/views)).    
- Since Exercise #3 only requires SQL scripts, they are all provided directly at the presentation file `tv-series.blade.php` ([link here](https://github.com/v1ctorf/exads-php-exercises/blob/main/resources/views/tv-series.blade.php))
- Finally, Exercise #4 was also solved in `ExerciseController.php`, more specifically at method `getPromotion`.

How can I run this project?
-----
- clone this repository
- at the terminal `cd exads-php-exercises`
- `composer install`
- create a `.env` file
- `php artisan key:generate`

Don't hesitate in reaching me out about any needed clarification. Thanks a million!
