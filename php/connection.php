<?
/**
 * use mysqli (procedurally and as object)
 */


define('hostnameBDD', '{your host}');
define('usernameBDD', '{your user}');
define('passwordBDD', '{your password}');
define('databaseBDD', '{your data base}');


function mysqli_sql($SQL, $noreturn = false)
{

    // mysqli procedural
    // Open bdd and establish connection
    $DBConnection = mysqli_connect(hostnameBDD, usernameBDD, passwordBDD, databaseBDD) or die("Error: " . mysqli_error($DBConnection));

    // Run SQL
    $DBresult = mysqli_query($DBConnection, $SQL) or die("Error: " . mysqli_error($DBConnection));

    // Run result with while
    if (!$noreturn) {
        $list = array();
        while ($DBrow = mysqli_fetch_assoc($DBresult)) $list[] = $DBrow;
        // release result
        mysqli_free_result($DBresult);
    }

    // Close connection
    mysqli_close($DBConnection);

/*     // mysqli as an object
    //create instance connecting object
    $mysqli = new mysqli(hostnameBDD, usernameBDD, passwordBDD, databaseBDD);

    // error check
    if ($mysqli->connect_errno) {
        echo "Connection to MySQL failed: " . $mysqli->connect_error;
    }

    // run query 
    $res = $mysqli->query($SQL);

    // handle error
    if ($mysqli->error) {
        echo $mysqli->error;
        return false;
    }

    // fetch query
    if (!$noreturn) {
        $list = array();
        while ($DBrow = $res->fetch_assoc()) $list[] = $DBrow;
    }
 */
    if (!$noreturn) return $list;
}


