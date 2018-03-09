

<!DOCTYPE html>
<html>
<head>
  <title>CVSAVER</title>
  
<meta charset="UTF-8">
    <meta content="IE=edge" http-equiv=X-UA-Compatible>
    <meta content="width=device-width,initial-scale=1" name=viewport>
  <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:500italic,600italic,600,700,700italic,300italic,300,400,400italic,800,900' rel='stylesheet' type='text/css'>
        
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic,400italic,600italic,700,900' rel='stylesheet' type='text/css'>
        
         <!-- Animate CSS -->
        <link rel="stylesheet"  href="{{ URL::asset('css/animate.css') }}">
        <!-- CSS -->
        <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
        <!--<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- CSS File-->
        <link rel="stylesheet"  href="{{ URL::asset('css/style.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
<div class="heading">
            Application Form
        </div>
        <!--we will get from this form the applicant information then send it to database-->
        <form action="/application/thanks" method="POST">
            {{ csrf_field()}}

            <div class="ui">
           <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="Name" class="form-control" id="exampleInputEmail1" name="first_name" placeholder="Enter your First name" required="please enter first_name">
  </div>
   <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="Name" class="form-control" id="exampleInputEmail1" name="last_name" placeholder="Enter your Last name" required="please enter last_name">
  </div>
                 <div class="form-group">
    <label for="">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required="please enter email">
  </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="Name" class="form-control" id="exampleInputEmail1" name="phone" placeholder="Enter your phone" required="please enter phone">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="Name" class="form-control" id="exampleInputEmail1" name="address" placeholder="Enter your address" required="please enter address">
                </div>
              <label class="label1" for="birthdate">Birth_Date</label>
         <label class="label2" for="birthdate">click to choose date</label>
        <input type="text" id="datepicker" name="birth_date" required="please enter date">
                <br><br>
                       
                
            <label class="label1" for="Gender">Gender</label>
                <select name="gender" required="please enter gender">
                <option value="" selected="choose gender">choose gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select><br><br>

               <label class="label1" for="Religion">Religion</label>
                <select name="religion" required="choose religion">
              <option value="" selected="choose religion">choose religion</option>

                <option value="Muslim">Muslim</option>
                <option value="Cristian">Cristian</option>
                
                </select >
                <br><br>
                 <label class="label1" for="nationality">Nationality</label>
                 <select name="nationality" required="choose nationality" >
  <option value="">-- select one --</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>
                <br><br>
                <!--there we should iterate on jobs in database and active to show it for the applican-->
         <label class="label1" for="job">Jobs</label>
                <select name="job" required="choose job">
                <option selected="choose job" value="">choose your job</option>
            @foreach($jobs as $job)
           <option value='$job->name'>{{$job->name}}</option>
                    @endforeach
                </select>
                <br><br>
                  <div class="form-group">
    <label for="uni">University</label>
    <input type="Name" class="form-control" id="exampleInputEmail1" name="university" placeholder="Enter your University" required="Enter university">
  </div>
                 <div class="form-group">
    <label for="Faculty">Faculty</label>
    <input type="Name" class="form-control" id="exampleInputEmail1" name="faculty" placeholder="Enter your Faculty" required="Enter faculty">
  </div>
                <div class="form-group">
    <label for="DEP">Department</label>
    <input type="Name" class="form-control" id="exampleInputEmail1" name="department" placeholder="Enter your Department" required="Enter department">
  </div>
                <label class="label1" for="graduation">Graduation_Year</label>
                <select name="graduation_year" required="choose year">
                 <option selected="choose year" value="">choose year</option>


                   @for( $i=1900;$i<2040;$i++)
                   {
                       <option value='$i'> {{$i}} </option>
                   }
                  @endfor

                   </select> 
                <br><br>
       <label class="label1" for="degree">Degree</label>
            <select name="gpa" required="choose gpa">
            <option value="" selected="choose gpa">choose gpa</option>
                <option value="Excellent">Excellent</option>
                <option value="Very good">Very good</option>
                <option value="Good">Good</option>
            </select>
                <br><br>
                <label class="label1" for="experience">Experience_Years</label>
            <select name="experience_year" required="choose experience_year">
            <option value="" selected="choose year">choose year</option>
                <option value="1-3">1-3</option>
                <option value="3-5">3-5</option>
                <option value="above five">above five</option>
            </select>
                <label class="label1" for="military">Military_state</label>
                <select name="military" required="choose Military_state">
                <option value="" selected="choose state">choose state</option>
                <option value="Military service done">Military service done</option>
                <option value="Adjourned">Adjourned </option>
                <option value="Final exception">Final exception</option>
            </select>
                <br><br>


                <!--
     <label class="label1" for="UPload">Upload_CV</label>
  <input type="file" class="input1" name="CV">
   -->
   Uplaod your CV :  <input name="upload_file" type="file"  required="Upload_CV" />
                <br>



                <br><br>
                <input type="submit" class="submit" name="submit_app" value="Submit">
            </div>
        </form>
</body>
</html>
 