function dialogGenerator(id){
  document.getElementById('enigme').style.display = "none";
  document.getElementById('enigme2').style.display = "none";
  var dialogs = [
    'Renard: Bonjour Madame,',
    'Nous voilà sur la scène du crime.','Il nous faut dans un premier temps inspecter les lieux pour s\'assurer qu\'il s\'agit du même tueur.',
          'Utilise les précédents rapports du livre pour trouver les objets à ramasser.',
          'Essaie également de trouver l\'arme du crime.',
          'Tu ne peux pas partir tant que tu n\'as pas trouvé tous les indices pour résoudre l\'enquête.'
      ],
      initial = 0;
var isWriting = false


  var individual = dialogs[initial].split('');

  function createDiag ( dialog ) {
    isWriting = true
    for(i = 0; i < dialog.length; i++) {
      (function(i){

        setTimeout(function(){
          $('#'+id).text($('#'+id).text() +   dialog[i]);
          if (i == dialog.length-1 ) {
            $('#'+id).prepend('<div id="arrow"></div>');
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
    $('#'+id).text('')
    if (!isWriting){
      (initial==dialogs.length)?createDiag( dialogs[initial-1].split('')):createDiag( dialogs[initial].split(''))
      if(initial==6){
        im.remove()
      }
      if(initial >= dialogs.length){
        dialog.remove()
        document.getElementById('enigme').style.display = "block";
        document.getElementById('enigme').style.display = "block";
      }
      if(initial < dialogs.length){
        initial ++;
        console.log(initial)
        console.log(dialogs.length)
      }
      
    }else {
      if (!initial){
        $('#'+id).text(dialogs[initial]);
      }
      else{
        $('#'+id).text(dialogs[initial-1]);
      }
      isWriting = false
    }

  })
}