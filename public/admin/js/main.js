
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

    function ckChange(ckType){
        var ckName = document.getElementsByName(ckType.name);
        var checked = document.getElementById(ckType.id);

        if (checked.checked) {
            for(var i=0; i < ckName.length; i++){

                if(!ckName[i].checked){
                    ckName[i].disabled = true;
                }else{
                    ckName[i].disabled = false;
                }
            }
        }
        else {
            for(var i=0; i < ckName.length; i++){
                ckName[i].disabled = false;
            }
        }

        if (document.getElementById('decision1').checked)
        {
            document.getElementById("chambre").style.display = 'contents';
        }
        else
            document.getElementById("chambre").style.display = 'none';

        if (document.getElementById('decision2').checked)
            document.getElementById("bloc").style.display = 'contents';
        else
            document.getElementById("bloc").style.display = 'none';
    }
