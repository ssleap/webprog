<html>

<form>

    <?php
    //require_once "vendor/autoload.php";
    //use WindowsAzure\Common\ServicesBuilder;
    //use WindowsAzure\Common\ServiceException;
        function is_yoon($year){

                if($year % 400 == 0)return True;
                else if($year % 4 == 0){


                    if($year % 100 == 0)return False;
                    else return True;
                }
                else return False;

        }

        function how_many_date($year, $month, $date){

            $days = 0;
            for($i = 2014; $i <= $year ; $i++){
                if(!is_yoon($i))
                    $day = array(0,31,28,31,30,31,30,31,31,30,31,30,31);
                else
                    $day = array(0,31,29,31,30,31,30,31,31,30,31,30,31);
                for($j = 1; $j<=12; $j++){

                    for($t = 1; $t <= $day[$j]; $t++){
                        $days++;
                        if($year == $i && $month == $j && $date == $t)
                            return $days;

                    }

                }

            }
            return $days;


        }

        function my_strrve($str){

            $tmp = "";
            for($i = strlen($str)-1; $i >=0 ;$i--){

                $tmp .= substr($str,$i,1);


            }
            return $tmp;


        }
        print("7-1<br>");
        $a = "abcdef";
        $b = my_strrve($a);
        print($b."<br>");
        print("7-3<br>");
        $str = "PHP is a server-side, cross-platform, HTML embededded scripting language.";
        print($str."<br>".substr($str,0.8)." <br>  ".substr($str, -20.5)."<br>");

        print("<br><br>7-5<br>");
        $now = getdate();
        print("2014-01-01 ~ ".$now[year]."-".$now[mon]."-".$now[mday]."<br>");
        print(how_many_date($now[year], $now[mon], $now[mday]));
    ?>

</form>

</html>
