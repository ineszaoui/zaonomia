function dialogGenerator(id){
  var dialogs = [
        'Renard: Avez-vous vu ou entendu quelque chose le soir du meurtre?', 'Plante: Est ce que je sais ce qu’il s’est passé? Bah bien sûr que oui j’ai tout vu.','J’ai entendu un hurlement et la vrouuuum  il y avait un genre de grand objet volant',' euh la plaque commence par 143 je crois mais après les quatres derniers chiffres', ' je crois qu\'il y a un 2 et un 5 mais euh le reste je sais plus j’ai oublié ahah','Renard: Nous avons retrouvé un disque dur qui demande un code pour être ouvert, avez-vous des idées concernant ce code ?', 'Oui, carrément oui, Je vais te dire: Son premier est un oiseau.','Son deuxième est mon nom de famille. Son troisième est là où l’on dort.', 'Son tout est une fleur. Bonne chance à toi.'
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
        location.replace("https://ineszaoui.fr/zaonomia/Couloir")
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