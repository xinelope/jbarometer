window.addEventListener('DOMContentLoaded', function(event){
  ///var initJbaro = function(){
  var aktstand = document.getElementById("aktstand").value;
  var etappe1 = document.getElementById("etappe1").value;
  var zielsumme = document.getElementById("zielsumme").value;
  var differenz = etappe1 - aktstand;
  var verlauf = 100 * aktstand / zielsumme;
  var marker = (100 * etappe1 / zielsumme);
  document.querySelector( 'div.verlauf').style.width = verlauf + "%";
  document.querySelector( 'div.jb-trenner').style.marginLeft = marker + "%";
  document.querySelector( 'div.jb-trenner-txt').style.marginLeft = marker + "%";
  ele = document.getElementById('defizitBetrag').value;
  if (ele < 0) {
    def = document.body.querySelectorAll('.defizit');
    def[0].style.display = "none";
    def[1].style.display = "none";
  }
});
