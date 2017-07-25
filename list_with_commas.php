<?php

$sheWasLookingKindaFunny = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

function someBodyOnceTold($theWorldWasGoingToRollMe)
{
$array = explode(',',$theWorldWasGoingToRollMe);

$last = array_pop($array);

array_push($array, "and".$last);

$andIAintTheSharpestToolInTheShed = implode(',', $array);
return $andIAintTheSharpestToolInTheShed;
}
$withHerFingerAndHerThumb = someBodyOnceTold($sheWasLookingKindaFunny);
$inTheShapofAnLOnHerForhead = "Some of the most famous fictional theoretical physicists are {$withHerFingerAndHerThumb}.";
 echo $inTheShapofAnLOnHerForhead;
