$(document).ready(function() {
    $('#search-text').on('input', function() {
        var q = $(this).val();
        if (q.length >= 3) {
            $.getJSON('search.php?q=' + q, function(data) {
                var results = '';
                $.each(data, function(i, name) {
                    results += '<div class="result">' + name + '</div>';
                });
                if (results) {
                    $('#search-results').html(results);
                    $('#search-results').show();
                } else {
                    $('#search-results').html('');
                    $('#search-results').hide();
                }
            });
        } else {
            $('#search-results').html('');
            $('#search-results').hide();
        }
    });

    $(document).on('click', '.result', function() {
        var name = $(this).text();
        $('#search-text').val(name);
        $('#search-results').html('');
        $('#search-results').hide();
    });
});