jQuery(document).ready(function ($) {
    $('div.media div.media-body').each(function (i) {
        $(this).find('span.commentNumber').text('#' + (i+1))
    });

    /* ну тупо-же перечитать дерево комментов и кликать делая его невидимым !?(подумать)
     хотя... перечитали, показали компактно, токо родительские, нада жмем ответы ?(подумать:)
     Код ниже кликает все ссылки с классом .hide-answers, а они формируются там, где есть ответы
     на родительские комменты (см стр.29-31 в blog_single_comment_tree.blade)*/

    $('a.hide-answers').click();

    $('#leave_reply').on('click', '#submit', function (e) {
        e.preventDefault();
        $('.ajax_result').css('color', 'green').
            text('Сохранение комментария...').
            fadeIn(500, function () {
            var data = $('#leave_reply').serializeArray();
            $.ajax({
                url: $('#leave_reply').attr('action'),
                data: data,
                // строка headers: из доки по Ларавелу
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                datatype: 'JSON',
                success: function (html) {
                    console.log('OK! Script was here...')
                },
                error: function () {
                    
                }

            });
        });
    });
});

/* прячем div с ответами на родит.коммент, и ссылку "скрыть ответы",
  показываем ссылку "показать ответы" (на родит. комменты с parent_id ==0)*/
function hideAnswers(i) {

    $('div#child-' + i + ' div.media').hide();
    $('div.media-body' + ' a#hide-answers-' + i).hide();
    $('div.media-body' + ' a#show-answers-' + i).show();
    return false;
}
/*показыв div с ответом на родит.коммент, и ссылку "скрыть ответы",
  скрываем ссылку "показать ответы" (на родит. комм. parent_id ==0)*/

function showAnswers(i) {

    $('div#child-' + i + ' div.media').show();
    $('div.media-body' + ' a#show-answers-' + i).hide();
    $('div.media-body' + ' a#hide-answers-' + i).show();
    return false;
}