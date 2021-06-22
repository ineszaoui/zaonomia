function dialogGenerator(id) {
    document.getElementById('enigme').style.display = "none";
    var dialogs = ['Renard: Bonjour Monsieur Tournesol,',
            'vous savez pourquoi nous sommes là je suppose. Vous êtes suspect dans le meurtre de Monsieur Dangler.',
            'Le meurtre a été commis mardi matin entre 10 et 12h, où étiez vous à ce moment là?',
            'Tournesol: Eh bien Monsieur, je dois dire que vous vous trompez de personne.',
            'Le mardi matin je travaille, dans mon vêtement roux qui me gratte, je transmet de la joie et de la bonne humeur aux personnes attablées.',
            'Je peux mentir me direz-vous mais si vous avez bien suivi vous sauriez qui j’étais ce mardi.'
        ],
        initial = 0;
    var isWriting = false


    var individual = dialogs[initial].split('');

    function createDiag(dialog) {
        isWriting = true
        for (i = 0; i < dialog.length; i++) {
            (function(i) {

                setTimeout(function() {
                    $('#' + id).text($('#' + id).text() + dialog[i]);
                    if (i == dialog.length - 1) {
                        $('#' + id).prepend('<div id="arrow"></div>');
                        isWriting = false
                    }
                }, 50 * i);
            }(i));

        }

    }

    createDiag(individual);
    initial++

    document.addEventListener('click', () => {
        var highestTimeoutId = setTimeout(";");
        for (var i = 0; i < highestTimeoutId; i++) {
            clearTimeout(i);
        }
        $('#' + id).text('')
        if (!isWriting) {
            (initial == dialogs.length) ? createDiag(dialogs[initial - 1].split('')): createDiag(dialogs[initial].split(''))
            if (initial == 3) {
                im.remove()
            }
            if (initial >= dialogs.length) {
                dialog.remove()
                document.getElementById('enigme').style.display = "block";
            }
            if (initial < dialogs.length) {
                initial++;
                console.log(initial)
                console.log(dialogs.length)
            }

        } else {
            if (!initial) {
                $('#' + id).text(dialogs[initial]);
            } else {
                $('#' + id).text(dialogs[initial - 1]);
            }
            isWriting = false
        }

    })
}