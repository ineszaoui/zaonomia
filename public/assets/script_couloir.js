$(document).ready(function(){
    document.getElementById("vo").style.display = "none";
    $('#bas2').click(function(){
      $('#back').css("transform","translate(-100vw,0)");
      document.getElementById("vo").style.display = "block";
      document.getElementById("sc").style.display = "none";
    });
    $('#bas1').click(function(){
        $('#back').css("transform","translate(0vw,0)");
        document.getElementById("sc").style.display = "block";
        document.getElementById("vo").style.display = "none";
      });

  });


  document.addEventListener("DOMContentLoaded",()=>{

    var dialogs = ['Où souhaitez-vous aller ? '],  
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
  })    