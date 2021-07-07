***How to run the project:***

1. Download this repository
2. For XAMPP :
	1)To run the project on XAMPP, place the files from the .zip folder into ://xampp/htdocs/ on your computer.
	2)Open the XAMPP control panel and start Apache and MySQL.
	3)The project will run on your browser at localhost/mb_test/
2. To view existing data in tables :
	1)Open localhost/phpmyadmin/ and create a database called emails_test.
	2)Open the database, and inside it import the file called emails.sql to be able to view all the test data in tables.


***Issues:***

*Task2 JavaScript
1. Having problems with submitting the form through JS. And probably JS in general...
Since it's not fully functional, JS is currently disabled. To enable and test it, uncomment the script tag at the end of /mb_test/index.php file.


*Task3 PHP & MySQL

1. I did not succeed in using OOP for some task requirements. So they are done through procedural PHP :/.
To view whatever could be done, see folder /mb_test/php_oop/ and open the displayed table on /mb_test/php_oop/table.php

2. Had trouble implementing sorting, searching and deleting all on the same page.
Some of the code was started few months ago during the first try, so it looks inconsistent and now I lacked time to sort it out.
The pages are available separately:
	1)/mb_test/php/table_sorting.php (for sorting table contents)
	2)/mb_test/php/table_filters.php (for searching emails)
	3)/mb_test/php/table_new.php (for to delete emails + added pagination)

3. Cannot filter addresses by email providers where the buttons appear automatically.

