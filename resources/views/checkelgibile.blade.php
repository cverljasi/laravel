<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'DCS') }}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{asset('css/dcsstyle.css')}}" rel="stylesheet">
<link href="{{asset('css/checkform.css')}}" rel="stylesheet">
</head>
<body>
  
    <div class="header">
        <img src="{{asset('images/logo.jpg')}}" />
        
    </div>
    <div class="text-padding "><a href="{{ url('/') }}">Home</a></div><br><br><br>
 <h1>E-Census Elegibillity Form </h1> 
  
  @if(isset($msg)) 
  @if($msg=="error2")
  <div class="message error"><div class="text-center">Your Informations are not matched with Previous check eligible details. So, Kindly request you to check your eligibility again to go further....</div></div>
  @else
  <div class="message error"><div class="text-center"> Your are not elegible.....</div></div>
  @endif
   @endif
  </div>
        <div class="container">
            <div class="bodera">
                <form method="POST" action="check">
                @csrf

                <div class="row text-center">
                  <img src="{{asset('images/census_labale.png')}}" width="50%"/>
                  </div>

                <div class="row">
                  <div class="col-25">
                      <label for="rlabel">Does the above red label affixed to the front of your home?</label>
                  </div>
                  <div class="col-75">
                    <label for="rlabel1">Yes</label><input type="radio" id="rlabel1" name="rrlabel" value="1" required onchange="displayQuestion(this.value)"><br>
                    <label for="rlabel2">No</label><input type="radio" id="rlabel2" name="rrlabel" value="0" required onchange="displayQuestion(this.value)">
                  </div>
              </div>

                
                <div id="mrcbdis" class="row" style="display:none;">
                    <div class="col-25">
                        <label for="mrcb">MRCB Number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="mrcb" name="mrcbf" placeholder="#####" pattern="\d{5}" maxlength="10" title="Please enter exactly 5 digits">
                    </div>
                </div>
              

                <div class="row">
                    <div class="col-25">
                        <label for="lname">Name of the Head</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="headlname" placeholder="Head name.." required>
                    </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="ctno">Contact No</label>
                  </div>
                  <div class="col-75">
                    <input type="tel" id="ctno" name="phone" placeholder="07########" pattern="[0-9]{10}" required>
                  </div>
                </div>
             <!--  <div class="row">
                <div class="col-25">
                  <label for="country">Country</label>
                </div>
                <div class="col-75">
                  <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                  </select>
                </div>
              </div> 
              <div class="row">
                    <div class="col-25">
                        <label for="address">Address</label>
                    </div>
                    <div class="col-75">
                        <textarea id="address" name="address" placeholder="Write address.." style="height:150px" required></textarea>
                    </div>
              </div>
              
              
              <div class="row">
                <div class="col-25">
                  <label for="province">Province</label>
                </div>
                <div class="col-75">
                  <select id="province" name="province" autocomplete="on" onchange="ChangeProvinceList()" required>
                    <option value="00">-- Select Province --</option>
                    <option value="01">Western</option>
                    <option value="02">Central</option>
                    <option value="03">Southern</option>
                    <option value="04">Northern</option>
                    <option value="05">Eastern</option>
                    <option value="06">North Western</option>
                    <option value="07">North Central</option>
                    <option value="08">Uva</option>
                    <option value="09">Sabaragamuwa</option>
                  </select>
                </div>
              </div> 
              <div class="row">
                <div class="col-25">
                  <label for="district">District</label>
                </div>
                <div class="col-75">
                  <select id="district" name="district" autocomplete="on" onchange="ChangeDistrictList()" required>
                    
                  </select>
                </div>
              </div> 
              <div class="row">
                <div class="col-25">
                  <label for="ds">Divisional Secretariat</label>
                </div>
                <div class="col-75">
                  <select id="ds" name="ds" autocomplete="on" required>
                    
                  </select>
                </div>
              </div> -->
              <div class="row">
                <div class="col-25">
                    <label for="hunit">Is it a housing unit?</label>
                </div>
                <div class="col-75">
                    <label for="hunit1">Yes</label><input type="radio" id="hunit1" name="hunit" value="1" required ><br>
                    <label for="hunit2">No</label><input type="radio" id="hunit2" name="hunit" value="0" required >
                </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="hhn">Number of House Hold</label>
              </div>
              <div class="col-75">
                <input type="number" id="hhn" name="hhno"  required >
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                  <label for="uunit">Are there any usual residents in this unit ?</label>
              </div>
              <div class="col-75">
                  <label for="uunit1">Yes</label><input type="radio" id="uunit1" name="uunit" value="1" required ><br>
                  <label for="uunit2">No</label><input type="radio" id="uunit2" name="uunit" value="0" required >
              </div>
          </div>
              <div class="row">
                <input type="submit" value="Submit">
              </div>
            </form>
            </div>
      
        </div>
            
          
 



