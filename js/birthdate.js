

 $(function() {
    var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

for (i = new Date().getFullYear(); i > 1900; i--)
{
    $('#years').append($('<option />').val(i).html(i));
}

for (i = 1; i < 13; i++)
{
    $('#months').append($('<option />').val(i).html(monthtext[i-1]));
}
 updateNumberOfDays(); 

    $('#years, #months').change(function(){

        updateNumberOfDays(); 

    });

});

function updateNumberOfDays(){
$('#days').html('');
month=$('#months').val();
year=$('#years').val();
days=daysInMonth(month, year);

    for(i=1; i < days+1 ; i++){
            $('#days').append($('<option />').val(i).html(i));
        }

}

function daysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
}





