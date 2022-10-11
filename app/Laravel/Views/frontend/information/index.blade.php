@extends('frontend._layouts.main')

@section('content')
<section class="vh-100">

<img id="bg-main" src="/assets/img/vaccine.jpg"  alt="Cover Image" style="position: fixed;
    height: 100%;width:100%">

<div class="container p-5 ">
    
<h1 style="text-align:center;position: relative;color:black">INFORMATION COLLECTION</h1>

  <div class="row  justify-content-center">
      <div class="col-12   ">
         <div class="card" >
             <div class="card-body ">
                    <div class="container">
                    <form method="POST" action="" enctype="multipart/form-data">
                            {!!csrf_field()!!}
                     
                            <div class="col-lg-12 mb-3 text-center">
                <img id="blah_primary_back" src="images/placeholder-image.png" style="width: auto;height: 200px;" alt="" />
            </div>
            <div class="form-group {{$errors->first('file') ? 'has-error' : NULL}}">
                    <label for="file" class="form-label">Vaccination Card</label>
                    <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" name="file" placeholder="file" id="img_primary_back">
                    @if($errors->first('file'))
                  <span class="help-block">{{$errors->first('file')}}</span>
                  @endif
            </div>

                            <div class="form-group {{$errors->first('name') ? 'has-error' : NULL}}">
                              <input style="font-size: 16px ;" id="name" name="name" type="text" placeholder="Full Name" autocomplete="off" class="form-control" value="{{old('name',$user_data->name)}}">
                              @if($errors->first('name'))
                              <span class="help-block">{{$errors->first('name')}}</span>
                            @endif
                            </div> 
                            <div class="form-group {{$errors->first('contact_number') ? 'has-error' : NULL}}">
                              <input style="font-size: 16px ;" id="contact_number" name="contact_number" type="phone" placeholder="Contact Number" autocomplete="off" class="form-control" value="{{old('contact_number',$user_data->contact_number)}}">
                              @if($errors->first('contact_number'))
                              <span class="help-block">{{$errors->first('contact_number')}}</span>
                            @endif
                            </div>
                            <div class="form-group {{$errors->first('email') ? 'has-error' : NULL}}">
                              <input style="font-size: 16px ;" id="email" name="email" type="email" placeholder="Email address" autocomplete="off" class="form-control" value="{{old('email',$user_data->email)}}">
                              @if($errors->first('email'))
                              <span class="help-block">{{$errors->first('email')}}</span>
                            @endif
                            </div> 
                           
                            <div class="form-group {{$errors->first('vaccination_brand') ? 'has-error' : NULL}}">
                              <select style="font-size: 16px ;" id="vaccination_brand" name="vaccination_brand" type="text" placeholder="Vaccination Brand" autocomplete="off" class="form-control" value="{{old('vaccination_brand',$user_data->vaccination_brand)}}">
                              <option value="" selected disabled>--Please Select your vaccination brand--</option>
                             
                             <option value="moderna">Moderna</option>
                             <option value="pfizer">Pfizer</option>
                             <option value="astraZeneca">AstraZeneca</option>
                             <option value="sinovac">Sinovac</option>
                             <option value="johnson_and_Johnsons">Johnson and Johnson's</option>

                              </select>
                              @if($errors->first('vaccination_brand'))
                              <span class="help-block">{{$errors->first('vaccination_brand')}}</span>
                            @endif
                            </div> 

                            <div class="form-group {{$errors->first('vaccination_site') ? 'has-error' : NULL}}">
                              <select style="font-size: 16px ;" id="vaccination_site" name="vaccination_site" type="text" placeholder="Site of Injection" autocomplete="off" class="form-control" value="{{old('vaccination_site',$user_data->vaccination_site)}}">
                              <option value="" selected disabled>--Please Select your vaccination site--</option>
                             
                             <option value="right">Upper Right Arm</option>
                             <option value="left">Upper Left Arm</option>

                              </select>
                              @if($errors->first('vaccination_site'))
                              <span class="help-block">{{$errors->first('vaccination_site')}}</span>
                            @endif
                            </div> 

                            <div class="form-group {{$errors->first('address') ? 'has-error' : NULL}}">
                              <input style="font-size: 16px ;" id="address" name="address" type="text" placeholder="Full Address" autocomplete="off" class="form-control" value="{{old('address',$user_data->address)}}">
                              @if($errors->first('address'))
                              <span class="help-block">{{$errors->first('address')}}</span>
                            @endif
                            </div> 
                            <div class="row">
    <div class="col-md-6">
    <div class="form-group {{$errors->first('age') ? 'has-error' : NULL}}">
                              <input style="font-size: 16px ;" id="age" name="age" type="text" placeholder="Age" autocomplete="off" class="form-control" value="{{old('age',$user_data->age)}}">
                              @if($errors->first('age'))
                              <span class="help-block">{{$errors->first('age')}}</span>
                            @endif
                            </div> 
</div>
<div class="col-md-6">

<div class="form-group {{$errors->first('gender') ? 'has-error' : NULL}}">
                              <select style="font-size: 16px ;" id="gender" name="gender" class="form-control" value="{{old('gender')}}">
                              <option value="" selected disabled>--Please Select your Gender--</option>
                             
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                              </select> 
                              @if($errors->first('gender'))
                              <span class="help-block">{{$errors->first('gender')}}</span>
                            @endif
                            </div> 
</div>
</div>
                           


                        

                                <div class="form-check mb-3">
                                    <input class="form-check-input" onclick="EnableDisable()" id="myCheck"type="checkbox" value="" >
                                    <label class="form-check-label" for="flexCheckChecked"> I agree to terms and condition
                                    </label>
                                </div>
                    

                            <button id="txt_1_a" href="{{route('frontend.information.side_effect')}}" type="submit" class="btn btn-primary w-100 mb-3 disabled ">Proceed</button>
                            </form>
                          </div>
                </div>
           </div>       
       </div>
    </div>
</div>
</section>
<script>
      img_primary_back.onchange = evt => {
  const [file] = img_primary_back.files
  if (file) {
    blah_primary_back.src = URL.createObjectURL(file)
  }
}
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
</script>
@stop