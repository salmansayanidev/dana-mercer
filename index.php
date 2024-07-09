<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/fev-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <title>Dana Mercer</title>
</head>
<body>
    
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a class="text-decoration-none" href=".">
                        <img class="img-fluid logo" src="./assets/images/logo.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>


    <main>
        <section class="form-section">
            <div id="progress-bar"></div>
            <img class="bg-left-img" src="./assets/images/logo-bg-img.png" alt="">
            <form action="">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-6">

                            <div id="step-1" class="form-step-area step step-1 active">
                                <h1 class="form-title">Welcome</h1>
                                <h2 class="form-md-title mt-4 mb-5">Let’s start building your Case</h2>
                                <h3 class="form-sm-title mb-5">Who is this order for?</h3>
                                <div class="flex-input-area d-flex justify-content-center align-items-center gap-4 flex-wrap">
                                    <div class="flex-input input-radio-area">
                                        <input class="d-none input-form-radio" type="radio" name="patient_radio" id="new-patient">
                                        <label class="form-label-order mb-0" for="new-patient">
                                            New Patient
                                        </label>
                                    </div>
                                    <div class="flex-input input-radio-area">
                                        <input class="d-none input-form-radio" type="radio" name="patient_radio" id="existing-patient">
                                        <label class="form-label-order mb-0" for="existing-patient">
                                            Existing Patient
                                        </label>
                                    </div>
                                </div>
                                <h3 class="form-sm-title mb-5">What would you like to order?</h3>
                                <div class="input-area">
                                    <input class="d-none order-imput" type="radio" name="like_to_order" id="standard-jase">
                                    <label class="form-label" for="standard-jase">
                                        <span class="radio-circle"></span>
                                        Standard Jase Case (18 or order)
                                    </label>
                                </div>
                                <div class="input-area">
                                    <input class="d-none order-imput" type="radio" name="like_to_order" id="kid-case">
                                    <label class="form-label" for="kid-case">
                                        <span class="radio-circle"></span>
                                        Kid Case (2-11 years of age*)
                                    </label>
                                </div>
                                <div class="input-area">
                                    <input class="d-none order-imput" type="radio" name="like_to_order" id="teen-case">
                                    <label class="form-label" for="teen-case">
                                        <span class="radio-circle"></span>
                                        Teen Case (12-17 years of age*)
                                    </label>
                                </div>
                                <button type="button" class="form-btn next-step mt-4">Continue</button>
                                <p class="form-para mt-5">* You must be the legal guardian if placing an order for a minor. Existing patients may purchase add-ons such as Ivermectin independently. New patients must purchase a Jase Case to qualify for purchasing add-ons</p>
                            </div>

                            <div id="step-2" class="form-step-area step step-2">
                                <h1 class="form-title">Welcome</h1>
                                <h2 class="form-md-title mt-4 mb-5">Let’s start building your Case</h2>
                                <h3 class="form-sm-title mb-5">Who is this order for?</h3>
                    
                                <h3 class="form-sm-title mb-5">What would you like to order?</h3>
                                <div class="input-area">
                                    <input class="d-none order-imput" type="radio" name="like_to_order" id="standard-jase">
                                    <label class="form-label" for="standard-jase">
                                        <span class="radio-circle"></span>
                                        Standard Jase Case (18 or order)
                                    </label>
                                </div>
                                <div class="input-area">
                                    <input class="d-none order-imput" type="radio" name="like_to_order" id="kid-case">
                                    <label class="form-label" for="kid-case">
                                        <span class="radio-circle"></span>
                                        Kid Case (2-11 years of age*)
                                    </label>
                                </div>
                                <div class="input-area">
                                    <input class="d-none order-imput" type="radio" name="like_to_order" id="teen-case">
                                    <label class="form-label" for="teen-case">
                                        <span class="radio-circle"></span>
                                        Teen Case (12-17 years of age*)
                                    </label>
                                </div>
                                <button type="button" class="form-btn next-step mt-4">Continue</button>
                                <p class="form-para mt-5">* You must be the legal guardian if placing an order for a minor. Existing patients may purchase add-ons such as Ivermectin independently. New patients must purchase a Jase Case to qualify for purchasing add-ons</p>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>


    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <script>
        // step form js


let step = 1;


$(".next-step").click(function () {
  setUpdate((step = step + 1));
});

$(".step-pre-btn").click(function () {
  setUpdate((step = step - 1));
});

function setUpdate(step) {
  $(`.step`).removeClass("active");
  $(`.step-${step}`).addClass("active");
}
    </script>
</body>
</html>