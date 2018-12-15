<?php
class Baza
{
    private $mysqli;

    public function __construct($serwer, $user, $pass, $baza)
    {
        $this->mysqli = new mysqli($serwer, $user, $pass, $baza);

        if ($this->mysqli->connect_errno) {
            die("Nie udało sie połączenie z serwerem: " . $this->mysqli->connect_error);
        }
        
        if ($this->mysqli->set_charset("utf8")) {
            //udało sie zmienić kodowanie
        }
    }

    function __destruct()
    {
        $this->mysqli->close();
    }

    public function select($sql, $pola)
    {
        $tresc = "";
        if ($result = $this->mysqli->query($sql)) {
            $ilepol = count($pola); //ile pól
            $ile = $result->num_rows; //ile wierszy
            
            // pętla po wyniku zapytania $results
            $tresc .= "<table><tbody>";
            while ($row = $result->fetch_object()) {
                $tresc .= "<tr>";
                for ($i = 0; $i < $ilepol; $i++) {
                    $p = $pola[$i];
                    $tresc .= "<td>" . $row->$p . "</td>";
                }
                $tresc .= "</tr>";
            }
            $tresc .= "</table></tbody>";
            $result->close();
        }
        return $tresc;
    }

    public function insert($sql)
    {
        // uzupełnijzapytanie –i zwróćtrue lub false
        $result = $this->mysqli->query($sql);

        if ($result === false) {
            echo $this->mysqli->error;
        }

        return $result;
    }

    public function delete($sql)
    {
        // uzupełnijzapytanie –i zwróćtrue lub false 
        return $this->mysqli->query($sql);
    }
}

?>
