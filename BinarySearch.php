<?php
  $val = 8;
  $arr_sort = [5,2,9,7,1,6,8,3];
  $lower = 0;
  $upper = count($arr_sort) - 1;
  
  while($lower <= $upper)
  {
    if($arr_sort[($lower + $upper) / 2] == $val)
    {
      echo "Hasil binary search adalah " . $val;
      return;
    }
    else if ($arr_sort[($lower + $upper) / 2] < $val)
    {
      $lower = (int)(($lower + $upper) / 2 + 1);
    }
    else if ($arr_sort[($lower + $upper) / 2] > $val)
    {
      $upper = (int)(($lower + $upper) / 2 - 1);
    }
  }
  
  echo "Not found";
?>