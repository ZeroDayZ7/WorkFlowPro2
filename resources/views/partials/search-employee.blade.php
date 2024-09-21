<h2>Szukaj Pracownika</h2>
<input type="text" id="searchEmployeeInput" placeholder="Wpisz imię lub stanowisko">
<button id="searchEmployeeButton">Szukaj</button>
<div id="searchResults"></div>

<script>
    $(document).on('click', '#searchEmployeeButton', function() {
        const query = $('#searchEmployeeInput').val();
        $.ajax({
            url: '/search-employees',
            method: 'GET',
            data: { query: query },
            success: function(response) {
                $('#searchResults').empty();
                if (response.length) {
                    response.forEach(employee => {
                        $('#searchResults').append(`<p>${employee.name} - ${employee.position}</p>`);
                    });
                } else {
                    $('#searchResults').append('<p>Brak wyników.</p>');
                }
            },
            error: function() {
                $('#searchResults').append('<p>Wystąpił błąd podczas wyszukiwania.</p>');
            }
        });
    });
</script>
