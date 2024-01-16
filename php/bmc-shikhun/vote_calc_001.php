<?php

//একজন ইউজার ৫৭ সেকেন্ডে ৪৩ টি ভোট প্রদান করতে পারেন। তাহলে ১০ জন ইউজার ৫ মিনিটে কতোগুলো ভোট প্রদান করতে পারবেন? এর সমাধান আপনারা সবাই পিএইচপিতে করে এখানে স্কীন শর্ট দিবেন।

function canVote($numberofVoter = 1, $timeLimit = 1)
{
    //Fixed
    $canVote = 43; //vote
    $tookTime = 57; //second

    $voteCalc = floor(($canVote / $tookTime) * $numberofVoter * ($timeLimit * 60));

    return $voteCalc;
}

$numberofVoter = 1;
$timeLimit = 1; //minuts

echo canVote($numberofVoter, $timeLimit) . "\n"; //2,263.1579
echo canVote() . "\n"; //default 45.26
// echo (43/57) . "\n"; //per second vote
// echo (43/57*1*60) . "\n"; //per minute vote
// echo (43/57*10*300) . "\n"; //as problem