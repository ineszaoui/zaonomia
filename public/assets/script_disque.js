function dialogGenerator(id){
    var dialogs = ['Renard: Hmmm tu as besoin d\'un dode pour entrer dans ce disque dur' , 'pourquoi ne pas aller voir le voisin de la victime, ils étaient amis je crois',
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
          im.remove()
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