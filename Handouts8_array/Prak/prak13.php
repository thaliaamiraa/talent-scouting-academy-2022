<?php
$judulBerita = "Microsoft membeli github";
echo "Judul asli: {$judulBerita} <br>";
echo "Judul baru: " . str_replace("membeli", "menjual", $judulBerita)
. "<br>";