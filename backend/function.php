<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'axisclass');


class DB_con
{
    public $dbh;
    function __construct()
    {
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbh = $con;
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    // for username availblty
    public function usernameavailblty($uname)
    {
        $result = mysqli_query($this->dbh, "SELECT Username FROM tblusers WHERE Username='$uname'");
        return $result;

    }

    // Function for registration
    public function registration($fname, $uname, $uemail, $pasword)
    {
        $ret = mysqli_query($this->dbh, "insert into tblusers(FullName,Username,UserEmail,Password) values('$fname','$uname','$uemail','$pasword')");
        return $ret;
    }

    public function getCurrentURL()
    {
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $url = "https://";
        else
            $url = "http://";
        // Append the host(domain name, ip) to the URL.   
        $url .= $_SERVER['HTTP_HOST'];

        // Append the requested resource location to the URL   
        $url .= $_SERVER['REQUEST_URI'];


        return $url;
    }

    // Function for signin
    public function signin($uname, $pasword, $table)
    {
        // $result = mysqli_query($this->dbh, "select id,user_first_name,user_last_name,user_email from $table where user_email='$uname' and user_password='$pasword' and status='1'"); //production
        $result = mysqli_query($this->dbh, "select id,admin_fullname,admin_email,admin_password,admin_role from $table where admin_email='$uname' and admin_password='$pasword'"); //localhost
        return $result;
    }
    // Function for get year
    public function getAllInfo($table)
    {
        $result = mysqli_query($this->dbh, "select * from $table");
        return $result;
    }
    public function getAllInfocombotable($table, $statement, $wherewithjoin)
    {
        $statement1 = implode(',', $statement);
        $table1 = implode(',', $table);
        $wherewithjoin1 = implode(',', $wherewithjoin);
        $result = mysqli_query($this->dbh, "select $table[0].* ,$statement1 from $table1 where $wherewithjoin1");
        return $result;
    } 
    public function getAllInfoWhere($table, $Id)
    {
        $result = mysqli_query($this->dbh, "select * from $table where id=$Id");
        return $result;
    }
      public function getAllInfoWherediffId($table, $Idcoloumn,$id)
    {
        $result = mysqli_query($this->dbh, "select * from $table where $Idcoloumn=$id");
       
        return $result;
    }
    public function getAllInfoWhereAnyRole($table, $role)
    {
        $result = mysqli_query($this->dbh, "select * from $table where admin_role='".$role."'");
        return $result;
    }
    public function getAllInfoWherePro($table, $Id)
    {
        $result = mysqli_query($this->dbh, "select * from $table where ProductID=$Id");
        return $result;
    }


    public function getUserDetails($table, $userid)
    {
        $result = mysqli_query($this->dbh, "select * from $table where id=$userid");
        return $result;
    }

    public function getAssignCategory($table)
    {
        $result = mysqli_query($this->dbh, "select $table.*,scrollerblog.name as ScrollBlogName,topmenus.name as TopMenuName from $table,scrollerblog,topmenus where scrollerblog.id=$table.scrollerblog_id and topmenus.id = $table.topmenus_id");
        return $result;
    }


    /* get currency symboles */
    function get_currency_symbol($cc = 'USD')
    {
        $cc = strtoupper($cc);
        $currency = array(
            "USD" => "$",
            //U.S. Dollar
            "AUD" => "$",
            //Australian Dollar
            "BRL" => "R$",
            //Brazilian Real
            "CAD" => "C$",
            //Canadian Dollar
            "CZK" => "Kč",
            //Czech Koruna
            "DKK" => "kr",
            //Danish Krone
            "EUR" => "€",
            //Euro
            "HKD" => "&#36",
            //Hong Kong Dollar
            "HUF" => "Ft",
            //Hungarian Forint
            "ILS" => "₪",
            //Israeli New Sheqel
            "INR" => "₹",
            //Indian Rupee
            "JPY" => "¥",
            //Japanese Yen 
            "MYR" => "RM",
            //Malaysian Ringgit 
            "MXN" => "&#36",
            //Mexican Peso
            "NOK" => "kr",
            //Norwegian Krone
            "NZD" => "&#36",
            //New Zealand Dollar
            "PHP" => "₱",
            //Philippine Peso
            "PLN" => "zł", //Polish Zloty
            "GBP" => "£",
            //Pound Sterling
            "SEK" => "kr",
            //Swedish Krona
            "CHF" => "Fr",
            //Swiss Franc
            "TWD" => "$",
            //Taiwan New Dollar 
            "THB" => "฿",
            //Thai Baht
            "TRY" => "₺" //Turkish Lira
        );

        if (array_key_exists($cc, $currency)) {
            return $currency[$cc];
        }
    }

}


?>