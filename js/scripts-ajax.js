$(function(){
    $('#boutonegal').click(function(){
        console.log('Bonjour');
        var a,b;

        a = $('#zonea').val();
        b = $('#zoneb').val();

        console.log('A',a);
        console.log('B',b);

        $.get(
            "multiplication.php",
            {
                'a': a,
                'b': b
            },
            function( data ){
                $('#zoneresultat').html(data);
            }
        );
    });
});
