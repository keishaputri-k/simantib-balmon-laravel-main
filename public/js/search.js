$(document).keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        var query = $(searchA).val();
        cari(query);
    }

    function cari(query)
    {
        console.log(query);
        $.ajax({
            url: "/compare/get-sims",
            method: 'get',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#tabelA').html(data.table_data);
                // window.alert(data.table_data);
            }
        })
    }
});

$(document).keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        var query = $(searchB).val();
        cari(query);
    }

    function cari(query)
    {
        console.log(query);
        $.ajax({
            url: "/compare/get-pemeriksaan",
            method: 'get',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#tabelB').html(data.table_data);
                // window.alert(data.table_data);
                // console.log(data.table_data);
            }
        })
    }
});