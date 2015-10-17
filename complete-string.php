<?php
/*
Complete String

A string is said to be complete if it contains all the characters from a to z. Given a string, check if it complete or not.

Input
First line of the input contains the number of strings N. It is followed by N lines each contains a single string.

Output
For each test case print "YES" if the string is complete, else print "NO"

Constraints
1 <= N <= 10
The length of the string is at max 100 and the string contains only the characters a to z

Sample Input(Plaintext Link)
3
wyyga
qwertyuioplkjhgfdsazxcvbnm
ejuxggfsts
Sample Output(Plaintext Link)
NO
YES
NO
Time Limit: 5 sec(s) for all input files combined.
Memory Limit: 256 MB
Source Limit: 1024 KB
Marking Scheme: Marks are awarded if any testcase passes.
*/

$allowedString = range('a','z');
function completeString($fileName = "3\nwyyga\nqwertyuioplkjhgfdsazxcvbnm\nejuxggfsts")
{
    global $allowedString;
    $l = 0;
    $text = array();
    $file = fopen('file.txt', 'r');

    $n = fgets($file);
    $text = explode("\n", $fileName);
    while (($buffer = fgets($file, 4096)) !== false) {
        $z = 0;
        if ($n >= 1 && $n <= 10) {
            if (strlen($buffer) >= 26 && strlen($buffer) <= 100) {
                $count = 0;
                for ($z = 0; $z < 26; $z++) {
                    $pos = strpos($buffer, $allowedString[$z]);
                    if ($pos === false) {
                        continue;
                    } else {
                        $count++;
                    }
                }
                if ($count == 26) {
                    echo 'YES' . "\n";
                } else {
                    echo 'NO' . "\n";
                }
            } else {
                echo 'NO' . "\n";
            }
        }
    }

    fclose($file);
}
$time = microtime();
completeString();
echo microtime() - $time;
