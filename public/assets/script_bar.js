function dialogGenerator(id){
  document.getElementById('enigme').style.display = "none";
  var dialogs = [
    'J’ai une question pour toi mon ptit gars.',
    'Ohhh tu es occupé eh bien je ne te laisserai pas t’en sortir comme ça, tu dois d’abord répondre à ma question.',
    '1/ Mon premier est un nombre mais aussi une boisson.',
    '2/ Mon second représente l’infini lorsque que tu le retournes.',
    '3/ Mon dernier est neutre.',
    '4/ Mon tout représente l’année dans laquelle on se trouve.','...'
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