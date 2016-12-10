<?php

	/* A Brief Documentation of PHP.
		1)	bring saving shortcut in practice more and more, it just takes a second or less.
		2)	all you gotta do is press Ctrl and then S key.
		3)	which is  Ctrl+S.

		4)	keep a good indentation in your code, and keep it clean,
			so that others don't scratch their heads reading your junk.

		5)	You can use multi <?php ------ ?> Block as you want, cuz you know its PHP.
		6)	User tabs for coding syntaxes, rather than pressing spaces like emergency button.
			use 	tabs, than spaces
		7)	depending on your text editor (this was written in sublime) the keypresses may trigger some functions
			suppose you type "use" and then press a tab,
			you get "user" or "used" or "user_error()"	oops !, watch out for that Mr.LumberJack.
		8)	if you know javascript a little, you will find that PHP solves all your problems,
			and you would no longer use JS for usual webpage logical stuff, but you can if you want,
			Because there is JQuery, there is AJAX, and there is Angular.JS.
		9)	
		*/
?>
<?php

	$string1 = "Hey guys!\n";
	$string2 = 'I am learning PHP!';
	// strings are written in "" double quotes.
	// characters are written in '' single quotes.

	$string1 .= $string2;
	echo $string1 . '<br>';
	/*	PHP lets you store sttrings in a single variable.
		and yeah please use spaces when you append the strings (or concantenate them or whatever).
		you don't wanna be screwing up and later writing "JOHN DOE" as "JOHNDOE".
		better use one of these escape characters (you can find more on UNICODE or if you know some)
		\t 		-for tabs
		\n 		-for newlines
		\r 		-for returns
		and yeah they should be used under "" (double quotes),
		don't use 'em under singles, cuz they will be recognized as strings, and yeah they may screw your code up.
		

	*/

	$count = 5;
	echo "<p style='color: red; font-family: verdana;'>This week $count people have viewed your profile.</p>";
		//	You can use usuall CSS and HTML tabs inside 

	echo "<br>hey how are you there. there's been $count issues.<br>";
		/* strings and PHP variables can be concantinated without using any special character,
			but one thing to be kept in mind before proceeding that,
			user either '' for variables, and leave the whole string on "".
			or do not user any of those at all.
		*/

	echo "Date\tName\tPayment" . '<br>';
		// strings can be concantenated using this dot(.) and even variables can be concantenated using such.

	$author = "Steve Ballmer";
	echo "Developers, Developers, developers, developers, developers,
	developers, developers, developers, developers!
	- $author.".'<br>';
		// PHP can use a multiline echo, so no worries!.

	$author = "Brian W. Kernighan";
	
	echo 
<<<_END
	Debugging is twice as hard as writing the code in the first place.
	Therefore, if you write the code as cleverly as possible, you are,
	by definition, not smart enough to debug it.
	- $author.
	<br><h3>!@#$%^&*()_+</h3>
_END;

	/*	best part is when you can echo or output a whole set of strings without any line breaks.
		only need to do is, start it using "<<<_END" (without the quote obviously).
		and end the whole sentence using "_END" (without the quote again), and yeah on a new line,
		DO NOT use even a single SPACE or anything. just on a NEW LINE!.
	*/
	$author2 = "Scott Adams";
	$out = <<<_END
	Normal people believe that if it ain't broke, don't fix it.
	Engineers believe that if it ain't broke, it doesn't have enough
	features yet.
	- $author2.
_END;

echo $out . "<br>";
		/*	you can use this awesome <<<_END to store loads of stings into a variable,
			and then you can output that using any echo or whatever.
		*/


	$myFirstName = "Manish";
	$myLastName = "\tSharma";

	$myFullName = $myFirstName . $myLastName;

	$quote = <<<_NAM_E
	A beautiful code is a beautiful code

_NAM_E;
	
	echo $quote."<br>- ".$myFullName;

	/*	SURPRISE !!
		you can use any word you want in the place of "_NAM_E".
		you can write a secret joke for other coders in there.
	*/
		echo "<br>"

?>
<?php
	$string1 = "hey, this is text!";

	$string2 = strtoupper($string1);

	echo $string2;

	$string3 = strtolower($string2);
	echo "<br>";
	echo "\t".$string3;
	echo "<br>";
?>
<?php
	$number = 12345 * 67890;
	// variable initialized and multiplied to output 838102050.
	echo $number;
	// output printed.
	echo "<br>";
	$convert = substr($number, 3, 2);
	echo $convert;
	/*	converting number to string using "substr()" function.
		here is the explaination as follows.
		substr($number, 3, 2);

		$number -	is -	838102050
		3		-	is -	4th character (0th as an offset)
		2		-	is -	no. of characters to convert
							from the 4th starting point. 	
	*/ 
	echo "<br>";
?>

<?php
	define("MY_NAME", "Manish\tSharma");
	/*	another type of variable is Constants
		which is usually used to hold the location
		of a specific directory on the server files or on the system files.
		The value of any constant cannot be altered.
		
		explaination as follows:-
		define("MY_NAME", "Manish");
		defining a constant with the name of "MY_NAME",
			and assigning it a value/location of "Manish"
	*/
	$_name = myName;
	/*	now I can assign the value of "MY_NAME" to a variable named "_name"
		it is a good practice to define the name of the constants in Uppercase letters.
		it becomes easier for others to read your code and understand it better.
	*/

	echo $_name;
	// output the variable.
	
	echo "<br>";	
?>

<?php
	echo "This is line " . __LINE__ . " of file " . __FILE__;
	/*	Magic Constants

		List of magic constants and what they can do
		
		__LINE__ 		The current line number of the file.
		__FILE__ 		The full path and filename of the file. If used inside an include , the name of the included file is
						returned.
						In PHP 4.0.2, __FILE__ always contains an absolute path with symbolic links resolved,
						whereas in older versions it might contain a relative path under some circumstances.
		__DIR__ 		The directory of the file. If used inside an include , the directory of the included file is returned. This
						is equivalent to dirname(__FILE__) .
						This directory name does not have a trailing slash unless it is
						the root directory. (Added in PHP 5.3.0.)
		__FUNCTION__	The function name. (Added in PHP 4.3.0.) As of PHP 5, returns the function name as it was declared
						(case-sensitive). In PHP 4, its value is always lowercase.
		__CLASS__ 		The class name. (Added in PHP 4.3.0.) As of PHP 5, returns the class name as it was declared (case-
						sensitive). In PHP 4, its value is always lowercased.
		__METHOD__ 		The class method name. (Added in PHP 5.0.0.) The method name is returned as it was declared (case-
						sensitive).
		__NAMESPACE__ 	The name of the current namespace (case-sensitive). This constant is defined at compile time. (Added in
						PHP 5.3.0.)
		
		NOTE:-	These CONSTANTS have 2 underscore and the start and two at the end of their names
				just so you don't run into defining yours like them.
				so be careful about defining your own constants.
	*/
?>

<?php
	echo "<br>";


	$b = 1;
	$b ? print "yes" : print "no";

	print "this is ".$b." statement";
	echo "<br>";
?>

<?php
	function longdate($timestamp)	{
		return date("l F jS Y", $timestamp);
	}

	echo longdate(time());

	echo "<br>";	
?>
<?php
	
	$temp = 'The date is ';
	echo longdate(time());


	function longdate($timestamp)	{
		$temp = date("l F jS Y", $timestamp);
		return "The date is $temp";
	}
?>