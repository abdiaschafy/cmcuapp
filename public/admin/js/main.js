
function myFunction() {
    if (!confirm("Veuillez confirmer la suppréssion du produit"))
        event.preventDefault();
}

function searchFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue

    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }}



$(function () {
    $('.calender').pignoseCalender({
        select: function (date, obj) {
            obj.calender.parent().next().show().text('You selected ' +
                (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                '.');
        }
    });

    $('.multi-select-calender').pignoseCalender({
        multiple: true,
        select: function (date, obj) {
            obj.calender.parent().next().show().text('You selected ' +
                (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                '~' +
                (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                '.');
        }
    });
});
