document.addEventListener("DOMContentLoaded",()=>{
  document.getElementById("enigme").style.display = "none";
  var dialogs = [' Barman: Bien le bonjour, c\'est pour un renseignement ou vous voulez juste m\'écouter parler ? '],
      initial = 0;
      individual = dialogs[initial].split('');
  
  function createDiag ( dialog ) {
  
    for(i = 0; i < dialog.length; i++) {
      (function(i){
          
        setTimeout(function(){
          $('#dialog').text($('#dialog').text() +   dialog[i]);
          if (i == dialog.length-1 ) {
            $('#dialog').prepend('<div id="arrow"></div>');
            Mousetrap.bind('enter', function() {
              if (dialogs[initial+1]) {
                $('#dialog').text('');
                initial += 1;
                individual = dialogs[initial].split('');
                createDiag( individual );
              }
            });
          }
        }, 50*i);  
      
      }(i));
      
    }
  
  }
  
  createDiag( individual );
  
  
  var y = 0
  
  document.addEventListener('click',()=>{
     $('#dialog').text('')
    dialogs = ['']
    createDiag( dialogs[y].split(''))
    console.log(dialogs)
    y++
    if(y == 7){
      im.remove()
    }
  
    if(y >= dialogs.length){
      dialog.remove()
      document.getElementById("enigme").style.display = "block";
    }
  })
  })