
<section>
    <div calss="tabfirst">
    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'step1')" id="defaultOpen">Step one</button>
      <button class="tablinks" onclick="openCity(event, 'step2')">Step Two</button>
      <button class="tablinks" onclick="openCity(event, 'step3')">Step Three</button>
      <button class="tablinks" onclick="openCity(event, 'step4')">Step Four</button>
    </div>
    
    <div id="step1" class="tabcontent">
      
      @include('dashstep.step-one')
    </div>
    
    <div id="step2" class="tabcontent">
        @include('dashstep.step-two')
    </div>
    
    <div id="step3" class="tabcontent">
        @include('dashstep.step-three')
    </div>
  
    <div id="step4" class="tabcontent">
        @include('dashstep.step-four')
    </div>
  
    </div>
  
  <script>
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      
      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
      </script>
   </section>