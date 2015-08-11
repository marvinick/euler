// 1. User inputs the number "1," which returns the output of "1"
// 2. User inputs the number "2," which returns the output of "1, 2"
// 3. User inputs the number "3," which returns the output of "1, 2, ping"
// 4. User inputs the number "5," which returns the output of "1, 2, ping, 4, pong"
//  5. User inputs the number "15," which returns the output of "1, 2, ping, 4, pong, ping, 7, 8, ping, pong, 11, ping, 13, 14, ping pong"


function playPingPong($input_number)
    {
        $results = "";
        $count = 1;
        while ($count <= $input_number) {
            if ($count % 3 == 0 && $count % 5 == 0) {
                $results .= ", ping pong";
                // $results = $result . "ping";
            } elseif ($count % 5 == 0) {
                $results .= ", pong";
            } elseif ($count % 3 == 0) {
                $results .= ", ping";
            }  else {
                  $results .=  ", " . $count;
              }
             ++$count;
            }
            $results = substr($results, 2);
            return $results;
        }
    }