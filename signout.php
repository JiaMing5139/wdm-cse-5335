<?php 
    session_start();
    session_destroy();
    header("location:index.html");
?>
<script>
    sessionStorage.getItem("name")==0;
</script>