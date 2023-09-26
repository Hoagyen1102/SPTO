-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 16, 2022 lúc 02:48 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `c_id` int(100) NOT NULL,
  `c_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `click` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`c_id`, `c_name`, `author`, `image`, `description`, `p_id`, `click`) VALUES
(1, 'C++ For Loop', 'Yen', 'C++.png', 'When you know exactly how many times you want to loop through a block of code, use the for loop instead of a while loop: \r\n\r\nfor (statement 1; statement 2; statement 3) \r\n{ // code block to be executed }\r\n\r\n- Statement 1 is executed (one time) before the execution of the code block. \r\n\r\n- Statement 2 defines the condition for executing the code block. \r\n\r\n- Statement 3 is executed (every time) after the code block has been executed.', '2', 1),
(2, 'C++ While & Do/While Loop', 'Yen', 'C++.png', 'The while loop loops through a block of code as long as a specified condition is true:\r\n\r\nwhile (condition) { // code block to be executed }\r\n\r\nThe do/while loop is a variant of the while loop. This loop will execute the code block once, before checking if the condition is true, then it will repeat the loop as long as the condition is true.\r\n\r\ndo { \r\n// code block to be executed \r\n} while (condition);', '2', 3),
(3, 'Java Arrays', 'HY', 'Java.png', 'Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value.\r\n\r\nTo declare an array, define the variable type with square brackets:\r\n\r\nString[] A;\r\n\r\nWe have now declared a variable that holds an array of strings. To insert values to it, you can place the values in a comma-separated list, inside curly braces:\r\n\r\nString[] A = {\"string1\", \"string2\", \"string3\", \"string4\"};\r\n\r\nTo create an array of integers, you could write:\r\n\r\nint[] Num = {10, 20, 30, 40};\r\n\r\n\r\n-- Access the Elements of an Array --\r\n\r\n\r\nYou can access an array element by referring to the index number.\r\n\r\nNote: Array indexes start with 0: [0] is the first element. [1] is the second element, etc.\r\n\r\n\r\n-- Change an Array Element --\r\n\r\n\r\nTo change the value of a specific element, refer to the index number.\r\n\r\n\r\n-- Array Length --\r\n\r\n\r\nTo find out how many elements an array has, use the property:length', '3', 1),
(4, 'Java For Loop', 'HY', 'Java.png', 'When you know exactly how many times you want to loop through a block of code, use the for loop instead of a while loop:\r\n\r\nfor (statement 1; statement 2; statement 3) \r\n{  // code block to be executed }\r\n\r\nStatement 1 is executed (one time) before the execution of the code block.\r\n\r\nStatement 2 defines the condition for executing the code block.\r\n\r\nStatement 3 is executed (every time) after the code block has been executed.\r\n\r\n\r\n-- Nested Loops --\r\n\r\n\r\nIt is also possible to place a loop inside another loop. This is called a nested loop.\r\n\r\nThe \"inner loop\" will be executed one time for each iteration of the \"outer loop\".\r\n\r\n', '3', 0),
(5, 'CSS Fonts', 'HY', 'CSS.png', '-- Font Selection is Important --\r\n\r\nChoosing the right font has a huge impact on how the readers experience a website.\r\n\r\nThe right font can create a strong identity for your brand.\r\n\r\nUsing a font that is easy to read is important. The font adds value to your text. It is also important to choose the correct color and text size for the font.\r\n\r\n\r\n-- Generic Font Families--\r\n\r\n\r\nIn CSS there are five generic font families:\r\n\r\n+ Serif fonts have a small stroke at the edges of each letter. They create a sense of formality and elegance.\r\n\r\n+ Sans-serif fonts have clean lines (no small strokes attached). They create a modern and minimalistic look.\r\n\r\n+ Monospace fonts - here all the letters have the same fixed width. They create a mechanical look. \r\n\r\n+ Cursive fonts imitate human handwriting.\r\n\r\n+ Fantasy fonts are decorative/playful fonts.\r\n\r\nAll the different font names belong to one of the generic font families. \r\n\r\n\r\n-- The CSS font-family Property --\r\n\r\n\r\nIn CSS, we use the font-family property to specify the font of a text.\r\n\r\nNote: If the font name is more than one word, it must be in quotation marks, like: \"Times New Roman\".', '6', 1),
(6, 'PHP Echo And Print Statements', 'Yen', 'PHP.png', 'With PHP, there are two basic ways to get output: echo and print.\r\n\r\nIn this tutorial we use echo or print in almost every example. So, this chapter contains a little more info about those two output statements.\r\n\r\n\r\n-- PHP echo and print Statements --\r\n\r\n\r\necho and print are more or less the same. They are both used to output data to the screen.\r\n\r\nThe differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.\r\n\r\n-- The PHP echo Statement --\r\n\r\nThe echo statement can be used with or without parentheses: echo or echo().\r\n\r\n\r\n-- The PHP print Statement --\r\n\r\n\r\nThe print statement can be used with or without parentheses: print or print().', '4', 0),
(7, 'Python Numbers', 'Yen', 'Python.png', '-- Python Numbers --\r\n\r\n\r\nThere are three numeric types in Python:\r\n\r\n+ int\r\n+ float\r\n+ complex\r\n\r\nTo verify the type of any object in Python, use the type() function.\r\n\r\n\r\n-- Int --\r\n\r\n\r\nInt, or integer, is a whole number, positive or negative, without decimals, of unlimited length.\r\n\r\n\r\n-- Float --\r\n\r\n\r\nFloat, or \"floating point number\" is a number, positive or negative, containing one or more decimals.\r\n\r\nFloat can also be scientific numbers with an \"e\" to indicate the power of 10.\r\n\r\n\r\n-- Complex --\r\n\r\n\r\nComplex numbers are written with a \"j\" as the imaginary part:\r\n\r\n\r\n-- Type Conversion --\r\n\r\n\r\nYou can convert from one type to another with the int(), float(), and complex() methods.\r\n\r\nNote: You cannot convert complex numbers into another number type.\r\n\r\n\r\n-- Random Number --\r\n\r\n\r\nPython does not have a random() function to make a random number, but Python has a built-in module called random that can be used to make random numbers.', '7', 0),
(9, 'JavaScript Switch Statement', 'Yen', 'JavaScript.png', '-- The JavaScript Switch Statement --\r\n\r\n\r\nUse the switch statement to select one of many code blocks to be executed.\r\n\r\nswitch\(expression) {\r\n\r\ncase x: // code block\r\nbreak;\r\n\r\ncase y: // code block\r\nbreak;\r\n\r\ndefault: // code block\r\n}\r\n\r\nThe switch expression is evaluated once.\r\n\r\nThe value of the expression is compared with the values of each case.\r\n\r\nIf there is a match, the associated block of code is executed.\r\n\r\nIf there is no match, the default code block is executed.\r\n\r\n\r\n-- The break Keyword --\r\n\r\n\r\nWhen JavaScript reaches a break keyword, it breaks out of the switch block.\r\n\r\nThis will stop the execution inside the switch block.\r\n\r\nIt is not necessary to break the last case in a switch block. The block breaks (ends) there anyway.\r\n\r\nNote: If you omit the break statement, the next case will be executed even if the evaluation does not match the case.\r\n\r\n\r\n-- The default Keyword --\r\n\r\n\r\nThe default keyword specifies the code to run if there is no case match.\r\n\r\nThe default case does not have to be the last case in a switch block.\r\n\r\nIf default is not the last case in the switch block, remember to end the default case with a break.\r\n\r\n\r\n-- Common Code Blocks --\r\n\r\n\r\nSometimes you will want different switch cases to use the same code.\r\n\r\n\r\n-- Switching Details --\r\n\r\n\r\nIf multiple cases matches a case value, the first case is selected.\r\n\r\nIf no matching cases are found, the program continues to the default label.\r\n\r\nIf no default label is found, the program continues to the statement(s) after the switch.\r\n\r\n\r\n-- Strict Comparison --\r\n\r\n\r\nSwitch cases use strict comparison (===).\r\n\r\nThe values must be of the same type to match.\r\n\r\nA strict comparison can only be true if the operands are of the same type.', '8', 4),
(14, 'C# Inheritance', 'HY', 'CSharp.png', 'In C#, it is possible to inherit fields and methods from one class to another. We group the \"inheritance concept\" into two categories:\r\n\r\n+ Derived Class (child) - the class that inherits from another class\r\n\r\n+ Base Class (parent) - the class being inherited from\r\n\r\nTo inherit from a class, use the : symbol.', '1', 4),
(16, 'The SQL AND, OR and NOT Operators', 'Yen', 'MySQL.png', 'The WHERE clause can be combined with AND, OR, and NOT operators.\r\n\r\nThe AND and OR operators are used to filter records based on more than one condition:\r\n\r\nThe AND operator displays a record if all the conditions separated by AND are TRUE.\r\n\r\nThe OR operator displays a record if any of the conditions separated by OR is TRUE.\r\n\r\nThe NOT operator displays a record if the condition(s) is NOT TRUE.\r\n\r\n\r\n-- AND Syntax --\r\n\r\n\r\nSELECT column1, column2, ...\r\n\r\nFROM table_name\r\n\r\nWHERE condition1 AND condition2 AND condition3 ...;\r\n\r\n\r\n-- OR Syntax --\r\n\r\nSELECT column1, column2, ...<br />\r\nFROM table_name\r\n\r\nWHERE condition1 OR condition2 OR condition3 ...;\r\n\r\n\r\n-- NOT Syntax --\r\n\r\n\r\nSELECT column1, column2, ...\r\n\r\nFROM table_name\r\n\r\nWHERE NOT condition;', '5', 0),
(17, 'Java Break And Continue', 'Yen', 'Java.png', '-- Java Break --\r\n\r\n\r\nYou have already seen the break statement used in an earlier chapter of this tutorial. It was used to \"jump out\" of a switch statement.\r\n\r\nThe break statement can also be used to jump out of a loop.\r\n\r\n\r\n-- Java Continue --\r\n\r\n\r\nThe continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.\r\n\r\n\r\n-- Break and Continue in While Loop --\r\n\r\n\r\nYou can also use break and continue in while loops.', '3', 0),
(18, 'SQL INNER JOIN Keyword', 'HY', 'MySQL.png', 'The INNER JOIN keyword selects records that have matching values in both tables.\r\n\r\n\r\n-- INNER JOIN Syntax --\r\n\r\n\r\nSELECT column_name(s)\r\n\r\nFROM table1\r\n\r\nINNER JOIN table2\r\n\r\nON table1.column_name = table2.column_name;', '5', 1),
(30, 'Java Dates', 'Lanh', 'Java.png', '-- Display Current Date --\r\n\r\n\r\nTo display the current date, import the java.time.LocalDate class, and use its now() method.\r\n\r\n\r\n-- Display Current Time --\r\n\r\n\r\nTo display the current time (hour, minute, second, and nanoseconds), import the java.time.LocalTime class, and use its now() method.\r\n\r\n\r\n-- Display Current Date and Time --\r\n\r\n\r\nTo display the current date and time, import the java.time.LocalDateTime class, and use its now() method.\r\n\r\n\r\n-- Formatting Date and Time --\r\n\r\n\r\nThe \"T\" in the example above is used to separate the date from the time. You can use the DateTimeFormatter class with the ofPattern() method in the same package to format or parse date-time objects. The following example will remove both the \"T\" and nanoseconds from the date-time.\r\n\r\nThe ofPattern() method accepts all sorts of values, if you want to display the date and time in a different format.', '3', 0),
(31, 'Java Packages', 'Lanh', 'Java.png', '-- Java Packages & API --\r\n\r\n\r\nA package in Java is used to group related classes. Think of it as a folder in a file directory. We use packages to avoid name conflicts, and to write a better maintainable code. Packages are divided into two categories:\r\n\r\nBuilt-in Packages \(packages from the Java API)\r\nUser-defined Packages (create your own packages)\r\n\r\n\r\n-- Built-in Packages --\r\n\r\n\r\nThe Java API is a library of prewritten classes, that are free to use, included in the Java Development Environment.\r\n\r\nThe library contains components for managing input, database programming, and much much more. The complete list can be found at Oracles website: https://docs.oracle.com/javase/8/docs/api/.\r\n\r\nThe library is divided into packages and classes. Meaning you can either import a single class (along with its methods and attributes), or a whole package that contain all the classes that belong to the specified package.\r\n\r\nTo use a class or a package from the library, you need to use the import keyword.\r\n\r\n\r\n-- Import a Class --\r\n\r\n\r\nIf you find a class you want to use, for example, the Scanner class, which is used to get user input, write the following code.\r\n\r\nTo use the Scanner class, create an object of the class and use any of the available methods found in the Scanner class documentation. In our example, we will use the nextLine() method, which is used to read a complete line.\r\n\r\n\r\n-- Import a Package --\r\n\r\n\r\nThere are many packages to choose from. In the previous example, we used the Scanner class from the java.util package. This package also contains date and time facilities, random-number generator and other utility classes.\r\n\r\nTo import a whole package, end the sentence with an asterisk sign (*).\r\n\r\n\r\n-- User-defined Packages --\r\n\r\n\r\nTo create your own package, you need to understand that Java uses a file system directory to store them.\r\n\r\nTo create a package, use the package keyword.\r\n\r\nSave the file as MyPackageClass.java, and compile it.\r\n\r\nThen compile the package.\r\n\r\nWhen we compiled the package in the example above, a new folder was created, called \"mypack\".\r\n\r\nTo run the MyPackageClass.java file, write the following:\r\n\r\nC:\\Users\\Your Name>java mypack.MyPackageClass\r\n', '3', 0),
(32, 'The SQL INSERT INTO Statement', 'Lanh', 'MySQL.png', 'The INSERT INTO statement is used to insert new records in a table.\r\n\r\n\r\n-- INSERT INTO Syntax --\r\n\r\n\r\nIt is possible to write the INSERT INTO statement in two ways:\r\n\r\n1. Specify both the column names and the values to be inserted.\r\n\r\n2. If you are adding values for all the columns of the table, you do not need to specify the column names in the SQL query. However, make sure the order of the values is in the same order as the columns in the table.\r\n\r\n\r\n-- Insert Data Only in Specified Columns --\r\n\r\n\r\nIt is also possible to only insert data in specific columns.', '5', 1),
(33, 'SQL SELECT DISTINCT Statement', 'Lanh', 'MySQL.png', '-- The SQL SELECT DISTINCT Statement --\r\n\r\n\r\nThe SELECT DISTINCT statement is used to return only distinct (different) values.\r\n\r\nInside a table, a column often contains many duplicate values; and sometimes you only want to list the different (distinct) values.\r\n', '5', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
