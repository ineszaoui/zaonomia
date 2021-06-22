function dialogGenerator(id){
  document.getElementById('enigme').style.display = "none";
  var dialogs = [
        'Renard: Bonjour Madame,', 'Monsieur l’enquêteur ici présent et moi-même aimerions vous poser quelques questions dans le meurtre de Monsieur Dangler.',
        'Selon les infos obtenus nous savons que le tueur faisait moins d’1 mètre 20.',
        ' Pouvez vous nous indiquer votre taille?',
        'Madame Poule: Mon cher, cette question est plutôt indiscrète, ceci dit je vais vous donner un indice :',
        'Je suis plus petite que le produit de mon âge et du nombre de cadavres retrouvés.'
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
        $('#'+id).text(dialogs[initial]);
      }
      else{
        $('#'+id).text(dialogs[initial-1]);
      }
      isWriting = false
    }

  })
}