<div class="footera">
  <p>&copy; All Rights Reserved.</p>
</div>
 

<script>


  /*  var provinceandDistrict = {};
    var provinceandDistrictValue = {};
    provinceandDistrict['01'] = ['Colombo', 'Gampaha', 'Kalutara'];
    provinceandDistrictValue['01'] = ['11', '12', '13'];
    provinceandDistrict['02'] = ['Kandy', 'Matale', 'Nuwara Eliya'];
    provinceandDistrictValue['02'] = ['21', '22', '23'];
    provinceandDistrict['03'] = ['Galle', 'Matara', 'Hambantota']; 
    provinceandDistrictValue['03'] = ['31', '32', '33'];
    provinceandDistrict['04'] = ['Jaffna', 'Mannar', 'Vavuniya','Mulathive','Kilinochchi'];
    provinceandDistrictValue['04'] = ['41', '42', '43','44','45'];
    provinceandDistrict['05'] = ['Batticalo', 'Ampara', 'Trincomalee'];
    provinceandDistrictValue['05'] = ['51', '52', '53'];
    provinceandDistrict['06'] = ['Kurunegala', 'Puttalam'];
    provinceandDistrictValue['06'] = ['61', '62'];
    provinceandDistrict['07'] = ['Anuradhapura', 'Polonnaruwa'];
    provinceandDistrictValue['07'] = ['71', '72'];
    provinceandDistrict['08'] = ['Badulla', 'Moneragala']; 
    provinceandDistrictValue['08'] = ['81', '82'];
    provinceandDistrict['09'] = ['Ratnapura', 'Kegalle'];
    provinceandDistrictValue['09'] = ['91', '92'];

    function ChangeProvinceList() {
      var provinceList = document.getElementById("province");
      var districtlList = document.getElementById("district");
      var selProvince = provinceList.options[provinceList.selectedIndex].value;
      while (districtlList.options.length) {
        districtlList.remove(0);
      }
      var districts = provinceandDistrict[selProvince];
      var districtValues= provinceandDistrictValue[selProvince];
     
      if (districts) {
    var i;
    var opt = document.createElement("option"); 
    opt.value = '0'; // set the value
        opt.text = '-- Select District --'; 
        districtlList.appendChild(opt); // add it to the select
    for (i = 0; i < districts.length; i++) {
      var opt = document.createElement("option"); // Create the new element
       
        opt.value = districtValues[i]; // set the value
        opt.text = districts[i]; // set the text
       
        districtlList.appendChild(opt); // add it to the select
    }
  }
}
function myFunction() {
  var x = document.getElementById("district");
   var i = x.options[x.selectedIndex].value;
  //var i = x.selectedIndex.value;
  document.getElementById("demo").innerHTML = i;
}

     /* if (districts) {
        var i;
        for (i = 0; i < districts.length; i++) {
          var districtn = new Option(districts[i], i);
          districtlList.options.add(districtn);
        }
      }*/

   /*   var districtandDs = {};
    var districtandDsValue = {};
    districtandDs['11'] = ['Colombo', 'Kolonnawa', 'Kaduwela','Homagama','Seethawaka','Padukka','Maharagama','Sri Jayawardanapura Kotte','Thimbirigasyaya','Dehiwala','Ratmalana','Moratuwa','Kesbewa'];
    districtandDsValue['11'] = ['3', '6', '9','12','15','18','21','24','27','30','33','36','39'];
    districtandDs['12'] = ['Negombo', 'Katana', 'Divulapitiya','Mirigama','Minuwangoda','Wattala','Ja-Ela','Gampaha','Attanagalla','Dompe','Mahara','Kelaniya','Biyagama'];
    districtandDsValue['12'] = ['3', '6', '9','12','15','18','21','24','27','30','33','36','39'];
    districtandDs['13'] = ['Panadura', 'Bandaragama', 'Horana','Ingiriya','Bulathsinhala','Madurawala','Millaniya','Kalutara','Beruwala','Dodangoda','Mathugama','Agalawatta','Palindanuwara','Walallavita'];
    districtandDsValue['13'] = ['3', '6', '9','12','15','18','21','24','27','30','33','36','39'];

    districtandDs['21'] = ['Thumpane','Pujapitiya','Akurana','Pathadumbara','Panvila','Udadumbara','Minipe','Medadumbara','Kundasale','Kandy Four Gravets & Gangawata Korale','Harispattuwa','Hatharaliyadda','Yatinuwara','Udunuwara','Doluwa','Pathahewaheta','Delthota','Udapalatha','Ganga Ihala Korale','Pasbage Korale'];
    districtandDsValue['21'] = ['3', '6', '9','12','15','18','21','24','27','30','33','36','39','42','45','48','51','54','57','60'];
    districtandDs['22'] = ['Galewela','Dambulla','Naula','Pallepola','Yatawatta','Matale','Ambanganga Korale','Laggala-Pallegama','Wilgamuwa','Rattota','Ukuwela'];
    districtandDsValue['22'] =['3', '6', '9','12','15','18','21','24','27','30','33'];
    districtandDs['23'] = ['Kothmale','Hanguranketha','Walapane','Nuwara Eliya','Ambagamuwa'];
    districtandDsValue['23'] =['3', '6', '9','12','15'];

    districtandDs['31'] = ['Benthota','Balapitiya','Karandeniya','Elpitiya','Niyagama','Thawalama','Neluwa','Nagoda','Baddegama','Welivitiya-Divithura','Ambalangoda','Gonapeenuwala','Hikkaduwa','Galle Four Gravets','Bope-Poddala','Akmeemana','Yakkalamull','Imaduwa','Habaraduwa'];
    districtandDsValue['31'] =['3', '6', '9','12','15','18','21','24','27','30','33','36','39','42','45','48','51','54','57'];
    districtandDs['32'] = ['Pitabeddara','Kotapola','Pasgoda','Mulatiyana','Athuraliya','Akuressa','Welipitiya','Malimbada','Kamburupitiya','Hakmana','Kirinda Puhulwella','Thihagoda','Weligam','Matara Four Gravets','Devinuwara','Dickwella'];
    districtandDsValue['32'] =['3', '6', '9','12','15','18','21','24','27','30','33','36','39','42','45','48'];
    districtandDs['33'] = ['Sooriyawewa','Lunugamwehera','Thissamaharama','Hambantota','Ambalantota','Angunakolapelessa','Weeraketiya','Katuwana','Walasmulla','Okewela','Beliatta','Tangalle'];
    districtandDsValue['33'] =['3', '6', '9','12','15','18','21','24','27','30','33','36'];

    districtandDs['41'] = ['Island North (Kayts)','Karainagar','Valikamam West (Chankanai)','Valikamam South-West (Sandilipay)','Valikamam North','Valikamam South (Uduvil)','Valikamam East (Kopay)','Vadamaradchy South-West (Karaveddy)','Vadamaradchy East','Vadamaradchy North (Point Perdro)','Thenmaradchy (Chavakachcheri)','Nallur','Jaffna','Island South (Velanai)','Delft'];
    districtandDsValue['41'] =['3', '6', '9','12','15','18','21','24','27','30','33','36','39','42','45'];
    districtandDs['42'] = ['Mannar Town','Manthai West','Madhu','Nanattan','Musali'];
    districtandDsValue['42'] =['3', '6', '9','12','15'];
    districtandDs['43'] = ['Vavuniya','Vavuniya North','Vavuniya South','Vengalacheddikulam'];
    districtandDsValue['43'] =['3', '6', '9','12'];
    districtandDs['44'] = ['Thunukkai','Manthai East','Puthukudiyiruppu','Oddusudan','Maritimepattu','Welioya'];
    districtandDsValue['44'] =['3', '6', '9','12','15','18'];
    districtandDs['45'] = ['Pachchilaipalli','Kandavalai','Karachchi','Poonakary'];
    districtandDsValue['45'] =['3', '6', '9','12'];

    districtandDs['51'] = ['Koralai Pattu North (Vaharai)','Koralai Pattu Central','Koralai Pattu West (Oddamavadi)','Koralai Pattu (Valachchenai)','Koralai Pattu South (Kiran)','Eravur Pattu','Eravur Town','Manmunai North','Manmunai West','Kattankudy','Manmunai Pattu (Araipattai)','Manmunai South-West','Poratheevu Pattu','Manmunai South & Eruvil Pattu'];
    districtandDsValue['51'] =['3', '6', '9','12','15','18','21','24','27','30','33','36','39','42'];
    districtandDs['52'] = ['Dehiattakandiya','Padiyathalawa','Mahaoya','Uhana','Ampara','Navithanveli','Samanthurai','Kalmunai Tamil Division','Kalmunai','Sainthamarathu','Karaitheevu','Ninthavur','Addalachchenai','Irakkamam','Akkaraipattu','Alayadiwembu','Damana','Thirukkovil','Pothuvil','Lahugala'];
    districtandDsValue['52'] =['3', '6', '9','12','15','18','21','24','27','30','33','36','39','42','45','48','51','54','57','60'];
    districtandDs['53'] = ['Padavisiripura','Kuchchaveli','Gomarankadawala','Morawewa','Trincomalee Town and Gravets','Thambalagamuwa','Kanthale','Kinniya','Muttur','Seruvila','Verugal (Eachchilampattu)'];
    districtandDsValue['53'] =['3', '6', '9','12','15','18','21','24','27','30','33'];

    districtandDs['61'] = ['Giribawa','Galgamuwa','Ehetuwewa','Ambanpola','Kotavehera','Rasnayakapura','Nikaweratiya','Maho','Polpithigama','Ibbagamuwa','Ganewatta','Wariyapola','Kobeigane','Bingiriya','Panduwasnuwara West','Panduwasnuwara East','Bamunakotuwa','Maspotha','Kurunegala','Mallawapitiya','Mawathagama','Rideegama','Weerambugedara','Kuliyapitiya East','Kuliyapitiya West','Udubaddawa','Pannala','Narammala','Alawwa','Polgahawela'];
    districtandDsValue['61'] =['3', '6', '9','12','15','18','21','24','27','30','33','36','39','42','45','48','51','54','57','60','63','66','69','72','75','78','81','84','87','90'];
    districtandDs['62'] = ['Kalpitiya','Vanathawilluwa','Karuwalagaswewa','Nawagattegama','Puttalam','Mundel','Mahakumbukkadawala','Anamaduwa','Pallama','Arachchikattuwa','Chilaw','Madampe','Mahawewa','Nattandiya','Wennappuwa','Dankotuwa'];
    districtandDsValue['62'] =['3', '6', '9','12','15','18','21','24','27','30','33','36','39','42','45','48'];

    districtandDs['71'] = ['Padaviya','Kebithigollewa','Medawachchiya','Mahawilachchiya','Nuwaragam Palatha Central','Rambewa','Kahatagasdigiliya','Horowpothana','Galenbindunuwewa','Mihinthale','Nuwaragam Palatha East','Nachchaduwa','Nochchiyagama','Rajanganaya','Thambuttegama','Thalawa','Thirappane','Kekirawa','Palugaswewa','Ipalogama','Galnewa','Palagala'];
    districtandDsValue['71'] =['3', '6', '9','12','15','18','21','24','27','30','33','36','39','42','45','48','51','54','57','60','63','66'];
    districtandDs['72'] = ['Hingurakgoda','Medirigiriya','Lankapura','Welikanda','Dimbulagala','Thamankaduwa','Elahera'];
    districtandDsValue['72'] =['3', '6', '9','12','15','18','21'];
    
    districtandDs['81'] = ['Mahiyanganaya','Rideemaliyadda','Meegahakivula','Kandaketiya','Soranathota','Passara','Lunugala','Badulla','Hali-Ela','Uva Paranagama','Welimada','Bandarawela','Ella','Haputale','Haldummulla'];
    districtandDsValue['81'] =['3', '6', '9','12','15','18','21','24','27','30','33','36','39','42','45'];
    districtandDs['82'] = ['Bibile','Madulla','Medagama','Siyambalanduwa','Moneragala','Badalkumbura','Wellawaya','Buttala','Katharagama','Thanamalvila','Sevanagala'];
    districtandDsValue['82'] =['3', '6', '9','12','15','18','21','24','27','30','33']; 
    
   
    districtandDs['91'] = ['Eheliyagoda','Kuruvita','Kiriella','Ratnapura','Imbulpe','Balangoda','Opanayake','Pelmadulla','Elapatha','Ayagama','Kalawana','Nivithigala','Kahawatta','Godakawela','Weligepola','Embilipitiya','Kolonna'];
    districtandDsValue['91'] =['3', '6', '9','12','15','18','21','24','27','30','33','36','39','42','45','48','51'];
    districtandDs['92'] = ['Rambukkana','Mawanella','Aranayaka','Kegalle','Galigamuwa','Warakapola','Ruwanwella','Bulathkohupitiya','Yatiyanthota','Dehiovita','Deraniyagala'];
    districtandDsValue['92'] =['3', '6', '9','12','15','18','21','24','27','30','33'];

      function ChangeDistrictList() {
      
      var districtlList = document.getElementById("district");
      var dsList= document.getElementById("ds");
      var selDistrict = districtlList.options[districtlList.selectedIndex].value;
      while (dsList.options.length) {
        dsList.remove(0);
      }
      var dss = districtandDs[selDistrict];
      var dsValues= districtandDsValue[selDistrict];
     
      if (dss) {
    var i;
    var opt = document.createElement("option"); 
    opt.value = '0'; // set the value
        opt.text = '-- Select DS --'; 
        dsList.appendChild(opt); // add it to the select
    for (i = 0; i < dss.length; i++) {
      var opt = document.createElement("option"); // Create the new element
       
        opt.value = dsValues[i]; // set the value
        opt.text = dss[i]; // set the text
       
        dsList.appendChild(opt); // add it to the select
    }
  }
}*/ 

function displayQuestion(answer) {
  if (answer == "1") {
document.getElementById("mrcbdis").style.display = "block";
  }
  if (answer == "0") {
document.getElementById("mrcbdis").style.display = "none";
  }
}
    </script>


</body>
</html>