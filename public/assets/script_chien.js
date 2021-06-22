function dialogGenerator(id){
    document.getElementById('enigme').style.display = "none";
    var dialogs = ['Renard : Bonjour Monsieur Chien, ', 'j\’ai cru entendre dire que vous aimez beaucoup les engins volants,',
    ' d\’ailleurs l\’un de nos témoins a vu une partie de la plaque d\’immatriculation du véhicule ',
    'autant dire que vous êtes cuit si votre voiture a le même numéro d\’immatriculation',
    ' vous serez arrêté sur le champs.',
    'Monsieur Chien : Très bien, ma plaque d’immatriculation est la suivante :',
    ' elle commence par 143 et finit par la somme de mon jour, mon mois et mon année de naissance.',
    ' Quelle est la plaque d’immatriculation du suspect ?',
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