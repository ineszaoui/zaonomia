var premiercode = false;
var deuxiemecode = false;
var troisiemecode = false;
var derniercode = false;

document.addEventListener("DOMContentLoaded",()=>{
  document.getElementById("enigme").style.display = "none";
  document.getElementById("victory").style.display = "none";


  var dialogs = ['Renard: Bonjour!', 'Tu as besoin d’outils spéciaux pour trouver les indices.',  
  'Les outils sont répertoriés dans le manuel si tu ne te souviens plus de leur code.',]  
      initial = 0;
      var isWriting = false


     var individual = dialogs[initial].split('');

  function createDiag ( dialog ) {
    isWriting = true
    for(i = 0; i < dialog.length; i++) {
      (function(i){
          
        setTimeout(function(){
          $('#dialog').text($('#dialog').text() + dialog[i]);
          if (i == dialog.length-1 ) {
            $('#dialog').prepend('<div id="arrow"></div>');
            isWriting = false
          }
             
        }, 50*i);  
      
      }(i));
      
    }
  
  }
  
  createDiag( individual );
  initial++

  document.addEventListener('click',()=>{
    var highestTimeoutId = setTimeout(";");
    for (var i = 0 ; i < highestTimeoutId ; i++) {
      clearTimeout(i);
    }

    $('#dialog').text('')
    if (!isWriting){
      (initial==dialogs.length)?createDiag( dialogs[initial-1].split('')):createDiag( dialogs[initial].split(''))
      if(initial==4){
        im.remove()
      }
      if(initial >= dialogs.length){
        dialog.remove()
        document.getElementById('enigme').style.display = "block";
      }
      if(initial < dialogs.length){
        initial ++;
        console.log(initial)
        console.log(dialogs.length)
      }
      
    }else {
      if (!initial){
        $('#dialog').text(dialogs[initial]);
      }
      else{
        $('#dialog').text(dialogs[initial-1]);
      }
      isWriting = false
    }
  })
  document.addEventListener('click',()=>{
    var rempli = $("#code").val();
   
    console.log(rempli);

    if (rempli == '75821'){
      $('#75821').show();
      premiercode = true;
  }
  if (rempli == '24685'){
      $('#24685').show();
       deuxiemecode = true;
  }
  if (rempli == '53286'){
      $('#53286').show();
     troisiemecode = true;
  }
  if (rempli == '45302'){
      $('#45302').show();
     derniercode = true;
  }

  console.log(premiercode);
  console.log(deuxiemecode);
  console.log(troisiemecode);
  console.log(derniercode);

  
  if(premiercode == true && deuxiemecode == true && troisiemecode == true && derniercode == true) { 
    document.getElementById('enigme').style.display = "none";
    document.getElementById('im').style.display = "none";
    document.getElementById('victory').style.display = "block";

  
  
  }
  
 
})

  })
