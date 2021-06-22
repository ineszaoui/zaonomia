function dialogGenerator(id){
  document.getElementById('enigme').style.display = "none";
  var dialogs = ['Renard: Bonjour Monsieur,', 'Nous aurions quelques questions à vous poser au sujet du meurtre de Monsieur Dangler.',
  'Voyez-vous il échangeait des messages avec une personne qui disait être son frère concernant la vente de son appartement.', 
  'Ces messages étaient plutôt menaçants envers lui et nous pensons que cela peut être la cause de sa mort.',
  'De plus, les anciennes victimes ont reçu ce même genre de messages. Nous savons que vous travaillez dans le domaine de l\'immobilier,', 
  'c’est pourquoi nous avons de grandes raisons de penser que vous êtes le coupable.',
  'Pouvez-vous nous rappeler votre nom de famille',
  'Rat: “Vous savez, la vérité n’est qu’une question de perception,',
  'en la transformant un petit peu vous pouvez devenir un inconnu pour certains et un frère pour d’autres.',
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
      if(initial==7){
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