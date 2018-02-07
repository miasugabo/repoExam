<?php
  $host="localhost";
    $user = "root";
    $password ="";
    database = "test_db";

$title = "";
$pages = "";
$author = "";
$year = "";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT)
    
    try{$connect = mysqli_connect ($host, $user, $password, $database);
       }catch (Exception $ex)  {echo 'error';
                               }



?>
<html>
    <style>
        
        
        
        body {
    background: #fff;
    box-shadow: 0 0 2px rgba(0, 0, 0, 0.06);
    color: #545454;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5;
    margin: 0 auto;
    max-width: 800px;
    padding: 2em 2em 4em;
}

h1, h2, h3, h4, h5, h6 {
    color: #222;
    font-weight: 600;
    line-height: 1.3;
}

h2 {
    margin-top: 1.3em;
}

a {
    color: #0083e8;
}

b, strong {
    font-weight: 600;
}

samp {
    display: none;
}

img {
    animation: colorize 2s cubic-bezier(0, 0, .78, .36) 1;
    background: transparent;
    border: 10px solid rgba(0, 0, 0, 0.12);
    border-radius: 4px;
    display: block;
    margin: 1.3em auto;
    max-width: 95%;
}

@keyframes colorize {
    0% {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
    }
    100% {
        -webkit-filter: grayscale(0%);
        filter: grayscale(0%);
    }
}
        </style>

<head>
	<title>Book Information</title>
    <link href="assets/css/reg.css" rel="stylesheet">
</head>

<body>
	<form action="addbook.php" method="post">
	<h1>Library Database</h1>
	<fieldset>
		<legend>Book Information</legend>
		<label>Title:</label> <input type="text" value="<?php echo $title; ?>" name="title" required/><br />
		<label>Pages:</label> <input type="number" value="<?php echo $pages ?>" min=1 name="pages" required/><br />
		<label>Author:</label> <input type="text"  value="<?php echo $author ?>" name="author" required/><br />
		<label>Published Year:</label> <input type="text"  value="<?php echo $year ?>"name="year" required/>
        <div><br/></div>
    <input style="float:right" type="submit" value="Add Book" onClick="return submit_form();" name="submit"/>
    </fieldset>
    <h3>List of Stored Books</h3>
    <table border="2" align="center" cellpadding=5>
            <thead>
                <tr><th>Title</th>
                    <th>Pages</th>
                    <th>Author</th>
                    <th>Published Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
    
    $host="localhost";
    $user = "root";
    $password ="";
    database = "test_db";
                                     
    if (isset($_POST['submit'])){
        
        $title = $_POST['title'];
        $pages = $_POST['pages'];
        $author = $_POST['author'];
        $year = $_POST['year'];
        
        $query = "insert into table (title,pages,author,year) values ('$title','$pages','$author','$year')";
        
        
        
    }
                
                ?>
            </tbody>
        </table>
	</form>
    <script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		function submit_form(){
			alert("A new book has been successfully added!");
		}
	</script>
<?php 
    $dbconn->close();
</body>
</html>