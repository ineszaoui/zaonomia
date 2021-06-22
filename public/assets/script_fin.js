function dialogGenerator(id){
  document.getElementById('enigme').style.display = "none";
  document.getElementById('im').style.display = "none";
  var dialogs = [
        'Barman: Alors alors mon petit gars !', 'Tu l\'as trouvé ce meurtrier dit moi ?',
        'On est très probablement sur ta dernière chance de le découvrir.',
        'Renard : Après cette enquête tu dois être en mesure de mettre un terme à toute cette histoire.',
        'Choisis.',
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
      if(initial==3){
        document.getElementById('im').style.display = "block";      }
      if(initial==5){
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
        $('#'+id).text(dialogs[initial]);
      }
      else{
        $('#'+id).text(dialogs[initial-1]);
      }
      isWriting = false
    }

  })
}