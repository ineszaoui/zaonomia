document.addEventListener("DOMContentLoaded", () => {

    var dialogs = ['Renard: Une fois l\’arme du crime reconnue, tu devrais aller l’analyser elle contient sûrement des indices.'],
        initial = 0;
    individual = dialogs[initial].split('');

    function createDiag(dialog) {

        for (i = 0; i < dialog.length; i++) {
            (function(i) {

                setTimeout(function() {
                    $('#dialog').text($('#dialog').text() + dialog[i]);
                    if (i == dialog.length - 1) {
                        $('#dialog').prepend('<div id="arrow"></div>');
                        Mousetrap.bind('enter', function() {
                            if (dialogs[initial + 1]) {
                                $('#dialog').text('');
                                initial += 1;
                                individual = dialogs[initial].split('');
                                createDiag(individual);
                            }
                        });
                    }
                }, 50 * i);

            }(i));

        }
    }
    createDiag(individual);
})