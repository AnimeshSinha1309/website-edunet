/**
 * Created by Animesh on 1/30/2015.
 */
classes = {
    google:{'elements':'red-googleplus', 'fa':'fa-google-plus', 'id':'Account Username'},
    facebook:{'elements':'blue-facebook', 'fa':'fa-facebook', 'id':'Account Username'},
    twitter:{'elements':'blue-twitter', 'fa':'fa-twitter', 'id':'Account Username'},
    github:{'elements':'black-github', 'fa':'fa-github', 'id':'Account Username'},
    stackoverflow:{'elements':'orange-stackoverflow', 'fa':'fa-stack-overflow', 'id':'Account Username'},
    edunet:{'elements':'green-edunet', 'fa':'fa-stack-exchange', 'id':'Account Username'},
    instagram:{'elements':'blue-instagram', 'fa':'fa-instagram', 'id':'Account Username'},
    linkedin:{'elements':'blue-linkedin', 'fa':'fa-linkedin', 'id':'Account Username'},
    youtube:{'elements':'red-youtube', 'fa':'fa-youtube', 'id':'Account Username'}
};

function initialize(data) {
    for(var datum in data){
        datum.hasOwnProperty();
        classes[datum].id = data[datum];
    }
}

$(document).ready(function() {
    $('.social-links').each(function() {
        $(this).hover(function() {
            $('#web-details').attr('class', 'large-12 colors ' + classes[$(this).attr('data-account')].elements);
            $('#web-symbol i').attr('class', 'fa fa-2x ' + classes[$(this).attr('data-account')].fa);
            $('#web-account').html(classes[$(this).attr('data-account')].id);
        });
    });
});

