<script>
    var navbar = document.getElementById('navbar');
    var btn = document.getElementById('btn');
    document.onscroll = function() {
        if (document.documentElement.scrollTop > 0) {
            navbar.classList.add('shadow-lg','bg-yellow-300')
        } else {
            navbar.classList.remove('shadow-lg','bg-yellow-300')
        }
    };

    /*Toggle dropdown list*/
      function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
      }
      /*Filter dropdown options*/
      function filterDD(myDropMenu, myDropMenuSearch) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myDropMenuSearch);
        filter = input.value.toUpperCase();
        div = document.getElementById(myDropMenu);
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
          if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
          } else {
            a[i].style.display = "none";
          }
        }
      }
      // Close the dropdown menu if the user clicks outside of it
      window.onclick = function (event) {
        if (
          !event.target.matches(".drop-button") &&
          !event.target.matches(".drop-search")
        ) {
          var dropdowns = document.getElementsByClassName("dropdownlist");
          for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (!openDropdown.classList.contains("invisible")) {
              openDropdown.classList.add("invisible");
            }
          }
        }
      };
</script>

{{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
    $('#table_id').DataTable();
} );
</script> --}}

