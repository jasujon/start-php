<?php
    // $name = "Israk Jahan";
    $font = "verdana";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body(font-family: <?php echo $font ;?>)
    </style>
  </head>
  <body>
        <header >
            <nav class="navbar navbar-expand-lg  navbar-dark bg-dark" style="padding:10px">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <h4 style="font-size: 1.5rem;text-align: center;margin: auto;padding: 20px;color: #fff;">
                        PHP Fundamentals Training
                    </h4>
                </div>
            </nav>
        </header>
        <div class="main" style="min-height: 449px;background: #ccc;">
            <div class="container" style="padding-top:20px;">
                <?php 
                    #Comparison Operators
                    
                    #The PHP comparison operators are used to compare two values (number or string):

                    # == (Equal)  EXM: $x == $y    Description = Returns true if $x is equal to $y
                    # === (Identical)  EXM: $x === $y    Description = Returns true if $x is equal to $y, and they are of the same type
                    # != (Not equal)  EXM: $x != $y    Description = Returns true if $x is not equal to $y
                    # <> (Not equal)  EXM: $x <> $y    Description = Returns true if $x is not equal to $y
                    # !== (Not identical)  EXM: $x !== $y    Description = Returns true if $x is not equal to $y,  or they are not of the same type
                    # > (Greater than)  EXM: $x > $y    Description = Returns true if $x is greater than $y
                    # < (Less than)  EXM: $x < $y    Description = Returns true if $x is less than $y
                    # >= (Greater than or equal to)  EXM: $x >= $y    Description = Returns true if $x is greater than or equal to $y
                    # <= (Less than or equal to)  EXM: $x <= $y    Description = Returns true if $x is less than or equal to $y
                    # <=> (Spaceship)  EXM: $x <=> $y    Description = Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
                    




                ?>
            </div>

        </div>

        <footer>
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark" style="padding:10px">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <h4 style="font-size: 1.5rem;text-align: center;margin: auto;padding: 20px;color: #fff;">
                        PHP Fundamentals Training
                    </h4>
                </div>
            </nav>
        </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>