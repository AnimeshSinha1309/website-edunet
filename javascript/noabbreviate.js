/**
 * Created by Animesh on 1/28/2015.
 */

function expand(block)
{
    var expansions = {
        'r': 'are',
        'u': 'you',
        'abt': 'about'
    };
    $('#post-data').blur( function() {
        var text = $(block).val();
        var words = text.split(" ");
        for(var i = 0; i <= words.length; i++) {
            if(words[i] in expansions) {
                words[i] = expansions[words[i]];
            }
        }
        text = '';
        for(var i = 0; i < words.length; i++) {
            text += words[i] + ' ';
        }
        $(block).val(text);
    })
    $('#post-data').keypress( function() {
        var text = $(block).val();
        var words = text.split(" ");
        if (words[words.length - 2] in expansions) {
            words[words.length - 2] = expansions[words[words.length-2]];
            text = '';
            for(var i = 0; i < words.length - 1; i++) {
                text += words[i] + ' ';
            }
            $(block).val(text);
        }
        $(block).val($(block).val().replace('.a', '. A'))
    });
}