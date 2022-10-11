@extends('frontend._layouts.main')
 @section('content')
 
<section class="vh-100">
       

    <img id="bg-main" src="/assets/img/vaccine.jpg" alt="Cover Image" style="position: absolute; height: 100%; width: 100%;" />

    <div class="container  text-center p-5">
        <h1 style="position: relative;color:#333">What Do You Feel?</h1>
        <form method="POST" action="" >
                            {!!csrf_field()!!}
                     
        <div class="row justify-content-center">
            <div class="col-md-8 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row m-3">
                                <div class="col-md-12" style="max-height: 300px; overflow-y: auto;">
                                    <div class="row">
                                        <div class="row text-center" style="justify-content: end;">
                                            <div class="col-md-12 mb-3">
                                                <p> How do you feel the pain? Select the grade of pain.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                          
                                                <input class="form-check-input" onclick="EnableDisable()" type="checkbox" value="" id="myCheck"  />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Muscle Ache" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled id="txt_check_1_input1" name="muscle_ache"  value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled id="txt_check_1_input2" name="muscle_ache"  value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" disabled id="txt_check_1_input3" name="muscle_ache"  value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="muscle_ache" class="form-control" id="txt_check_1_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a  class="btn btn-outline-secondary disabled" data-bs-toggle="collapse" href="#fA1" role="button" aria-expanded="false" aria-controls="collapseExample" id="txt_1_a">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA1">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                       
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input  class="form-check-input "  onclick="EnableDisable2()"  type="checkbox" value="" id="myCheck2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Headache" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="headache" id="txt_check_2_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="headache" id="txt_check_2_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="headache" id="txt_check_2_input3" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="headache" class="form-control" id="txt_check_2_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled" data-bs-toggle="collapse" href="#fA2" role="button" aria-expanded="false" aria-controls="collapseExample"id="txt_2_a">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA2">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input"  onclick="EnableDisable3()" type="checkbox" value="" id="myCheck3" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Fever" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"disabled name="Fever" id="txt_check_3_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Fever" id="txt_check_3_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled  name="Fever" id="txt_check_3_input3" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="fever" class="form-control" id="txt_check_3_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled" data-bs-toggle="collapse" href="#fA3" role="button" aria-expanded="false" aria-controls="collapseExample"id="txt_3_a">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA3">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="EnableDisable4()" type="checkbox" value="" id="myCheck4" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Redness" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Redness" id="txt_check_4_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Redness" id="txt_check_4_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Redness" id="txt_check_4_input3" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="redness" class="form-control" id="txt_check_4_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled" data-bs-toggle="collapse" href="#fA4" role="button" aria-expanded="false" aria-controls="collapseExample"id="txt_4_a">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA4">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="EnableDisable5()" type="checkbox" value="" id="myCheck5" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Swelling" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Swelling" id="txt_check_5_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Swelling" id="txt_check_5_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Swelling" id="txt_check_5_input3" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="swelling" class="form-control" id="txt_check_5_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled" data-bs-toggle="collapse" href="#fA5" role="button" aria-expanded="false" aria-controls="collapseExample"id="txt_5_a">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA5">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="EnableDisable6()" id="myCheck6" type="checkbox" value="" id="flexCheckChecked" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Tenderness" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Tenderness" id="txt_check_6_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Tenderness" id="txt_check_6_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Tenderness" id="txt_check_6_input3" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="tenderness" class="form-control" id="txt_check_6_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled" id="txt_6_a" data-bs-toggle="collapse" href="#fA6" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA6">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="EnableDisable7()" id="myCheck7"  type="checkbox" value="" id="flexCheckChecked" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Warmth" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Warmth" id="txt_check_7_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Warmth" id="txt_check_7_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Warmth" id="txt_check_7_input3" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="warmth"class="form-control" id="txt_check_7_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled" id="txt_7_a" data-bs-toggle="collapse" href="#fA7" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA7">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="EnableDisable8()" id="myCheck8"  type="checkbox" value="" id="flexCheckChecked" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Itch" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Itch" id="txt_check_8_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Itch" id="txt_check_8_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Itch" id="txt_check_8_input3" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="itch" class="form-control" id="txt_check_8_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled " id="txt_8_a" data-bs-toggle="collapse" href="#fA8" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA8">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="EnableDisable9()" id="myCheck9" type="checkbox" value="" id="flexCheckChecked" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Induration" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Induration" id="txt_check_9_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Induration" id="txt_check_9_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Induration" id="txt_check_9_input3" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="induration" class="form-control" id="txt_check_9_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled " id="txt_9_a" data-bs-toggle="collapse" href="#fA9" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA9">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="EnableDisable10()" id="myCheck10" type="checkbox" value="" id="flexCheckChecked" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Feverish" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Feverish" id="txt_check_10_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Feverish" id="txt_check_10_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Feverish" id="txt_check_10_input3" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="feverish" class="form-control" id="txt_check_10_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled " id="txt_10_a" data-bs-toggle="collapse" href="#fA10" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA10">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input"onclick="EnableDisable11()" id="myCheck11" type="checkbox" value="" id="flexCheckChecked" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Chills" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Chills" id="txt_check_11_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Chills" id="txt_check_11_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Chills" id="txt_check_11_input3" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="chills" class="form-control" id="txt_check_11_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled " id="txt_11_a" data-bs-toggle="collapse" href="#fA11" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA11">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="EnableDisable12()" id="myCheck12"type="checkbox" value="" id="flexCheckChecked" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Joint Pain" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Joint Pain" id="txt_check_12_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Joint Pain" id="txt_check_12_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Joint Pain" id="txt_check_12_input3" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="join_pain" class="form-control" id="txt_check_12_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled " id="txt_12_a" data-bs-toggle="collapse" href="#fA12" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA12">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="EnableDisable13()" id="myCheck13" type="checkbox" value="" id="flexCheckChecked" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Fatigue" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Fatigue" id="txt_check_13_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Fatigue" id="txt_check_13_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Fatigue" id="txt_check_13_input2" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="fatigue" class="form-control" id="txt_check_13_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled " id="txt_13_a" data-bs-toggle="collapse" href="#fA13" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA13">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="EnableDisable14()" id="myCheck14"type="checkbox" value="" id="flexCheckChecked" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Nausea" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Nausea" id="txt_check_14_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Nausea" id="txt_check_14_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Nausea" id="txt_check_14_input3" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="nausea" class="form-control" id="txt_check_14_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled " id="txt_14_a" data-bs-toggle="collapse" href="#fA14" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA14">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-1 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" onclick="EnableDisable15()" id="myCheck15" type="checkbox" value="" id="flexCheckChecked" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Vomiting" name="psw-repeat" id="psw-repeat" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <!-- <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Vomiting" id="txt_check_15_input1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Vomiting" id="txt_check_15_input2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" disabled name="Vomiting" id="txt_check_15_input3" value="option3" />
                                                <label class="form-check-label" for="inlineRadio3">3 </label>
                                            </div> -->
                                            <select name="vomiting" class="form-control" id="txt_check_15_input1" disabled>
                                                <option selected disabled>--Select the grade of pain --</option>
                                                <option>GRADE 1 (Mild)</option>
                                                <option>GRADE 2 (Moderate)</option>
                                                <option>GRADE 3 (Severe)</option>
                                            </select>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <p>
                                                        <a class="btn btn-outline-secondary disabled " id="txt_15_a" data-bs-toggle="collapse" href="#fA15" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                            First Aid
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="fA15">
                                                        <div class="card card-body">
                                                            <ul class="list-unstyled">
                                                                <li>* Apply Ice To Area</li>
                                                                <li>* Drink Meds</li>
                                                                <li>* Rest Painful Area</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md- mb-1 mt-5">
                                    
                                <div class="w3-container ">
                                <button type="button" data-toggle="modal" onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary mb-2 ">Emergency Hotline</button>

                                    <div id="id01" class="w3-modal">
                                    <div class="w3-modal-content w3-animate-zoom">
                                        <header class="modal-header"> 
                                        <span onclick="document.getElementById('id01').style.display='none'" 
                                        class="w3-button w3-display-topright">&times;</span>
                                        <br>
                                        </header>
                                        <div class="w3-container">
                                        <p>CESU HOTLINE</p>
                                        <p>(02)8870-1442-1444-1446)</p>
                                        <br>
                                        <p>OSMAK</p>
                                        <p>882-6316 local 421,422 or 429,or text 0956-251-7000 for Globe<br> and 0931-056-7558 for sun</p>
                                        </div>
                                        <footer class="modal-footer">
                                        <button type="button" class="btn btn-danger" onclick="document.getElementById('id01').style.display='none'">Close</button>
                                        </footer>
                                    </div>
                                    </div>
                                        </div>
                                        <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
    </button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="myModel">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">

        <h5>Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        this is bodody
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
                                    </div>
                                <div class="col-md- mb-3">
                                    <button type="submit" class="btn btn-primary mb-3">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
    </div>
    
