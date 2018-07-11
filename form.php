<!DOCTYPE html>
<html>
<head>
    <title>Text Compression Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        h2 {
            margin-top: 50px;
            font-family: monospace;
            color: black;
            font-size: 33px;
        }

        body {
            background: #F0F0F0;
        }


        h2 {
            margin-left: 55px;
        }

        textarea {
            width: 60%;
            height: 120px;
            margin-top: 120px;
            background: none repeat scroll 0 0 rgba(202, 194, 194, 0.59);
            border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
            border-image: none;
            border-radius: 6px 6px 6px 6px;
            border-style: none solid solid none;
            border-width: medium 1px 1px medium;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
            color: #555555;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 1.5em;
            line-height: 1.4em;
            padding: 5px 8px;
            transition: background-color 0.2s ease 0s;
        }

        ::placeholder {
            color: white;
            opacity: 1;
        }

        body {
            background-image: url('temp.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 100% 0;
            background-attachment: fixed;
            background-size: 100% 100%;
            display: block;
        }

        textarea:focus {
            background: none repeat scroll 0 0 #FFFFFF;
            outline-width: 0;
        }


        button {
            margin-top: 30px;
        }

	h4{
		margin-left:10px;
}
    </style>
</head>
<body>

    <center>

        <h2 style="color: white"> TEXT COMPRESSION BLOG</h2>

        <form action="form.php" method="post">

            <textarea placeholder="Enter text here" rows="30" name="text" class="ui-autocomplete-input"></textarea>
            <br><br>
            <input type="submit" class="btn btn-primary active" value="COMPRESS">

        </form>
    </center>
    <?php
      $textval = $_POST["text"];
      echo("<h4 style=\"color:white;\">".$textval."</h4>");
      $file = fopen("input.txt","w");
	//var_dump($file);
      fwrite($file,$textval."\n");
      fclose($file);
      exec("./a.out>output.txt");
	//var_dump($ret);
	//file_put_contents("output.txt",$output);
      //var_dump($ret);
     ?>
</body>
</html>
