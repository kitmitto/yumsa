<?php
function knows($a) {


    global $wie_vile;
    global $sein;

    foreach($a as $a1){
        if(is_array($a1)){
            knows($a1);
        } else{
            $sein[] = $a1;
            $wie_vile++;
        }
    }

    return array('alle' => $wie_vile, 'wie' => $sein);
}

  $familie = array(
    "f1 " => array(
        "f1_1"=>1,
        "f1_2"=>2,
        "f1_3"=>3
    ),
    "f2" => array(
        "f2_1"=>4,
        "f3" => array(
            "f3_1"=>5,
            "f3_2"=>6,
            "f3_3"=>7
        ),
        "f3_4"=>8,
        "f3_5"=>9
    ),
    "f4" => array(
        "f5" => array(
            "f6" => array(
                "f6_1"=>10,
                "f6_2"=>11
            ),
            "f6_3"=>12,
            "f6_4"=>13
        ),
        "f6_5"=>14,
        "f7" => array(
            "f7_1"=>15,
            "f7_2"=>16
       )
    )
);

$knows1 = knows($familie);
echo $knows1['alle'];
  echo "<br>";
echo implode('=>', $knows1['wie']);
?>
