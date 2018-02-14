<?php
//    Array
$people = array(
    array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
    array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
    array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
    array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
    array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Online Test</title>
    <meta name="description" content="PHP App">
    <meta name="author" content="Harikrushn Dave">
    <!--Bootstrap CSS and Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>
<div class="container">
    <header>
        <h1>DMS Technologies, Online Test</h1>
        <p class="lead">Developer: Harikrushn Dave<br>website: <a target="_blank" href="http://haridave.com/">haridave.com</a></p><br>
    </header>
<!--    Table Section-->
    <section>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>email</th>
                <th>Information</th>
            </tr>
            </thead>
            <tbody>
            <?php
            //    Foreeach loop to iterate through $people array
            foreach ($people as $person){ ?>
                <tr>
                    <th scope="row"><?php echo $person['id']?></th>
                    <td><?php echo $person['first_name']?></td>
                    <td><?php echo $person['last_name']?></td>
                    <td><?php echo $person['email']?></td>
                    <td><button class="btn btn-primary infoButton" id="<?php echo $person["first_name"]; echo ' '; echo $person["last_name"];?>" value="<?php echo $person["email"]; ?>"  >Click Me</button></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
<!--        /. Table Section-->
<!--        Alert Section-->
        <div class="row"  >
            <div class="col-md-4"></div>
            <div id="alert" class="col-md-4">
                <h1 id="name" class="lead"></h1>
                <h2 id="email" class="lead"></h2>
            </div>

        </div>
<!--        End of Alert-->
    </section>
</div>
<!-- Latest compiled and minified jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--./Bootstrap Script-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--Script to display Data-->
<script>
    $(document).ready(function () {
        $(".infoButton").click(function(){
            var name = this.id;
            var email = this.value;
            $("#name").text(name);
            $("#email").text(email);
            $("#alert").fadeIn(1000).delay(2000).fadeOut(1000);
            $("#alert").css("background", "blue");
        })
    });

</script>
</body>
</html>