<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laminatech</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    <?php include('assets/components/menu.php'); ?>
    <section class="logistics-main-header">
        <div class="container">
            <div class="logistics-header">
                <h2>Logistyka</h2>
                <span>Produkowany przez Nas asortyment może być łączony do jednej palety w celu zminimalizowania kosztów transportu.
                  Łączna masa takiej palety nie może przekroczyć 1000 kg, uwzględniając ograniczenia gabarytowe. Wagi poszczególnych elementów podane są w zakładce Produkty.</span></div>
        </div>
    </section>
    <section class="limitations container">
        <div class="row">
            <div class="col-xs-12 col-md-7 limitations-content">
                <h3>Ograniczenia Gabarytowe</h3>
                <img src="images/limitations-table.svg" alt="">
            </div>
            <div class="col-xs-12 col-md-5 img-paleta">
                <img src="images/Paleta.png" alt="" class="img-fluid ">
            </div>
        </div>
    </section>
    <section class="shipping-cost container">
        <h2>Koszt wysyłki towaru</h2>
        <div class="shipping-cost-table">
            <div class="first-row">
                <div class="row">
                    <div class="col-md-10 col-8">
                        <span>Przy kwocie zakupów niższej niż 1300 zł netto</span>
                    </div>
                    <div class="col-md-2 col-4">
                        <span>120zł netto / paletę</span>
                    </div>
                </div>
            </div>
            <div class="second-row">
                <div class="row">
                    <div class="col-md-10 col-8">
                        <span>Przy kwocie zakupów wyższej niż 1300 zł netto i niższej niż 2600 zł netto</span>
                    </div>
                    <div class="col-md-2 col-4"><span>70zł netto / paletę</span></div>
                </div>
            </div>
            <div class="third-row">
                <div class="row">
                    <div class="col-md-10 col-8">
                        <span>Przy kwocie zakupów wyższej niż 2600 zł netto</span>
                    </div>
                    <div class="col-md-2 col-4">
                        <span>GRATIS!</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <?php include('assets/components/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="assets/slick/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
