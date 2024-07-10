<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/fev-icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <div class="col-12">

                            <div id="step-1" class="form-step-area step step-1 active">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-6">
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
                                </div>
                            </div>

                            <div id="step-2" class="form-step-area step step-2">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-6 col-lg-4 padd-x15px">
                                        <h2 class="form-sb-title text-start">Country Selection</h2>
                                        <h3 class="form-sm-title text-start mt-4 mb-5">Which country are you located?</h3>
                                        <div class="select-to-area mb-4">
                                            <select class="js-example-basic-single step-form-select d-none" name="state">
                                                <option value="United-State">United State</option>
                                                <option value="Canada">Canada</option>
                                            </select>
                                            <i class="fa-solid fa-chevron-down select-angle"></i>
                                        </div>
                                        <button type="button" class="form-btn next-step mt-5">Continue</button>
                                    </div>
                                </div>
                            </div>

                            <div id="step-3" class="form-step-area step step-3">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-6 col-lg-4 padd-x15px">
                                        <h2 class="form-sb-title text-start">Personal INFO</h2>
                                        <h3 class="form-sm-title text-start mt-4 mb-5">What is your biological sex?</h3>
                                        <div class="input-area">
                                            <input class="d-none order-imput" type="radio" name="male_female" id="Male">
                                            <label class="form-label" for="Male">
                                                <span class="radio-circle"></span>
                                                Male
                                            </label>
                                        </div>
                                        <div class="input-area">
                                            <input class="d-none order-imput" type="radio" name="male_female" id="female">
                                            <label class="form-label" for="female">
                                                <span class="radio-circle"></span>
                                                Teen Case (12-17 years of age*)
                                            </label>
                                        </div>
                                        <button type="button" class="form-btn next-step mt-3">Continue</button>
                                    </div>
                                </div>
                            </div>

                            <div id="step-4" class="form-step-area step step-4">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-8 padd-x25px">
                                        <h2 class="form-sb-title text-start">Allergies</h2>
                                        <h3 class="form-sm-title text-start mt-3 mb-5">Please Indicate if you have allergies to any of the Medications Listed:</h3>
                                        <div class="flex-checkbox">
                                            <div class="input-area">
                                                <input class="d-none form-checkox" type="checkbox" name="Allergies" id="Cephalosporins">
                                                <label class="form-label" for="Cephalosporins">
                                                    <span class="checkbox-square"></span>
                                                    Cephalosporins (Keflex/cephalexin, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox" type="checkbox" name="Allergies" id="Penicillin">
                                                <label class="form-label" for="Penicillin">
                                                    <span class="checkbox-square"></span>
                                                    Penicillin's (Amoxicillin, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox" type="checkbox" name="Allergies" id="Fluoroquinolones">
                                                <label class="form-label" for="Fluoroquinolones">
                                                    <span class="checkbox-square"></span>
                                                    Fluoroquinolones (Ciprofloxacin, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox" type="checkbox" name="Allergies" id="Macrolides">
                                                <label class="form-label" for="Macrolides">
                                                    <span class="checkbox-square"></span>
                                                    Macrolides (Azithromycin, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox" type="checkbox" name="Allergies" id="Metronidazole">
                                                <label class="form-label" for="Metronidazole">
                                                    <span class="checkbox-square"></span>
                                                    Metronidazole
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox" type="checkbox" name="Allergies" id="Sulfonamides">
                                                <label class="form-label" for="Sulfonamides">
                                                    <span class="checkbox-square"></span>
                                                    Sulfonamides (Sulfa, Bactrim)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox" type="checkbox" name="Allergies" id="Tetracyclines">
                                                <label class="form-label" for="Tetracyclines">
                                                    <span class="checkbox-square"></span>
                                                    Tetracyclines (Doxycycline, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox" type="checkbox" name="Allergies" id="Clindamycin">
                                                <label class="form-label" for="Clindamycin">
                                                    <span class="checkbox-square"></span>
                                                    Clindamycin
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox" type="checkbox" name="Allergies" id="Other">
                                                <label class="form-label" for="Other">
                                                    <span class="checkbox-square"></span>
                                                    Other
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox" type="checkbox" name="Allergies" id="None-of-the-above">
                                                <label class="form-label" for="None-of-the-above">
                                                    <span class="checkbox-square"></span>
                                                    None of the above
                                                </label>
                                            </div>
                                        </div>
                                        <button type="button" class="form-btn next-step">Continue</button>
                                    </div>
                                </div>
                            </div>

                            <div id="step-5" class="form-step-area step step-5">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-8">
                                        <div class="loader-area d-none">
                                            <h3 class="form-sm-title text-start mb-5">Please Indicate if you have allergies to any of the Medications Listed:</h3>
                                            <div class="spinner-border" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                        <h2 class="form-sb-title text-center mb-5">Based on your encounter and medical history. we’ve listed <br> your prescription options below.</h2>
                                        <h3 class="form-sm-title text-center mb-5">Emergency Medication Supply - Base Case</h3>
                                        <div class="emergency-medication-list">

                                            <div class="emergency-medication-area">
                                                <div class="emergency-medication-img-area">
                                                    <img class="img-fluid emergency-medication-img" src="./assets/images/medicine-img-1.png" alt="">
                                                </div>
                                                <div class="emergency-medication-detail">
                                                    <h3 class="medicine-title mb-4 text-start">Amoxicillin-Clavulanate 875-125 mg</h3>
                                                    <div class="d-flex justify-content-between flex-wrap gap-2">
                                                        <div class="text-start medication-detail-left">
                                                            <p class="medicine-discrip">Amoxicillin-Clavulanate, also known as Augmentin, is a beta-lactam antibiotic. It belongs to the of antibiotics.</p>
                                                            <span class="medicine-qty"><strong>Qty:</strong>28 tables</span>
                                                        </div>
                                                        <div class="medication-detail-right">
                                                            <h4 class="treated-title text-start">Condition Treated:</h4>
                                                            <ul class="condition-treated-list">
                                                                <li class="">
                                                                    <span class="medicine-discrip d-block mb-1 mt-0">Pneumonia</span>
                                                                </li>
                                                                <li class="">
                                                                    <span class="medicine-discrip d-block mb-1 mt-0">Dental Infection</span>
                                                                </li>
                                                                <li class="">
                                                                    <span class="medicine-discrip d-block mb-1 mt-0">Sinusits</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="emergency-medication-area">
                                                <div class="emergency-medication-img-area">
                                                    <img class="img-fluid emergency-medication-img" src="./assets/images/medicine-img-2.png" alt="">
                                                </div>
                                                <div class="emergency-medication-detail">
                                                    <h3 class="medicine-title mb-4 text-start">Azithromycin 250 mg(Z-Pak)</h3>
                                                    <div class="d-flex justify-content-between flex-wrap gap-2">
                                                        <div class="text-start medication-detail-left">
                                                            <p class="medicine-discrip">Azithromycin, also know as Zithromax or Z-pak, is a macrolide antibiotic.</p>
                                                            <span class="medicine-qty"><strong>Qty:</strong>22 tables</span>
                                                        </div>
                                                        <div class="medication-detail-right">
                                                            <h4 class="treated-title text-start">Condition Treated:</h4>
                                                            <ul class="condition-treated-list">
                                                                <li class="">
                                                                    <span class="medicine-discrip d-block mb-1 mt-0">Strep Throat</span>
                                                                </li>
                                                                <li class="">
                                                                    <span class="medicine-discrip d-block mb-1 mt-0">Ear Infection</span>
                                                                </li>
                                                                <li class="">
                                                                    <span class="medicine-discrip d-block mb-1 mt-0">Lyme Disease</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="emergency-medication-area">
                                                <div class="emergency-medication-img-area">
                                                    <img class="img-fluid emergency-medication-img" src="./assets/images/medicine-img-1.png" alt="">
                                                </div>
                                                <div class="emergency-medication-detail">
                                                    <h3 class="medicine-title mb-4 text-start">Ciprofloxacin 500 mg</h3>
                                                    <div class="d-flex justify-content-between flex-wrap gap-2">
                                                        <div class="text-start medication-detail-left">
                                                            <p class="medicine-discrip">Ciprofloxacin, also known as Cipro, is an antibiotic in the fluoroquinolone</p>
                                                            <span class="medicine-qty"><strong>Qty:</strong>28 tables</span>
                                                        </div>
                                                        <div class="medication-detail-right">
                                                            <h4 class="treated-title text-start">Condition Treated:</h4>
                                                            <ul class="condition-treated-list">
                                                                <li class="">
                                                                    <span class="medicine-discrip d-block mb-1 mt-0">Pneumonia</span>
                                                                </li>
                                                                <li class="">
                                                                    <span class="medicine-discrip d-block mb-1 mt-0">Dental Infection</span>
                                                                </li>
                                                                <li class="">
                                                                    <span class="medicine-discrip d-block mb-1 mt-0">Sinusits</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="emergency-medication-area">
                                                <div class="emergency-medication-img-area">
                                                    <img class="img-fluid emergency-medication-img" src="./assets/images/medicine-img-1.png" alt="">
                                                </div>
                                                <div class="emergency-medication-detail">
                                                    <h3 class="medicine-title mb-4 text-start">Doxycycline 100 mg</h3>
                                                    <div class="d-flex justify-content-between flex-wrap gap-2">
                                                        <div class="text-start medication-detail-left">
                                                            <p class="medicine-discrip">Doxycycline, or Doxy, is an antibiotic in the tetracycline class.</p>
                                                            <span class="medicine-qty"><strong>Qty:</strong>28 tables</span>
                                                        </div>
                                                        <div class="medication-detail-right">
                                                            <h4 class="treated-title text-start">Condition Treated:</h4>
                                                            <ul class="condition-treated-list">
                                                                <li class="">
                                                                    <span class="medicine-discrip d-block mb-1 mt-0">Pneumonia</span>
                                                                </li>
                                                                <li class="">
                                                                    <span class="medicine-discrip d-block mb-1 mt-0">Dental Infection</span>
                                                                </li>
                                                                <li class="">
                                                                    <span class="medicine-discrip d-block mb-1 mt-0">Sinusits</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="total text-end mt-5">Base Case Price: <span>$ 250.95</span></h4>
                                        </div>
                                        <button type="button" class="form-btn mb-5 mt-5">Select Add-Ons</button>
                                        <div class="promotion-code-area">
                                            <h2 class="form-sb-title text-start mb-4">Enter promotion code:</h2>
                                            <div class="promotion-input-area">
                                                <input class="form-input" type="number" name="promotion_code" id="">
                                                <button class="form-btn w-150px" type="button">Apply</button>
                                            </div>
                                            <div class="your-total-area">
                                                <span class="total">Your Total</span>
                                                <span class="total">$250.95</span>
                                            </div>
                                        </div>
                                        <p class="form-note mt-5 mb-5">If you'd like to continue with your purchase, click the "Proceed with Encounter" button below.</p>
                                        <button type="button" class="form-btn next-step">Proceed with Encounter</button>
                                    </div>
                                </div>
                            </div>

                            <div id="step-6" class="form-step-area step step-6">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-8 col-lg-6 padd-x25px">
                                        <h2 class="form-sb-title text-start">Contact Info</h2>
                                        <h3 class="form-sm-title text-start">Name as it appears on your government issued ID</h3>
                                        <div class="form-input-area">
                                            <input class="form-input w-100 mx-w100" type="text" placeholder="Henry" name="" id="">
                                        </div>
                                        <div class="form-input-area">
                                            <input class="form-input w-100 mx-w100" type="text" placeholder="Millan" name="" id="">
                                        </div>
                                        <h3 class="form-sm-title text-start">Email</h3>
                                        <div class="form-input-area">
                                            <input class="form-input w-100 mx-w100" type="text" placeholder="henry.millan@gmail.com" name="" id="">
                                        </div>
                                        <h3 class="form-sm-title text-start">Date of Birth</h3>
                                        <div class="date-of-birth-area">
                                            <div class="date-of-birth ">
                                                <div class="position-relative">
                                                    <select class="form-select form-input mx-w100" aria-label="Default select example">
                                                        <option selected value="January">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </div>
                                                <p class="form-note text-start mt-4">Month</p>
                                            </div>
                                            <div class="date-of-birth position-relative">
                                                <div class="position-relative">
                                                    <select class="form-select form-input mx-w100" aria-label="Default select example">
                                                        <option disabled="" value=""></option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </div>
                                                <p class="form-note text-start mt-4">Day</p>
                                            </div>
                                            <div class="date-of-birth">
                                                <div class="position-relative">
                                                    <select class="form-select form-input mx-w100" id='birth-year-dropdown'>
                                                        <option selected disabled="" value="">Select (YYYY)</option>
                                                    </select>
                                                    <i class="fa-solid fa-chevron-down"></i>
                                                </div>
                                                <p class="form-note text-start mt-4">Year</p>
                                            </div>
                                        </div>
                                        <h2 class="form-sb-title text-start text-black">Must be 18 years of age of order</h2>
                                        <button type="button" class="form-btn verify-popup-opn mt-5 mb-5">Verify</button>
                                        <p class="form-note">Your data is secure and we won’t share your info</p>
                                        <a class="form-note d-block mt-3" href="#">
                                            Review Privacy Policy
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div id="step-7" class="form-step-area step step-7">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-6 col-lg-4 padd-x15px">
                                        <h2 class="form-sb-title text-start mb-4">Mobile phone number</h2>
                                        <div class="form-input-area">
                                            <input class="form-input w-100 mx-w100" type="number" placeholder="202-564-0101" name="" id="">
                                        </div>
                                        <p class="form-sb-title text-start text-black">Needed to receive important text messages from the physician</p>
                                        <button type="button" class="form-btn next-step mt-5">Continue</button>
                                    </div>
                                </div>
                            </div>

                            <div id="step-8" class="form-step-area step step-8">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <h2 class="form-sb-title text-start">marketing preference</h2>
                                        <h3 class="form-sm-title text-start">As a valued customer, we’d love to stay into touch with things like offers and ideas. You can un-subscribe whenever you like</h3>
                                        <div class="input-area">
                                            <input class="d-none form-checkox" type="checkbox" name="Allergies" id="Email">
                                            <label class="form-label" for="Email">
                                                <span class="checkbox-square"></span>
                                                Email
                                            </label>
                                        </div>
                                        <div class="input-area">
                                            <input class="d-none form-checkox" type="checkbox" name="Allergies" id="Direct-Mail">
                                            <label class="form-label" for="Direct-Mail">
                                                <span class="checkbox-square"></span>
                                                Direct Mail
                                            </label>
                                        </div>
                                        <div class="input-area">
                                            <input class="d-none form-checkox" type="checkbox" name="Allergies" id="Customized-Online-Advertising">
                                            <label class="form-label" for="Customized-Online-Advertising">
                                                <span class="checkbox-square"></span>
                                                Customized Online Advertising
                                            </label>
                                        </div>
                                        <button type="button" class="form-btn next-step mt-5">Continue</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>


    <div class="verify-code-popup-wrap">
        <div class="verify-code-popup">
            <h3 class="popup-title">Verify your code</h3>
            <div class="popup-center-area">
                <p class="form-sb-title text-start m-0 text-black">We’ve send an authorization code to:</p>
                <h3 class="form-sm-title fnts-22px mb-4 mt-4 text-start">henry.millan@gmail.com</h3>
                <p class="form-sb-title text-start mb-1 text-black">Please enter the code in the field below in order to continue.</p>
                <p class="form-sb-title text-start text-black mb-5"><strong>NOTE:</strong> The code will expire in 24 hours</p>
                <div class="form-input-area mb-5">
                    <input class="form-input w-100 mx-w100" type="number" placeholder="Your Code" value="" name="" id="">
                </div>
            </div>
            <div class="popup-btn-area">
                <button type="button" class="form-btn verify-popup-opn bg-white color-red">Cancel</button>
                <button type="button" class="form-btn next-step">Continue</button>
            </div>
        </div>
    </div>


    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        // step form js


        let step = 1;


        $(".next-step").click(function() {
            setUpdate((step = step + 1));
            $('.verify-code-popup-wrap').removeClass('active')
        });

        $(".step-pre-btn").click(function() {
            setUpdate((step = step - 1));
        });

        function setUpdate(step) {
            $(`.step`).removeClass("active");
            $(`.step-${step}`).addClass("active");
        }

        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        // birth year js

        let dateDropdown = document.getElementById("birth-year-dropdown");

        let currentYear = new Date().getFullYear();
        let earliestYear = 1914;

        while (currentYear >= earliestYear) {
            let dateOption = document.createElement("option");
            dateOption.text = currentYear;
            dateOption.value = currentYear;
            dateDropdown.add(dateOption);
            currentYear -= 1;
        }

        // popup js

        $('.verify-popup-opn').click(function() {
            $('.verify-code-popup-wrap').toggleClass('active')
        })
    </script>
</body>

</html>