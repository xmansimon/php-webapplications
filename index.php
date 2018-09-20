<?php
$quotes = [
    [
        'text' => 'Failure Will Never Overtake Me If My Determination To Succeed Is Strong Enough.',
        'author' => 'Og Mandino'
    ],
    [
        'text' => 'We May Encounter Many Defeats But We Must Not Be Defeated.',
        'author' => 'Maya Angelou'

    ],
    [
        'text' => 'The Man Who Has Confidence In Himself Gains The Confidence Of Others.',
        'author' => 'Hasidic Proverb'
    ],
    
    [
        'text' => 'Creativity Is Intelligence Having Fun.',
        'author' => 'Albert Einstein'
    ],
];  

$quote = $quotes[rand(0,count($quotes)-1)];
$quoteText = $quote['text'];
$quoteAuthor= $quote['author'];
?>

<!DOCTYPE html>
<html>
<head>

	<title>Simon Su</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">

	<link href='css/su.css' rel='stylesheet'>

</head>
<body>

	<div class="container">

		<h1>Simon Su</h1>

		<img src='image/profile.jpg' alt='profile'>

		<h2>About Me</h2>
		<p>
			My name is Simon Su.I am learning PHP, and I love playing Tennis and Golf. 
		</p>

		<h2>Random Quote</h2>
		<blockquote>
            <?php echo $quoteText; ?>
            <strong>-<?php echo $quoteAuthor; ?></strong>
        </blockquote>

	</div>

 
</body>
</html>
