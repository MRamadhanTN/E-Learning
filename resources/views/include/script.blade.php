<script>
    var navbar = document.getElementById('navbar');
    var btn = document.getElementById('btn');
    document.onscroll = function() {
        if (document.documentElement.scrollTop > 0) {
            navbar.classList.add('shadow-lg','bg-yellow-300')
        } else {
            navbar.classList.remove('shadow-lg','bg-yellow-300')
        }
    }
</script>
