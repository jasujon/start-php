<?php
    // $name = "Israk Jahan";
    $font = "verdana";

?>
<?php session_start() ?>

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

                <!--array_change_key_case(Associative arrays)-->
                <?php 
                    $name = array(
                        "Jubayed Alam" => "25",
                        "Israk Jahan"  => "19",
                        "Sultan Alam"  => "10",
                        "Sabina Aktar" => "16",
                    );
                    print("<pre>");
                    print_r(array_change_key_case($name,CASE_UPPER));
                    print("</pre>");

                    #output : 
                    // Array
                    //     (
                    //         [JUBAYED ALAM] => 25
                    //         [ISRAK JAHAN] => 19
                    //         [SULTAN ALAM] => 10
                    //         [SABINA AKTAR] => 16
                    //     )

                    print("<pre>");
                    print_r(array_change_key_case($name,CASE_LOWER));
                    print("</pre>");
                    // Array
                    //     (
                    //         [jubayed alam] => 25
                    //         [israk jahan] => 19
                    //         [sultan alam] => 10
                    //         [sabina aktar] => 16
                    //     )
                    
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