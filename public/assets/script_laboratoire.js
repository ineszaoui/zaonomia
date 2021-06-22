function dialogGenerator(id){
    document.getElementById('enigme').style.display = "none";
    var dialogs = ['Médecin: Aïe! aïe! aïe! satanées lunettes où sont-elles passées? Il faut que tu m\'aides ! Vite !', 'Trouves mes lunettes on parlera du corps après',
    'robot: beep bip beep bzzz','Renard: Je pense que sa folie lui joue des tours, tu devrais vite trouver ses lunettes si tu ne veux pas finir sur sa table d\’autopsie', ],
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
        if (initial == 3) {
            document.getElementById("re").style.display = "block";
        }
        if (initial == 4) {
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