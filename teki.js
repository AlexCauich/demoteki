$(document).ready(function() {
    console.log('jQuery')

    $("#vrpe").on('click', function(e) {
        const postData = {
            event_date: $("#event_date").val()
        }
        
        $.post('App/server/queries/vrpe.php', postData, function(resp) {
            let thead = `
                <tr>
                    <th>Name pilot</th>
                    <th>Category</th>
                    <th>Lap</th>
                    <th>Lap time</th>
                    <th>Brand</th>
                    <th>Model</th>
                </tr>
            `;
            $("#list_thead").html(thead);

            let registers = JSON.parse(resp);
            let template = '';
            registers.forEach(register => {
                template += `
                    <tr datoID=${register.id_records}>
                        <td>${register.name_pilot}</td>w
                        <td>${register.category}</td>
                        <td>${register.lap}</td>
                        <td>${register.lap_time}</td>
                        <td>${register.brand}</td>
                        <td width="20%">${register.model}</td>
                    </tr>
                `
            });
            $('#list_date').html(template);
        })
        e.preventDefault();
    
    })

    

    
})