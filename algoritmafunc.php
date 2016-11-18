<?php

  /* Function Of Certainty Factor */
  /* Function Of Certainty Factor Perubahan */
  function cekrule($cf1,$cf2){
    if ($cf1 >=0 && $cf2 >=0){
      return  $combine = $cf1 + $cf2*(1-$cf1);
    }
    else if ($cf1 < 0 || $cf2 <0 ) {
      return $combine = ($cf1+$cf2)/(1 -min(abs($cf1),abs($cf2)));
    }
    else if ($cf1<0 && $cf2 <0){
    return $combine =  $cf1 + $cf2*(1+$cf1);}

    return $combine;
  }

    

    


 ?>
