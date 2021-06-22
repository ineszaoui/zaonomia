function dialogGenerator(id){
    document.getElementById('enigme').style.display = "none";
    var dialogs = ['Médecin: Mes lunettes !!! Enfin, enfin, qu’est ce que je disais moi déjà?','Ah oui le corps. C’est un homme… ',
    'Il doit avoir environ 30 ans et il a été assassiné mardi matin entre 10h et 12h.',
    ' L’arme du crime est la même que la précédente, je ne vous apprends rien.',
    ' Vous devriez l’examiner et m’envoyer les échantillons trouvés pour que je vous en apprenne un peu plus. ',
    //après avoir choisis l'arme
    'Renard: Bien maintenant que nous avons l’arme du crime, tu devrais aller l\’analyser elle contient sûrement des indices.',
    
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
        if (initial == 7) {
            document.getElementById("re").style.display = "block";
        }
        if (initial == 8) {
            im.remove()
        }
        if (initial == 4) {
            dialog.remove()
            document.getElementById("enigme").style.display = "block";
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