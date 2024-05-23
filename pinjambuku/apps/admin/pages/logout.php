<?php

// Hapus semua data sesi
session_unset();
// Hancurkan sesi
session_destroy();
echo '
    <script>
Swal.fire(
{
  icon: "success",
  title: "Oops...",
  text: "Log out berhasil Dilakukan",
},
15
);
window.setTimeout(function () {
window.location.replace("../../login.php");
}, 2500);
</script>
';

exit();
