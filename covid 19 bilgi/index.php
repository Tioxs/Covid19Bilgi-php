<?php

$yrk = file_get_contents("https://covid19.tubitak.gov.tr");

preg_match_all('@<div class="views-row"><div class="number-wrapper"><div><span>(.*?)</span><p class="text-red">Vaka Sayısı</p></div><div><span>(.*?)</span><p class="text-red">Ölüm Sayısı</p></div><div><span>(.*?)</span><p class="text-red">İyileşme Sayısı</p></div></div><div class="date">(.*?)</div></div>@si'
,$yrk,$qwe);

echo '<div align="center" style="font-family: Galada, cursive; font-size: 40px;" <span>Vaka Sayısı: </span> <span style="color:black;
font-size:40px;">'.$qwe[1][0].'</span>
</div>';

echo '<div align="center" style=" font-family: Galada, cursive; font-size: 40px;" <span>Ölüm Sayısı: </span> <span style="color:black;
font-size:40px;">'.$qwe[2][0].'</style><br>
</div>';

echo '<div align="center" style=" font-family: Galada, cursive; font-size: 40px;" <span>Iyılesme Sayısı: </span> <span style="color:black;
font-size:40px;">'.$qwe[3][0].'</style><br><br>
</div>';

echo '<div align="center" style=" font-weight: bold; font-family: bebas neue; font-size: 20px;" <span></span> <span style="color:black;
font-size:25px;">'.$qwe[4][0].'</style><br>
</div>';

?>