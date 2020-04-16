
// pojawianie się zdjęć
$(document).ready(function () {
    setTimeout(function(){
        $('img').fadeIn(1500);
    },1000);
});

// funkcja cofająca do poprzedniej strony
function goBack() {
  window.history.back();
}

//dodawanie przysicku do każdego diva po znaczniku "p"
// $( `<button onclick="goBack()">Wróć do poprzedniej strony</button>` ).insertAfter( "p" );