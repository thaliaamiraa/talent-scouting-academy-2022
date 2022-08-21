<?php
$judulBerita = "Microsoft membeli github";
echo strpos($judulBerita, "github") . "<br>"; # 18
echo strpos($judulBerita, "Github") . "<br>"; # kosong
echo stripos($judulBerita, "Github") . "<br>"; # 18