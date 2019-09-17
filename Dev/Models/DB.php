<?php  
	
    class DB{

        const DBNAME = 'permafarmer';
        const USERNAME = 'root';
        const MDP = '';

		public function __construct(){

		}

		public static function addClient($firstname, $lastname, $email, $password){
		    $db = new mysqli('localhost', static::USERNAME, static::MDP, static::DBNAME);
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $query= 'INSERT INTO client (firstname, lastname, email, password) VALUES ("'.$firstname.'",'.$lastname.',"'.$email.'","'.$passwordHash.'")';
            $result = $db->query($query);
	        return $result;
		}

		public static function clientExist($email, $password){
            $db = new mysqli('localhost', static::USERNAME, static::MDP, static::DBNAME);
            $query= 'SELECT * FROM client WHERE email = '.$email.'';
            $result = $db->query($query);
            if (count($result)){
                $row = $result->fetch_array(MYSQLI_ASSOC);
                if (password_verify($password, $row['password'])) {
                    return true;
                }else {
                    return "Wrong password.";
                }
            }else{
                return "Wrong Email."
            }
		}

		public static function newCart($id_client, $amount, $payment, $delivery){
		    $db = new mysqli('localhost', static::USERNAME, static::MDP, static::DBNAME);
            $order_date = date("Y-m-d H:i:s");
            $query= 'INSERT INTO cart (order_date, id_client, amount, payment, delivery) VALUES ("'.$order_date.'",'.$id_client.',"'.$amount.'","false","false")';
            $result = $db->query($query);
	        return $result;
		}
        
        public static function updateCart($id_cart, $amount, $payment, $delivery){
            $db = new mysqli('localhost', static::USERNAME, static::MDP, static::DBNAME);
            $query= 'UPDATE cart SET 
	        	amount = "'.$amount.'",
	        	payment = "'.$payment.'",
	        	delivery = "'.$delivery.'" WHERE id = "'.$id_cart.'"
	        	';
            $result = $db->query($query);
			return $result;
		}

		public static function addProduct($name, $type, $price){
		    $db = new mysqli('localhost', static::USERNAME, static::MDP, static::DBNAME);
            $query= 'INSERT INTO product (name, type, price) VALUES ("'.$name.'",'.$type.'")';
            $result = $db->query($query);
	        return $result;
		}
        
        public static function updateProduct($id_product, $name, $type, $price){
            $db = new mysqli('localhost', static::USERNAME, static::MDP, static::DBNAME);
            $query= 'UPDATE product SET 
	        	name = "'.$name.'",
	        	type = "'.$type.'",
	        	price = "'.$price.'" WHERE id = "'.$id_product.'"
	        	';
            $result = $db->query($query);
			return $result;
		}
        
        public static function deleteProduct($id_product){
            $db = new mysqli('localhost', static::USERNAME, static::MDP, static::DBNAME);
            $query= 'DELETE FROM product WHERE id = "'.$question_id.'"';
            $result = $db->query($query);
			return $result;
		}


?>