</section>
<script type="text/javascript">
   

function EnableDisable() {

        var btnSubmit = document.getElementById("myCheck");
        var element = document.getElementById("txt_1_a");
 		if(btnSubmit.checked == true) {
           
            element.classList.remove("disabled");
          
            document.getElementById("txt_check_1_input1").disabled = false;
            document.getElementById("txt_check_1_input2").disabled = false;
            document.getElementById("txt_check_1_input3").disabled = false;
        }
        else {
        	element.classList.add("disabled");
            document.getElementById("txt_check_1_input1").disabled = true;
            document.getElementById("txt_check_1_input2").disabled = true;
            document.getElementById("txt_check_1_input3").disabled = true;
          
        }
       
    };
    function EnableDisable2() {

        var btnSubmit = document.getElementById("myCheck2");
        var element = document.getElementById("txt_2_a");
 		if(btnSubmit.checked == true) {
           
            element.classList.remove("disabled");
          
            document.getElementById("txt_check_2_input1").disabled = false;
            document.getElementById("txt_check_2_input2").disabled = false;
            document.getElementById("txt_check_2_input3").disabled = false;
        }
        else {
        	element.classList.add("disabled");
            document.getElementById("txt_check_2_input1").disabled = true;
            document.getElementById("txt_check_2_input2").disabled = true;
            document.getElementById("txt_check_2_input3").disabled = true;
          
        }
       
    };
    function EnableDisable3() {

var btnSubmit = document.getElementById("myCheck3");
var element = document.getElementById("txt_3_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_3_input1").disabled = false;
    document.getElementById("txt_check_3_input2").disabled = false;
    document.getElementById("txt_check_3_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_3_input1").disabled = true;
    document.getElementById("txt_check_3_input2").disabled = true;
    document.getElementById("txt_check_3_input3").disabled = true;
  
}

};
function EnableDisable4() {

var btnSubmit = document.getElementById("myCheck4");
var element = document.getElementById("txt_4_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_4_input1").disabled = false;
    document.getElementById("txt_check_4_input2").disabled = false;
    document.getElementById("txt_check_4_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_4_input1").disabled = true;
    document.getElementById("txt_check_4_input2").disabled = true;
    document.getElementById("txt_check_4_input3").disabled = true;
  
}

};
function EnableDisable5() {

var btnSubmit = document.getElementById("myCheck5");
var element = document.getElementById("txt_5_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_5_input1").disabled = false;
    document.getElementById("txt_check_5_input2").disabled = false;
    document.getElementById("txt_check_5_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_5_input1").disabled = true;
    document.getElementById("txt_check_5_input2").disabled = true;
    document.getElementById("txt_check_5_input3").disabled = true;
  
}

};
function EnableDisable6() {

var btnSubmit = document.getElementById("myCheck6");
var element = document.getElementById("txt_6_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_6_input1").disabled = false;
    document.getElementById("txt_check_6_input2").disabled = false;
    document.getElementById("txt_check_6_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_6_input1").disabled = true;
    document.getElementById("txt_check_6_input2").disabled = true;
    document.getElementById("txt_check_6_input3").disabled = true;
  
}

};
function EnableDisable6() {

var btnSubmit = document.getElementById("myCheck6");
var element = document.getElementById("txt_6_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_6_input1").disabled = false;
    document.getElementById("txt_check_6_input2").disabled = false;
    document.getElementById("txt_check_6_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_6_input1").disabled = true;
    document.getElementById("txt_check_6_input2").disabled = true;
    document.getElementById("txt_check_6_input3").disabled = true;
  
}

};
function EnableDisable7() {

var btnSubmit = document.getElementById("myCheck7");
var element = document.getElementById("txt_7_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_7_input1").disabled = false;
    document.getElementById("txt_check_7_input2").disabled = false;
    document.getElementById("txt_check_7_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_7_input1").disabled = true;
    document.getElementById("txt_check_7_input2").disabled = true;
    document.getElementById("txt_check_7_input3").disabled = true;
  
}

};
function EnableDisable8() {

var btnSubmit = document.getElementById("myCheck8");
var element = document.getElementById("txt_8_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_8_input1").disabled = false;
    document.getElementById("txt_check_8_input2").disabled = false;
    document.getElementById("txt_check_8_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_8_input1").disabled = true;
    document.getElementById("txt_check_8_input2").disabled = true;
    document.getElementById("txt_check_8_input3").disabled = true;
  
}

};
function EnableDisable9() {

var btnSubmit = document.getElementById("myCheck9");
var element = document.getElementById("txt_9_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_9_input1").disabled = false;
    document.getElementById("txt_check_9_input2").disabled = false;
    document.getElementById("txt_check_9_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_9_input1").disabled = true;
    document.getElementById("txt_check_9_input2").disabled = true;
    document.getElementById("txt_check_9_input3").disabled = true;
  
}

};
function EnableDisable10() {

var btnSubmit = document.getElementById("myCheck10");
var element = document.getElementById("txt_10_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_10_input1").disabled = false;
    document.getElementById("txt_check_10_input2").disabled = false;
    document.getElementById("txt_check_10_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_10_input1").disabled = true;
    document.getElementById("txt_check_10_input2").disabled = true;
    document.getElementById("txt_check_10_input3").disabled = true;
  
}

};
function EnableDisable11() {

var btnSubmit = document.getElementById("myCheck11");
var element = document.getElementById("txt_11_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_11_input1").disabled = false;
    document.getElementById("txt_check_11_input2").disabled = false;
    document.getElementById("txt_check_11_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_11_input1").disabled = true;
    document.getElementById("txt_check_11_input2").disabled = true;
    document.getElementById("txt_check_11_input3").disabled = true;
  
}

};
function EnableDisable12() {

var btnSubmit = document.getElementById("myCheck12");
var element = document.getElementById("txt_12_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_12_input1").disabled = false;
    document.getElementById("txt_check_12_input2").disabled = false;
    document.getElementById("txt_check_12_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_12_input1").disabled = true;
    document.getElementById("txt_check_12_input2").disabled = true;
    document.getElementById("txt_check_12_input3").disabled = true;
  
}

};
function EnableDisable13() {

var btnSubmit = document.getElementById("myCheck13");
var element = document.getElementById("txt_13_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_13_input1").disabled = false;
    document.getElementById("txt_check_13_input2").disabled = false;
    document.getElementById("txt_check_13_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_13_input1").disabled = true;
    document.getElementById("txt_check_13_input2").disabled = true;
    document.getElementById("txt_check_13_input3").disabled = true;
  
}

};
function EnableDisable14() {

var btnSubmit = document.getElementById("myCheck14");
var element = document.getElementById("txt_14_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_14_input1").disabled = false;
    document.getElementById("txt_check_14_input2").disabled = false;
    document.getElementById("txt_check_14_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_14_input1").disabled = true;
    document.getElementById("txt_check_14_input2").disabled = true;
    document.getElementById("txt_check_14_input3").disabled = true;
  
}

};
function EnableDisable15() {

var btnSubmit = document.getElementById("myCheck15");
var element = document.getElementById("txt_15_a");
 if(btnSubmit.checked == true) {
   
    element.classList.remove("disabled");
  
    document.getElementById("txt_check_15_input1").disabled = false;
    document.getElementById("txt_check_15_input2").disabled = false;
    document.getElementById("txt_check_15_input3").disabled = false;
}
else {
    element.classList.add("disabled");
    document.getElementById("txt_check_15_input1").disabled = true;
    document.getElementById("txt_check_15_input2").disabled = true;
    document.getElementById("txt_check_15_input3").disabled = true;
  
}

};

</script>
@stop
