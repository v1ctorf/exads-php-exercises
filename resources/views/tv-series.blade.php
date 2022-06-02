<x-exercise>
    <h2>TV Series</h2>
    <p>Populate a MySQL (InnoDB) database with data from at least 3 TV Series using the following structure.</p>
    <ul>
        <li>tv_series -> (id, title, channel, genre);</li>
        <li>tv_series_intervals -> (id_tv_series, week_day, show_time);</li>
    </ul>
    <p>Provide the SQL scripts that create and populate the DB.</p>

    <h3>SQL Scripts</h3>

    <h4>Creating table tv_series</h4>
    <textarea rows="6">
    CREATE TABLE `tv_series` (
        `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `title` VARCHAR(255) NOT NULL,
        `channel` VARCHAR(255) NOT NULL,
        `genre` VARCHAR(255) NOT NULL
    ) DEFAULT CHARACTER SET utf8mb4 COLLATE 'utf8mb4_unicode_ci' ENGINE = INNODB;
    </textarea>

    <h4>Creating table tv_series_intervals</h4>
    <textarea rows="9">
    CREATE TABLE `tv_series_intervals` (
        `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `tv_series_id` BIGINT UNSIGNED NOT NULL,
        `show_time` TIME NOT NULL,
        `week_day` ENUM('sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat') NOT NULL
    ) DEFAULT CHARACTER SET utf8mb4 COLLATE 'utf8mb4_unicode_ci' ENGINE = INNODB;

    ALTER TABLE `tv_series_intervals` ADD CONSTRAINT `tv_series_intervals_tv_series_id_foreign`
    FOREIGN KEY (`tv_series_id`) REFERENCES `tv_series` (`id`);
    </textarea>

    <h4>Populating table tv_series</h4>
    <textarea rows="5">
    INSERT INTO tv_series (title, channel, genre)
    VALUES
        ('Breaking Bad','AMC','neo-western crime drama'),
        ('The Last Dance','Netflix','sports documentary'),
        ('Game of Thrones','HBO','fantasy drama');
    </textarea>

    <h4>Populating table tv_series_intervals</h4>
    <textarea rows="7">
    INSERT INTO tv_series_intervals (tv_series_id, show_time, week_day)
    VALUES
        (1, '22:00:00', 'wed'),
        (1, '22:00:00', 'sun'),
        (2, '22:00:00', 'tue'),
        (2, '22:00:00', 'sat'),
        (3, '22:00:00', 'sun');
    </textarea>

</x-exercise>

