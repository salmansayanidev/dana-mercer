<?php
include "header.php"
?>

<main>
    <section class="form-section">
        <div id="progress-bar"></div>
        <img class="bg-left-img" src="./assets/images/logo-bg-img.png" alt="">
        <form action="thankyou.php">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div id="step-1" class="form-step-area step step-1 active">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8 col-xxl-6 col-xl-7">
                                    <h1 class="form-title">Welcome</h1>
                                    <h2 class="form-md-title mt-4 mb-5">Let’s start building your Case</h2>
                                    <h3 class="form-sm-title mb-5">Who is this order for?</h3>
                                    <div class="flex-input-area d-flex justify-content-center align-items-center gap-4 flex-wrap">
                                        <div class="flex-input input-radio-area">
                                            <input class="d-none input-form-radio" value="new-patient" type="radio" name="patient_radio" id="new-patient">
                                            <label class="form-label-order mb-0" for="new-patient">
                                                New Patient
                                            </label>
                                        </div>
                                        <div class="flex-input input-radio-area">
                                            <input class="d-none input-form-radio" value="existing-patient" type="radio" name="patient_radio" id="existing-patient">
                                            <label class="form-label-order mb-0" for="existing-patient">
                                                Existing Patient
                                            </label>
                                        </div>
                                    </div>
                                    <h3 class="form-sm-title mb-5">What would you like to order?</h3>
                                    <div class="input-area">
                                        <input class="d-none order-imput" value="standard-jase" type="radio" name="like_to_order" id="standard-jase">
                                        <label class="form-label" for="standard-jase">
                                            <span class="radio-circle"></span>
                                            Standard Jase Case (18 or order)
                                        </label>
                                    </div>
                                    <div class="input-area">
                                        <input class="d-none order-imput" value="kid-case" type="radio" name="like_to_order" id="kid-case">
                                        <label class="form-label" for="kid-case">
                                            <span class="radio-circle"></span>
                                            Kid Case (2-11 years of age*)
                                        </label>
                                    </div>
                                    <div class="input-area">
                                        <input class="d-none order-imput" value="teen-case" type="radio" name="like_to_order" id="teen-case">
                                        <label class="form-label" for="teen-case">
                                            <span class="radio-circle"></span>
                                            Teen Case (12-17 years of age*)
                                        </label>
                                    </div>
                                    <button type="button" class="form-btn next-step mt-4 validate-btn">Continue</button>
                                    <p class="form-para mt-5">* You must be the legal guardian if placing an order for a minor. Existing patients may purchase add-ons such as Ivermectin independently. New patients must purchase a Jase Case to qualify for purchasing add-ons</p>
                                </div>
                            </div>
                        </div>

                        <div id="step-2" class="form-step-area step step-2 ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-6 col-lg-6 col-xxl-4 col-xl-5 padd-x15px">
                                    <h2 class="form-sb-title text-start">Country Selection</h2>
                                    <h3 class="form-sm-title text-start mt-4 mb-5">Which country are you located?</h3>
                                    <div class="select-to-area mb-4">
                                        <select data-id="select-country" class="js-example-basic-single country-input step-form-select d-none" name="state">
                                            <option selected disabled>Country</option>
                                            <option value="United-State">United State</option>
                                            <option value="Canada">Canada</option>
                                        </select>
                                        <i class="fa-solid fa-chevron-down select-angle"></i>
                                    </div>
                                    <button type="button" class="form-btn next-step mt-5 validate-btn">Continue</button>
                                    <button type="button" class="step-pre-btn">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="step-3" class="form-step-area step step-3 ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-6 col-lg-6 col-xxl-4 col-xl-5 padd-x15px">
                                    <h2 class="form-sb-title text-start">Personal INFO</h2>
                                    <h3 class="form-sm-title text-start mt-4 mb-5">What is your biological sex?</h3>
                                    <div class="input-area">
                                        <input class="d-none order-imput" value="Male" data-id="male" type="radio" name="male_female" id="Male">
                                        <label class="form-label" for="Male">
                                            <span class="radio-circle"></span>
                                            Male
                                        </label>
                                    </div>
                                    <div class="input-area">
                                        <input class="d-none order-imput" type="radio" value="female" data-id="female" name="male_female" id="female">
                                        <label class="form-label" for="female">
                                            <span class="radio-circle"></span>
                                            Female
                                        </label>
                                    </div>
                                    <button type="button" class="form-btn next-step mt-3 validate-btn">Continue</button>
                                    <button type="button" class="step-pre-btn">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="step-4" class="form-step-area step step-4 ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-12 col-lg-10 col-xxl-8 col-xl-9 padd-x25px">
                                    <div class="allery-checkbox-area">
                                        <h2 class="form-sb-title text-start">Allergies</h2>
                                        <h3 class="form-sm-title text-start mt-3 mb-5">Please Indicate if you have allergies to any of the Medications Listed:</h3>
                                        <div class="flex-checkbox">
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Cephalosporins" value="Cephalosporins" name="Allergies" id="Cephalosporins">
                                                <label class="form-label" for="Cephalosporins">
                                                    <span class="checkbox-square"></span>
                                                    Cephalosporins (Keflex/cephalexin, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Penicillin" value="Penicillin" name="Allergies" id="Penicillin">
                                                <label class="form-label" for="Penicillin">
                                                    <span class="checkbox-square"></span>
                                                    Penicillin's (Amoxicillin, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Fluoroquinolones" value="Fluoroquinolones" name="Allergies" id="Fluoroquinolones">
                                                <label class="form-label" for="Fluoroquinolones">
                                                    <span class="checkbox-square"></span>
                                                    Fluoroquinolones (Ciprofloxacin, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Macrolides" value="Macrolides" name="Allergies" id="Macrolides">
                                                <label class="form-label" for="Macrolides">
                                                    <span class="checkbox-square"></span>
                                                    Macrolides (Azithromycin, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Metronidazole" value="Metronidazole" name="Allergies" id="Metronidazole">
                                                <label class="form-label" for="Metronidazole">
                                                    <span class="checkbox-square"></span>
                                                    Metronidazole
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Sulfonamides" value="Sulfonamides" name="Allergies" id="Sulfonamides">
                                                <label class="form-label" for="Sulfonamides">
                                                    <span class="checkbox-square"></span>
                                                    Sulfonamides (Sulfa, Bactrim)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Tetracyclines" value="Tetracyclines" name="Allergies" id="Tetracyclines">
                                                <label class="form-label" for="Tetracyclines">
                                                    <span class="checkbox-square"></span>
                                                    Tetracyclines (Doxycycline, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Clindamycin" value="Clindamycin" name="Allergies" id="Clindamycin">
                                                <label class="form-label" for="Clindamycin">
                                                    <span class="checkbox-square"></span>
                                                    Clindamycin
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Other" value="Other" name="Allergies" id="Other">
                                                <label class="form-label" for="Other">
                                                    <span class="checkbox-square"></span>
                                                    Other
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="None-of-the-above" value="None-of-the-above" name="Allergies" id="None-of-the-above">
                                                <label class="form-label" for="None-of-the-above">
                                                    <span class="checkbox-square"></span>
                                                    None of the above
                                                </label>
                                            </div>
                                        </div>
                                        <button type="button" class="form-btn next-step allergy-step-btn validate-btn">Continue</button>
                                        <button type="button" class="form-btn allergy-text-btn">Continue</button>
                                        <button type="button" class="step-pre-btn">
                                            <i class="fa-solid fa-arrow-left-long"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8 col-md-10 col-xxl-6 col-xl-7 ">
                                    <div class="allergy-text-area">
                                        <h2 class="form-sm-title text-start">ALLERGIES</h2>
                                        <p class="form-para mb-4">Write the name of the medication and type of reaction experienced. For example: I get hives when taking penicillin. I experience swelling and difficulty breathing when taking ciprofloxacin.</p>
                                        <p class="form-para mb-4">After completing the encounter a JASE physician may reach out to get more information and determine whether or not a prescription for an emergency supply of antibiotics is appropriate for you.</p>
                                        <h3 class="form-sm-title fnts-22px text-start mb-4">Indicate allergies to the medications listed previously.</h3>
                                        <textarea class="form-input w-100 mx-w100 mb-3 allergy-text-input" data-id="allergy-text" name="" id=""></textarea>
                                        <div class="d-flex justify-content-center align-items-center gap-4 mt-4">
                                            <button type="button" class="form-btn allergy-text-area-cancel bg-white text-black">Cancel</button>
                                            <button type="button" class="form-btn next-step allergy-text-area-continue validate-btn">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="step-5" class="form-step-area step step-5 ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-12 col-lg-10 col-xxl-8 col-xl-9 px-65px">
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

                                    <div id="selected-add-ons" class="mt-5">
                                        <h3 class="form-sm-title text-center">Add-Ons</h3>


                                    </div>

                                    <button type="button" class="form-btn add-ons-popup-btn mb-5 mt-5">Select Add-Ons</button>

                                    <div class="promotion-code-area">
                                        <h2 class="form-sb-title text-start mb-4">Enter promotion code:</h2>
                                        <div class="promotion-input-area">
                                            <input class="form-input" type="number" value="" name="promotion_code" id="">
                                            <button class="form-btn w-150px" type="button">Apply</button>
                                        </div>
                                        <div class="your-total-area">
                                            <span class="total">Your Total</span>
                                            <span class="total">$250.95</span>
                                        </div>
                                    </div>
                                    <p class="form-note mt-5 mb-5">If you'd like to continue with your purchase, click the "Proceed with Encounter" button below.</p>
                                    <button type="button" class="form-btn next-step">Proceed with Encounter</button>
                                    <button type="button" class="step-pre-btn">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="select-add-ons-popup-wrap">
                            <div class="select-add-ons-popup">
                                <div class="select-add-ons-top">
                                    <h2 class="form-sb-title text-black">SELECT ADD-ONS</h2>
                                </div>

                                <div class="select-add-ons-list">

                                    <div class="add-ons-medication mb-4">
                                        <input type="checkbox" class="d-none add-ons-medication-check" name="add_ons_medication" id="add_ons_medication-1">
                                        <label class="add-ons-medication-area p-4" for="add_ons_medication-1" data-title="Doxycycline 100 mg" data-price="$20.00" data-description="Doxycycline, or Doxy, is an antibiotic in the tetracycline class." data-qty="28 tablets" data-treats="Pneumonia, Dental Infection, Sinusitis" data-image="./assets/images/medicine-img-1.png">
                                            <span class="checkbox-square"></span>
                                            <div class="emergency-medication-img-area">
                                                <img class="img-fluid emergency-medication-img" src="./assets/images/medicine-img-1.png" alt="">
                                            </div>
                                            <div class="emergency-medication-detail">
                                                <div class="mb-4 medication-title-area">
                                                    <h3 class="medicine-title text-start">Doxycycline 100 mg</h3>
                                                    <span class="medicine-qty"><strong class="medicine-peice">$20.00</strong></span>
                                                </div>
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
                                        </label>
                                    </div>

                                    <div class="add-ons-medication mb-4">
                                        <input type="checkbox" class="d-none add-ons-medication-check" name="add_ons_medication" id="add_ons_medication-2">
                                        <label class="add-ons-medication-area p-4" for="add_ons_medication-2" data-title="Amoxicillin-Clavulanate 875-125 mg" data-price="$50.00" data-description="Doxycycline, or Doxy, is an antibiotic in the tetracycline class." data-qty="20 tablets" data-treats="Pneumonia, Dental Infection, Sinusitis" data-image="./assets/images/medicine-img-2.png">
                                            <span class="checkbox-square"></span>
                                            <div class="emergency-medication-img-area">
                                                <img class="img-fluid emergency-medication-img" src="./assets/images/medicine-img-2.png" alt="">
                                            </div>
                                            <div class="emergency-medication-detail">
                                                <div class="mb-4 medication-title-area">
                                                    <h3 class="medicine-title text-start">Amoxicillin-Clavulanate 875-125 mg</h3>
                                                    <span class="medicine-qty"><strong class="medicine-peice">$50.00</strong></span>
                                                </div>
                                                <div class="d-flex justify-content-between flex-wrap gap-2">
                                                    <div class="text-start medication-detail-left">
                                                        <p class="medicine-discrip">Doxycycline, or Doxy, is an antibiotic in the tetracycline class.</p>
                                                        <span class="medicine-qty"><strong>Qty:</strong>20 tables</span>
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
                                        </label>
                                    </div>

                                    <div class="add-ons-medication mb-4">
                                        <input type="checkbox" class="d-none add-ons-medication-check" name="add_ons_medication" id="add_ons_medication-3">
                                        <label class="add-ons-medication-area p-4" for="add_ons_medication-3" data-title="Doxycycline 100 mg" data-price="$20.00" data-description="Doxycycline, or Doxy, is an antibiotic in the tetracycline class." data-qty="28 tablets" data-treats="Pneumonia, Dental Infection, Sinusitis" data-image="./assets/images/medicine-img-1.png">
                                            <span class="checkbox-square"></span>
                                            <div class="emergency-medication-img-area">
                                                <img class="img-fluid emergency-medication-img" src="./assets/images/medicine-img-1.png" alt="">
                                            </div>
                                            <div class="emergency-medication-detail">
                                                <div class="mb-4 medication-title-area">
                                                    <h3 class="medicine-title text-start">Doxycycline 100 mg</h3>
                                                    <span class="medicine-qty"><strong class="medicine-peice">$20.00</strong></span>
                                                </div>
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
                                        </label>
                                    </div>

                                    <div class="add-ons-medication mb-4">
                                        <input type="checkbox" class="d-none add-ons-medication-check" name="add_ons_medication" id="add_ons_medication-4">
                                        <label class="add-ons-medication-area p-4" for="add_ons_medication-4" data-title="Amoxicillin-Clavulanate 875-125 mg" data-price="$50.00" data-description="Doxycycline, or Doxy, is an antibiotic in the tetracycline class." data-qty="20 tablets" data-treats="Pneumonia, Dental Infection, Sinusitis" data-image="./assets/images/medicine-img-2.png">
                                            <span class="checkbox-square"></span>
                                            <div class="emergency-medication-img-area">
                                                <img class="img-fluid emergency-medication-img" src="./assets/images/medicine-img-2.png" alt="">
                                            </div>
                                            <div class="emergency-medication-detail">
                                                <div class="mb-4 medication-title-area">
                                                    <h3 class="medicine-title text-start">Amoxicillin-Clavulanate 875-125 mg</h3>
                                                    <span class="medicine-qty"><strong class="medicine-peice">$50.00</strong></span>
                                                </div>
                                                <div class="d-flex justify-content-between flex-wrap gap-2">
                                                    <div class="text-start medication-detail-left">
                                                        <p class="medicine-discrip">Doxycycline, or Doxy, is an antibiotic in the tetracycline class.</p>
                                                        <span class="medicine-qty"><strong>Qty:</strong>20 tables</span>
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
                                        </label>
                                    </div>

                                </div>

                                <div class="select-add-ons-end d-flex justify-content-center align-items-center gap-4">
                                    <button type="button" class="form-btn bg-white text-black add-ons-popup-btn">Cancel</button>
                                    <button type="button" disabled class="form-btn add-ons-popup-cls-btn">Add Selected Medication</button>
                                </div>
                            </div>
                        </div>

                        <div id="step-6" class="form-step-area step step-6 ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8 col-xxl-6 col-xl-7  padd-x25px">
                                    <h2 class="form-sb-title text-start">Contact Info</h2>
                                    <h3 class="form-sm-title text-start">Name as it appears on your government issued ID</h3>
                                    <div class="form-input-area">
                                        <input class="form-input w-100 mx-w100" type="text" value="" placeholder="Henry" name="" id="">
                                    </div>
                                    <div class="form-input-area">
                                        <input class="form-input w-100 mx-w100" type="text" value="" placeholder="Millan" name="" id="">
                                    </div>
                                    <h3 class="form-sm-title text-start">Email</h3>
                                    <div class="form-input-area">
                                        <input class="form-input w-100 mx-w100" type="email" value="" placeholder="henry.millan@gmail.com" name="" id="">
                                    </div>
                                    <h3 class="form-sm-title text-start">Date of Birth</h3>
                                    <div class="date-of-birth-area">
                                        <div class="date-of-birth ">
                                            <div class="position-relative">
                                                <select class="form-select form-input mx-w100" id="birth-month-dropdown" aria-label="Default select example">
                                                    <option selected value=""></option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                            <p class="form-note text-start mt-4">Month</p>
                                        </div>
                                        <div class="date-of-birth position-relative">
                                            <div class="position-relative">
                                                <select class="form-select form-input mx-w100" id="birth-day-dropdown" aria-label="Default select example">
                                                    <option disabled="" selected value=""></option>
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
                                                    <option selected disabled></option>
                                                </select>
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                            <p class="form-note text-start mt-4">Year</p>
                                        </div>
                                    </div>
                                    <span class="error text-start">Your age is under 18. You are not eligible </span>
                                    <h2 class="form-sb-title text-start text-black">Must be 18 years of age of order</h2>
                                    <button type="button" class="form-btn verify-popup-opn mt-5 mb-5 birth-select validate-btn">Verify</button>
                                    <button type="button" class="step-pre-btn">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </button>
                                    <p class="form-note">Your data is secure and we won’t share your info</p>
                                    <a class="form-note d-block mt-3" href="#">
                                        Review Privacy Policy
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="verify-code-popup-wrap">
                            <div class="verify-code-popup">
                                <h3 class="popup-title upper-case">Verify your code</h3>
                                <div class="popup-center-area">
                                    <p class="form-sb-title family-regular text-start m-0 text-black">We’ve send an authorization code to:</p>
                                    <h3 class="form-sm-title fnts-22px mb-4 mt-4 text-start">henry.millan@gmail.com</h3>
                                    <p class="form-sb-title family-regular text-start mb-1 text-black">Please enter the code in the field below in order to continue.</p>
                                    <p class="form-sb-title family-regular text-start text-black mb-5"><strong>NOTE:</strong> The code will expire in 24 hours</p>
                                    <div class="form-input-area mb-5">
                                        <input class="form-input w-100 mx-w100 verify-code-input" type="text" placeholder="Your Code" value="" name="" id="">
                                    </div>
                                </div>
                                <div class="popup-btn-area">
                                    <button type="button" class="form-btn verify-popup-opn bg-white color-red ">Cancel</button>
                                    <button type="button" class="form-btn next-step verify-cont-btn" disabled>Continue</button>
                                </div>
                            </div>
                        </div>

                        <div id="step-7" class="form-step-area step step-7 ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 col-lg-6 col-xxl-4 col-xl-5 padd-x15px">
                                    <h2 class="form-sb-title text-start mb-4">Mobile phone number</h2>
                                    <div class="form-input-area">
                                        <input class="form-input w-100 mx-w100" type="text" value="" placeholder="202-564-0101" name="" id="mobile-number">
                                    </div>
                                    <p class="form-sb-title text-start text-black">Needed to receive important text messages from the physician</p>
                                    <button type="button" class="form-btn next-step mt-5 validate-btn">Continue</button>
                                    <button type="button" class="step-pre-btn">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="step-8" class="form-step-area step step-8 ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 col-lg-6 col-xxl-4 col-xl-5 padd-x15px">
                                    <h2 class="form-sb-title text-start">Personal INFO</h2>
                                    <h3 class="form-sm-title text-start mt-4 mb-5">What is your biological sex?</h3>
                                    <div class="input-area">
                                        <input class="d-none order-imput" type="radio" data-id="male" value="Male" name="male_female_2" id="Male-2">
                                        <label class="form-label" for="Male-2">
                                            <span class="radio-circle"></span>
                                            Male
                                        </label>
                                    </div>
                                    <div class="input-area">
                                        <input class="d-none order-imput" type="radio" data-id="female" value="female" name="male_female_2" id="female-2">
                                        <label class="form-label" for="female-2">
                                            <span class="radio-circle"></span>
                                            Female
                                        </label>
                                    </div>
                                    <button type="button" class="form-btn next-step mt-3 validate-btn">Continue</button>
                                    <button type="button" class="step-pre-btn">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="step-9" class="form-step-area step step-9">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 col-lg-6 col-xxl-4 col-xl-5">
                                    <h2 class="form-sb-title text-start">marketing preference</h2>
                                    <h3 class="form-sm-title text-start">As a valued customer, we’d love to stay into touch with things like offers and ideas. You can un-subscribe whenever you like</h3>
                                    <div class="input-area">
                                        <input class="d-none form-checkox" type="checkbox" value="preference-email" name="marketing_preference" id="Email">
                                        <label class="form-label" for="Email">
                                            <span class="checkbox-square"></span>
                                            Email
                                        </label>
                                    </div>
                                    <div class="input-area">
                                        <input class="d-none form-checkox" type="checkbox" name="marketing_preference" value="Direct-Mail" id="Direct-Mail">
                                        <label class="form-label" for="Direct-Mail">
                                            <span class="checkbox-square"></span>
                                            Direct Mail
                                        </label>
                                    </div>
                                    <div class="input-area">
                                        <input class="d-none form-checkox" type="checkbox" value="Customized-Online-Advertising" name="marketing_preference" id="Customized-Online-Advertising">
                                        <label class="form-label" for="Customized-Online-Advertising">
                                            <span class="checkbox-square"></span>
                                            Customized Online Advertising
                                        </label>
                                    </div>
                                    <button type="button" class="form-btn next-step mt-5 validate-btn">Continue</button>
                                    <button type="button" class="step-pre-btn">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="step-10" class="form-step-area step step-10 ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-11 col-lg-10 col-xxl-8 col-xl-9 px-5">
                                    <h2 class="form-sb-title text-start">Shipping address</h2>
                                    <div class="shipping-input-area">
                                        <div class="form-input-area m-0">
                                            <label class="form-sm-title mb-3  text-start d-block fnts-22px">Street Address 1</label>
                                            <input class="form-input w-100 shipping-input mx-w100" data-id="Street-Address-1" value="" type="text" placeholder="1917 Manor Rd" name="" id="">
                                        </div>
                                        <div class="form-input-area m-0">
                                            <label class="form-sm-title mb-3 text-start d-block fnts-22px">Street Address 2</label>
                                            <input class="form-input w-100 mx-w100 shipping-input" value="" data-id="Street-Address-2" type="text" placeholder="#2054" name="" id="">
                                        </div>
                                        <div class="form-input-area m-0">
                                            <label class="form-sm-title mb-3 text-start d-block fnts-22px">City</label>
                                            <input class="form-input w-100 mx-w100 shipping-input" value="" data-id="City" type="text" placeholder="1917 Manor Rd" name="" id="">
                                        </div>
                                        <div class="form-input-area m-0">
                                            <label class="form-sm-title mb-3 text-start d-block fnts-22px">State\Province</label>
                                            <div class="position-relative">
                                                <select class="form-select form-input mx-w100 shipping-input" data-id="State-Province" aria-label="Default select example">
                                                    <option value="Texas">Texas</option>
                                                    <option value="Example1">Example1</option>
                                                    <option value="Example2">Example2</option>
                                                </select>
                                                <i class="fa-solid fa-chevron-down select-angle-icon"></i>
                                            </div>
                                        </div>
                                        <div class="form-input-area m-0">
                                            <label class="form-sm-title mb-3 text-start d-block fnts-22px">Postal / Zip Code</label>
                                            <input class="form-input w-100 mx-w100 shipping-input" data-id="Zip-Code" type="number" value="" placeholder="78223" name="" id="">
                                        </div>
                                        <div class="form-input-area m-0">
                                            <label class="form-sm-title mb-3 text-start d-block fnts-22px">Country</label>
                                            <div class="position-relative">
                                                <select data-id="select-country" disabled class="form-select form-input mx-w100 country-input" aria-label="Default select example">
                                                    <option value="">Country</option>
                                                    <option value="United-State">United State</option>
                                                    <option value="Canada">Canada</option>
                                                </select>
                                                <i class="fa-solid fa-chevron-down select-angle-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="form-btn shipping-popup-btn verify-address mt-5 validate-btn">Verify Address</button>
                                    <button type="button" class="form-btn mt-5 validate-btn next-step verified-address-btn">Verified Address</button>
                                    <button type="button" class="step-pre-btn">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="shipping-address-popup-wrap popup">
                            <div class="shipping-address-popup">
                                <h3 class="popup-title upper-case">Confirm shipping address</h3>
                                <div class="popup-center-area">
                                    <div class="form-input-area mb-4">
                                        <label class="form-sm-title mb-3 text-start d-block fnts-22px">Street Address 1</label>
                                        <input class="form-input w-100 mx-w100 shipping-input" data-id="Street-Address-1" readonly type="text" value="" name="" id="">
                                    </div>
                                    <div class="form-input-area mb-4">
                                        <label class="form-sm-title mb-3 text-start d-block fnts-22px">Street Address 2</label>
                                        <input class="form-input w-100 mx-w100 shipping-input" data-id="Street-Address-2" readonly type="text" value="" name="" id="">
                                    </div>
                                    <div class="form-input-area mb-4">
                                        <label class="form-sm-title mb-3 text-start d-block fnts-22px">City</label>
                                        <input class="form-input w-100 mx-w100 shipping-input" data-id="City" readonly type="text" value="" name="" id="">
                                    </div>
                                    <div class="form-input-area mb-4">
                                        <label class="form-sm-title mb-3 text-start d-block fnts-22px">State\Province</label>
                                        <input class="form-input w-100 mx-w100 shipping-input" data-id="State-Province" readonly type="text" value="" name="" id="">
                                    </div>
                                    <div class="form-input-area mb-4">
                                        <label class="form-sm-title mb-3 text-start d-block fnts-22px">Postal / Zip Code</label>
                                        <input class="form-input w-100 mx-w100 shipping-input" data-id="Zip-Code" readonly type="number" value="" name="" id="">
                                    </div>
                                    <div class="form-input-area mb-4">
                                        <label class="form-sm-title mb-3 text-start d-block fnts-22px">Country</label>
                                        <input class="form-input w-100 mx-w100 country-input" readonly data-id="select-country" type="text" value="" name="" id="">
                                    </div>
                                    <p class="form-note text-start mb-5 text-black ">Is this address where you want to ship the meds?</p>
                                </div>
                                <div class="popup-btn-area">
                                    <button type="button" class="form-btn shipping-popup-btn bg-white color-red">Cancel</button>
                                    <button type="button" class="form-btn shipping-popup-btn confirm-shipp-btn">Continue</button>
                                </div>
                            </div>
                        </div>

                        <div id="step-11" class="form-step-area step step-11">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 col-lg-6 col-xxl-4 col-xl-5 padd-x25px">
                                    <div class="Doctors-visits">
                                        <h2 class="form-sb-title upper-case text-start">Doctors visits</h2>
                                        <p class="form-sm-title text-start">Do you have a primary care provider and have you had a general health checkup in the last 2 years</p>
                                        <div class="flex-input-area d-flex justify-content-center align-items-center gap-5">
                                            <div class="flex-input ">
                                                <input class="d-none input-form-radio" type="radio" value="Doctors-visits-no" name="Doctors_visits" id="Doctors-visits-no">
                                                <label class="form-label-order width-60px mb-0 doctors_visits_no" for="Doctors-visits-no">
                                                    No
                                                </label>
                                            </div>
                                            <div class="flex-input ">
                                                <input class="d-none input-form-radio" type="radio" value="Doctors-visits-yes" name="Doctors_visits" id="Doctors-visits-yes">
                                                <label class="form-label-order next-step width-60px mb-0" for="Doctors-visits-yes">
                                                    Yes
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Doctors-visits-unabel">
                                        <h2 class="form-sb-title upper-case text-start">UNABLE TO COMPLETE</h2>
                                        <p class="form-sm-title text-start">Unfortunately, our physicians are unable to prescribe medications to you today.</p>
                                        <p class="form-sm-title text-start">We ask that you have a recent health checkup by your primary care doctor in order to ensure that the medications prescribed to you today will be appropriate and safe for you.</p>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="step-pre-btn">
                                <i class="fa-solid fa-arrow-left-long"></i>
                            </button>
                            <button type="button" class="Doctors-visits-btn">
                                <i class="fa-solid fa-arrow-left-long"></i>
                            </button>
                        </div>

                        <div id="step-12" class="form-step-area step step-12 ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 col-lg-6 col-xxl-4 col-xl-5 padd-x25px">
                                    <div class="kidney-liver-disease">
                                        <h2 class="form-sb-title upper-case text-start">kidney or liver disease</h2>
                                        <p class="form-sm-title text-start">Have you ever been diagnosed with kidney or liver disease</p>
                                        <div class="flex-input-area d-flex justify-content-center align-items-center gap-5">
                                            <div class="flex-input ">
                                                <input class="d-none input-form-radio" type="radio" value="kidney-liver-disease-no" name="kidney_liver_disease" id="kidney-liver-disease-no">
                                                <label class="form-label-order next-step width-60px mb-0" for="kidney-liver-disease-no">
                                                    No
                                                </label>
                                            </div>
                                            <div class="flex-input ">
                                                <input class="d-none input-form-radio" type="radio" value="kidney-liver-disease-yes" name="kidney_liver_disease" id="kidney-liver-disease-yes">
                                                <label class="form-label-order width-60px mb-0 kidney-liver-yes" for="kidney-liver-disease-yes">
                                                    Yes
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kidney-liver-disease-unable">
                                        <h2 class="form-sb-title upper-case text-start">UNABLE TO COMPLETE</h2>
                                        <p class="form-sm-title text-start">Unfortunately, our physicians are unable to prescribe medications to you today.</p>
                                        <p class="form-sm-title text-start">We ask that you have a recent health checkup by your primary care doctor in order to ensure that the medications prescribed to you today will be appropriate and safe for you.</p>
                                    </div>
                                    <button type="button" class="step-pre-btn">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </button>
                                    <button type="button" class="Doctors-visits-btn">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="step-13" class="form-step-area step step-13 ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-12 col-lg-10 col-xxl-8 col-xl-9 padd-x25px">
                                    <h2 class="form-sb-title text-start">Allergies</h2>
                                    <h3 class="form-sm-title text-start mt-3 mb-5">Please Indicate if you have allergies to any of the Medications Listed:</h3>
                                    <div class="allery-checkbox-area">
                                        <div class="flex-checkbox">
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Cephalosporins" value="Cephalosporins" name="Allergies" id="Cephalosporins-2">
                                                <label class="form-label" for="Cephalosporins-2">
                                                    <span class="checkbox-square"></span>
                                                    Cephalosporins (Keflex/cephalexin, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Penicillin" value="Penicillin" name="Allergies" id="Penicillin-2">
                                                <label class="form-label" for="Penicillin-2">
                                                    <span class="checkbox-square"></span>
                                                    Penicillin's (Amoxicillin, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Fluoroquinolones" value="Fluoroquinolones" name="Allergies" id="Fluoroquinolones-2">
                                                <label class="form-label" for="Fluoroquinolones-2">
                                                    <span class="checkbox-square"></span>
                                                    Fluoroquinolones (Ciprofloxacin, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Macrolides" value="Macrolides" name="Allergies" id="Macrolides-2">
                                                <label class="form-label" for="Macrolides-2">
                                                    <span class="checkbox-square"></span>
                                                    Macrolides (Azithromycin, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Metronidazole" value="Metronidazole" name="Allergies" id="Metronidazole-2">
                                                <label class="form-label" for="Metronidazole-2">
                                                    <span class="checkbox-square"></span>
                                                    Metronidazole
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Sulfonamides" value="Sulfonamides" name="Allergies" id="Sulfonamides-2">
                                                <label class="form-label" for="Sulfonamides-2">
                                                    <span class="checkbox-square"></span>
                                                    Sulfonamides (Sulfa, Bactrim)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Tetracyclines" value="Tetracyclines" name="Allergies" id="Tetracyclines-2">
                                                <label class="form-label" for="Tetracyclines-2">
                                                    <span class="checkbox-square"></span>
                                                    Tetracyclines (Doxycycline, etc.)
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Clindamycin" value="Clindamycin" name="Allergies" id="Clindamycin-2">
                                                <label class="form-label" for="Clindamycin-2">
                                                    <span class="checkbox-square"></span>
                                                    Clindamycin
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="Other" value="Other" name="Allergies" id="Other-2">
                                                <label class="form-label" for="Other-2">
                                                    <span class="checkbox-square"></span>
                                                    Other
                                                </label>
                                            </div>
                                            <div class="input-area">
                                                <input class="d-none form-checkox allergies-input" type="checkbox" data-id="None-of-the-above" value="None-of-the-above" name="Allergies" id="None-of-the-above-2">
                                                <label class="form-label" for="None-of-the-above-2">
                                                    <span class="checkbox-square"></span>
                                                    None of the above
                                                </label>
                                            </div>
                                        </div>
                                        <button type="button" class="form-btn next-step allergy-step-btn validate-btn">Continue</button>
                                        <button type="button" class="form-btn allergy-text-btn">Continue</button>
                                        <button type="button" class="step-pre-btn">
                                            <i class="fa-solid fa-arrow-left-long"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8 col-md-10 col-xxl-6 col-xl-7 ">
                                    <div class="allergy-text-area">
                                        <h2 class="form-sm-title text-start">ALLERGIES</h2>
                                        <p class="form-para mb-4">Write the name of the medication and type of reaction experienced. For example: I get hives when taking penicillin. I experience swelling and difficulty breathing when taking ciprofloxacin.</p>
                                        <p class="form-para mb-4">After completing the encounter a JASE physician may reach out to get more information and determine whether or not a prescription for an emergency supply of antibiotics is appropriate for you.</p>
                                        <h3 class="form-sm-title fnts-22px text-start mb-4">Indicate allergies to the medications listed previously.</h3>
                                        <textarea class="form-input w-100 mx-w100 mb-3 allergy-text-input" data-id="allergy-text" name="" id=""></textarea>
                                        <div class="d-flex justify-content-center align-items-center gap-4 mt-4">
                                            <button type="button" class="form-btn allergy-text-area-cancel bg-white text-black">Cancel</button>
                                            <button type="button" class="form-btn next-step allergy-text-area-continue validate-btn">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="step-14" class="form-step-area step step-14 ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 col-lg-6 col-xxl-4 col-xl-5 padd-x25px">
                                    <div class="chronic-medications">
                                        <h2 class="form-sb-title upper-case text-start">chronic medications</h2>
                                        <p class="form-sm-title text-start">Do you take any medication on a regular basis for a chronic condition?</p>
                                        <div class="flex-input-area d-flex justify-content-center align-items-center gap-5">
                                            <div class="flex-input ">
                                                <input class="d-none input-form-radio" type="radio" value="chronic_medications-no" name="chronic_medications" id="chronic_medications-no">
                                                <label class="form-label-order next-step width-60px mb-0" for="chronic_medications-no">
                                                    No
                                                </label>
                                            </div>
                                            <div class="flex-input ">
                                                <input class="d-none input-form-radio" type="radio" value="chronic_medications-yes" name="chronic_medications" id="chronic_medications_yes">
                                                <label class="form-label-order width-60px mb-0 chronic-medications-yes" for="chronic_medications_yes">
                                                    Yes
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="step-pre-btn">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </button>
                                    <button type="button" class="Doctors-visits-btn">
                                        <i aclss="fa-solid fa-arrow-left-long"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8 col-xxl-6 col-xl-7 px-65px">
                                    <div class="chronic-medications-text-area">
                                        <h2 class="form-sb-title upper-case text-start">chronic medications</h2>
                                        <p class="form-sm-title text-start">Do you take any medication on a <br> regular basis for a chronic condition?</p>
                                        <div class="form-input-area m-0">
                                            <textarea class="form-input w-100 mx-w100 mb-3" name="" id=""></textarea>
                                        </div>
                                        <p class="form-sm-title fnts-22px text-start mb-5">Include the name of the medication, dose, how long you have been taking that dose, the reason for the medication/diagnosis. (Example: atorvastatin 20mg once/day, for 8 years, high cholesterol) 0/255</p>
                                        <div class="d-flex justify-content-center align-items-center gap-4 pt-5">
                                            <button type="button" class="form-btn bg-white chronic-medications-cancel color-red">Cancel</button>
                                            <button type="button" class="form-btn next-step">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="step-15" class="form-step-area step step-15">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8 col-xxl-6 col-xl-7 px-65px">
                                    <div class="doctor-inquiries-area">
                                        <h2 class="form-sb-title upper-case text-start">DOCTOR INQUIRIES</h2>
                                        <p class="form-sm-title text-start">Please enter any question you may have for the Doctor. If you do not have any question, type yes</p>
                                        <div class="form-input-area m-0 pb-3">
                                            <textarea class="form-input w-100 mx-w100" name="" id=""></textarea>
                                        </div>
                                        <button type="button" class="form-btn next-step validate-btn mt-5">Continue</button>
                                        <button type="button" class="step-pre-btn">
                                            <i class="fa-solid fa-arrow-left-long"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="step-16" class="form-step-area step step-16">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8 col-xx-6 col-xl-7 padd-x25px">
                                    <div class="doctor-inquiries-area">
                                        <h2 class="form-sb-title upper-case text-start">CONSENT AND AGREEMENT</h2>
                                        <p class="form-sm-title text-start">I attest that by clicking the "I Acknowledge" button I agree to the following:</p>
                                        <ul class="agreement-list">
                                            <li class="mb-4">
                                                <p class="form-sb-title text-black text-start family-regular">I have read and agree to the Important Notices and Terms including Terms
                                                    and Conditions, Informed Consent, Privacy Policies and Conflict of
                                                    Interest Disclosure found at: </p>
                                            </li>
                                            <li class="mb-4">
                                                <p class="form-sb-title text-black text-start family-regular">I will use the medications prescribed to me under the guidance of a qualified healthcare professional whenever such professional is available to me.</p>
                                            </li>
                                            <li class="mb-4">
                                                <p class="form-sb-title text-black text-start family-regular">I will inform my primary care physician of any significant changes to my health conditions.</p>
                                            </li>
                                            <li class="mb-4">
                                                <p class="form-sb-title text-black text-start family-regular">I will store my Jase Case medications securely and out of access to children.</p>
                                            </li>
                                            <li class="mb-4">
                                                <p class="form-sb-title text-black text-start family-regular">I am NOT seeking additional medications to be used by friends or family members.</p>
                                            </li>
                                            <li class="mb-4">
                                                <p class="form-sb-title text-black text-start family-regular">I am NOT seeking antibiotics to treat an active medical diagnosis/problem </p>
                                            </li>
                                            <li class="mb-4">
                                                <p class="form-sb-title text-black text-start family-regular">I am NOT seeking antibiotics to allow me to self-treat illnesses in non- emergent settings where the traditional healthcare system is accessible.</p>
                                            </li>
                                            <li class="mb-4">
                                                <p class="form-sb-title text-black text-start family-regular">I am NOT seeking antibiotics to replace (now or in the future) routine healthcare by my primary care doctor.</p>
                                            </li>
                                            <li class="mb-4 pb-5">
                                                <p class="form-sb-title text-black text-start">In seeking out these medications I am making efforts to be better prepared medically for purposes of future travel, residing in an underserved medical area, to protect myself against potential supply issues, or due to mobility issues.</p>
                                            </li>
                                        </ul>
                                        <button type="button" class="form-btn next-step">I Acknowledge</button>
                                        <button type="button" class="step-pre-btn">
                                            <i class="fa-solid fa-arrow-left-long"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="step-17" class="form-step-area step step-17">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 col-lg-6 col-xxl-4 col-xl-5 padd-x15px">
                                    <div class="doctor-inquiries-area">
                                        <h2 class="form-sb-title upper-case text-start">Identity verification</h2>
                                        <p class="form-sm-title mb-4 text-start">We are taking the necessary steps to verify your identity securely</p>

                                        <p class="form-sb-title mb-4 text-start text-black family-regular ">Enter last for digit of your social security number</p>

                                        <div class="form-input-area">
                                            <!-- <textarea class="form-input w-100 mx-w100" name="" id=""></textarea> -->
                                            <input class="form-input w-100 mx-w100" value="" placeholder="XXXX" type="number" name="" id="">
                                        </div>

                                        <button type="button" class="form-btn next-step validate-btn mt-4">Verify</button>
                                        <button type="button" class="step-pre-btn">
                                            <i class="fa-solid fa-arrow-left-long"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="step-18" class="form-step-area step step-18 ">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-12 col-lg-10 col-xxl-8 col-xl-9 px-65px">
                                    <div class="identity-verify-option-area">
                                        <p class="form-sb-title text-black lh-13">We need to verify your identity. This requires government-issued photo ID as well as selfie. Please follow the instructions below to continue the verification process on your phone.</p>
                                        <p class="form-sb-title text-black lh-13 mt-4 mb-4">Alternatively, you can finish the verification on your desktop if you have a good desktop camera.</p>
                                        <div class="verify-option-area text-center mb-5">
                                            <h3 class="form-sm-title m-0 fnts-22px mb-3">Option 1: Scan the QR Code</h3>

                                            <p class="form-sm-title family-regular mt-0 mb-4 fnts-22px">Open the Camera App and scan the QR code below to continue verification.</p>

                                            <img class="img-fluid" src="./assets/images/qr-code-img.png" alt="">
                                        </div>
                                        <div class="verify-option-area text-center">
                                            <h3 class="form-sm-title m-0 fnts-22px mb-3">Option 2: Send link via SMS</h3>
                                            <p class="form-sm-title family-regular mt-0 mb-4 fnts-22px">Enter your number and we'll text a secure link to your cell phone</p>
                                            <select class="form-select verification-select mb-3" aria-label="Default select example">
                                                <option value="+1" selected>United States / Canada (+1)</option>
                                                <option value="+44">United Kingdom (+44)</option>
                                            </select>
                                            <input class="verification-select" placeholder="Your phone number" type="number" name="" id="">

                                            <button type="submit" class="form-btn mt-5 validate-btn">Next</button>
                                            <button type="button" class="step-pre-btn">
                                                <i class="fa-solid fa-arrow-left-long"></i>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>


<?php
    include "footer.php"
?>

<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>

<script>
    $('.allergy-text-input').on('input', function() {
    $('.allergy-text-input').val($(this).val());
        if ($(this).val() != "") {
            console.log('true')
            $('.allergy-text-area-continue').removeAttr("disabled");
        } else {
            console.log('false')
            $('.allergy-text-area-continue').attr("disabled" , true);
        }
    });

    $('.shipping-input').on('input', function() {
        if ($(this).val() != "") {
            console.log("true");
            $('.verified-address-btn').css("display" , "none");
            $('.verify-address').css("display" , "block");
        } else {
            console.log('false')
            $('.verified-address-btn').css("display" , "block");
            $('.verify-address').css("display" , "none");
        }
    });

    $('.verify-code-input').on('input', function() {
        if ($(this).val() != "") {
            console.log('true')
            $('.verify-cont-btn').removeAttr("disabled");
        } else {
            console.log('false')
            $('.verify-cont-btn').attr("disabled" , true);
        }
    });


    $('.confirm-shipp-btn').click(function() {
        $('.verify-address').css("display" , "none");
        $('.verified-address-btn').css("display" , "block");
    })

</script>

<script>
    
    $('input[name="Allergies"]').change(function() {
        if ($(this).val() === "None-of-the-above" && $(this).is(':checked')) {
            console.log($(this).val());
            $('input[name="Allergies"]').not(this).prop('checked', false);
            $(".allergy-step-btn").show().prop('disabled', false);
            $(".allergy-text-btn").hide();
        } else {
            console.log($(this).val());
            $('input[name="Allergies"][value="None-of-the-above"]').prop('checked', false);
            $(".allergy-step-btn").hide().prop('disabled', true);
            $(".allergy-text-btn").show();
        }

        // Check if any other checkboxes are checked
        if ($('input[name="Allergies"]:checked').not('[value="None-of-the-above"]').length > 0) {
            $(".allergy-step-btn").hide();
            $(".allergy-text-btn").show();
        } else if ($('input[name="Allergies"]:checked').length === 0) {
            $(".allergy-step-btn").show().prop('disabled', true);
            $(".allergy-text-btn").hide();
        }
    });




// Event delegation for checkboxes across steps
$(document).on('change', '.allergies-input', function() {
    if ($(this).is(':checked')) {
        console.log($(this).val());
        $(`input[data-id=${$(this).data('id')}]`).prop('checked', true);
    } else {
        $(`input[data-id=${$(this).data('id')}]`).prop('checked', false);
    }
});


</script>

<script>
    $('.allergy-text-btn').click(function() {
        $('.allergy-text-area').css("display" , "block");
        $('.allery-checkbox-area').css("display" , "none");
    });

    $('.allergy-text-area-cancel').click(function() {
        $('.allergy-text-area').css("display" , "none");
        $('.allery-checkbox-area').css("display" , "block");
    });
</script>

<script>
    $("#mobile-number").inputmask({
        "mask": "999-999-9999"
    });
</script>


<script>
    $('.add-ons-popup-btn').click(function() {
        $('.select-add-ons-popup-wrap').toggleClass('active');
    });
    $('.add-ons-popup-cls-btn').click(function() {
        $('.select-add-ons-popup-wrap').removeClass('active');
    })
</script>




<script>
    let initialCheckedState = [];

    document.addEventListener('DOMContentLoaded', () => {
        const checkboxes = document.querySelectorAll('.add-ons-medication-check');

        checkboxes.forEach(checkbox => {
            initialCheckedState.push(checkbox.checked);
            checkbox.addEventListener('change', function() {
                toggleAddButton((checkbox.checked));
            });
        });


        document.querySelector('.add-ons-popup-cls-btn').addEventListener('click', () => {
            checkboxes.forEach(checkbox => {
                if (checkbox.checked && !checkbox.disabled) {
                    checkbox.parentElement.querySelector('input').setAttribute("disabled", true)
                    // checkbox.previousElementSibling.setAttribute("disabled" , true)
                    console.log(checkbox.previousElementSibling);
                    const medicationData = {
                        id: checkbox.id,
                        image: checkbox.nextElementSibling.getAttribute('data-image'),
                        title: checkbox.nextElementSibling.getAttribute('data-title'),
                        price: checkbox.nextElementSibling.getAttribute('data-price'),
                        description: checkbox.nextElementSibling.getAttribute('data-description'),
                        qty: checkbox.nextElementSibling.getAttribute('data-qty'),
                        treats: checkbox.nextElementSibling.getAttribute('data-treats')
                    };
                    addMedicationToSelected(medicationData);
                    // checkbox.checked = false; 
                }
            });
            toggleAddButton();
        });

        document.getElementById('selected-add-ons').addEventListener('click', function(event) {
            if (event.target && event.target.classList.contains('remove-btn')) {
                const medicationDiv = event.target.closest('.add-ons-medication-area');

                console.log("hello");
                if (medicationDiv) {
                    const checkboxId = medicationDiv.getAttribute('data-id');
                    document.getElementById(checkboxId).checked = false;
                    document.getElementById(checkboxId).removeAttribute('disabled')
                    medicationDiv.remove();
                    toggleAddButton();
                }
            }
        });
    });

    function addMedicationToSelected(data) {
        const selectedAddOns = document.getElementById('selected-add-ons');

        // Create a new div to hold the selected medication details
        const medicationDiv = document.createElement('div');
        medicationDiv.classList.add('add-ons-medication-area');
        medicationDiv.setAttribute('data-id', data.id);
        console.log(data);
        let treatsarray = data.treats.split(",")
        console.log(treatsarray)
        // Populate the medication div with details
        medicationDiv.innerHTML = `
            <div class="emergency-medication-img-area">
                <img class="img-fluid emergency-medication-img" src="${data.image}" alt="">
            </div>
            <div class="emergency-medication-detail">
                <div class="d-flex mb-4 justify-content-between align-items-center">
                    <h3 class="medicine-title text-start">${data.title}</h3>
                    <span class="medicine-qty"><strong class="medicine-peice">${data.price}</strong></span>
                </div>
                <div class="d-flex justify-content-between flex-wrap gap-2">
                    <div class="text-start medication-detail-left">
                        <p class="medicine-discrip">${data.description}</p>
                        <span class="medicine-qty"><strong>Qty:</strong>${data.qty}</span>
                    </div>
                    <div class="medication-detail-right">
                        <h4 class="treated-title text-start">Condition Treated:</h4>
                        <ul class="condition-treated-list">
                          ${
                              treatsarray.map(item => (
                               
                                    `
                                    <li class="">
                                        <span class="medicine-discrip d-block mb-1 mt-0">${item}</span>
                                    </li>
                                  `
                               
                              )).join(" ")
                            }
                        </ul>
                    </div>
                </div>
            </div>
            <button type="button" class="remove-btn">Remove</button>
        `;

        // Append the medication div to the selectedAddOns container
        selectedAddOns.appendChild(medicationDiv);
    }

    function toggleAddButton() {
        const addButton = document.querySelector('.add-ons-popup-cls-btn');
        const anyChecked = document.querySelectorAll('.add-ons-medication-check:checked').length > 0;
        addButton.disabled = !anyChecked;
    }
</script>



