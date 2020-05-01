// Language and options change
$(document).ready( function() {
  $('#summary').dataTable( {
    "language": {
      "lengthMenu": 'Tampilkan <select>'+
        '<option value="10">10</option>'+
        '<option value="20">20</option>'+
        '<option value="30">30</option>'+
        '<option value="40">40</option>'+
        '<option value="50">50</option>'+
        '<option value="-1">All</option>'+
        '</select> data',
        "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data" 
    },
    "searching": false
  } );
} );

$(document).ready( function() {
  $('#summary2').dataTable( {
    "language": {
      "lengthMenu": 'Tampilkan <select>'+
        '<option value="10">10</option>'+
        '<option value="20">20</option>'+
        '<option value="30">30</option>'+
        '<option value="40">40</option>'+
        '<option value="50">50</option>'+
        '<option value="-1">All</option>'+
        '</select> data',
        "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data" 
    },
    "searching": false
  } );
} );

$(document).ready( function() {
  $('#Coba').dataTable( {
    "language": {
      "lengthMenu": 'Tampilkan <select>'+
        '<option value="10">10</option>'+
        '<option value="20">20</option>'+
        '<option value="30">30</option>'+
        '<option value="40">40</option>'+
        '<option value="50">50</option>'+
        '<option value="-1">All</option>'+
        '</select> data',
        "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data" 
    },
    "searching": false
  } );
} );


function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tab-content" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tab-link");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.color = 'gray';
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
  elmnt.style.color = 'black';
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click(); 