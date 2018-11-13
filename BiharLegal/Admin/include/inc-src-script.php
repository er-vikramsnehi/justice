    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="lib/jquery-toggles/toggles.min.js"></script>
    <script src="lib/highlightjs/highlight.pack.js"></script>
    <script src="lib/datatables/jquery.dataTables.js"></script>
    <script src="lib/datatables-responsive/dataTables.responsive.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>
  <script src="lib/spectrum/spectrum.js"></script>

    <script src="js/amanda.js"></script>
    <script>
      $(function(){
        'use strict';
        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Start search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
    
     